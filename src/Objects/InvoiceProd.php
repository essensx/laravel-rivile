<?php

namespace ITCity\Rivile\Objects;

class InvoiceProd extends Object {
	protected $prefix = 'I07';

	protected $defs = [
		'I07_KODAS_PO' => ['string', 'max:12'],
		'I07_EIL_NR' => ['integer', 'max:999999'],
		'I07_TIPAS' => ['integer', 'in:1,2,3,4,5'],
		'I07_KODAS' => ['string', 'max:12'],
		'I07_PAV' => ['string', 'max:40'],
		'I07_KODAS_TR' => ['string', 'max:12'],
		'I07_KODAS_IS' => ['string', 'max:12'],
		'I07_KODAS_OS' => ['string', 'max:12'],
		'I07_KODAS_OS_C' => ['string', 'max:12'],
		'I07_SERIJA' => ['string', 'max:12'],
		'I07_KODAS_US' => ['string', 'max:12'],
		'I07_KIEKIS' => ['integer', 'max:99999999999999'],
		'I07_FRAKCIJA' => ['integer', 'max:9999'],
		'I07_KODAS_US_P' => ['string', 'max:12'],
		'I07_KODAS_US_A' => ['string', 'max:12'],
		'I07_ALT_KIEKIS' => ['integer', 'max:99999999999999'],
		'I07_ALT_FRAK' => ['integer', 'max:9999'],
		'I07_VAL_KAINA' => ['numeric', 'max:99999999999999.9999'],
		'I07_SUMA_VAL' => ['numeric', 'max:9999999999999999.99'],
		'I07_KAINA_BE' => ['numeric', 'max:99999999.9999'],
		'I07_KAINA_SU' => ['numeric', 'max:99999999.9999'],
		'I07_NUOLAIDA' => ['numeric', 'max:9999.99'],
		'I07_ISLAIDU_M' => ['boolean'],
		'I07_ISLAIDOS' => ['numeric', 'max:9999999999.99'],
		'I07_ISLAIDOS_PVM' => ['numeric', 'max:9999999999.99'],
		'I07_MUITAS_M' => ['boolean'],
		'I07_MUITAS' => ['numeric', 'max:9999999999.99'],
		'I07_MUITAS_PVM' => ['numeric', 'max:9999999999.99'],
		'I07_AKCIZAS_M' => ['boolean'],
		'I07_AKCIZAS' => ['numeric', 'max:9999999999.99'],
		'I07_AKCIZAS_PVM' => ['numeric', 'max:9999999999.99'],
		'I07_MOKESTIS' => ['boolean'],
		'I07_MOKESTIS_P' => ['numeric', 'max:9999.99'],
		'I07_PVM' => ['numeric', 'max:9999999999.99'],
		'I07_SUMA' => ['numeric', 'max:9999999999.99'],
		'I07_PAR_KAINA' => ['numeric', 'max:99999999.9999'],
		'I07_PAR_KAINA_N' => ['numeric', 'max:99999999.9999'],
		'I07_MOK_SUMA' => ['numeric', 'max:9999999999.99'],
		'I07_SAVIKAINA' => ['numeric', 'max:9999999999.99'],
		'I07_GALIOJA_IKI' => ['date'],
		'I07_PERKELTA' => ['integer', 'in:1,2'],
		'I07_ADDUSR' => ['string', 'max:12'],
		'I07_USERIS' => ['string', 'max:12'],
		'I07_R_DATE' => ['date'],
		'I07_SERTIFIKATAS' => ['string', 'max:12'],
		'I07_KODAS_KT' => ['string', 'max:12'],
		'I07_KODAS_K0' => ['string', 'max:12'],
		'I07_KODAS_KV' => ['string', 'max:12'],
		'I07_KODAS_VZ' => ['string', 'max:12'],
		'I07_ADD_DATE' => ['date'],
		'I07_APSKRITIS' => ['string', 'max:3'],
		'I07_SANDORIS' => ['string', 'max:3'],
		'I07_SALYGOS' => ['string', 'max:3'],
		'I07_RUSIS' => ['string', 'max:3'],
		'I07_SALIS' => ['string', 'max:3'],
		'I07_MATAS' => ['string', 'max:3'],
		'I07_SALIS_K' => ['string', 'max:3'],
		'I07_MASE' => ['numeric', 'max:99999999999.999'],
		'I07_INT_KIEKIS' => ['numeric', 'max:99999999999.999'],
		'I07_PVM_VAL' => ['numeric', 'max:9999999999999999.99'],
		'I07_KODAS_KS' => ['string', 'max:12'],
		'I07_aprasymas1' => ['string', 'max:150'],
		'I07_aprasymas2' => ['string', 'max:150'],
		'I07_aprasymas3' => ['string', 'max:150'],
		'i07_kodas_kl' => ['string', 'max:12'],
	];
}