<?php

namespace ITCity\Rivile\Objects;

class Product extends Object {
	protected static $prefix = 'N17';

	protected static $defs = [
		'N17_KODAS_PS' => ['string', 'max:12'],
		'N17_TIPAS' => ['integer', 'max:2', 'min:1'],
		'N17_KODAS_P1' => ['string', 'max:12'],
		'N17_KODAS_P2' => ['string', 'max:12'],
		'N17_KODAS_US' => ['string', 'max:12'],
		'N17_PAV' => ['string', 'max:40'],
		'N17_PAVU' => ['string', 'max:40'],
		'N17_KODAS_KS' => ['string', 'max:12'],
		'N17_KOD_T' => ['string', 'max:16'],
		'N17_KODAS_KS1' => ['string', 'max:12'],
		'N17_KOD_T1' => ['string', 'max:16'],
		'N17_KODAS_KS2' => ['string', 'max:12'],
		'N17_KOD_T2' => ['string', 'max:16'],
		'N17_KODAS_VS' => ['string', 'max:12'],
		'N17_KODAS_ES' => ['string', 'max:12'],
		'N17_UZSIGUL' => ['numeric', 'max:9999.99'],
		'N17_BAZ_KIEKIS' => ['integer', 'max:99999999999999'],
		'N17_ASSEMBLY' => ['integer', 'min:1', 'max:5'],
		'N17_KODAS_LS_1' => ['string', 'max:12'],
		'N17_KODAS_LS_2' => ['string', 'max:12'],
		'N17_KODAS_LS_3' => ['string', 'max:12'],
		'N17_KODAS_LS_4' => ['string', 'max:12'],
		'N17_NUOL_GR' => ['string', 'max:6'],
		'N17_GALIOJA' => ['numeric', 'max:99999'],
		'N17_MOKESTIS' => ['boolean'],
		'N17_TAX' => ['integer', 'min:1', 'max:4'],
		'N17_KODAS_KS_G' => ['string', 'max:12'],
		'N17_KODAS_GS' => ['string', 'max:12'],
		'N17_INSTR_POZ' => ['boolean'],
		'N17_INSTR_TIP' => ['string', 'max:1'],
		'N17_INSTR_VYK' => ['boolean'],
		'N17_INSTR_DATE' => ['date'],
		'N17_INSTR_FILE' => ['string', 'max:12'],
		'N17_URM_POZ' => ['boolean'],
		'N17_URM_DATEIN' => ['date'],
		'N17_URM_DATEOU' => ['date'],
		'N17_KREPS_POZ' => ['boolean'],
		'N17_KREPS_KTG' => ['string', 'max:1'],
		'N17_KREPS_MIN' => ['numeric', 'max:99999999999999'],
		'N17_GARANT_POZ' => ['boolean'],
		'N17_GARANT_MEN' => ['integer', 'max:999'],
		'N17_KODAS_KS3' => ['string', 'max:12'],
		'N17_TEMPER_POZ' => ['boolean'],
		'N17_TEMPER_MAX' => ['integer', 'max:999'],
		'N17_TEMPER_MIN' => ['integer', 'max:999'],
		'N17_TEMPER_TXT' => ['string', 'max:20'],
		'N17_SERTIF_POZ' => ['boolean'],
		'N17_KODAS_MS' => ['string', 'max:12'],
		'N17_ANTKAINIS' => ['numeric', 'max:9999.99'],
		'N17_MAX_NUOL' => ['numeric', 'max:9999.99'],
		'N17_EX_IM_FRAC' => ['integer', 'max:9999'],
		'N17_G_TIME' => ['integer', 'max:999999'],
		'N17_KODAS_OS' => ['string', 'max:12'],
		'N17_VAZ_LAIK' => ['integer', 'max:9999'],
		'N17_UZS_LAIK' => ['integer', 'max:9999'],
		'N17_PAP_LAIK' => ['integer', 'max:9999'],
		'N17_SAN_COST' => ['numeric', 'max:99999999.99'],
		'N17_UZS_COST' => ['numeric', 'max:99999999.99'],
		'N17_TRA_COST' => ['numeric', 'max:99999999.99'],
		'N17_MEN_PAV' => ['string', 'max:65'],
		'N17_MUIT_KOD' => ['string', 'max:65'],
		'N17_SK_KODAS' => ['integer', 'max:99'],
		'N17_INTERNET' => ['boolean'],
		'N17_DUM_POZ' => ['boolean'],
		'N17_DUM_TIP' => ['string', 'max:1'],
		'N17_DUM_D_IN' => ['date'],
		'N17_DUM_D_OUT' => ['date'],
		'N17_MUITO_PROC' => ['numeric', 'max:9999.99'],
		'N17_AKCIZO_PROC' => ['numeric', 'max:9999.99'],
		'N17_PASTABOS' => ['string'],
		'N17_POZ_DATE' => ['boolean'],
		'N17_BEG_DATE' => ['date'],
		'N17_END_DATE' => ['date'],
		'N17_USERIS' => ['string', 'max:12'],
		'N17_R_DATE' => ['date'],
		'N17_ADD_DATE' => ['date'],
		'N17_ADDUSR' => ['string', 'max:12'],
		'N17_MIN_VISO' => ['integer', 'max:99999999999999'],
		'N17_SERT_POZ' => ['boolean'],
		'N17_KODAS_PS_G' => ['string', 'max:12'],
		'N17_DATA_BR' => ['date'],
		'N17_KODAS_VS_T' => ['string', 'max:12'],
		'N17_KODAS_MS_A' => ['string', 'max:12'],
		'N17_KODAS_MS_M' => ['string', 'max:12'],
		'N17_AR_NAUJA' => ['boolean'],
		'N17_DATA_NAUJA' => ['date'],
		'N17_MIN_ANTK' => ['numeric', 'max:9999.99'],
		'N17_KODAS_LS_5' => ['string', 'max:12'],
		'N17_KODAS_LS_6' => ['string', 'max:12'],
		'N17_KODAS_LS_7' => ['string', 'max:12'],
		'N17_KODAS_LS_8' => ['string', 'max:12'],
		'N17_KODAS_MIN_ANTK_UR' => ['numeric', 'max:9999.99'],
		'N17_KODAS_MIN_ANTK_UR_D' => ['date'],
		'N17_MAX_ANTK' => ['numeric', 'max:9999.99'],
		'N17_SVS_GALIOJA' => ['boolean'],
		'N17_SVS_GALIOJA_D' => ['integer', 'max:99999'],
		'N17_SVS_PARTIJA' => ['boolean'],
		'N17_PAV_K1' => ['string', 'max:100'],
		'N17_PAV_K2' => ['string', 'max:100'],
		'N17_PAV_K3' => ['string', 'max:100'],
	];
}