<?php

namespace ITCity\Rivile;

use ITCity\Rivile\Objects\Object;
use ITCity\Rivile\Exceptions\RivileMalformedWhere;
use Closure;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Connection;
use SoapVar;

class QueryBuilder extends Builder {
	protected $method_params = [];
	public $rivile_object;
	public $raw_output = false;

	public function __construct($object, $connection = null, $grammar = null, $processor = null) {
		if ($connection == null) $connection = new Connection(null);
		if ($grammar == null) $grammar = new QueryGrammar;
		$this->rivile_object = $object;
		parent::__construct($connection, $grammar, $processor);
	}

	public function toSql() {
		$query_string = (new QueryGrammar)->whereString($this);
		$processed_query = str_replace('?', "'%s'", $query_string);
		$args = [$processed_query];
		foreach ($this->bindings['where'] as $binding) {
			$args[] = $binding;
		}
		return sprintf(...$args);
	}

	public function edit ($edit = null, $xml = null) {
		$interface = $this->getInterface();
		$interface->raw_output = true;
		$xml = '<xml_info><![CDATA['.$xml.']]></xml_info>';
		$xml = new SoapVar($xml, XSD_ANYXML);
		return $interface->{$this->getEditMethod()}(compact('edit', 'xml'));
	}

	public function findQuery ($values) {
		$primary = array_values(array_wrap($this->rivile_object::getPrimaryKey()));
		$values = array_values(array_wrap($values));
		if (count($values) !== count($primary)) {
			throw new RivileMalformedWhere('Find for '.get_class($this->rivile_object).' needs '.count($primary).' values, '.count($values).' given.');
		}
		foreach ($primary as $i => $key) {
			$value = $values[$i];
			$this->where($key, $value);
		}
		return $this;
	}

	public function find ($value, $columns = null) {
		return $this->findQuery($value)->get()->first();
	}

	public function bind ($param, $value = null) {
		if (is_array($param)) {
			foreach ($param as $key => $val) {
				$this->bind($key, $val);
			}
			return $this;
		}

		$this->method_params[$param] = $value;

		return $this;
	}

	public function get ($param = null) {
		$this->bind('where', $this->toSql());
		$interface = $this->getInterface();
		$interface->raw_output = $this->raw_output;
		$raw = $interface->{$this->getQueryMethod()}($this->method_params);
		if ($this->raw_output) {
			return $raw;
		} else {
			return query_result($raw, $this);
		}
	}

	public function update (array $values = []) {
		return $this->edit('U', $this->rivile_object->toXml());
	}

	public function insert (array $values = []) {
		return $this->edit('I', $this->rivile_object->toXml());
	}

	public function delete ($id = null) {
		return $this->edit('D', $this->rivile_object->toXml());
	}

	public function getQueryMethod () {
		return $this->rivile_object::getQueryMethod();
	}

	public function getEditMethod () {
		return $this->rivile_object::getEditMethod();
	}

	public function getInterface () {
		return $this->rivile_object->getConnection();
	}

	public function newQuery() {
        return new static($this->rivile_object, $this->connection, $this->grammar, $this->processor);
    }

    public function count($columns = '*') {
    	return null;
    }

    public function select($columns = '*') {
    	return $this;
    }

    public function paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null) {
    	return null;
    }
}