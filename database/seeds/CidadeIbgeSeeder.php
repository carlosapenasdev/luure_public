<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Management\Cidade;
use App\Models\Management\Estado;

class CidadeIbgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	$cidades = array (
    		0 => 
    		array (
    			'codigoIbge' => 1100015,
    			'nome' => 'Alta Floresta D\'Oeste',
    			'UF' => 'RO',
    		),
    		1 => 
    		array (
    			'codigoIbge' => 1100023,
    			'nome' => 'Ariquemes',
    			'UF' => 'RO',
    		),
    		2 => 
    		array (
    			'codigoIbge' => 1100031,
    			'nome' => 'Cabixi',
    			'UF' => 'RO',
    		),
    		3 => 
    		array (
    			'codigoIbge' => 1100049,
    			'nome' => 'Cacoal',
    			'UF' => 'RO',
    		),
    		4 => 
    		array (
    			'codigoIbge' => 1100056,
    			'nome' => 'Cerejeiras',
    			'UF' => 'RO',
    		),
    		5 => 
    		array (
    			'codigoIbge' => 1100064,
    			'nome' => 'Colorado do Oeste',
    			'UF' => 'RO',
    		),
    		6 => 
    		array (
    			'codigoIbge' => 1100072,
    			'nome' => 'Corumbiara',
    			'UF' => 'RO',
    		),
    		7 => 
    		array (
    			'codigoIbge' => 1100080,
    			'nome' => 'Costa Marques',
    			'UF' => 'RO',
    		),
    		8 => 
    		array (
    			'codigoIbge' => 1100098,
    			'nome' => 'Espigão D\'Oeste',
    			'UF' => 'RO',
    		),
    		9 => 
    		array (
    			'codigoIbge' => 1100106,
    			'nome' => 'Guajará-Mirim',
    			'UF' => 'RO',
    		),
    		10 => 
    		array (
    			'codigoIbge' => 1100114,
    			'nome' => 'Jaru',
    			'UF' => 'RO',
    		),
    		11 => 
    		array (
    			'codigoIbge' => 1100122,
    			'nome' => 'Ji-Paraná',
    			'UF' => 'RO',
    		),
    		12 => 
    		array (
    			'codigoIbge' => 1100130,
    			'nome' => 'Machadinho D\'Oeste',
    			'UF' => 'RO',
    		),
    		13 => 
    		array (
    			'codigoIbge' => 1100148,
    			'nome' => 'Nova Brasilândia D\'Oeste',
    			'UF' => 'RO',
    		),
    		14 => 
    		array (
    			'codigoIbge' => 1100155,
    			'nome' => 'Ouro Preto do Oeste',
    			'UF' => 'RO',
    		),
    		15 => 
    		array (
    			'codigoIbge' => 1100189,
    			'nome' => 'Pimenta Bueno',
    			'UF' => 'RO',
    		),
    		16 => 
    		array (
    			'codigoIbge' => 1100205,
    			'nome' => 'Porto Velho',
    			'UF' => 'RO',
    		),
    		17 => 
    		array (
    			'codigoIbge' => 1100254,
    			'nome' => 'Presidente Médici',
    			'UF' => 'RO',
    		),
    		18 => 
    		array (
    			'codigoIbge' => 1100262,
    			'nome' => 'Rio Crespo',
    			'UF' => 'RO',
    		),
    		19 => 
    		array (
    			'codigoIbge' => 1100288,
    			'nome' => 'Rolim de Moura',
    			'UF' => 'RO',
    		),
    		20 => 
    		array (
    			'codigoIbge' => 1100296,
    			'nome' => 'Santa Luzia D\'Oeste',
    			'UF' => 'RO',
    		),
    		21 => 
    		array (
    			'codigoIbge' => 1100304,
    			'nome' => 'Vilhena',
    			'UF' => 'RO',
    		),
    		22 => 
    		array (
    			'codigoIbge' => 1100320,
    			'nome' => 'São Miguel do Guaporé',
    			'UF' => 'RO',
    		),
    		23 => 
    		array (
    			'codigoIbge' => 1100338,
    			'nome' => 'Nova Mamoré',
    			'UF' => 'RO',
    		),
    		24 => 
    		array (
    			'codigoIbge' => 1100346,
    			'nome' => 'Alvorada D\'Oeste',
    			'UF' => 'RO',
    		),
    		25 => 
    		array (
    			'codigoIbge' => 1100379,
    			'nome' => 'Alto Alegre dos Parecis',
    			'UF' => 'RO',
    		),
    		26 => 
    		array (
    			'codigoIbge' => 1100403,
    			'nome' => 'Alto Paraíso',
    			'UF' => 'RO',
    		),
    		27 => 
    		array (
    			'codigoIbge' => 1100452,
    			'nome' => 'Buritis',
    			'UF' => 'RO',
    		),
    		28 => 
    		array (
    			'codigoIbge' => 1100502,
    			'nome' => 'Novo Horizonte do Oeste',
    			'UF' => 'RO',
    		),
    		29 => 
    		array (
    			'codigoIbge' => 1100601,
    			'nome' => 'Cacaulândia',
    			'UF' => 'RO',
    		),
    		30 => 
    		array (
    			'codigoIbge' => 1100700,
    			'nome' => 'Campo Novo de Rondônia',
    			'UF' => 'RO',
    		),
    		31 => 
    		array (
    			'codigoIbge' => 1100809,
    			'nome' => 'Candeias do Jamari',
    			'UF' => 'RO',
    		),
    		32 => 
    		array (
    			'codigoIbge' => 1100908,
    			'nome' => 'Castanheiras',
    			'UF' => 'RO',
    		),
    		33 => 
    		array (
    			'codigoIbge' => 1100924,
    			'nome' => 'Chupinguaia',
    			'UF' => 'RO',
    		),
    		34 => 
    		array (
    			'codigoIbge' => 1100940,
    			'nome' => 'Cujubim',
    			'UF' => 'RO',
    		),
    		35 => 
    		array (
    			'codigoIbge' => 1101005,
    			'nome' => 'Governador Jorge Teixeira',
    			'UF' => 'RO',
    		),
    		36 => 
    		array (
    			'codigoIbge' => 1101104,
    			'nome' => 'Itapuã do Oeste',
    			'UF' => 'RO',
    		),
    		37 => 
    		array (
    			'codigoIbge' => 1101203,
    			'nome' => 'Ministro Andreazza',
    			'UF' => 'RO',
    		),
    		38 => 
    		array (
    			'codigoIbge' => 1101302,
    			'nome' => 'Mirante da Serra',
    			'UF' => 'RO',
    		),
    		39 => 
    		array (
    			'codigoIbge' => 1101401,
    			'nome' => 'Monte Negro',
    			'UF' => 'RO',
    		),
    		40 => 
    		array (
    			'codigoIbge' => 1101435,
    			'nome' => 'Nova União',
    			'UF' => 'RO',
    		),
    		41 => 
    		array (
    			'codigoIbge' => 1101450,
    			'nome' => 'Parecis',
    			'UF' => 'RO',
    		),
    		42 => 
    		array (
    			'codigoIbge' => 1101468,
    			'nome' => 'Pimenteiras do Oeste',
    			'UF' => 'RO',
    		),
    		43 => 
    		array (
    			'codigoIbge' => 1101476,
    			'nome' => 'Primavera de Rondônia',
    			'UF' => 'RO',
    		),
    		44 => 
    		array (
    			'codigoIbge' => 1101484,
    			'nome' => 'São Felipe D\'Oeste',
    			'UF' => 'RO',
    		),
    		45 => 
    		array (
    			'codigoIbge' => 1101492,
    			'nome' => 'São Francisco do Guaporé',
    			'UF' => 'RO',
    		),
    		46 => 
    		array (
    			'codigoIbge' => 1101500,
    			'nome' => 'Seringueiras',
    			'UF' => 'RO',
    		),
    		47 => 
    		array (
    			'codigoIbge' => 1101559,
    			'nome' => 'Teixeirópolis',
    			'UF' => 'RO',
    		),
    		48 => 
    		array (
    			'codigoIbge' => 1101609,
    			'nome' => 'Theobroma',
    			'UF' => 'RO',
    		),
    		49 => 
    		array (
    			'codigoIbge' => 1101708,
    			'nome' => 'Urupá',
    			'UF' => 'RO',
    		),
    		50 => 
    		array (
    			'codigoIbge' => 1101757,
    			'nome' => 'Vale do Anari',
    			'UF' => 'RO',
    		),
    		51 => 
    		array (
    			'codigoIbge' => 1101807,
    			'nome' => 'Vale do Paraíso',
    			'UF' => 'RO',
    		),
    		52 => 
    		array (
    			'codigoIbge' => 1200013,
    			'nome' => 'Acrelândia',
    			'UF' => 'AC',
    		),
    		53 => 
    		array (
    			'codigoIbge' => 1200054,
    			'nome' => 'Assis Brasil',
    			'UF' => 'AC',
    		),
    		54 => 
    		array (
    			'codigoIbge' => 1200104,
    			'nome' => 'Brasiléia',
    			'UF' => 'AC',
    		),
    		55 => 
    		array (
    			'codigoIbge' => 1200138,
    			'nome' => 'Bujari',
    			'UF' => 'AC',
    		),
    		56 => 
    		array (
    			'codigoIbge' => 1200179,
    			'nome' => 'Capixaba',
    			'UF' => 'AC',
    		),
    		57 => 
    		array (
    			'codigoIbge' => 1200203,
    			'nome' => 'Cruzeiro do Sul',
    			'UF' => 'AC',
    		),
    		58 => 
    		array (
    			'codigoIbge' => 1200252,
    			'nome' => 'Epitaciolândia',
    			'UF' => 'AC',
    		),
    		59 => 
    		array (
    			'codigoIbge' => 1200302,
    			'nome' => 'Feijó',
    			'UF' => 'AC',
    		),
    		60 => 
    		array (
    			'codigoIbge' => 1200328,
    			'nome' => 'Jordão',
    			'UF' => 'AC',
    		),
    		61 => 
    		array (
    			'codigoIbge' => 1200336,
    			'nome' => 'Mâncio Lima',
    			'UF' => 'AC',
    		),
    		62 => 
    		array (
    			'codigoIbge' => 1200344,
    			'nome' => 'Manoel Urbano',
    			'UF' => 'AC',
    		),
    		63 => 
    		array (
    			'codigoIbge' => 1200351,
    			'nome' => 'Marechal Thaumaturgo',
    			'UF' => 'AC',
    		),
    		64 => 
    		array (
    			'codigoIbge' => 1200385,
    			'nome' => 'Plácido de Castro',
    			'UF' => 'AC',
    		),
    		65 => 
    		array (
    			'codigoIbge' => 1200393,
    			'nome' => 'Porto Walter',
    			'UF' => 'AC',
    		),
    		66 => 
    		array (
    			'codigoIbge' => 1200401,
    			'nome' => 'Rio Branco',
    			'UF' => 'AC',
    		),
    		67 => 
    		array (
    			'codigoIbge' => 1200427,
    			'nome' => 'Rodrigues Alves',
    			'UF' => 'AC',
    		),
    		68 => 
    		array (
    			'codigoIbge' => 1200435,
    			'nome' => 'Santa Rosa do Purus',
    			'UF' => 'AC',
    		),
    		69 => 
    		array (
    			'codigoIbge' => 1200450,
    			'nome' => 'Senador Guiomard',
    			'UF' => 'AC',
    		),
    		70 => 
    		array (
    			'codigoIbge' => 1200500,
    			'nome' => 'Sena Madureira',
    			'UF' => 'AC',
    		),
    		71 => 
    		array (
    			'codigoIbge' => 1200609,
    			'nome' => 'Tarauacá',
    			'UF' => 'AC',
    		),
    		72 => 
    		array (
    			'codigoIbge' => 1200708,
    			'nome' => 'Xapuri',
    			'UF' => 'AC',
    		),
    		73 => 
    		array (
    			'codigoIbge' => 1200807,
    			'nome' => 'Porto Acre',
    			'UF' => 'AC',
    		),
    		74 => 
    		array (
    			'codigoIbge' => 1300029,
    			'nome' => 'Alvarães',
    			'UF' => 'AM',
    		),
    		75 => 
    		array (
    			'codigoIbge' => 1300060,
    			'nome' => 'Amaturá',
    			'UF' => 'AM',
    		),
    		76 => 
    		array (
    			'codigoIbge' => 1300086,
    			'nome' => 'Anamã',
    			'UF' => 'AM',
    		),
    		77 => 
    		array (
    			'codigoIbge' => 1300102,
    			'nome' => 'Anori',
    			'UF' => 'AM',
    		),
    		78 => 
    		array (
    			'codigoIbge' => 1300144,
    			'nome' => 'Apuí',
    			'UF' => 'AM',
    		),
    		79 => 
    		array (
    			'codigoIbge' => 1300201,
    			'nome' => 'Atalaia do Norte',
    			'UF' => 'AM',
    		),
    		80 => 
    		array (
    			'codigoIbge' => 1300300,
    			'nome' => 'Autazes',
    			'UF' => 'AM',
    		),
    		81 => 
    		array (
    			'codigoIbge' => 1300409,
    			'nome' => 'Barcelos',
    			'UF' => 'AM',
    		),
    		82 => 
    		array (
    			'codigoIbge' => 1300508,
    			'nome' => 'Barreirinha',
    			'UF' => 'AM',
    		),
    		83 => 
    		array (
    			'codigoIbge' => 1300607,
    			'nome' => 'Benjamin Constant',
    			'UF' => 'AM',
    		),
    		84 => 
    		array (
    			'codigoIbge' => 1300631,
    			'nome' => 'Beruri',
    			'UF' => 'AM',
    		),
    		85 => 
    		array (
    			'codigoIbge' => 1300680,
    			'nome' => 'Boa Vista do Ramos',
    			'UF' => 'AM',
    		),
    		86 => 
    		array (
    			'codigoIbge' => 1300706,
    			'nome' => 'Boca do Acre',
    			'UF' => 'AM',
    		),
    		87 => 
    		array (
    			'codigoIbge' => 1300805,
    			'nome' => 'Borba',
    			'UF' => 'AM',
    		),
    		88 => 
    		array (
    			'codigoIbge' => 1300839,
    			'nome' => 'Caapiranga',
    			'UF' => 'AM',
    		),
    		89 => 
    		array (
    			'codigoIbge' => 1300904,
    			'nome' => 'Canutama',
    			'UF' => 'AM',
    		),
    		90 => 
    		array (
    			'codigoIbge' => 1301001,
    			'nome' => 'Carauari',
    			'UF' => 'AM',
    		),
    		91 => 
    		array (
    			'codigoIbge' => 1301100,
    			'nome' => 'Careiro',
    			'UF' => 'AM',
    		),
    		92 => 
    		array (
    			'codigoIbge' => 1301159,
    			'nome' => 'Careiro da Várzea',
    			'UF' => 'AM',
    		),
    		93 => 
    		array (
    			'codigoIbge' => 1301209,
    			'nome' => 'Coari',
    			'UF' => 'AM',
    		),
    		94 => 
    		array (
    			'codigoIbge' => 1301308,
    			'nome' => 'Codajás',
    			'UF' => 'AM',
    		),
    		95 => 
    		array (
    			'codigoIbge' => 1301407,
    			'nome' => 'Eirunepé',
    			'UF' => 'AM',
    		),
    		96 => 
    		array (
    			'codigoIbge' => 1301506,
    			'nome' => 'Envira',
    			'UF' => 'AM',
    		),
    		97 => 
    		array (
    			'codigoIbge' => 1301605,
    			'nome' => 'Fonte Boa',
    			'UF' => 'AM',
    		),
    		98 => 
    		array (
    			'codigoIbge' => 1301654,
    			'nome' => 'Guajará',
    			'UF' => 'AM',
    		),
    		99 => 
    		array (
    			'codigoIbge' => 1301704,
    			'nome' => 'Humaitá',
    			'UF' => 'AM',
    		),
    		100 => 
    		array (
    			'codigoIbge' => 1301803,
    			'nome' => 'Ipixuna',
    			'UF' => 'AM',
    		),
    		101 => 
    		array (
    			'codigoIbge' => 1301852,
    			'nome' => 'Iranduba',
    			'UF' => 'AM',
    		),
    		102 => 
    		array (
    			'codigoIbge' => 1301902,
    			'nome' => 'Itacoatiara',
    			'UF' => 'AM',
    		),
    		103 => 
    		array (
    			'codigoIbge' => 1301951,
    			'nome' => 'Itamarati',
    			'UF' => 'AM',
    		),
    		104 => 
    		array (
    			'codigoIbge' => 1302009,
    			'nome' => 'Itapiranga',
    			'UF' => 'AM',
    		),
    		105 => 
    		array (
    			'codigoIbge' => 1302108,
    			'nome' => 'Japurá',
    			'UF' => 'AM',
    		),
    		106 => 
    		array (
    			'codigoIbge' => 1302207,
    			'nome' => 'Juruá',
    			'UF' => 'AM',
    		),
    		107 => 
    		array (
    			'codigoIbge' => 1302306,
    			'nome' => 'Jutaí',
    			'UF' => 'AM',
    		),
    		108 => 
    		array (
    			'codigoIbge' => 1302405,
    			'nome' => 'Lábrea',
    			'UF' => 'AM',
    		),
    		109 => 
    		array (
    			'codigoIbge' => 1302504,
    			'nome' => 'Manacapuru',
    			'UF' => 'AM',
    		),
    		110 => 
    		array (
    			'codigoIbge' => 1302553,
    			'nome' => 'Manaquiri',
    			'UF' => 'AM',
    		),
    		111 => 
    		array (
    			'codigoIbge' => 1302603,
    			'nome' => 'Manaus',
    			'UF' => 'AM',
    		),
    		112 => 
    		array (
    			'codigoIbge' => 1302702,
    			'nome' => 'Manicoré',
    			'UF' => 'AM',
    		),
    		113 => 
    		array (
    			'codigoIbge' => 1302801,
    			'nome' => 'Maraã',
    			'UF' => 'AM',
    		),
    		114 => 
    		array (
    			'codigoIbge' => 1302900,
    			'nome' => 'Maués',
    			'UF' => 'AM',
    		),
    		115 => 
    		array (
    			'codigoIbge' => 1303007,
    			'nome' => 'Nhamundá',
    			'UF' => 'AM',
    		),
    		116 => 
    		array (
    			'codigoIbge' => 1303106,
    			'nome' => 'Nova Olinda do Norte',
    			'UF' => 'AM',
    		),
    		117 => 
    		array (
    			'codigoIbge' => 1303205,
    			'nome' => 'Novo Airão',
    			'UF' => 'AM',
    		),
    		118 => 
    		array (
    			'codigoIbge' => 1303304,
    			'nome' => 'Novo Aripuanã',
    			'UF' => 'AM',
    		),
    		119 => 
    		array (
    			'codigoIbge' => 1303403,
    			'nome' => 'Parintins',
    			'UF' => 'AM',
    		),
    		120 => 
    		array (
    			'codigoIbge' => 1303502,
    			'nome' => 'Pauini',
    			'UF' => 'AM',
    		),
    		121 => 
    		array (
    			'codigoIbge' => 1303536,
    			'nome' => 'Presidente Figueiredo',
    			'UF' => 'AM',
    		),
    		122 => 
    		array (
    			'codigoIbge' => 1303569,
    			'nome' => 'Rio Preto da Eva',
    			'UF' => 'AM',
    		),
    		123 => 
    		array (
    			'codigoIbge' => 1303601,
    			'nome' => 'Santa Isabel do Rio Negro',
    			'UF' => 'AM',
    		),
    		124 => 
    		array (
    			'codigoIbge' => 1303700,
    			'nome' => 'Santo Antônio do Içá',
    			'UF' => 'AM',
    		),
    		125 => 
    		array (
    			'codigoIbge' => 1303809,
    			'nome' => 'São Gabriel da Cachoeira',
    			'UF' => 'AM',
    		),
    		126 => 
    		array (
    			'codigoIbge' => 1303908,
    			'nome' => 'São Paulo de Olivença',
    			'UF' => 'AM',
    		),
    		127 => 
    		array (
    			'codigoIbge' => 1303957,
    			'nome' => 'São Sebastião do Uatumã',
    			'UF' => 'AM',
    		),
    		128 => 
    		array (
    			'codigoIbge' => 1304005,
    			'nome' => 'Silves',
    			'UF' => 'AM',
    		),
    		129 => 
    		array (
    			'codigoIbge' => 1304062,
    			'nome' => 'Tabatinga',
    			'UF' => 'AM',
    		),
    		130 => 
    		array (
    			'codigoIbge' => 1304104,
    			'nome' => 'Tapauá',
    			'UF' => 'AM',
    		),
    		131 => 
    		array (
    			'codigoIbge' => 1304203,
    			'nome' => 'Tefé',
    			'UF' => 'AM',
    		),
    		132 => 
    		array (
    			'codigoIbge' => 1304237,
    			'nome' => 'Tonantins',
    			'UF' => 'AM',
    		),
    		133 => 
    		array (
    			'codigoIbge' => 1304260,
    			'nome' => 'Uarini',
    			'UF' => 'AM',
    		),
    		134 => 
    		array (
    			'codigoIbge' => 1304302,
    			'nome' => 'Urucará',
    			'UF' => 'AM',
    		),
    		135 => 
    		array (
    			'codigoIbge' => 1304401,
    			'nome' => 'Urucurituba',
    			'UF' => 'AM',
    		),
    		136 => 
    		array (
    			'codigoIbge' => 1400027,
    			'nome' => 'Amajari',
    			'UF' => 'RR',
    		),
    		137 => 
    		array (
    			'codigoIbge' => 1400050,
    			'nome' => 'Alto Alegre',
    			'UF' => 'RR',
    		),
    		138 => 
    		array (
    			'codigoIbge' => 1400100,
    			'nome' => 'Boa Vista',
    			'UF' => 'RR',
    		),
    		139 => 
    		array (
    			'codigoIbge' => 1400159,
    			'nome' => 'Bonfim',
    			'UF' => 'RR',
    		),
    		140 => 
    		array (
    			'codigoIbge' => 1400175,
    			'nome' => 'Cantá',
    			'UF' => 'RR',
    		),
    		141 => 
    		array (
    			'codigoIbge' => 1400209,
    			'nome' => 'Caracaraí',
    			'UF' => 'RR',
    		),
    		142 => 
    		array (
    			'codigoIbge' => 1400233,
    			'nome' => 'Caroebe',
    			'UF' => 'RR',
    		),
    		143 => 
    		array (
    			'codigoIbge' => 1400282,
    			'nome' => 'Iracema',
    			'UF' => 'RR',
    		),
    		144 => 
    		array (
    			'codigoIbge' => 1400308,
    			'nome' => 'Mucajaí',
    			'UF' => 'RR',
    		),
    		145 => 
    		array (
    			'codigoIbge' => 1400407,
    			'nome' => 'Normandia',
    			'UF' => 'RR',
    		),
    		146 => 
    		array (
    			'codigoIbge' => 1400456,
    			'nome' => 'Pacaraima',
    			'UF' => 'RR',
    		),
    		147 => 
    		array (
    			'codigoIbge' => 1400472,
    			'nome' => 'Rorainópolis',
    			'UF' => 'RR',
    		),
    		148 => 
    		array (
    			'codigoIbge' => 1400506,
    			'nome' => 'São João da Baliza',
    			'UF' => 'RR',
    		),
    		149 => 
    		array (
    			'codigoIbge' => 1400605,
    			'nome' => 'São Luiz',
    			'UF' => 'RR',
    		),
    		150 => 
    		array (
    			'codigoIbge' => 1400704,
    			'nome' => 'Uiramutã',
    			'UF' => 'RR',
    		),
    		151 => 
    		array (
    			'codigoIbge' => 1500107,
    			'nome' => 'Abaetetuba',
    			'UF' => 'PA',
    		),
    		152 => 
    		array (
    			'codigoIbge' => 1500131,
    			'nome' => 'Abel Figueiredo',
    			'UF' => 'PA',
    		),
    		153 => 
    		array (
    			'codigoIbge' => 1500206,
    			'nome' => 'Acará',
    			'UF' => 'PA',
    		),
    		154 => 
    		array (
    			'codigoIbge' => 1500305,
    			'nome' => 'Afuá',
    			'UF' => 'PA',
    		),
    		155 => 
    		array (
    			'codigoIbge' => 1500347,
    			'nome' => 'Água Azul do Norte',
    			'UF' => 'PA',
    		),
    		156 => 
    		array (
    			'codigoIbge' => 1500404,
    			'nome' => 'Alenquer',
    			'UF' => 'PA',
    		),
    		157 => 
    		array (
    			'codigoIbge' => 1500503,
    			'nome' => 'Almeirim',
    			'UF' => 'PA',
    		),
    		158 => 
    		array (
    			'codigoIbge' => 1500602,
    			'nome' => 'Altamira',
    			'UF' => 'PA',
    		),
    		159 => 
    		array (
    			'codigoIbge' => 1500701,
    			'nome' => 'Anajás',
    			'UF' => 'PA',
    		),
    		160 => 
    		array (
    			'codigoIbge' => 1500800,
    			'nome' => 'Ananindeua',
    			'UF' => 'PA',
    		),
    		161 => 
    		array (
    			'codigoIbge' => 1500859,
    			'nome' => 'Anapu',
    			'UF' => 'PA',
    		),
    		162 => 
    		array (
    			'codigoIbge' => 1500909,
    			'nome' => 'Augusto Corrêa',
    			'UF' => 'PA',
    		),
    		163 => 
    		array (
    			'codigoIbge' => 1500958,
    			'nome' => 'Aurora do Pará',
    			'UF' => 'PA',
    		),
    		164 => 
    		array (
    			'codigoIbge' => 1501006,
    			'nome' => 'Aveiro',
    			'UF' => 'PA',
    		),
    		165 => 
    		array (
    			'codigoIbge' => 1501105,
    			'nome' => 'Bagre',
    			'UF' => 'PA',
    		),
    		166 => 
    		array (
    			'codigoIbge' => 1501204,
    			'nome' => 'Baião',
    			'UF' => 'PA',
    		),
    		167 => 
    		array (
    			'codigoIbge' => 1501253,
    			'nome' => 'Bannach',
    			'UF' => 'PA',
    		),
    		168 => 
    		array (
    			'codigoIbge' => 1501303,
    			'nome' => 'Barcarena',
    			'UF' => 'PA',
    		),
    		169 => 
    		array (
    			'codigoIbge' => 1501402,
    			'nome' => 'Belém',
    			'UF' => 'PA',
    		),
    		170 => 
    		array (
    			'codigoIbge' => 1501451,
    			'nome' => 'Belterra',
    			'UF' => 'PA',
    		),
    		171 => 
    		array (
    			'codigoIbge' => 1501501,
    			'nome' => 'Benevides',
    			'UF' => 'PA',
    		),
    		172 => 
    		array (
    			'codigoIbge' => 1501576,
    			'nome' => 'Bom Jesus do Tocantins',
    			'UF' => 'PA',
    		),
    		173 => 
    		array (
    			'codigoIbge' => 1501600,
    			'nome' => 'Bonito',
    			'UF' => 'PA',
    		),
    		174 => 
    		array (
    			'codigoIbge' => 1501709,
    			'nome' => 'Bragança',
    			'UF' => 'PA',
    		),
    		175 => 
    		array (
    			'codigoIbge' => 1501725,
    			'nome' => 'Brasil Novo',
    			'UF' => 'PA',
    		),
    		176 => 
    		array (
    			'codigoIbge' => 1501758,
    			'nome' => 'Brejo Grande do Araguaia',
    			'UF' => 'PA',
    		),
    		177 => 
    		array (
    			'codigoIbge' => 1501782,
    			'nome' => 'Breu Branco',
    			'UF' => 'PA',
    		),
    		178 => 
    		array (
    			'codigoIbge' => 1501808,
    			'nome' => 'Breves',
    			'UF' => 'PA',
    		),
    		179 => 
    		array (
    			'codigoIbge' => 1501907,
    			'nome' => 'Bujaru',
    			'UF' => 'PA',
    		),
    		180 => 
    		array (
    			'codigoIbge' => 1501956,
    			'nome' => 'Cachoeira do Piriá',
    			'UF' => 'PA',
    		),
    		181 => 
    		array (
    			'codigoIbge' => 1502004,
    			'nome' => 'Cachoeira do Arari',
    			'UF' => 'PA',
    		),
    		182 => 
    		array (
    			'codigoIbge' => 1502103,
    			'nome' => 'Cametá',
    			'UF' => 'PA',
    		),
    		183 => 
    		array (
    			'codigoIbge' => 1502152,
    			'nome' => 'Canaã dos Carajás',
    			'UF' => 'PA',
    		),
    		184 => 
    		array (
    			'codigoIbge' => 1502202,
    			'nome' => 'Capanema',
    			'UF' => 'PA',
    		),
    		185 => 
    		array (
    			'codigoIbge' => 1502301,
    			'nome' => 'Capitão Poço',
    			'UF' => 'PA',
    		),
    		186 => 
    		array (
    			'codigoIbge' => 1502400,
    			'nome' => 'Castanhal',
    			'UF' => 'PA',
    		),
    		187 => 
    		array (
    			'codigoIbge' => 1502509,
    			'nome' => 'Chaves',
    			'UF' => 'PA',
    		),
    		188 => 
    		array (
    			'codigoIbge' => 1502608,
    			'nome' => 'Colares',
    			'UF' => 'PA',
    		),
    		189 => 
    		array (
    			'codigoIbge' => 1502707,
    			'nome' => 'Conceição do Araguaia',
    			'UF' => 'PA',
    		),
    		190 => 
    		array (
    			'codigoIbge' => 1502756,
    			'nome' => 'Concórdia do Pará',
    			'UF' => 'PA',
    		),
    		191 => 
    		array (
    			'codigoIbge' => 1502764,
    			'nome' => 'Cumaru do Norte',
    			'UF' => 'PA',
    		),
    		192 => 
    		array (
    			'codigoIbge' => 1502772,
    			'nome' => 'Curionópolis',
    			'UF' => 'PA',
    		),
    		193 => 
    		array (
    			'codigoIbge' => 1502806,
    			'nome' => 'Curralinho',
    			'UF' => 'PA',
    		),
    		194 => 
    		array (
    			'codigoIbge' => 1502855,
    			'nome' => 'Curuá',
    			'UF' => 'PA',
    		),
    		195 => 
    		array (
    			'codigoIbge' => 1502905,
    			'nome' => 'Curuçá',
    			'UF' => 'PA',
    		),
    		196 => 
    		array (
    			'codigoIbge' => 1502939,
    			'nome' => 'Dom Eliseu',
    			'UF' => 'PA',
    		),
    		197 => 
    		array (
    			'codigoIbge' => 1502954,
    			'nome' => 'Eldorado do Carajás',
    			'UF' => 'PA',
    		),
    		198 => 
    		array (
    			'codigoIbge' => 1503002,
    			'nome' => 'Faro',
    			'UF' => 'PA',
    		),
    		199 => 
    		array (
    			'codigoIbge' => 1503044,
    			'nome' => 'Floresta do Araguaia',
    			'UF' => 'PA',
    		),
    		200 => 
    		array (
    			'codigoIbge' => 1503077,
    			'nome' => 'Garrafão do Norte',
    			'UF' => 'PA',
    		),
    		201 => 
    		array (
    			'codigoIbge' => 1503093,
    			'nome' => 'Goianésia do Pará',
    			'UF' => 'PA',
    		),
    		202 => 
    		array (
    			'codigoIbge' => 1503101,
    			'nome' => 'Gurupá',
    			'UF' => 'PA',
    		),
    		203 => 
    		array (
    			'codigoIbge' => 1503200,
    			'nome' => 'Igarapé-Açu',
    			'UF' => 'PA',
    		),
    		204 => 
    		array (
    			'codigoIbge' => 1503309,
    			'nome' => 'Igarapé-Miri',
    			'UF' => 'PA',
    		),
    		205 => 
    		array (
    			'codigoIbge' => 1503408,
    			'nome' => 'Inhangapi',
    			'UF' => 'PA',
    		),
    		206 => 
    		array (
    			'codigoIbge' => 1503457,
    			'nome' => 'Ipixuna do Pará',
    			'UF' => 'PA',
    		),
    		207 => 
    		array (
    			'codigoIbge' => 1503507,
    			'nome' => 'Irituia',
    			'UF' => 'PA',
    		),
    		208 => 
    		array (
    			'codigoIbge' => 1503606,
    			'nome' => 'Itaituba',
    			'UF' => 'PA',
    		),
    		209 => 
    		array (
    			'codigoIbge' => 1503705,
    			'nome' => 'Itupiranga',
    			'UF' => 'PA',
    		),
    		210 => 
    		array (
    			'codigoIbge' => 1503754,
    			'nome' => 'Jacareacanga',
    			'UF' => 'PA',
    		),
    		211 => 
    		array (
    			'codigoIbge' => 1503804,
    			'nome' => 'Jacundá',
    			'UF' => 'PA',
    		),
    		212 => 
    		array (
    			'codigoIbge' => 1503903,
    			'nome' => 'Juruti',
    			'UF' => 'PA',
    		),
    		213 => 
    		array (
    			'codigoIbge' => 1504000,
    			'nome' => 'Limoeiro do Ajuru',
    			'UF' => 'PA',
    		),
    		214 => 
    		array (
    			'codigoIbge' => 1504059,
    			'nome' => 'Mãe do Rio',
    			'UF' => 'PA',
    		),
    		215 => 
    		array (
    			'codigoIbge' => 1504109,
    			'nome' => 'Magalhães Barata',
    			'UF' => 'PA',
    		),
    		216 => 
    		array (
    			'codigoIbge' => 1504208,
    			'nome' => 'Marabá',
    			'UF' => 'PA',
    		),
    		217 => 
    		array (
    			'codigoIbge' => 1504307,
    			'nome' => 'Maracanã',
    			'UF' => 'PA',
    		),
    		218 => 
    		array (
    			'codigoIbge' => 1504406,
    			'nome' => 'Marapanim',
    			'UF' => 'PA',
    		),
    		219 => 
    		array (
    			'codigoIbge' => 1504422,
    			'nome' => 'Marituba',
    			'UF' => 'PA',
    		),
    		220 => 
    		array (
    			'codigoIbge' => 1504455,
    			'nome' => 'Medicilândia',
    			'UF' => 'PA',
    		),
    		221 => 
    		array (
    			'codigoIbge' => 1504505,
    			'nome' => 'Melgaço',
    			'UF' => 'PA',
    		),
    		222 => 
    		array (
    			'codigoIbge' => 1504604,
    			'nome' => 'Mocajuba',
    			'UF' => 'PA',
    		),
    		223 => 
    		array (
    			'codigoIbge' => 1504703,
    			'nome' => 'Moju',
    			'UF' => 'PA',
    		),
    		224 => 
    		array (
    			'codigoIbge' => 1504752,
    			'nome' => 'Mojuí dos Campos',
    			'UF' => 'PA',
    		),
    		225 => 
    		array (
    			'codigoIbge' => 1504802,
    			'nome' => 'Monte Alegre',
    			'UF' => 'PA',
    		),
    		226 => 
    		array (
    			'codigoIbge' => 1504901,
    			'nome' => 'Muaná',
    			'UF' => 'PA',
    		),
    		227 => 
    		array (
    			'codigoIbge' => 1504950,
    			'nome' => 'Nova Esperança do Piriá',
    			'UF' => 'PA',
    		),
    		228 => 
    		array (
    			'codigoIbge' => 1504976,
    			'nome' => 'Nova Ipixuna',
    			'UF' => 'PA',
    		),
    		229 => 
    		array (
    			'codigoIbge' => 1505007,
    			'nome' => 'Nova Timboteua',
    			'UF' => 'PA',
    		),
    		230 => 
    		array (
    			'codigoIbge' => 1505031,
    			'nome' => 'Novo Progresso',
    			'UF' => 'PA',
    		),
    		231 => 
    		array (
    			'codigoIbge' => 1505064,
    			'nome' => 'Novo Repartimento',
    			'UF' => 'PA',
    		),
    		232 => 
    		array (
    			'codigoIbge' => 1505106,
    			'nome' => 'Óbidos',
    			'UF' => 'PA',
    		),
    		233 => 
    		array (
    			'codigoIbge' => 1505205,
    			'nome' => 'Oeiras do Pará',
    			'UF' => 'PA',
    		),
    		234 => 
    		array (
    			'codigoIbge' => 1505304,
    			'nome' => 'Oriximiná',
    			'UF' => 'PA',
    		),
    		235 => 
    		array (
    			'codigoIbge' => 1505403,
    			'nome' => 'Ourém',
    			'UF' => 'PA',
    		),
    		236 => 
    		array (
    			'codigoIbge' => 1505437,
    			'nome' => 'Ourilândia do Norte',
    			'UF' => 'PA',
    		),
    		237 => 
    		array (
    			'codigoIbge' => 1505486,
    			'nome' => 'Pacajá',
    			'UF' => 'PA',
    		),
    		238 => 
    		array (
    			'codigoIbge' => 1505494,
    			'nome' => 'Palestina do Pará',
    			'UF' => 'PA',
    		),
    		239 => 
    		array (
    			'codigoIbge' => 1505502,
    			'nome' => 'Paragominas',
    			'UF' => 'PA',
    		),
    		240 => 
    		array (
    			'codigoIbge' => 1505536,
    			'nome' => 'Parauapebas',
    			'UF' => 'PA',
    		),
    		241 => 
    		array (
    			'codigoIbge' => 1505551,
    			'nome' => 'Pau D\'Arco',
    			'UF' => 'PA',
    		),
    		242 => 
    		array (
    			'codigoIbge' => 1505601,
    			'nome' => 'Peixe-Boi',
    			'UF' => 'PA',
    		),
    		243 => 
    		array (
    			'codigoIbge' => 1505635,
    			'nome' => 'Piçarra',
    			'UF' => 'PA',
    		),
    		244 => 
    		array (
    			'codigoIbge' => 1505650,
    			'nome' => 'Placas',
    			'UF' => 'PA',
    		),
    		245 => 
    		array (
    			'codigoIbge' => 1505700,
    			'nome' => 'Ponta de Pedras',
    			'UF' => 'PA',
    		),
    		246 => 
    		array (
    			'codigoIbge' => 1505809,
    			'nome' => 'Portel',
    			'UF' => 'PA',
    		),
    		247 => 
    		array (
    			'codigoIbge' => 1505908,
    			'nome' => 'Porto de Moz',
    			'UF' => 'PA',
    		),
    		248 => 
    		array (
    			'codigoIbge' => 1506005,
    			'nome' => 'Prainha',
    			'UF' => 'PA',
    		),
    		249 => 
    		array (
    			'codigoIbge' => 1506104,
    			'nome' => 'Primavera',
    			'UF' => 'PA',
    		),
    		250 => 
    		array (
    			'codigoIbge' => 1506112,
    			'nome' => 'Quatipuru',
    			'UF' => 'PA',
    		),
    		251 => 
    		array (
    			'codigoIbge' => 1506138,
    			'nome' => 'Redenção',
    			'UF' => 'PA',
    		),
    		252 => 
    		array (
    			'codigoIbge' => 1506161,
    			'nome' => 'Rio Maria',
    			'UF' => 'PA',
    		),
    		253 => 
    		array (
    			'codigoIbge' => 1506187,
    			'nome' => 'Rondon do Pará',
    			'UF' => 'PA',
    		),
    		254 => 
    		array (
    			'codigoIbge' => 1506195,
    			'nome' => 'Rurópolis',
    			'UF' => 'PA',
    		),
    		255 => 
    		array (
    			'codigoIbge' => 1506203,
    			'nome' => 'Salinópolis',
    			'UF' => 'PA',
    		),
    		256 => 
    		array (
    			'codigoIbge' => 1506302,
    			'nome' => 'Salvaterra',
    			'UF' => 'PA',
    		),
    		257 => 
    		array (
    			'codigoIbge' => 1506351,
    			'nome' => 'Santa Bárbara do Pará',
    			'UF' => 'PA',
    		),
    		258 => 
    		array (
    			'codigoIbge' => 1506401,
    			'nome' => 'Santa Cruz do Arari',
    			'UF' => 'PA',
    		),
    		259 => 
    		array (
    			'codigoIbge' => 1506500,
    			'nome' => 'Santa Izabel do Pará',
    			'UF' => 'PA',
    		),
    		260 => 
    		array (
    			'codigoIbge' => 1506559,
    			'nome' => 'Santa Luzia do Pará',
    			'UF' => 'PA',
    		),
    		261 => 
    		array (
    			'codigoIbge' => 1506583,
    			'nome' => 'Santa Maria das Barreiras',
    			'UF' => 'PA',
    		),
    		262 => 
    		array (
    			'codigoIbge' => 1506609,
    			'nome' => 'Santa Maria do Pará',
    			'UF' => 'PA',
    		),
    		263 => 
    		array (
    			'codigoIbge' => 1506708,
    			'nome' => 'Santana do Araguaia',
    			'UF' => 'PA',
    		),
    		264 => 
    		array (
    			'codigoIbge' => 1506807,
    			'nome' => 'Santarém',
    			'UF' => 'PA',
    		),
    		265 => 
    		array (
    			'codigoIbge' => 1506906,
    			'nome' => 'Santarém Novo',
    			'UF' => 'PA',
    		),
    		266 => 
    		array (
    			'codigoIbge' => 1507003,
    			'nome' => 'Santo Antônio do Tauá',
    			'UF' => 'PA',
    		),
    		267 => 
    		array (
    			'codigoIbge' => 1507102,
    			'nome' => 'São Caetano de Odivelas',
    			'UF' => 'PA',
    		),
    		268 => 
    		array (
    			'codigoIbge' => 1507151,
    			'nome' => 'São Domingos do Araguaia',
    			'UF' => 'PA',
    		),
    		269 => 
    		array (
    			'codigoIbge' => 1507201,
    			'nome' => 'São Domingos do Capim',
    			'UF' => 'PA',
    		),
    		270 => 
    		array (
    			'codigoIbge' => 1507300,
    			'nome' => 'São Félix do Xingu',
    			'UF' => 'PA',
    		),
    		271 => 
    		array (
    			'codigoIbge' => 1507409,
    			'nome' => 'São Francisco do Pará',
    			'UF' => 'PA',
    		),
    		272 => 
    		array (
    			'codigoIbge' => 1507458,
    			'nome' => 'São Geraldo do Araguaia',
    			'UF' => 'PA',
    		),
    		273 => 
    		array (
    			'codigoIbge' => 1507466,
    			'nome' => 'São João da Ponta',
    			'UF' => 'PA',
    		),
    		274 => 
    		array (
    			'codigoIbge' => 1507474,
    			'nome' => 'São João de Pirabas',
    			'UF' => 'PA',
    		),
    		275 => 
    		array (
    			'codigoIbge' => 1507508,
    			'nome' => 'São João do Araguaia',
    			'UF' => 'PA',
    		),
    		276 => 
    		array (
    			'codigoIbge' => 1507607,
    			'nome' => 'São Miguel do Guamá',
    			'UF' => 'PA',
    		),
    		277 => 
    		array (
    			'codigoIbge' => 1507706,
    			'nome' => 'São Sebastião da Boa Vista',
    			'UF' => 'PA',
    		),
    		278 => 
    		array (
    			'codigoIbge' => 1507755,
    			'nome' => 'Sapucaia',
    			'UF' => 'PA',
    		),
    		279 => 
    		array (
    			'codigoIbge' => 1507805,
    			'nome' => 'Senador José Porfírio',
    			'UF' => 'PA',
    		),
    		280 => 
    		array (
    			'codigoIbge' => 1507904,
    			'nome' => 'Soure',
    			'UF' => 'PA',
    		),
    		281 => 
    		array (
    			'codigoIbge' => 1507953,
    			'nome' => 'Tailândia',
    			'UF' => 'PA',
    		),
    		282 => 
    		array (
    			'codigoIbge' => 1507961,
    			'nome' => 'Terra Alta',
    			'UF' => 'PA',
    		),
    		283 => 
    		array (
    			'codigoIbge' => 1507979,
    			'nome' => 'Terra Santa',
    			'UF' => 'PA',
    		),
    		284 => 
    		array (
    			'codigoIbge' => 1508001,
    			'nome' => 'Tomé-Açu',
    			'UF' => 'PA',
    		),
    		285 => 
    		array (
    			'codigoIbge' => 1508035,
    			'nome' => 'Tracuateua',
    			'UF' => 'PA',
    		),
    		286 => 
    		array (
    			'codigoIbge' => 1508050,
    			'nome' => 'Trairão',
    			'UF' => 'PA',
    		),
    		287 => 
    		array (
    			'codigoIbge' => 1508084,
    			'nome' => 'Tucumã',
    			'UF' => 'PA',
    		),
    		288 => 
    		array (
    			'codigoIbge' => 1508100,
    			'nome' => 'Tucuruí',
    			'UF' => 'PA',
    		),
    		289 => 
    		array (
    			'codigoIbge' => 1508126,
    			'nome' => 'Ulianópolis',
    			'UF' => 'PA',
    		),
    		290 => 
    		array (
    			'codigoIbge' => 1508159,
    			'nome' => 'Uruará',
    			'UF' => 'PA',
    		),
    		291 => 
    		array (
    			'codigoIbge' => 1508209,
    			'nome' => 'Vigia',
    			'UF' => 'PA',
    		),
    		292 => 
    		array (
    			'codigoIbge' => 1508308,
    			'nome' => 'Viseu',
    			'UF' => 'PA',
    		),
    		293 => 
    		array (
    			'codigoIbge' => 1508357,
    			'nome' => 'Vitória do Xingu',
    			'UF' => 'PA',
    		),
    		294 => 
    		array (
    			'codigoIbge' => 1508407,
    			'nome' => 'Xinguara',
    			'UF' => 'PA',
    		),
    		295 => 
    		array (
    			'codigoIbge' => 1600055,
    			'nome' => 'Serra do Navio',
    			'UF' => 'AP',
    		),
    		296 => 
    		array (
    			'codigoIbge' => 1600105,
    			'nome' => 'Amapá',
    			'UF' => 'AP',
    		),
    		297 => 
    		array (
    			'codigoIbge' => 1600154,
    			'nome' => 'Pedra Branca do Amapari',
    			'UF' => 'AP',
    		),
    		298 => 
    		array (
    			'codigoIbge' => 1600204,
    			'nome' => 'Calçoene',
    			'UF' => 'AP',
    		),
    		299 => 
    		array (
    			'codigoIbge' => 1600212,
    			'nome' => 'Cutias',
    			'UF' => 'AP',
    		),
    		300 => 
    		array (
    			'codigoIbge' => 1600238,
    			'nome' => 'Ferreira Gomes',
    			'UF' => 'AP',
    		),
    		301 => 
    		array (
    			'codigoIbge' => 1600253,
    			'nome' => 'Itaubal',
    			'UF' => 'AP',
    		),
    		302 => 
    		array (
    			'codigoIbge' => 1600279,
    			'nome' => 'Laranjal do Jari',
    			'UF' => 'AP',
    		),
    		303 => 
    		array (
    			'codigoIbge' => 1600303,
    			'nome' => 'Macapá',
    			'UF' => 'AP',
    		),
    		304 => 
    		array (
    			'codigoIbge' => 1600402,
    			'nome' => 'Mazagão',
    			'UF' => 'AP',
    		),
    		305 => 
    		array (
    			'codigoIbge' => 1600501,
    			'nome' => 'Oiapoque',
    			'UF' => 'AP',
    		),
    		306 => 
    		array (
    			'codigoIbge' => 1600535,
    			'nome' => 'Porto Grande',
    			'UF' => 'AP',
    		),
    		307 => 
    		array (
    			'codigoIbge' => 1600550,
    			'nome' => 'Pracuúba',
    			'UF' => 'AP',
    		),
    		308 => 
    		array (
    			'codigoIbge' => 1600600,
    			'nome' => 'Santana',
    			'UF' => 'AP',
    		),
    		309 => 
    		array (
    			'codigoIbge' => 1600709,
    			'nome' => 'Tartarugalzinho',
    			'UF' => 'AP',
    		),
    		310 => 
    		array (
    			'codigoIbge' => 1600808,
    			'nome' => 'Vitória do Jari',
    			'UF' => 'AP',
    		),
    		311 => 
    		array (
    			'codigoIbge' => 1700251,
    			'nome' => 'Abreulândia',
    			'UF' => 'TO',
    		),
    		312 => 
    		array (
    			'codigoIbge' => 1700301,
    			'nome' => 'Aguiarnópolis',
    			'UF' => 'TO',
    		),
    		313 => 
    		array (
    			'codigoIbge' => 1700350,
    			'nome' => 'Aliança do Tocantins',
    			'UF' => 'TO',
    		),
    		314 => 
    		array (
    			'codigoIbge' => 1700400,
    			'nome' => 'Almas',
    			'UF' => 'TO',
    		),
    		315 => 
    		array (
    			'codigoIbge' => 1700707,
    			'nome' => 'Alvorada',
    			'UF' => 'TO',
    		),
    		316 => 
    		array (
    			'codigoIbge' => 1701002,
    			'nome' => 'Ananás',
    			'UF' => 'TO',
    		),
    		317 => 
    		array (
    			'codigoIbge' => 1701051,
    			'nome' => 'Angico',
    			'UF' => 'TO',
    		),
    		318 => 
    		array (
    			'codigoIbge' => 1701101,
    			'nome' => 'Aparecida do Rio Negro',
    			'UF' => 'TO',
    		),
    		319 => 
    		array (
    			'codigoIbge' => 1701309,
    			'nome' => 'Aragominas',
    			'UF' => 'TO',
    		),
    		320 => 
    		array (
    			'codigoIbge' => 1701903,
    			'nome' => 'Araguacema',
    			'UF' => 'TO',
    		),
    		321 => 
    		array (
    			'codigoIbge' => 1702000,
    			'nome' => 'Araguaçu',
    			'UF' => 'TO',
    		),
    		322 => 
    		array (
    			'codigoIbge' => 1702109,
    			'nome' => 'Araguaína',
    			'UF' => 'TO',
    		),
    		323 => 
    		array (
    			'codigoIbge' => 1702158,
    			'nome' => 'Araguanã',
    			'UF' => 'TO',
    		),
    		324 => 
    		array (
    			'codigoIbge' => 1702208,
    			'nome' => 'Araguatins',
    			'UF' => 'TO',
    		),
    		325 => 
    		array (
    			'codigoIbge' => 1702307,
    			'nome' => 'Arapoema',
    			'UF' => 'TO',
    		),
    		326 => 
    		array (
    			'codigoIbge' => 1702406,
    			'nome' => 'Arraias',
    			'UF' => 'TO',
    		),
    		327 => 
    		array (
    			'codigoIbge' => 1702554,
    			'nome' => 'Augustinópolis',
    			'UF' => 'TO',
    		),
    		328 => 
    		array (
    			'codigoIbge' => 1702703,
    			'nome' => 'Aurora do Tocantins',
    			'UF' => 'TO',
    		),
    		329 => 
    		array (
    			'codigoIbge' => 1702901,
    			'nome' => 'Axixá do Tocantins',
    			'UF' => 'TO',
    		),
    		330 => 
    		array (
    			'codigoIbge' => 1703008,
    			'nome' => 'Babaçulândia',
    			'UF' => 'TO',
    		),
    		331 => 
    		array (
    			'codigoIbge' => 1703057,
    			'nome' => 'Bandeirantes do Tocantins',
    			'UF' => 'TO',
    		),
    		332 => 
    		array (
    			'codigoIbge' => 1703073,
    			'nome' => 'Barra do Ouro',
    			'UF' => 'TO',
    		),
    		333 => 
    		array (
    			'codigoIbge' => 1703107,
    			'nome' => 'Barrolândia',
    			'UF' => 'TO',
    		),
    		334 => 
    		array (
    			'codigoIbge' => 1703206,
    			'nome' => 'Bernardo Sayão',
    			'UF' => 'TO',
    		),
    		335 => 
    		array (
    			'codigoIbge' => 1703305,
    			'nome' => 'Bom Jesus do Tocantins',
    			'UF' => 'TO',
    		),
    		336 => 
    		array (
    			'codigoIbge' => 1703602,
    			'nome' => 'Brasilândia do Tocantins',
    			'UF' => 'TO',
    		),
    		337 => 
    		array (
    			'codigoIbge' => 1703701,
    			'nome' => 'Brejinho de Nazaré',
    			'UF' => 'TO',
    		),
    		338 => 
    		array (
    			'codigoIbge' => 1703800,
    			'nome' => 'Buriti do Tocantins',
    			'UF' => 'TO',
    		),
    		339 => 
    		array (
    			'codigoIbge' => 1703826,
    			'nome' => 'Cachoeirinha',
    			'UF' => 'TO',
    		),
    		340 => 
    		array (
    			'codigoIbge' => 1703842,
    			'nome' => 'Campos Lindos',
    			'UF' => 'TO',
    		),
    		341 => 
    		array (
    			'codigoIbge' => 1703867,
    			'nome' => 'Cariri do Tocantins',
    			'UF' => 'TO',
    		),
    		342 => 
    		array (
    			'codigoIbge' => 1703883,
    			'nome' => 'Carmolândia',
    			'UF' => 'TO',
    		),
    		343 => 
    		array (
    			'codigoIbge' => 1703891,
    			'nome' => 'Carrasco Bonito',
    			'UF' => 'TO',
    		),
    		344 => 
    		array (
    			'codigoIbge' => 1703909,
    			'nome' => 'Caseara',
    			'UF' => 'TO',
    		),
    		345 => 
    		array (
    			'codigoIbge' => 1704105,
    			'nome' => 'Centenário',
    			'UF' => 'TO',
    		),
    		346 => 
    		array (
    			'codigoIbge' => 1704600,
    			'nome' => 'Chapada de Areia',
    			'UF' => 'TO',
    		),
    		347 => 
    		array (
    			'codigoIbge' => 1705102,
    			'nome' => 'Chapada da Natividade',
    			'UF' => 'TO',
    		),
    		348 => 
    		array (
    			'codigoIbge' => 1705508,
    			'nome' => 'Colinas do Tocantins',
    			'UF' => 'TO',
    		),
    		349 => 
    		array (
    			'codigoIbge' => 1705557,
    			'nome' => 'Combinado',
    			'UF' => 'TO',
    		),
    		350 => 
    		array (
    			'codigoIbge' => 1705607,
    			'nome' => 'Conceição do Tocantins',
    			'UF' => 'TO',
    		),
    		351 => 
    		array (
    			'codigoIbge' => 1706001,
    			'nome' => 'Couto Magalhães',
    			'UF' => 'TO',
    		),
    		352 => 
    		array (
    			'codigoIbge' => 1706100,
    			'nome' => 'Cristalândia',
    			'UF' => 'TO',
    		),
    		353 => 
    		array (
    			'codigoIbge' => 1706258,
    			'nome' => 'Crixás do Tocantins',
    			'UF' => 'TO',
    		),
    		354 => 
    		array (
    			'codigoIbge' => 1706506,
    			'nome' => 'Darcinópolis',
    			'UF' => 'TO',
    		),
    		355 => 
    		array (
    			'codigoIbge' => 1707009,
    			'nome' => 'Dianópolis',
    			'UF' => 'TO',
    		),
    		356 => 
    		array (
    			'codigoIbge' => 1707108,
    			'nome' => 'Divinópolis do Tocantins',
    			'UF' => 'TO',
    		),
    		357 => 
    		array (
    			'codigoIbge' => 1707207,
    			'nome' => 'Dois Irmãos do Tocantins',
    			'UF' => 'TO',
    		),
    		358 => 
    		array (
    			'codigoIbge' => 1707306,
    			'nome' => 'Dueré',
    			'UF' => 'TO',
    		),
    		359 => 
    		array (
    			'codigoIbge' => 1707405,
    			'nome' => 'Esperantina',
    			'UF' => 'TO',
    		),
    		360 => 
    		array (
    			'codigoIbge' => 1707553,
    			'nome' => 'Fátima',
    			'UF' => 'TO',
    		),
    		361 => 
    		array (
    			'codigoIbge' => 1707652,
    			'nome' => 'Figueirópolis',
    			'UF' => 'TO',
    		),
    		362 => 
    		array (
    			'codigoIbge' => 1707702,
    			'nome' => 'Filadélfia',
    			'UF' => 'TO',
    		),
    		363 => 
    		array (
    			'codigoIbge' => 1708205,
    			'nome' => 'Formoso do Araguaia',
    			'UF' => 'TO',
    		),
    		364 => 
    		array (
    			'codigoIbge' => 1708254,
    			'nome' => 'Tabocão',
    			'UF' => 'TO',
    		),
    		365 => 
    		array (
    			'codigoIbge' => 1708304,
    			'nome' => 'Goianorte',
    			'UF' => 'TO',
    		),
    		366 => 
    		array (
    			'codigoIbge' => 1709005,
    			'nome' => 'Goiatins',
    			'UF' => 'TO',
    		),
    		367 => 
    		array (
    			'codigoIbge' => 1709302,
    			'nome' => 'Guaraí',
    			'UF' => 'TO',
    		),
    		368 => 
    		array (
    			'codigoIbge' => 1709500,
    			'nome' => 'Gurupi',
    			'UF' => 'TO',
    		),
    		369 => 
    		array (
    			'codigoIbge' => 1709807,
    			'nome' => 'Ipueiras',
    			'UF' => 'TO',
    		),
    		370 => 
    		array (
    			'codigoIbge' => 1710508,
    			'nome' => 'Itacajá',
    			'UF' => 'TO',
    		),
    		371 => 
    		array (
    			'codigoIbge' => 1710706,
    			'nome' => 'Itaguatins',
    			'UF' => 'TO',
    		),
    		372 => 
    		array (
    			'codigoIbge' => 1710904,
    			'nome' => 'Itapiratins',
    			'UF' => 'TO',
    		),
    		373 => 
    		array (
    			'codigoIbge' => 1711100,
    			'nome' => 'Itaporã do Tocantins',
    			'UF' => 'TO',
    		),
    		374 => 
    		array (
    			'codigoIbge' => 1711506,
    			'nome' => 'Jaú do Tocantins',
    			'UF' => 'TO',
    		),
    		375 => 
    		array (
    			'codigoIbge' => 1711803,
    			'nome' => 'Juarina',
    			'UF' => 'TO',
    		),
    		376 => 
    		array (
    			'codigoIbge' => 1711902,
    			'nome' => 'Lagoa da Confusão',
    			'UF' => 'TO',
    		),
    		377 => 
    		array (
    			'codigoIbge' => 1711951,
    			'nome' => 'Lagoa do Tocantins',
    			'UF' => 'TO',
    		),
    		378 => 
    		array (
    			'codigoIbge' => 1712009,
    			'nome' => 'Lajeado',
    			'UF' => 'TO',
    		),
    		379 => 
    		array (
    			'codigoIbge' => 1712157,
    			'nome' => 'Lavandeira',
    			'UF' => 'TO',
    		),
    		380 => 
    		array (
    			'codigoIbge' => 1712405,
    			'nome' => 'Lizarda',
    			'UF' => 'TO',
    		),
    		381 => 
    		array (
    			'codigoIbge' => 1712454,
    			'nome' => 'Luzinópolis',
    			'UF' => 'TO',
    		),
    		382 => 
    		array (
    			'codigoIbge' => 1712504,
    			'nome' => 'Marianópolis do Tocantins',
    			'UF' => 'TO',
    		),
    		383 => 
    		array (
    			'codigoIbge' => 1712702,
    			'nome' => 'Mateiros',
    			'UF' => 'TO',
    		),
    		384 => 
    		array (
    			'codigoIbge' => 1712801,
    			'nome' => 'Maurilândia do Tocantins',
    			'UF' => 'TO',
    		),
    		385 => 
    		array (
    			'codigoIbge' => 1713205,
    			'nome' => 'Miracema do Tocantins',
    			'UF' => 'TO',
    		),
    		386 => 
    		array (
    			'codigoIbge' => 1713304,
    			'nome' => 'Miranorte',
    			'UF' => 'TO',
    		),
    		387 => 
    		array (
    			'codigoIbge' => 1713601,
    			'nome' => 'Monte do Carmo',
    			'UF' => 'TO',
    		),
    		388 => 
    		array (
    			'codigoIbge' => 1713700,
    			'nome' => 'Monte Santo do Tocantins',
    			'UF' => 'TO',
    		),
    		389 => 
    		array (
    			'codigoIbge' => 1713809,
    			'nome' => 'Palmeiras do Tocantins',
    			'UF' => 'TO',
    		),
    		390 => 
    		array (
    			'codigoIbge' => 1713957,
    			'nome' => 'Muricilândia',
    			'UF' => 'TO',
    		),
    		391 => 
    		array (
    			'codigoIbge' => 1714203,
    			'nome' => 'Natividade',
    			'UF' => 'TO',
    		),
    		392 => 
    		array (
    			'codigoIbge' => 1714302,
    			'nome' => 'Nazaré',
    			'UF' => 'TO',
    		),
    		393 => 
    		array (
    			'codigoIbge' => 1714880,
    			'nome' => 'Nova Olinda',
    			'UF' => 'TO',
    		),
    		394 => 
    		array (
    			'codigoIbge' => 1715002,
    			'nome' => 'Nova Rosalândia',
    			'UF' => 'TO',
    		),
    		395 => 
    		array (
    			'codigoIbge' => 1715101,
    			'nome' => 'Novo Acordo',
    			'UF' => 'TO',
    		),
    		396 => 
    		array (
    			'codigoIbge' => 1715150,
    			'nome' => 'Novo Alegre',
    			'UF' => 'TO',
    		),
    		397 => 
    		array (
    			'codigoIbge' => 1715259,
    			'nome' => 'Novo Jardim',
    			'UF' => 'TO',
    		),
    		398 => 
    		array (
    			'codigoIbge' => 1715507,
    			'nome' => 'Oliveira de Fátima',
    			'UF' => 'TO',
    		),
    		399 => 
    		array (
    			'codigoIbge' => 1715705,
    			'nome' => 'Palmeirante',
    			'UF' => 'TO',
    		),
    		400 => 
    		array (
    			'codigoIbge' => 1715754,
    			'nome' => 'Palmeirópolis',
    			'UF' => 'TO',
    		),
    		401 => 
    		array (
    			'codigoIbge' => 1716109,
    			'nome' => 'Paraíso do Tocantins',
    			'UF' => 'TO',
    		),
    		402 => 
    		array (
    			'codigoIbge' => 1716208,
    			'nome' => 'Paranã',
    			'UF' => 'TO',
    		),
    		403 => 
    		array (
    			'codigoIbge' => 1716307,
    			'nome' => 'Pau D\'Arco',
    			'UF' => 'TO',
    		),
    		404 => 
    		array (
    			'codigoIbge' => 1716505,
    			'nome' => 'Pedro Afonso',
    			'UF' => 'TO',
    		),
    		405 => 
    		array (
    			'codigoIbge' => 1716604,
    			'nome' => 'Peixe',
    			'UF' => 'TO',
    		),
    		406 => 
    		array (
    			'codigoIbge' => 1716653,
    			'nome' => 'Pequizeiro',
    			'UF' => 'TO',
    		),
    		407 => 
    		array (
    			'codigoIbge' => 1716703,
    			'nome' => 'Colméia',
    			'UF' => 'TO',
    		),
    		408 => 
    		array (
    			'codigoIbge' => 1717008,
    			'nome' => 'Pindorama do Tocantins',
    			'UF' => 'TO',
    		),
    		409 => 
    		array (
    			'codigoIbge' => 1717206,
    			'nome' => 'Piraquê',
    			'UF' => 'TO',
    		),
    		410 => 
    		array (
    			'codigoIbge' => 1717503,
    			'nome' => 'Pium',
    			'UF' => 'TO',
    		),
    		411 => 
    		array (
    			'codigoIbge' => 1717800,
    			'nome' => 'Ponte Alta do Bom Jesus',
    			'UF' => 'TO',
    		),
    		412 => 
    		array (
    			'codigoIbge' => 1717909,
    			'nome' => 'Ponte Alta do Tocantins',
    			'UF' => 'TO',
    		),
    		413 => 
    		array (
    			'codigoIbge' => 1718006,
    			'nome' => 'Porto Alegre do Tocantins',
    			'UF' => 'TO',
    		),
    		414 => 
    		array (
    			'codigoIbge' => 1718204,
    			'nome' => 'Porto Nacional',
    			'UF' => 'TO',
    		),
    		415 => 
    		array (
    			'codigoIbge' => 1718303,
    			'nome' => 'Praia Norte',
    			'UF' => 'TO',
    		),
    		416 => 
    		array (
    			'codigoIbge' => 1718402,
    			'nome' => 'Presidente Kennedy',
    			'UF' => 'TO',
    		),
    		417 => 
    		array (
    			'codigoIbge' => 1718451,
    			'nome' => 'Pugmil',
    			'UF' => 'TO',
    		),
    		418 => 
    		array (
    			'codigoIbge' => 1718501,
    			'nome' => 'Recursolândia',
    			'UF' => 'TO',
    		),
    		419 => 
    		array (
    			'codigoIbge' => 1718550,
    			'nome' => 'Riachinho',
    			'UF' => 'TO',
    		),
    		420 => 
    		array (
    			'codigoIbge' => 1718659,
    			'nome' => 'Rio da Conceição',
    			'UF' => 'TO',
    		),
    		421 => 
    		array (
    			'codigoIbge' => 1718709,
    			'nome' => 'Rio dos Bois',
    			'UF' => 'TO',
    		),
    		422 => 
    		array (
    			'codigoIbge' => 1718758,
    			'nome' => 'Rio Sono',
    			'UF' => 'TO',
    		),
    		423 => 
    		array (
    			'codigoIbge' => 1718808,
    			'nome' => 'Sampaio',
    			'UF' => 'TO',
    		),
    		424 => 
    		array (
    			'codigoIbge' => 1718840,
    			'nome' => 'Sandolândia',
    			'UF' => 'TO',
    		),
    		425 => 
    		array (
    			'codigoIbge' => 1718865,
    			'nome' => 'Santa Fé do Araguaia',
    			'UF' => 'TO',
    		),
    		426 => 
    		array (
    			'codigoIbge' => 1718881,
    			'nome' => 'Santa Maria do Tocantins',
    			'UF' => 'TO',
    		),
    		427 => 
    		array (
    			'codigoIbge' => 1718899,
    			'nome' => 'Santa Rita do Tocantins',
    			'UF' => 'TO',
    		),
    		428 => 
    		array (
    			'codigoIbge' => 1718907,
    			'nome' => 'Santa Rosa do Tocantins',
    			'UF' => 'TO',
    		),
    		429 => 
    		array (
    			'codigoIbge' => 1719004,
    			'nome' => 'Santa Tereza do Tocantins',
    			'UF' => 'TO',
    		),
    		430 => 
    		array (
    			'codigoIbge' => 1720002,
    			'nome' => 'Santa Terezinha do Tocantins',
    			'UF' => 'TO',
    		),
    		431 => 
    		array (
    			'codigoIbge' => 1720101,
    			'nome' => 'São Bento do Tocantins',
    			'UF' => 'TO',
    		),
    		432 => 
    		array (
    			'codigoIbge' => 1720150,
    			'nome' => 'São Félix do Tocantins',
    			'UF' => 'TO',
    		),
    		433 => 
    		array (
    			'codigoIbge' => 1720200,
    			'nome' => 'São Miguel do Tocantins',
    			'UF' => 'TO',
    		),
    		434 => 
    		array (
    			'codigoIbge' => 1720259,
    			'nome' => 'São Salvador do Tocantins',
    			'UF' => 'TO',
    		),
    		435 => 
    		array (
    			'codigoIbge' => 1720309,
    			'nome' => 'São Sebastião do Tocantins',
    			'UF' => 'TO',
    		),
    		436 => 
    		array (
    			'codigoIbge' => 1720499,
    			'nome' => 'São Valério',
    			'UF' => 'TO',
    		),
    		437 => 
    		array (
    			'codigoIbge' => 1720655,
    			'nome' => 'Silvanópolis',
    			'UF' => 'TO',
    		),
    		438 => 
    		array (
    			'codigoIbge' => 1720804,
    			'nome' => 'Sítio Novo do Tocantins',
    			'UF' => 'TO',
    		),
    		439 => 
    		array (
    			'codigoIbge' => 1720853,
    			'nome' => 'Sucupira',
    			'UF' => 'TO',
    		),
    		440 => 
    		array (
    			'codigoIbge' => 1720903,
    			'nome' => 'Taguatinga',
    			'UF' => 'TO',
    		),
    		441 => 
    		array (
    			'codigoIbge' => 1720937,
    			'nome' => 'Taipas do Tocantins',
    			'UF' => 'TO',
    		),
    		442 => 
    		array (
    			'codigoIbge' => 1720978,
    			'nome' => 'Talismã',
    			'UF' => 'TO',
    		),
    		443 => 
    		array (
    			'codigoIbge' => 1721000,
    			'nome' => 'Palmas',
    			'UF' => 'TO',
    		),
    		444 => 
    		array (
    			'codigoIbge' => 1721109,
    			'nome' => 'Tocantínia',
    			'UF' => 'TO',
    		),
    		445 => 
    		array (
    			'codigoIbge' => 1721208,
    			'nome' => 'Tocantinópolis',
    			'UF' => 'TO',
    		),
    		446 => 
    		array (
    			'codigoIbge' => 1721257,
    			'nome' => 'Tupirama',
    			'UF' => 'TO',
    		),
    		447 => 
    		array (
    			'codigoIbge' => 1721307,
    			'nome' => 'Tupiratins',
    			'UF' => 'TO',
    		),
    		448 => 
    		array (
    			'codigoIbge' => 1722081,
    			'nome' => 'Wanderlândia',
    			'UF' => 'TO',
    		),
    		449 => 
    		array (
    			'codigoIbge' => 1722107,
    			'nome' => 'Xambioá',
    			'UF' => 'TO',
    		),
    		450 => 
    		array (
    			'codigoIbge' => 2100055,
    			'nome' => 'Açailândia',
    			'UF' => 'MA',
    		),
    		451 => 
    		array (
    			'codigoIbge' => 2100105,
    			'nome' => 'Afonso Cunha',
    			'UF' => 'MA',
    		),
    		452 => 
    		array (
    			'codigoIbge' => 2100154,
    			'nome' => 'Água Doce do Maranhão',
    			'UF' => 'MA',
    		),
    		453 => 
    		array (
    			'codigoIbge' => 2100204,
    			'nome' => 'Alcântara',
    			'UF' => 'MA',
    		),
    		454 => 
    		array (
    			'codigoIbge' => 2100303,
    			'nome' => 'Aldeias Altas',
    			'UF' => 'MA',
    		),
    		455 => 
    		array (
    			'codigoIbge' => 2100402,
    			'nome' => 'Altamira do Maranhão',
    			'UF' => 'MA',
    		),
    		456 => 
    		array (
    			'codigoIbge' => 2100436,
    			'nome' => 'Alto Alegre do Maranhão',
    			'UF' => 'MA',
    		),
    		457 => 
    		array (
    			'codigoIbge' => 2100477,
    			'nome' => 'Alto Alegre do Pindaré',
    			'UF' => 'MA',
    		),
    		458 => 
    		array (
    			'codigoIbge' => 2100501,
    			'nome' => 'Alto Parnaíba',
    			'UF' => 'MA',
    		),
    		459 => 
    		array (
    			'codigoIbge' => 2100550,
    			'nome' => 'Amapá do Maranhão',
    			'UF' => 'MA',
    		),
    		460 => 
    		array (
    			'codigoIbge' => 2100600,
    			'nome' => 'Amarante do Maranhão',
    			'UF' => 'MA',
    		),
    		461 => 
    		array (
    			'codigoIbge' => 2100709,
    			'nome' => 'Anajatuba',
    			'UF' => 'MA',
    		),
    		462 => 
    		array (
    			'codigoIbge' => 2100808,
    			'nome' => 'Anapurus',
    			'UF' => 'MA',
    		),
    		463 => 
    		array (
    			'codigoIbge' => 2100832,
    			'nome' => 'Apicum-Açu',
    			'UF' => 'MA',
    		),
    		464 => 
    		array (
    			'codigoIbge' => 2100873,
    			'nome' => 'Araguanã',
    			'UF' => 'MA',
    		),
    		465 => 
    		array (
    			'codigoIbge' => 2100907,
    			'nome' => 'Araioses',
    			'UF' => 'MA',
    		),
    		466 => 
    		array (
    			'codigoIbge' => 2100956,
    			'nome' => 'Arame',
    			'UF' => 'MA',
    		),
    		467 => 
    		array (
    			'codigoIbge' => 2101004,
    			'nome' => 'Arari',
    			'UF' => 'MA',
    		),
    		468 => 
    		array (
    			'codigoIbge' => 2101103,
    			'nome' => 'Axixá',
    			'UF' => 'MA',
    		),
    		469 => 
    		array (
    			'codigoIbge' => 2101202,
    			'nome' => 'Bacabal',
    			'UF' => 'MA',
    		),
    		470 => 
    		array (
    			'codigoIbge' => 2101251,
    			'nome' => 'Bacabeira',
    			'UF' => 'MA',
    		),
    		471 => 
    		array (
    			'codigoIbge' => 2101301,
    			'nome' => 'Bacuri',
    			'UF' => 'MA',
    		),
    		472 => 
    		array (
    			'codigoIbge' => 2101350,
    			'nome' => 'Bacurituba',
    			'UF' => 'MA',
    		),
    		473 => 
    		array (
    			'codigoIbge' => 2101400,
    			'nome' => 'Balsas',
    			'UF' => 'MA',
    		),
    		474 => 
    		array (
    			'codigoIbge' => 2101509,
    			'nome' => 'Barão de Grajaú',
    			'UF' => 'MA',
    		),
    		475 => 
    		array (
    			'codigoIbge' => 2101608,
    			'nome' => 'Barra do Corda',
    			'UF' => 'MA',
    		),
    		476 => 
    		array (
    			'codigoIbge' => 2101707,
    			'nome' => 'Barreirinhas',
    			'UF' => 'MA',
    		),
    		477 => 
    		array (
    			'codigoIbge' => 2101731,
    			'nome' => 'Belágua',
    			'UF' => 'MA',
    		),
    		478 => 
    		array (
    			'codigoIbge' => 2101772,
    			'nome' => 'Bela Vista do Maranhão',
    			'UF' => 'MA',
    		),
    		479 => 
    		array (
    			'codigoIbge' => 2101806,
    			'nome' => 'Benedito Leite',
    			'UF' => 'MA',
    		),
    		480 => 
    		array (
    			'codigoIbge' => 2101905,
    			'nome' => 'Bequimão',
    			'UF' => 'MA',
    		),
    		481 => 
    		array (
    			'codigoIbge' => 2101939,
    			'nome' => 'Bernardo do Mearim',
    			'UF' => 'MA',
    		),
    		482 => 
    		array (
    			'codigoIbge' => 2101970,
    			'nome' => 'Boa Vista do Gurupi',
    			'UF' => 'MA',
    		),
    		483 => 
    		array (
    			'codigoIbge' => 2102002,
    			'nome' => 'Bom Jardim',
    			'UF' => 'MA',
    		),
    		484 => 
    		array (
    			'codigoIbge' => 2102036,
    			'nome' => 'Bom Jesus das Selvas',
    			'UF' => 'MA',
    		),
    		485 => 
    		array (
    			'codigoIbge' => 2102077,
    			'nome' => 'Bom Lugar',
    			'UF' => 'MA',
    		),
    		486 => 
    		array (
    			'codigoIbge' => 2102101,
    			'nome' => 'Brejo',
    			'UF' => 'MA',
    		),
    		487 => 
    		array (
    			'codigoIbge' => 2102150,
    			'nome' => 'Brejo de Areia',
    			'UF' => 'MA',
    		),
    		488 => 
    		array (
    			'codigoIbge' => 2102200,
    			'nome' => 'Buriti',
    			'UF' => 'MA',
    		),
    		489 => 
    		array (
    			'codigoIbge' => 2102309,
    			'nome' => 'Buriti Bravo',
    			'UF' => 'MA',
    		),
    		490 => 
    		array (
    			'codigoIbge' => 2102325,
    			'nome' => 'Buriticupu',
    			'UF' => 'MA',
    		),
    		491 => 
    		array (
    			'codigoIbge' => 2102358,
    			'nome' => 'Buritirana',
    			'UF' => 'MA',
    		),
    		492 => 
    		array (
    			'codigoIbge' => 2102374,
    			'nome' => 'Cachoeira Grande',
    			'UF' => 'MA',
    		),
    		493 => 
    		array (
    			'codigoIbge' => 2102408,
    			'nome' => 'Cajapió',
    			'UF' => 'MA',
    		),
    		494 => 
    		array (
    			'codigoIbge' => 2102507,
    			'nome' => 'Cajari',
    			'UF' => 'MA',
    		),
    		495 => 
    		array (
    			'codigoIbge' => 2102556,
    			'nome' => 'Campestre do Maranhão',
    			'UF' => 'MA',
    		),
    		496 => 
    		array (
    			'codigoIbge' => 2102606,
    			'nome' => 'Cândido Mendes',
    			'UF' => 'MA',
    		),
    		497 => 
    		array (
    			'codigoIbge' => 2102705,
    			'nome' => 'Cantanhede',
    			'UF' => 'MA',
    		),
    		498 => 
    		array (
    			'codigoIbge' => 2102754,
    			'nome' => 'Capinzal do Norte',
    			'UF' => 'MA',
    		),
    		499 => 
    		array (
    			'codigoIbge' => 2102804,
    			'nome' => 'Carolina',
    			'UF' => 'MA',
    		),
    		500 => 
    		array (
    			'codigoIbge' => 2102903,
    			'nome' => 'Carutapera',
    			'UF' => 'MA',
    		),
    		501 => 
    		array (
    			'codigoIbge' => 2103000,
    			'nome' => 'Caxias',
    			'UF' => 'MA',
    		),
    		502 => 
    		array (
    			'codigoIbge' => 2103109,
    			'nome' => 'Cedral',
    			'UF' => 'MA',
    		),
    		503 => 
    		array (
    			'codigoIbge' => 2103125,
    			'nome' => 'Central do Maranhão',
    			'UF' => 'MA',
    		),
    		504 => 
    		array (
    			'codigoIbge' => 2103158,
    			'nome' => 'Centro do Guilherme',
    			'UF' => 'MA',
    		),
    		505 => 
    		array (
    			'codigoIbge' => 2103174,
    			'nome' => 'Centro Novo do Maranhão',
    			'UF' => 'MA',
    		),
    		506 => 
    		array (
    			'codigoIbge' => 2103208,
    			'nome' => 'Chapadinha',
    			'UF' => 'MA',
    		),
    		507 => 
    		array (
    			'codigoIbge' => 2103257,
    			'nome' => 'Cidelândia',
    			'UF' => 'MA',
    		),
    		508 => 
    		array (
    			'codigoIbge' => 2103307,
    			'nome' => 'Codó',
    			'UF' => 'MA',
    		),
    		509 => 
    		array (
    			'codigoIbge' => 2103406,
    			'nome' => 'Coelho Neto',
    			'UF' => 'MA',
    		),
    		510 => 
    		array (
    			'codigoIbge' => 2103505,
    			'nome' => 'Colinas',
    			'UF' => 'MA',
    		),
    		511 => 
    		array (
    			'codigoIbge' => 2103554,
    			'nome' => 'Conceição do Lago-Açu',
    			'UF' => 'MA',
    		),
    		512 => 
    		array (
    			'codigoIbge' => 2103604,
    			'nome' => 'Coroatá',
    			'UF' => 'MA',
    		),
    		513 => 
    		array (
    			'codigoIbge' => 2103703,
    			'nome' => 'Cururupu',
    			'UF' => 'MA',
    		),
    		514 => 
    		array (
    			'codigoIbge' => 2103752,
    			'nome' => 'Davinópolis',
    			'UF' => 'MA',
    		),
    		515 => 
    		array (
    			'codigoIbge' => 2103802,
    			'nome' => 'Dom Pedro',
    			'UF' => 'MA',
    		),
    		516 => 
    		array (
    			'codigoIbge' => 2103901,
    			'nome' => 'Duque Bacelar',
    			'UF' => 'MA',
    		),
    		517 => 
    		array (
    			'codigoIbge' => 2104008,
    			'nome' => 'Esperantinópolis',
    			'UF' => 'MA',
    		),
    		518 => 
    		array (
    			'codigoIbge' => 2104057,
    			'nome' => 'Estreito',
    			'UF' => 'MA',
    		),
    		519 => 
    		array (
    			'codigoIbge' => 2104073,
    			'nome' => 'Feira Nova do Maranhão',
    			'UF' => 'MA',
    		),
    		520 => 
    		array (
    			'codigoIbge' => 2104081,
    			'nome' => 'Fernando Falcão',
    			'UF' => 'MA',
    		),
    		521 => 
    		array (
    			'codigoIbge' => 2104099,
    			'nome' => 'Formosa da Serra Negra',
    			'UF' => 'MA',
    		),
    		522 => 
    		array (
    			'codigoIbge' => 2104107,
    			'nome' => 'Fortaleza dos Nogueiras',
    			'UF' => 'MA',
    		),
    		523 => 
    		array (
    			'codigoIbge' => 2104206,
    			'nome' => 'Fortuna',
    			'UF' => 'MA',
    		),
    		524 => 
    		array (
    			'codigoIbge' => 2104305,
    			'nome' => 'Godofredo Viana',
    			'UF' => 'MA',
    		),
    		525 => 
    		array (
    			'codigoIbge' => 2104404,
    			'nome' => 'Gonçalves Dias',
    			'UF' => 'MA',
    		),
    		526 => 
    		array (
    			'codigoIbge' => 2104503,
    			'nome' => 'Governador Archer',
    			'UF' => 'MA',
    		),
    		527 => 
    		array (
    			'codigoIbge' => 2104552,
    			'nome' => 'Governador Edison Lobão',
    			'UF' => 'MA',
    		),
    		528 => 
    		array (
    			'codigoIbge' => 2104602,
    			'nome' => 'Governador Eugênio Barros',
    			'UF' => 'MA',
    		),
    		529 => 
    		array (
    			'codigoIbge' => 2104628,
    			'nome' => 'Governador Luiz Rocha',
    			'UF' => 'MA',
    		),
    		530 => 
    		array (
    			'codigoIbge' => 2104651,
    			'nome' => 'Governador Newton Bello',
    			'UF' => 'MA',
    		),
    		531 => 
    		array (
    			'codigoIbge' => 2104677,
    			'nome' => 'Governador Nunes Freire',
    			'UF' => 'MA',
    		),
    		532 => 
    		array (
    			'codigoIbge' => 2104701,
    			'nome' => 'Graça Aranha',
    			'UF' => 'MA',
    		),
    		533 => 
    		array (
    			'codigoIbge' => 2104800,
    			'nome' => 'Grajaú',
    			'UF' => 'MA',
    		),
    		534 => 
    		array (
    			'codigoIbge' => 2104909,
    			'nome' => 'Guimarães',
    			'UF' => 'MA',
    		),
    		535 => 
    		array (
    			'codigoIbge' => 2105005,
    			'nome' => 'Humberto de Campos',
    			'UF' => 'MA',
    		),
    		536 => 
    		array (
    			'codigoIbge' => 2105104,
    			'nome' => 'Icatu',
    			'UF' => 'MA',
    		),
    		537 => 
    		array (
    			'codigoIbge' => 2105153,
    			'nome' => 'Igarapé do Meio',
    			'UF' => 'MA',
    		),
    		538 => 
    		array (
    			'codigoIbge' => 2105203,
    			'nome' => 'Igarapé Grande',
    			'UF' => 'MA',
    		),
    		539 => 
    		array (
    			'codigoIbge' => 2105302,
    			'nome' => 'Imperatriz',
    			'UF' => 'MA',
    		),
    		540 => 
    		array (
    			'codigoIbge' => 2105351,
    			'nome' => 'Itaipava do Grajaú',
    			'UF' => 'MA',
    		),
    		541 => 
    		array (
    			'codigoIbge' => 2105401,
    			'nome' => 'Itapecuru Mirim',
    			'UF' => 'MA',
    		),
    		542 => 
    		array (
    			'codigoIbge' => 2105427,
    			'nome' => 'Itinga do Maranhão',
    			'UF' => 'MA',
    		),
    		543 => 
    		array (
    			'codigoIbge' => 2105450,
    			'nome' => 'Jatobá',
    			'UF' => 'MA',
    		),
    		544 => 
    		array (
    			'codigoIbge' => 2105476,
    			'nome' => 'Jenipapo dos Vieiras',
    			'UF' => 'MA',
    		),
    		545 => 
    		array (
    			'codigoIbge' => 2105500,
    			'nome' => 'João Lisboa',
    			'UF' => 'MA',
    		),
    		546 => 
    		array (
    			'codigoIbge' => 2105609,
    			'nome' => 'Joselândia',
    			'UF' => 'MA',
    		),
    		547 => 
    		array (
    			'codigoIbge' => 2105658,
    			'nome' => 'Junco do Maranhão',
    			'UF' => 'MA',
    		),
    		548 => 
    		array (
    			'codigoIbge' => 2105708,
    			'nome' => 'Lago da Pedra',
    			'UF' => 'MA',
    		),
    		549 => 
    		array (
    			'codigoIbge' => 2105807,
    			'nome' => 'Lago do Junco',
    			'UF' => 'MA',
    		),
    		550 => 
    		array (
    			'codigoIbge' => 2105906,
    			'nome' => 'Lago Verde',
    			'UF' => 'MA',
    		),
    		551 => 
    		array (
    			'codigoIbge' => 2105922,
    			'nome' => 'Lagoa do Mato',
    			'UF' => 'MA',
    		),
    		552 => 
    		array (
    			'codigoIbge' => 2105948,
    			'nome' => 'Lago dos Rodrigues',
    			'UF' => 'MA',
    		),
    		553 => 
    		array (
    			'codigoIbge' => 2105963,
    			'nome' => 'Lagoa Grande do Maranhão',
    			'UF' => 'MA',
    		),
    		554 => 
    		array (
    			'codigoIbge' => 2105989,
    			'nome' => 'Lajeado Novo',
    			'UF' => 'MA',
    		),
    		555 => 
    		array (
    			'codigoIbge' => 2106003,
    			'nome' => 'Lima Campos',
    			'UF' => 'MA',
    		),
    		556 => 
    		array (
    			'codigoIbge' => 2106102,
    			'nome' => 'Loreto',
    			'UF' => 'MA',
    		),
    		557 => 
    		array (
    			'codigoIbge' => 2106201,
    			'nome' => 'Luís Domingues',
    			'UF' => 'MA',
    		),
    		558 => 
    		array (
    			'codigoIbge' => 2106300,
    			'nome' => 'Magalhães de Almeida',
    			'UF' => 'MA',
    		),
    		559 => 
    		array (
    			'codigoIbge' => 2106326,
    			'nome' => 'Maracaçumé',
    			'UF' => 'MA',
    		),
    		560 => 
    		array (
    			'codigoIbge' => 2106359,
    			'nome' => 'Marajá do Sena',
    			'UF' => 'MA',
    		),
    		561 => 
    		array (
    			'codigoIbge' => 2106375,
    			'nome' => 'Maranhãozinho',
    			'UF' => 'MA',
    		),
    		562 => 
    		array (
    			'codigoIbge' => 2106409,
    			'nome' => 'Mata Roma',
    			'UF' => 'MA',
    		),
    		563 => 
    		array (
    			'codigoIbge' => 2106508,
    			'nome' => 'Matinha',
    			'UF' => 'MA',
    		),
    		564 => 
    		array (
    			'codigoIbge' => 2106607,
    			'nome' => 'Matões',
    			'UF' => 'MA',
    		),
    		565 => 
    		array (
    			'codigoIbge' => 2106631,
    			'nome' => 'Matões do Norte',
    			'UF' => 'MA',
    		),
    		566 => 
    		array (
    			'codigoIbge' => 2106672,
    			'nome' => 'Milagres do Maranhão',
    			'UF' => 'MA',
    		),
    		567 => 
    		array (
    			'codigoIbge' => 2106706,
    			'nome' => 'Mirador',
    			'UF' => 'MA',
    		),
    		568 => 
    		array (
    			'codigoIbge' => 2106755,
    			'nome' => 'Miranda do Norte',
    			'UF' => 'MA',
    		),
    		569 => 
    		array (
    			'codigoIbge' => 2106805,
    			'nome' => 'Mirinzal',
    			'UF' => 'MA',
    		),
    		570 => 
    		array (
    			'codigoIbge' => 2106904,
    			'nome' => 'Monção',
    			'UF' => 'MA',
    		),
    		571 => 
    		array (
    			'codigoIbge' => 2107001,
    			'nome' => 'Montes Altos',
    			'UF' => 'MA',
    		),
    		572 => 
    		array (
    			'codigoIbge' => 2107100,
    			'nome' => 'Morros',
    			'UF' => 'MA',
    		),
    		573 => 
    		array (
    			'codigoIbge' => 2107209,
    			'nome' => 'Nina Rodrigues',
    			'UF' => 'MA',
    		),
    		574 => 
    		array (
    			'codigoIbge' => 2107258,
    			'nome' => 'Nova Colinas',
    			'UF' => 'MA',
    		),
    		575 => 
    		array (
    			'codigoIbge' => 2107308,
    			'nome' => 'Nova Iorque',
    			'UF' => 'MA',
    		),
    		576 => 
    		array (
    			'codigoIbge' => 2107357,
    			'nome' => 'Nova Olinda do Maranhão',
    			'UF' => 'MA',
    		),
    		577 => 
    		array (
    			'codigoIbge' => 2107407,
    			'nome' => 'Olho d\'Água das Cunhãs',
    			'UF' => 'MA',
    		),
    		578 => 
    		array (
    			'codigoIbge' => 2107456,
    			'nome' => 'Olinda Nova do Maranhão',
    			'UF' => 'MA',
    		),
    		579 => 
    		array (
    			'codigoIbge' => 2107506,
    			'nome' => 'Paço do Lumiar',
    			'UF' => 'MA',
    		),
    		580 => 
    		array (
    			'codigoIbge' => 2107605,
    			'nome' => 'Palmeirândia',
    			'UF' => 'MA',
    		),
    		581 => 
    		array (
    			'codigoIbge' => 2107704,
    			'nome' => 'Paraibano',
    			'UF' => 'MA',
    		),
    		582 => 
    		array (
    			'codigoIbge' => 2107803,
    			'nome' => 'Parnarama',
    			'UF' => 'MA',
    		),
    		583 => 
    		array (
    			'codigoIbge' => 2107902,
    			'nome' => 'Passagem Franca',
    			'UF' => 'MA',
    		),
    		584 => 
    		array (
    			'codigoIbge' => 2108009,
    			'nome' => 'Pastos Bons',
    			'UF' => 'MA',
    		),
    		585 => 
    		array (
    			'codigoIbge' => 2108058,
    			'nome' => 'Paulino Neves',
    			'UF' => 'MA',
    		),
    		586 => 
    		array (
    			'codigoIbge' => 2108108,
    			'nome' => 'Paulo Ramos',
    			'UF' => 'MA',
    		),
    		587 => 
    		array (
    			'codigoIbge' => 2108207,
    			'nome' => 'Pedreiras',
    			'UF' => 'MA',
    		),
    		588 => 
    		array (
    			'codigoIbge' => 2108256,
    			'nome' => 'Pedro do Rosário',
    			'UF' => 'MA',
    		),
    		589 => 
    		array (
    			'codigoIbge' => 2108306,
    			'nome' => 'Penalva',
    			'UF' => 'MA',
    		),
    		590 => 
    		array (
    			'codigoIbge' => 2108405,
    			'nome' => 'Peri Mirim',
    			'UF' => 'MA',
    		),
    		591 => 
    		array (
    			'codigoIbge' => 2108454,
    			'nome' => 'Peritoró',
    			'UF' => 'MA',
    		),
    		592 => 
    		array (
    			'codigoIbge' => 2108504,
    			'nome' => 'Pindaré-Mirim',
    			'UF' => 'MA',
    		),
    		593 => 
    		array (
    			'codigoIbge' => 2108603,
    			'nome' => 'Pinheiro',
    			'UF' => 'MA',
    		),
    		594 => 
    		array (
    			'codigoIbge' => 2108702,
    			'nome' => 'Pio XII',
    			'UF' => 'MA',
    		),
    		595 => 
    		array (
    			'codigoIbge' => 2108801,
    			'nome' => 'Pirapemas',
    			'UF' => 'MA',
    		),
    		596 => 
    		array (
    			'codigoIbge' => 2108900,
    			'nome' => 'Poção de Pedras',
    			'UF' => 'MA',
    		),
    		597 => 
    		array (
    			'codigoIbge' => 2109007,
    			'nome' => 'Porto Franco',
    			'UF' => 'MA',
    		),
    		598 => 
    		array (
    			'codigoIbge' => 2109056,
    			'nome' => 'Porto Rico do Maranhão',
    			'UF' => 'MA',
    		),
    		599 => 
    		array (
    			'codigoIbge' => 2109106,
    			'nome' => 'Presidente Dutra',
    			'UF' => 'MA',
    		),
    		600 => 
    		array (
    			'codigoIbge' => 2109205,
    			'nome' => 'Presidente Juscelino',
    			'UF' => 'MA',
    		),
    		601 => 
    		array (
    			'codigoIbge' => 2109239,
    			'nome' => 'Presidente Médici',
    			'UF' => 'MA',
    		),
    		602 => 
    		array (
    			'codigoIbge' => 2109270,
    			'nome' => 'Presidente Sarney',
    			'UF' => 'MA',
    		),
    		603 => 
    		array (
    			'codigoIbge' => 2109304,
    			'nome' => 'Presidente Vargas',
    			'UF' => 'MA',
    		),
    		604 => 
    		array (
    			'codigoIbge' => 2109403,
    			'nome' => 'Primeira Cruz',
    			'UF' => 'MA',
    		),
    		605 => 
    		array (
    			'codigoIbge' => 2109452,
    			'nome' => 'Raposa',
    			'UF' => 'MA',
    		),
    		606 => 
    		array (
    			'codigoIbge' => 2109502,
    			'nome' => 'Riachão',
    			'UF' => 'MA',
    		),
    		607 => 
    		array (
    			'codigoIbge' => 2109551,
    			'nome' => 'Ribamar Fiquene',
    			'UF' => 'MA',
    		),
    		608 => 
    		array (
    			'codigoIbge' => 2109601,
    			'nome' => 'Rosário',
    			'UF' => 'MA',
    		),
    		609 => 
    		array (
    			'codigoIbge' => 2109700,
    			'nome' => 'Sambaíba',
    			'UF' => 'MA',
    		),
    		610 => 
    		array (
    			'codigoIbge' => 2109759,
    			'nome' => 'Santa Filomena do Maranhão',
    			'UF' => 'MA',
    		),
    		611 => 
    		array (
    			'codigoIbge' => 2109809,
    			'nome' => 'Santa Helena',
    			'UF' => 'MA',
    		),
    		612 => 
    		array (
    			'codigoIbge' => 2109908,
    			'nome' => 'Santa Inês',
    			'UF' => 'MA',
    		),
    		613 => 
    		array (
    			'codigoIbge' => 2110005,
    			'nome' => 'Santa Luzia',
    			'UF' => 'MA',
    		),
    		614 => 
    		array (
    			'codigoIbge' => 2110039,
    			'nome' => 'Santa Luzia do Paruá',
    			'UF' => 'MA',
    		),
    		615 => 
    		array (
    			'codigoIbge' => 2110104,
    			'nome' => 'Santa Quitéria do Maranhão',
    			'UF' => 'MA',
    		),
    		616 => 
    		array (
    			'codigoIbge' => 2110203,
    			'nome' => 'Santa Rita',
    			'UF' => 'MA',
    		),
    		617 => 
    		array (
    			'codigoIbge' => 2110237,
    			'nome' => 'Santana do Maranhão',
    			'UF' => 'MA',
    		),
    		618 => 
    		array (
    			'codigoIbge' => 2110278,
    			'nome' => 'Santo Amaro do Maranhão',
    			'UF' => 'MA',
    		),
    		619 => 
    		array (
    			'codigoIbge' => 2110302,
    			'nome' => 'Santo Antônio dos Lopes',
    			'UF' => 'MA',
    		),
    		620 => 
    		array (
    			'codigoIbge' => 2110401,
    			'nome' => 'São Benedito do Rio Preto',
    			'UF' => 'MA',
    		),
    		621 => 
    		array (
    			'codigoIbge' => 2110500,
    			'nome' => 'São Bento',
    			'UF' => 'MA',
    		),
    		622 => 
    		array (
    			'codigoIbge' => 2110609,
    			'nome' => 'São Bernardo',
    			'UF' => 'MA',
    		),
    		623 => 
    		array (
    			'codigoIbge' => 2110658,
    			'nome' => 'São Domingos do Azeitão',
    			'UF' => 'MA',
    		),
    		624 => 
    		array (
    			'codigoIbge' => 2110708,
    			'nome' => 'São Domingos do Maranhão',
    			'UF' => 'MA',
    		),
    		625 => 
    		array (
    			'codigoIbge' => 2110807,
    			'nome' => 'São Félix de Balsas',
    			'UF' => 'MA',
    		),
    		626 => 
    		array (
    			'codigoIbge' => 2110856,
    			'nome' => 'São Francisco do Brejão',
    			'UF' => 'MA',
    		),
    		627 => 
    		array (
    			'codigoIbge' => 2110906,
    			'nome' => 'São Francisco do Maranhão',
    			'UF' => 'MA',
    		),
    		628 => 
    		array (
    			'codigoIbge' => 2111003,
    			'nome' => 'São João Batista',
    			'UF' => 'MA',
    		),
    		629 => 
    		array (
    			'codigoIbge' => 2111029,
    			'nome' => 'São João do Carú',
    			'UF' => 'MA',
    		),
    		630 => 
    		array (
    			'codigoIbge' => 2111052,
    			'nome' => 'São João do Paraíso',
    			'UF' => 'MA',
    		),
    		631 => 
    		array (
    			'codigoIbge' => 2111078,
    			'nome' => 'São João do Soter',
    			'UF' => 'MA',
    		),
    		632 => 
    		array (
    			'codigoIbge' => 2111102,
    			'nome' => 'São João dos Patos',
    			'UF' => 'MA',
    		),
    		633 => 
    		array (
    			'codigoIbge' => 2111201,
    			'nome' => 'São José de Ribamar',
    			'UF' => 'MA',
    		),
    		634 => 
    		array (
    			'codigoIbge' => 2111250,
    			'nome' => 'São José dos Basílios',
    			'UF' => 'MA',
    		),
    		635 => 
    		array (
    			'codigoIbge' => 2111300,
    			'nome' => 'São Luís',
    			'UF' => 'MA',
    		),
    		636 => 
    		array (
    			'codigoIbge' => 2111409,
    			'nome' => 'São Luís Gonzaga do Maranhão',
    			'UF' => 'MA',
    		),
    		637 => 
    		array (
    			'codigoIbge' => 2111508,
    			'nome' => 'São Mateus do Maranhão',
    			'UF' => 'MA',
    		),
    		638 => 
    		array (
    			'codigoIbge' => 2111532,
    			'nome' => 'São Pedro da Água Branca',
    			'UF' => 'MA',
    		),
    		639 => 
    		array (
    			'codigoIbge' => 2111573,
    			'nome' => 'São Pedro dos Crentes',
    			'UF' => 'MA',
    		),
    		640 => 
    		array (
    			'codigoIbge' => 2111607,
    			'nome' => 'São Raimundo das Mangabeiras',
    			'UF' => 'MA',
    		),
    		641 => 
    		array (
    			'codigoIbge' => 2111631,
    			'nome' => 'São Raimundo do Doca Bezerra',
    			'UF' => 'MA',
    		),
    		642 => 
    		array (
    			'codigoIbge' => 2111672,
    			'nome' => 'São Roberto',
    			'UF' => 'MA',
    		),
    		643 => 
    		array (
    			'codigoIbge' => 2111706,
    			'nome' => 'São Vicente Ferrer',
    			'UF' => 'MA',
    		),
    		644 => 
    		array (
    			'codigoIbge' => 2111722,
    			'nome' => 'Satubinha',
    			'UF' => 'MA',
    		),
    		645 => 
    		array (
    			'codigoIbge' => 2111748,
    			'nome' => 'Senador Alexandre Costa',
    			'UF' => 'MA',
    		),
    		646 => 
    		array (
    			'codigoIbge' => 2111763,
    			'nome' => 'Senador La Rocque',
    			'UF' => 'MA',
    		),
    		647 => 
    		array (
    			'codigoIbge' => 2111789,
    			'nome' => 'Serrano do Maranhão',
    			'UF' => 'MA',
    		),
    		648 => 
    		array (
    			'codigoIbge' => 2111805,
    			'nome' => 'Sítio Novo',
    			'UF' => 'MA',
    		),
    		649 => 
    		array (
    			'codigoIbge' => 2111904,
    			'nome' => 'Sucupira do Norte',
    			'UF' => 'MA',
    		),
    		650 => 
    		array (
    			'codigoIbge' => 2111953,
    			'nome' => 'Sucupira do Riachão',
    			'UF' => 'MA',
    		),
    		651 => 
    		array (
    			'codigoIbge' => 2112001,
    			'nome' => 'Tasso Fragoso',
    			'UF' => 'MA',
    		),
    		652 => 
    		array (
    			'codigoIbge' => 2112100,
    			'nome' => 'Timbiras',
    			'UF' => 'MA',
    		),
    		653 => 
    		array (
    			'codigoIbge' => 2112209,
    			'nome' => 'Timon',
    			'UF' => 'MA',
    		),
    		654 => 
    		array (
    			'codigoIbge' => 2112233,
    			'nome' => 'Trizidela do Vale',
    			'UF' => 'MA',
    		),
    		655 => 
    		array (
    			'codigoIbge' => 2112274,
    			'nome' => 'Tufilândia',
    			'UF' => 'MA',
    		),
    		656 => 
    		array (
    			'codigoIbge' => 2112308,
    			'nome' => 'Tuntum',
    			'UF' => 'MA',
    		),
    		657 => 
    		array (
    			'codigoIbge' => 2112407,
    			'nome' => 'Turiaçu',
    			'UF' => 'MA',
    		),
    		658 => 
    		array (
    			'codigoIbge' => 2112456,
    			'nome' => 'Turilândia',
    			'UF' => 'MA',
    		),
    		659 => 
    		array (
    			'codigoIbge' => 2112506,
    			'nome' => 'Tutóia',
    			'UF' => 'MA',
    		),
    		660 => 
    		array (
    			'codigoIbge' => 2112605,
    			'nome' => 'Urbano Santos',
    			'UF' => 'MA',
    		),
    		661 => 
    		array (
    			'codigoIbge' => 2112704,
    			'nome' => 'Vargem Grande',
    			'UF' => 'MA',
    		),
    		662 => 
    		array (
    			'codigoIbge' => 2112803,
    			'nome' => 'Viana',
    			'UF' => 'MA',
    		),
    		663 => 
    		array (
    			'codigoIbge' => 2112852,
    			'nome' => 'Vila Nova dos Martírios',
    			'UF' => 'MA',
    		),
    		664 => 
    		array (
    			'codigoIbge' => 2112902,
    			'nome' => 'Vitória do Mearim',
    			'UF' => 'MA',
    		),
    		665 => 
    		array (
    			'codigoIbge' => 2113009,
    			'nome' => 'Vitorino Freire',
    			'UF' => 'MA',
    		),
    		666 => 
    		array (
    			'codigoIbge' => 2114007,
    			'nome' => 'Zé Doca',
    			'UF' => 'MA',
    		),
    		667 => 
    		array (
    			'codigoIbge' => 2200053,
    			'nome' => 'Acauã',
    			'UF' => 'PI',
    		),
    		668 => 
    		array (
    			'codigoIbge' => 2200103,
    			'nome' => 'Agricolândia',
    			'UF' => 'PI',
    		),
    		669 => 
    		array (
    			'codigoIbge' => 2200202,
    			'nome' => 'Água Branca',
    			'UF' => 'PI',
    		),
    		670 => 
    		array (
    			'codigoIbge' => 2200251,
    			'nome' => 'Alagoinha do Piauí',
    			'UF' => 'PI',
    		),
    		671 => 
    		array (
    			'codigoIbge' => 2200277,
    			'nome' => 'Alegrete do Piauí',
    			'UF' => 'PI',
    		),
    		672 => 
    		array (
    			'codigoIbge' => 2200301,
    			'nome' => 'Alto Longá',
    			'UF' => 'PI',
    		),
    		673 => 
    		array (
    			'codigoIbge' => 2200400,
    			'nome' => 'Altos',
    			'UF' => 'PI',
    		),
    		674 => 
    		array (
    			'codigoIbge' => 2200459,
    			'nome' => 'Alvorada do Gurguéia',
    			'UF' => 'PI',
    		),
    		675 => 
    		array (
    			'codigoIbge' => 2200509,
    			'nome' => 'Amarante',
    			'UF' => 'PI',
    		),
    		676 => 
    		array (
    			'codigoIbge' => 2200608,
    			'nome' => 'Angical do Piauí',
    			'UF' => 'PI',
    		),
    		677 => 
    		array (
    			'codigoIbge' => 2200707,
    			'nome' => 'Anísio de Abreu',
    			'UF' => 'PI',
    		),
    		678 => 
    		array (
    			'codigoIbge' => 2200806,
    			'nome' => 'Antônio Almeida',
    			'UF' => 'PI',
    		),
    		679 => 
    		array (
    			'codigoIbge' => 2200905,
    			'nome' => 'Aroazes',
    			'UF' => 'PI',
    		),
    		680 => 
    		array (
    			'codigoIbge' => 2200954,
    			'nome' => 'Aroeiras do Itaim',
    			'UF' => 'PI',
    		),
    		681 => 
    		array (
    			'codigoIbge' => 2201002,
    			'nome' => 'Arraial',
    			'UF' => 'PI',
    		),
    		682 => 
    		array (
    			'codigoIbge' => 2201051,
    			'nome' => 'Assunção do Piauí',
    			'UF' => 'PI',
    		),
    		683 => 
    		array (
    			'codigoIbge' => 2201101,
    			'nome' => 'Avelino Lopes',
    			'UF' => 'PI',
    		),
    		684 => 
    		array (
    			'codigoIbge' => 2201150,
    			'nome' => 'Baixa Grande do Ribeiro',
    			'UF' => 'PI',
    		),
    		685 => 
    		array (
    			'codigoIbge' => 2201176,
    			'nome' => 'Barra D\'Alcântara',
    			'UF' => 'PI',
    		),
    		686 => 
    		array (
    			'codigoIbge' => 2201200,
    			'nome' => 'Barras',
    			'UF' => 'PI',
    		),
    		687 => 
    		array (
    			'codigoIbge' => 2201309,
    			'nome' => 'Barreiras do Piauí',
    			'UF' => 'PI',
    		),
    		688 => 
    		array (
    			'codigoIbge' => 2201408,
    			'nome' => 'Barro Duro',
    			'UF' => 'PI',
    		),
    		689 => 
    		array (
    			'codigoIbge' => 2201507,
    			'nome' => 'Batalha',
    			'UF' => 'PI',
    		),
    		690 => 
    		array (
    			'codigoIbge' => 2201556,
    			'nome' => 'Bela Vista do Piauí',
    			'UF' => 'PI',
    		),
    		691 => 
    		array (
    			'codigoIbge' => 2201572,
    			'nome' => 'Belém do Piauí',
    			'UF' => 'PI',
    		),
    		692 => 
    		array (
    			'codigoIbge' => 2201606,
    			'nome' => 'Beneditinos',
    			'UF' => 'PI',
    		),
    		693 => 
    		array (
    			'codigoIbge' => 2201705,
    			'nome' => 'Bertolínia',
    			'UF' => 'PI',
    		),
    		694 => 
    		array (
    			'codigoIbge' => 2201739,
    			'nome' => 'Betânia do Piauí',
    			'UF' => 'PI',
    		),
    		695 => 
    		array (
    			'codigoIbge' => 2201770,
    			'nome' => 'Boa Hora',
    			'UF' => 'PI',
    		),
    		696 => 
    		array (
    			'codigoIbge' => 2201804,
    			'nome' => 'Bocaina',
    			'UF' => 'PI',
    		),
    		697 => 
    		array (
    			'codigoIbge' => 2201903,
    			'nome' => 'Bom Jesus',
    			'UF' => 'PI',
    		),
    		698 => 
    		array (
    			'codigoIbge' => 2201919,
    			'nome' => 'Bom Princípio do Piauí',
    			'UF' => 'PI',
    		),
    		699 => 
    		array (
    			'codigoIbge' => 2201929,
    			'nome' => 'Bonfim do Piauí',
    			'UF' => 'PI',
    		),
    		700 => 
    		array (
    			'codigoIbge' => 2201945,
    			'nome' => 'Boqueirão do Piauí',
    			'UF' => 'PI',
    		),
    		701 => 
    		array (
    			'codigoIbge' => 2201960,
    			'nome' => 'Brasileira',
    			'UF' => 'PI',
    		),
    		702 => 
    		array (
    			'codigoIbge' => 2201988,
    			'nome' => 'Brejo do Piauí',
    			'UF' => 'PI',
    		),
    		703 => 
    		array (
    			'codigoIbge' => 2202000,
    			'nome' => 'Buriti dos Lopes',
    			'UF' => 'PI',
    		),
    		704 => 
    		array (
    			'codigoIbge' => 2202026,
    			'nome' => 'Buriti dos Montes',
    			'UF' => 'PI',
    		),
    		705 => 
    		array (
    			'codigoIbge' => 2202059,
    			'nome' => 'Cabeceiras do Piauí',
    			'UF' => 'PI',
    		),
    		706 => 
    		array (
    			'codigoIbge' => 2202075,
    			'nome' => 'Cajazeiras do Piauí',
    			'UF' => 'PI',
    		),
    		707 => 
    		array (
    			'codigoIbge' => 2202083,
    			'nome' => 'Cajueiro da Praia',
    			'UF' => 'PI',
    		),
    		708 => 
    		array (
    			'codigoIbge' => 2202091,
    			'nome' => 'Caldeirão Grande do Piauí',
    			'UF' => 'PI',
    		),
    		709 => 
    		array (
    			'codigoIbge' => 2202109,
    			'nome' => 'Campinas do Piauí',
    			'UF' => 'PI',
    		),
    		710 => 
    		array (
    			'codigoIbge' => 2202117,
    			'nome' => 'Campo Alegre do Fidalgo',
    			'UF' => 'PI',
    		),
    		711 => 
    		array (
    			'codigoIbge' => 2202133,
    			'nome' => 'Campo Grande do Piauí',
    			'UF' => 'PI',
    		),
    		712 => 
    		array (
    			'codigoIbge' => 2202174,
    			'nome' => 'Campo Largo do Piauí',
    			'UF' => 'PI',
    		),
    		713 => 
    		array (
    			'codigoIbge' => 2202208,
    			'nome' => 'Campo Maior',
    			'UF' => 'PI',
    		),
    		714 => 
    		array (
    			'codigoIbge' => 2202251,
    			'nome' => 'Canavieira',
    			'UF' => 'PI',
    		),
    		715 => 
    		array (
    			'codigoIbge' => 2202307,
    			'nome' => 'Canto do Buriti',
    			'UF' => 'PI',
    		),
    		716 => 
    		array (
    			'codigoIbge' => 2202406,
    			'nome' => 'Capitão de Campos',
    			'UF' => 'PI',
    		),
    		717 => 
    		array (
    			'codigoIbge' => 2202455,
    			'nome' => 'Capitão Gervásio Oliveira',
    			'UF' => 'PI',
    		),
    		718 => 
    		array (
    			'codigoIbge' => 2202505,
    			'nome' => 'Caracol',
    			'UF' => 'PI',
    		),
    		719 => 
    		array (
    			'codigoIbge' => 2202539,
    			'nome' => 'Caraúbas do Piauí',
    			'UF' => 'PI',
    		),
    		720 => 
    		array (
    			'codigoIbge' => 2202554,
    			'nome' => 'Caridade do Piauí',
    			'UF' => 'PI',
    		),
    		721 => 
    		array (
    			'codigoIbge' => 2202604,
    			'nome' => 'Castelo do Piauí',
    			'UF' => 'PI',
    		),
    		722 => 
    		array (
    			'codigoIbge' => 2202653,
    			'nome' => 'Caxingó',
    			'UF' => 'PI',
    		),
    		723 => 
    		array (
    			'codigoIbge' => 2202703,
    			'nome' => 'Cocal',
    			'UF' => 'PI',
    		),
    		724 => 
    		array (
    			'codigoIbge' => 2202711,
    			'nome' => 'Cocal de Telha',
    			'UF' => 'PI',
    		),
    		725 => 
    		array (
    			'codigoIbge' => 2202729,
    			'nome' => 'Cocal dos Alves',
    			'UF' => 'PI',
    		),
    		726 => 
    		array (
    			'codigoIbge' => 2202737,
    			'nome' => 'Coivaras',
    			'UF' => 'PI',
    		),
    		727 => 
    		array (
    			'codigoIbge' => 2202752,
    			'nome' => 'Colônia do Gurguéia',
    			'UF' => 'PI',
    		),
    		728 => 
    		array (
    			'codigoIbge' => 2202778,
    			'nome' => 'Colônia do Piauí',
    			'UF' => 'PI',
    		),
    		729 => 
    		array (
    			'codigoIbge' => 2202802,
    			'nome' => 'Conceição do Canindé',
    			'UF' => 'PI',
    		),
    		730 => 
    		array (
    			'codigoIbge' => 2202851,
    			'nome' => 'Coronel José Dias',
    			'UF' => 'PI',
    		),
    		731 => 
    		array (
    			'codigoIbge' => 2202901,
    			'nome' => 'Corrente',
    			'UF' => 'PI',
    		),
    		732 => 
    		array (
    			'codigoIbge' => 2203008,
    			'nome' => 'Cristalândia do Piauí',
    			'UF' => 'PI',
    		),
    		733 => 
    		array (
    			'codigoIbge' => 2203107,
    			'nome' => 'Cristino Castro',
    			'UF' => 'PI',
    		),
    		734 => 
    		array (
    			'codigoIbge' => 2203206,
    			'nome' => 'Curimatá',
    			'UF' => 'PI',
    		),
    		735 => 
    		array (
    			'codigoIbge' => 2203230,
    			'nome' => 'Currais',
    			'UF' => 'PI',
    		),
    		736 => 
    		array (
    			'codigoIbge' => 2203255,
    			'nome' => 'Curralinhos',
    			'UF' => 'PI',
    		),
    		737 => 
    		array (
    			'codigoIbge' => 2203271,
    			'nome' => 'Curral Novo do Piauí',
    			'UF' => 'PI',
    		),
    		738 => 
    		array (
    			'codigoIbge' => 2203305,
    			'nome' => 'Demerval Lobão',
    			'UF' => 'PI',
    		),
    		739 => 
    		array (
    			'codigoIbge' => 2203354,
    			'nome' => 'Dirceu Arcoverde',
    			'UF' => 'PI',
    		),
    		740 => 
    		array (
    			'codigoIbge' => 2203404,
    			'nome' => 'Dom Expedito Lopes',
    			'UF' => 'PI',
    		),
    		741 => 
    		array (
    			'codigoIbge' => 2203420,
    			'nome' => 'Domingos Mourão',
    			'UF' => 'PI',
    		),
    		742 => 
    		array (
    			'codigoIbge' => 2203453,
    			'nome' => 'Dom Inocêncio',
    			'UF' => 'PI',
    		),
    		743 => 
    		array (
    			'codigoIbge' => 2203503,
    			'nome' => 'Elesbão Veloso',
    			'UF' => 'PI',
    		),
    		744 => 
    		array (
    			'codigoIbge' => 2203602,
    			'nome' => 'Eliseu Martins',
    			'UF' => 'PI',
    		),
    		745 => 
    		array (
    			'codigoIbge' => 2203701,
    			'nome' => 'Esperantina',
    			'UF' => 'PI',
    		),
    		746 => 
    		array (
    			'codigoIbge' => 2203750,
    			'nome' => 'Fartura do Piauí',
    			'UF' => 'PI',
    		),
    		747 => 
    		array (
    			'codigoIbge' => 2203800,
    			'nome' => 'Flores do Piauí',
    			'UF' => 'PI',
    		),
    		748 => 
    		array (
    			'codigoIbge' => 2203859,
    			'nome' => 'Floresta do Piauí',
    			'UF' => 'PI',
    		),
    		749 => 
    		array (
    			'codigoIbge' => 2203909,
    			'nome' => 'Floriano',
    			'UF' => 'PI',
    		),
    		750 => 
    		array (
    			'codigoIbge' => 2204006,
    			'nome' => 'Francinópolis',
    			'UF' => 'PI',
    		),
    		751 => 
    		array (
    			'codigoIbge' => 2204105,
    			'nome' => 'Francisco Ayres',
    			'UF' => 'PI',
    		),
    		752 => 
    		array (
    			'codigoIbge' => 2204154,
    			'nome' => 'Francisco Macedo',
    			'UF' => 'PI',
    		),
    		753 => 
    		array (
    			'codigoIbge' => 2204204,
    			'nome' => 'Francisco Santos',
    			'UF' => 'PI',
    		),
    		754 => 
    		array (
    			'codigoIbge' => 2204303,
    			'nome' => 'Fronteiras',
    			'UF' => 'PI',
    		),
    		755 => 
    		array (
    			'codigoIbge' => 2204352,
    			'nome' => 'Geminiano',
    			'UF' => 'PI',
    		),
    		756 => 
    		array (
    			'codigoIbge' => 2204402,
    			'nome' => 'Gilbués',
    			'UF' => 'PI',
    		),
    		757 => 
    		array (
    			'codigoIbge' => 2204501,
    			'nome' => 'Guadalupe',
    			'UF' => 'PI',
    		),
    		758 => 
    		array (
    			'codigoIbge' => 2204550,
    			'nome' => 'Guaribas',
    			'UF' => 'PI',
    		),
    		759 => 
    		array (
    			'codigoIbge' => 2204600,
    			'nome' => 'Hugo Napoleão',
    			'UF' => 'PI',
    		),
    		760 => 
    		array (
    			'codigoIbge' => 2204659,
    			'nome' => 'Ilha Grande',
    			'UF' => 'PI',
    		),
    		761 => 
    		array (
    			'codigoIbge' => 2204709,
    			'nome' => 'Inhuma',
    			'UF' => 'PI',
    		),
    		762 => 
    		array (
    			'codigoIbge' => 2204808,
    			'nome' => 'Ipiranga do Piauí',
    			'UF' => 'PI',
    		),
    		763 => 
    		array (
    			'codigoIbge' => 2204907,
    			'nome' => 'Isaías Coelho',
    			'UF' => 'PI',
    		),
    		764 => 
    		array (
    			'codigoIbge' => 2205003,
    			'nome' => 'Itainópolis',
    			'UF' => 'PI',
    		),
    		765 => 
    		array (
    			'codigoIbge' => 2205102,
    			'nome' => 'Itaueira',
    			'UF' => 'PI',
    		),
    		766 => 
    		array (
    			'codigoIbge' => 2205151,
    			'nome' => 'Jacobina do Piauí',
    			'UF' => 'PI',
    		),
    		767 => 
    		array (
    			'codigoIbge' => 2205201,
    			'nome' => 'Jaicós',
    			'UF' => 'PI',
    		),
    		768 => 
    		array (
    			'codigoIbge' => 2205250,
    			'nome' => 'Jardim do Mulato',
    			'UF' => 'PI',
    		),
    		769 => 
    		array (
    			'codigoIbge' => 2205276,
    			'nome' => 'Jatobá do Piauí',
    			'UF' => 'PI',
    		),
    		770 => 
    		array (
    			'codigoIbge' => 2205300,
    			'nome' => 'Jerumenha',
    			'UF' => 'PI',
    		),
    		771 => 
    		array (
    			'codigoIbge' => 2205359,
    			'nome' => 'João Costa',
    			'UF' => 'PI',
    		),
    		772 => 
    		array (
    			'codigoIbge' => 2205409,
    			'nome' => 'Joaquim Pires',
    			'UF' => 'PI',
    		),
    		773 => 
    		array (
    			'codigoIbge' => 2205458,
    			'nome' => 'Joca Marques',
    			'UF' => 'PI',
    		),
    		774 => 
    		array (
    			'codigoIbge' => 2205508,
    			'nome' => 'José de Freitas',
    			'UF' => 'PI',
    		),
    		775 => 
    		array (
    			'codigoIbge' => 2205516,
    			'nome' => 'Juazeiro do Piauí',
    			'UF' => 'PI',
    		),
    		776 => 
    		array (
    			'codigoIbge' => 2205524,
    			'nome' => 'Júlio Borges',
    			'UF' => 'PI',
    		),
    		777 => 
    		array (
    			'codigoIbge' => 2205532,
    			'nome' => 'Jurema',
    			'UF' => 'PI',
    		),
    		778 => 
    		array (
    			'codigoIbge' => 2205540,
    			'nome' => 'Lagoinha do Piauí',
    			'UF' => 'PI',
    		),
    		779 => 
    		array (
    			'codigoIbge' => 2205557,
    			'nome' => 'Lagoa Alegre',
    			'UF' => 'PI',
    		),
    		780 => 
    		array (
    			'codigoIbge' => 2205565,
    			'nome' => 'Lagoa do Barro do Piauí',
    			'UF' => 'PI',
    		),
    		781 => 
    		array (
    			'codigoIbge' => 2205573,
    			'nome' => 'Lagoa de São Francisco',
    			'UF' => 'PI',
    		),
    		782 => 
    		array (
    			'codigoIbge' => 2205581,
    			'nome' => 'Lagoa do Piauí',
    			'UF' => 'PI',
    		),
    		783 => 
    		array (
    			'codigoIbge' => 2205599,
    			'nome' => 'Lagoa do Sítio',
    			'UF' => 'PI',
    		),
    		784 => 
    		array (
    			'codigoIbge' => 2205607,
    			'nome' => 'Landri Sales',
    			'UF' => 'PI',
    		),
    		785 => 
    		array (
    			'codigoIbge' => 2205706,
    			'nome' => 'Luís Correia',
    			'UF' => 'PI',
    		),
    		786 => 
    		array (
    			'codigoIbge' => 2205805,
    			'nome' => 'Luzilândia',
    			'UF' => 'PI',
    		),
    		787 => 
    		array (
    			'codigoIbge' => 2205854,
    			'nome' => 'Madeiro',
    			'UF' => 'PI',
    		),
    		788 => 
    		array (
    			'codigoIbge' => 2205904,
    			'nome' => 'Manoel Emídio',
    			'UF' => 'PI',
    		),
    		789 => 
    		array (
    			'codigoIbge' => 2205953,
    			'nome' => 'Marcolândia',
    			'UF' => 'PI',
    		),
    		790 => 
    		array (
    			'codigoIbge' => 2206001,
    			'nome' => 'Marcos Parente',
    			'UF' => 'PI',
    		),
    		791 => 
    		array (
    			'codigoIbge' => 2206050,
    			'nome' => 'Massapê do Piauí',
    			'UF' => 'PI',
    		),
    		792 => 
    		array (
    			'codigoIbge' => 2206100,
    			'nome' => 'Matias Olímpio',
    			'UF' => 'PI',
    		),
    		793 => 
    		array (
    			'codigoIbge' => 2206209,
    			'nome' => 'Miguel Alves',
    			'UF' => 'PI',
    		),
    		794 => 
    		array (
    			'codigoIbge' => 2206308,
    			'nome' => 'Miguel Leão',
    			'UF' => 'PI',
    		),
    		795 => 
    		array (
    			'codigoIbge' => 2206357,
    			'nome' => 'Milton Brandão',
    			'UF' => 'PI',
    		),
    		796 => 
    		array (
    			'codigoIbge' => 2206407,
    			'nome' => 'Monsenhor Gil',
    			'UF' => 'PI',
    		),
    		797 => 
    		array (
    			'codigoIbge' => 2206506,
    			'nome' => 'Monsenhor Hipólito',
    			'UF' => 'PI',
    		),
    		798 => 
    		array (
    			'codigoIbge' => 2206605,
    			'nome' => 'Monte Alegre do Piauí',
    			'UF' => 'PI',
    		),
    		799 => 
    		array (
    			'codigoIbge' => 2206654,
    			'nome' => 'Morro Cabeça no Tempo',
    			'UF' => 'PI',
    		),
    		800 => 
    		array (
    			'codigoIbge' => 2206670,
    			'nome' => 'Morro do Chapéu do Piauí',
    			'UF' => 'PI',
    		),
    		801 => 
    		array (
    			'codigoIbge' => 2206696,
    			'nome' => 'Murici dos Portelas',
    			'UF' => 'PI',
    		),
    		802 => 
    		array (
    			'codigoIbge' => 2206704,
    			'nome' => 'Nazaré do Piauí',
    			'UF' => 'PI',
    		),
    		803 => 
    		array (
    			'codigoIbge' => 2206720,
    			'nome' => 'Nazária',
    			'UF' => 'PI',
    		),
    		804 => 
    		array (
    			'codigoIbge' => 2206753,
    			'nome' => 'Nossa Senhora de Nazaré',
    			'UF' => 'PI',
    		),
    		805 => 
    		array (
    			'codigoIbge' => 2206803,
    			'nome' => 'Nossa Senhora dos Remédios',
    			'UF' => 'PI',
    		),
    		806 => 
    		array (
    			'codigoIbge' => 2206902,
    			'nome' => 'Novo Oriente do Piauí',
    			'UF' => 'PI',
    		),
    		807 => 
    		array (
    			'codigoIbge' => 2206951,
    			'nome' => 'Novo Santo Antônio',
    			'UF' => 'PI',
    		),
    		808 => 
    		array (
    			'codigoIbge' => 2207009,
    			'nome' => 'Oeiras',
    			'UF' => 'PI',
    		),
    		809 => 
    		array (
    			'codigoIbge' => 2207108,
    			'nome' => 'Olho D\'Água do Piauí',
    			'UF' => 'PI',
    		),
    		810 => 
    		array (
    			'codigoIbge' => 2207207,
    			'nome' => 'Padre Marcos',
    			'UF' => 'PI',
    		),
    		811 => 
    		array (
    			'codigoIbge' => 2207306,
    			'nome' => 'Paes Landim',
    			'UF' => 'PI',
    		),
    		812 => 
    		array (
    			'codigoIbge' => 2207355,
    			'nome' => 'Pajeú do Piauí',
    			'UF' => 'PI',
    		),
    		813 => 
    		array (
    			'codigoIbge' => 2207405,
    			'nome' => 'Palmeira do Piauí',
    			'UF' => 'PI',
    		),
    		814 => 
    		array (
    			'codigoIbge' => 2207504,
    			'nome' => 'Palmeirais',
    			'UF' => 'PI',
    		),
    		815 => 
    		array (
    			'codigoIbge' => 2207553,
    			'nome' => 'Paquetá',
    			'UF' => 'PI',
    		),
    		816 => 
    		array (
    			'codigoIbge' => 2207603,
    			'nome' => 'Parnaguá',
    			'UF' => 'PI',
    		),
    		817 => 
    		array (
    			'codigoIbge' => 2207702,
    			'nome' => 'Parnaíba',
    			'UF' => 'PI',
    		),
    		818 => 
    		array (
    			'codigoIbge' => 2207751,
    			'nome' => 'Passagem Franca do Piauí',
    			'UF' => 'PI',
    		),
    		819 => 
    		array (
    			'codigoIbge' => 2207777,
    			'nome' => 'Patos do Piauí',
    			'UF' => 'PI',
    		),
    		820 => 
    		array (
    			'codigoIbge' => 2207793,
    			'nome' => 'Pau D\'Arco do Piauí',
    			'UF' => 'PI',
    		),
    		821 => 
    		array (
    			'codigoIbge' => 2207801,
    			'nome' => 'Paulistana',
    			'UF' => 'PI',
    		),
    		822 => 
    		array (
    			'codigoIbge' => 2207850,
    			'nome' => 'Pavussu',
    			'UF' => 'PI',
    		),
    		823 => 
    		array (
    			'codigoIbge' => 2207900,
    			'nome' => 'Pedro II',
    			'UF' => 'PI',
    		),
    		824 => 
    		array (
    			'codigoIbge' => 2207934,
    			'nome' => 'Pedro Laurentino',
    			'UF' => 'PI',
    		),
    		825 => 
    		array (
    			'codigoIbge' => 2207959,
    			'nome' => 'Nova Santa Rita',
    			'UF' => 'PI',
    		),
    		826 => 
    		array (
    			'codigoIbge' => 2208007,
    			'nome' => 'Picos',
    			'UF' => 'PI',
    		),
    		827 => 
    		array (
    			'codigoIbge' => 2208106,
    			'nome' => 'Pimenteiras',
    			'UF' => 'PI',
    		),
    		828 => 
    		array (
    			'codigoIbge' => 2208205,
    			'nome' => 'Pio IX',
    			'UF' => 'PI',
    		),
    		829 => 
    		array (
    			'codigoIbge' => 2208304,
    			'nome' => 'Piracuruca',
    			'UF' => 'PI',
    		),
    		830 => 
    		array (
    			'codigoIbge' => 2208403,
    			'nome' => 'Piripiri',
    			'UF' => 'PI',
    		),
    		831 => 
    		array (
    			'codigoIbge' => 2208502,
    			'nome' => 'Porto',
    			'UF' => 'PI',
    		),
    		832 => 
    		array (
    			'codigoIbge' => 2208551,
    			'nome' => 'Porto Alegre do Piauí',
    			'UF' => 'PI',
    		),
    		833 => 
    		array (
    			'codigoIbge' => 2208601,
    			'nome' => 'Prata do Piauí',
    			'UF' => 'PI',
    		),
    		834 => 
    		array (
    			'codigoIbge' => 2208650,
    			'nome' => 'Queimada Nova',
    			'UF' => 'PI',
    		),
    		835 => 
    		array (
    			'codigoIbge' => 2208700,
    			'nome' => 'Redenção do Gurguéia',
    			'UF' => 'PI',
    		),
    		836 => 
    		array (
    			'codigoIbge' => 2208809,
    			'nome' => 'Regeneração',
    			'UF' => 'PI',
    		),
    		837 => 
    		array (
    			'codigoIbge' => 2208858,
    			'nome' => 'Riacho Frio',
    			'UF' => 'PI',
    		),
    		838 => 
    		array (
    			'codigoIbge' => 2208874,
    			'nome' => 'Ribeira do Piauí',
    			'UF' => 'PI',
    		),
    		839 => 
    		array (
    			'codigoIbge' => 2208908,
    			'nome' => 'Ribeiro Gonçalves',
    			'UF' => 'PI',
    		),
    		840 => 
    		array (
    			'codigoIbge' => 2209005,
    			'nome' => 'Rio Grande do Piauí',
    			'UF' => 'PI',
    		),
    		841 => 
    		array (
    			'codigoIbge' => 2209104,
    			'nome' => 'Santa Cruz do Piauí',
    			'UF' => 'PI',
    		),
    		842 => 
    		array (
    			'codigoIbge' => 2209153,
    			'nome' => 'Santa Cruz dos Milagres',
    			'UF' => 'PI',
    		),
    		843 => 
    		array (
    			'codigoIbge' => 2209203,
    			'nome' => 'Santa Filomena',
    			'UF' => 'PI',
    		),
    		844 => 
    		array (
    			'codigoIbge' => 2209302,
    			'nome' => 'Santa Luz',
    			'UF' => 'PI',
    		),
    		845 => 
    		array (
    			'codigoIbge' => 2209351,
    			'nome' => 'Santana do Piauí',
    			'UF' => 'PI',
    		),
    		846 => 
    		array (
    			'codigoIbge' => 2209377,
    			'nome' => 'Santa Rosa do Piauí',
    			'UF' => 'PI',
    		),
    		847 => 
    		array (
    			'codigoIbge' => 2209401,
    			'nome' => 'Santo Antônio de Lisboa',
    			'UF' => 'PI',
    		),
    		848 => 
    		array (
    			'codigoIbge' => 2209450,
    			'nome' => 'Santo Antônio dos Milagres',
    			'UF' => 'PI',
    		),
    		849 => 
    		array (
    			'codigoIbge' => 2209500,
    			'nome' => 'Santo Inácio do Piauí',
    			'UF' => 'PI',
    		),
    		850 => 
    		array (
    			'codigoIbge' => 2209559,
    			'nome' => 'São Braz do Piauí',
    			'UF' => 'PI',
    		),
    		851 => 
    		array (
    			'codigoIbge' => 2209609,
    			'nome' => 'São Félix do Piauí',
    			'UF' => 'PI',
    		),
    		852 => 
    		array (
    			'codigoIbge' => 2209658,
    			'nome' => 'São Francisco de Assis do Piauí',
    			'UF' => 'PI',
    		),
    		853 => 
    		array (
    			'codigoIbge' => 2209708,
    			'nome' => 'São Francisco do Piauí',
    			'UF' => 'PI',
    		),
    		854 => 
    		array (
    			'codigoIbge' => 2209757,
    			'nome' => 'São Gonçalo do Gurguéia',
    			'UF' => 'PI',
    		),
    		855 => 
    		array (
    			'codigoIbge' => 2209807,
    			'nome' => 'São Gonçalo do Piauí',
    			'UF' => 'PI',
    		),
    		856 => 
    		array (
    			'codigoIbge' => 2209856,
    			'nome' => 'São João da Canabrava',
    			'UF' => 'PI',
    		),
    		857 => 
    		array (
    			'codigoIbge' => 2209872,
    			'nome' => 'São João da Fronteira',
    			'UF' => 'PI',
    		),
    		858 => 
    		array (
    			'codigoIbge' => 2209906,
    			'nome' => 'São João da Serra',
    			'UF' => 'PI',
    		),
    		859 => 
    		array (
    			'codigoIbge' => 2209955,
    			'nome' => 'São João da Varjota',
    			'UF' => 'PI',
    		),
    		860 => 
    		array (
    			'codigoIbge' => 2209971,
    			'nome' => 'São João do Arraial',
    			'UF' => 'PI',
    		),
    		861 => 
    		array (
    			'codigoIbge' => 2210003,
    			'nome' => 'São João do Piauí',
    			'UF' => 'PI',
    		),
    		862 => 
    		array (
    			'codigoIbge' => 2210052,
    			'nome' => 'São José do Divino',
    			'UF' => 'PI',
    		),
    		863 => 
    		array (
    			'codigoIbge' => 2210102,
    			'nome' => 'São José do Peixe',
    			'UF' => 'PI',
    		),
    		864 => 
    		array (
    			'codigoIbge' => 2210201,
    			'nome' => 'São José do Piauí',
    			'UF' => 'PI',
    		),
    		865 => 
    		array (
    			'codigoIbge' => 2210300,
    			'nome' => 'São Julião',
    			'UF' => 'PI',
    		),
    		866 => 
    		array (
    			'codigoIbge' => 2210359,
    			'nome' => 'São Lourenço do Piauí',
    			'UF' => 'PI',
    		),
    		867 => 
    		array (
    			'codigoIbge' => 2210375,
    			'nome' => 'São Luis do Piauí',
    			'UF' => 'PI',
    		),
    		868 => 
    		array (
    			'codigoIbge' => 2210383,
    			'nome' => 'São Miguel da Baixa Grande',
    			'UF' => 'PI',
    		),
    		869 => 
    		array (
    			'codigoIbge' => 2210391,
    			'nome' => 'São Miguel do Fidalgo',
    			'UF' => 'PI',
    		),
    		870 => 
    		array (
    			'codigoIbge' => 2210409,
    			'nome' => 'São Miguel do Tapuio',
    			'UF' => 'PI',
    		),
    		871 => 
    		array (
    			'codigoIbge' => 2210508,
    			'nome' => 'São Pedro do Piauí',
    			'UF' => 'PI',
    		),
    		872 => 
    		array (
    			'codigoIbge' => 2210607,
    			'nome' => 'São Raimundo Nonato',
    			'UF' => 'PI',
    		),
    		873 => 
    		array (
    			'codigoIbge' => 2210623,
    			'nome' => 'Sebastião Barros',
    			'UF' => 'PI',
    		),
    		874 => 
    		array (
    			'codigoIbge' => 2210631,
    			'nome' => 'Sebastião Leal',
    			'UF' => 'PI',
    		),
    		875 => 
    		array (
    			'codigoIbge' => 2210656,
    			'nome' => 'Sigefredo Pacheco',
    			'UF' => 'PI',
    		),
    		876 => 
    		array (
    			'codigoIbge' => 2210706,
    			'nome' => 'Simões',
    			'UF' => 'PI',
    		),
    		877 => 
    		array (
    			'codigoIbge' => 2210805,
    			'nome' => 'Simplício Mendes',
    			'UF' => 'PI',
    		),
    		878 => 
    		array (
    			'codigoIbge' => 2210904,
    			'nome' => 'Socorro do Piauí',
    			'UF' => 'PI',
    		),
    		879 => 
    		array (
    			'codigoIbge' => 2210938,
    			'nome' => 'Sussuapara',
    			'UF' => 'PI',
    		),
    		880 => 
    		array (
    			'codigoIbge' => 2210953,
    			'nome' => 'Tamboril do Piauí',
    			'UF' => 'PI',
    		),
    		881 => 
    		array (
    			'codigoIbge' => 2210979,
    			'nome' => 'Tanque do Piauí',
    			'UF' => 'PI',
    		),
    		882 => 
    		array (
    			'codigoIbge' => 2211001,
    			'nome' => 'Teresina',
    			'UF' => 'PI',
    		),
    		883 => 
    		array (
    			'codigoIbge' => 2211100,
    			'nome' => 'União',
    			'UF' => 'PI',
    		),
    		884 => 
    		array (
    			'codigoIbge' => 2211209,
    			'nome' => 'Uruçuí',
    			'UF' => 'PI',
    		),
    		885 => 
    		array (
    			'codigoIbge' => 2211308,
    			'nome' => 'Valença do Piauí',
    			'UF' => 'PI',
    		),
    		886 => 
    		array (
    			'codigoIbge' => 2211357,
    			'nome' => 'Várzea Branca',
    			'UF' => 'PI',
    		),
    		887 => 
    		array (
    			'codigoIbge' => 2211407,
    			'nome' => 'Várzea Grande',
    			'UF' => 'PI',
    		),
    		888 => 
    		array (
    			'codigoIbge' => 2211506,
    			'nome' => 'Vera Mendes',
    			'UF' => 'PI',
    		),
    		889 => 
    		array (
    			'codigoIbge' => 2211605,
    			'nome' => 'Vila Nova do Piauí',
    			'UF' => 'PI',
    		),
    		890 => 
    		array (
    			'codigoIbge' => 2211704,
    			'nome' => 'Wall Ferraz',
    			'UF' => 'PI',
    		),
    		891 => 
    		array (
    			'codigoIbge' => 2300101,
    			'nome' => 'Abaiara',
    			'UF' => 'CE',
    		),
    		892 => 
    		array (
    			'codigoIbge' => 2300150,
    			'nome' => 'Acarape',
    			'UF' => 'CE',
    		),
    		893 => 
    		array (
    			'codigoIbge' => 2300200,
    			'nome' => 'Acaraú',
    			'UF' => 'CE',
    		),
    		894 => 
    		array (
    			'codigoIbge' => 2300309,
    			'nome' => 'Acopiara',
    			'UF' => 'CE',
    		),
    		895 => 
    		array (
    			'codigoIbge' => 2300408,
    			'nome' => 'Aiuaba',
    			'UF' => 'CE',
    		),
    		896 => 
    		array (
    			'codigoIbge' => 2300507,
    			'nome' => 'Alcântaras',
    			'UF' => 'CE',
    		),
    		897 => 
    		array (
    			'codigoIbge' => 2300606,
    			'nome' => 'Altaneira',
    			'UF' => 'CE',
    		),
    		898 => 
    		array (
    			'codigoIbge' => 2300705,
    			'nome' => 'Alto Santo',
    			'UF' => 'CE',
    		),
    		899 => 
    		array (
    			'codigoIbge' => 2300754,
    			'nome' => 'Amontada',
    			'UF' => 'CE',
    		),
    		900 => 
    		array (
    			'codigoIbge' => 2300804,
    			'nome' => 'Antonina do Norte',
    			'UF' => 'CE',
    		),
    		901 => 
    		array (
    			'codigoIbge' => 2300903,
    			'nome' => 'Apuiarés',
    			'UF' => 'CE',
    		),
    		902 => 
    		array (
    			'codigoIbge' => 2301000,
    			'nome' => 'Aquiraz',
    			'UF' => 'CE',
    		),
    		903 => 
    		array (
    			'codigoIbge' => 2301109,
    			'nome' => 'Aracati',
    			'UF' => 'CE',
    		),
    		904 => 
    		array (
    			'codigoIbge' => 2301208,
    			'nome' => 'Aracoiaba',
    			'UF' => 'CE',
    		),
    		905 => 
    		array (
    			'codigoIbge' => 2301257,
    			'nome' => 'Ararendá',
    			'UF' => 'CE',
    		),
    		906 => 
    		array (
    			'codigoIbge' => 2301307,
    			'nome' => 'Araripe',
    			'UF' => 'CE',
    		),
    		907 => 
    		array (
    			'codigoIbge' => 2301406,
    			'nome' => 'Aratuba',
    			'UF' => 'CE',
    		),
    		908 => 
    		array (
    			'codigoIbge' => 2301505,
    			'nome' => 'Arneiroz',
    			'UF' => 'CE',
    		),
    		909 => 
    		array (
    			'codigoIbge' => 2301604,
    			'nome' => 'Assaré',
    			'UF' => 'CE',
    		),
    		910 => 
    		array (
    			'codigoIbge' => 2301703,
    			'nome' => 'Aurora',
    			'UF' => 'CE',
    		),
    		911 => 
    		array (
    			'codigoIbge' => 2301802,
    			'nome' => 'Baixio',
    			'UF' => 'CE',
    		),
    		912 => 
    		array (
    			'codigoIbge' => 2301851,
    			'nome' => 'Banabuiú',
    			'UF' => 'CE',
    		),
    		913 => 
    		array (
    			'codigoIbge' => 2301901,
    			'nome' => 'Barbalha',
    			'UF' => 'CE',
    		),
    		914 => 
    		array (
    			'codigoIbge' => 2301950,
    			'nome' => 'Barreira',
    			'UF' => 'CE',
    		),
    		915 => 
    		array (
    			'codigoIbge' => 2302008,
    			'nome' => 'Barro',
    			'UF' => 'CE',
    		),
    		916 => 
    		array (
    			'codigoIbge' => 2302057,
    			'nome' => 'Barroquinha',
    			'UF' => 'CE',
    		),
    		917 => 
    		array (
    			'codigoIbge' => 2302107,
    			'nome' => 'Baturité',
    			'UF' => 'CE',
    		),
    		918 => 
    		array (
    			'codigoIbge' => 2302206,
    			'nome' => 'Beberibe',
    			'UF' => 'CE',
    		),
    		919 => 
    		array (
    			'codigoIbge' => 2302305,
    			'nome' => 'Bela Cruz',
    			'UF' => 'CE',
    		),
    		920 => 
    		array (
    			'codigoIbge' => 2302404,
    			'nome' => 'Boa Viagem',
    			'UF' => 'CE',
    		),
    		921 => 
    		array (
    			'codigoIbge' => 2302503,
    			'nome' => 'Brejo Santo',
    			'UF' => 'CE',
    		),
    		922 => 
    		array (
    			'codigoIbge' => 2302602,
    			'nome' => 'Camocim',
    			'UF' => 'CE',
    		),
    		923 => 
    		array (
    			'codigoIbge' => 2302701,
    			'nome' => 'Campos Sales',
    			'UF' => 'CE',
    		),
    		924 => 
    		array (
    			'codigoIbge' => 2302800,
    			'nome' => 'Canindé',
    			'UF' => 'CE',
    		),
    		925 => 
    		array (
    			'codigoIbge' => 2302909,
    			'nome' => 'Capistrano',
    			'UF' => 'CE',
    		),
    		926 => 
    		array (
    			'codigoIbge' => 2303006,
    			'nome' => 'Caridade',
    			'UF' => 'CE',
    		),
    		927 => 
    		array (
    			'codigoIbge' => 2303105,
    			'nome' => 'Cariré',
    			'UF' => 'CE',
    		),
    		928 => 
    		array (
    			'codigoIbge' => 2303204,
    			'nome' => 'Caririaçu',
    			'UF' => 'CE',
    		),
    		929 => 
    		array (
    			'codigoIbge' => 2303303,
    			'nome' => 'Cariús',
    			'UF' => 'CE',
    		),
    		930 => 
    		array (
    			'codigoIbge' => 2303402,
    			'nome' => 'Carnaubal',
    			'UF' => 'CE',
    		),
    		931 => 
    		array (
    			'codigoIbge' => 2303501,
    			'nome' => 'Cascavel',
    			'UF' => 'CE',
    		),
    		932 => 
    		array (
    			'codigoIbge' => 2303600,
    			'nome' => 'Catarina',
    			'UF' => 'CE',
    		),
    		933 => 
    		array (
    			'codigoIbge' => 2303659,
    			'nome' => 'Catunda',
    			'UF' => 'CE',
    		),
    		934 => 
    		array (
    			'codigoIbge' => 2303709,
    			'nome' => 'Caucaia',
    			'UF' => 'CE',
    		),
    		935 => 
    		array (
    			'codigoIbge' => 2303808,
    			'nome' => 'Cedro',
    			'UF' => 'CE',
    		),
    		936 => 
    		array (
    			'codigoIbge' => 2303907,
    			'nome' => 'Chaval',
    			'UF' => 'CE',
    		),
    		937 => 
    		array (
    			'codigoIbge' => 2303931,
    			'nome' => 'Choró',
    			'UF' => 'CE',
    		),
    		938 => 
    		array (
    			'codigoIbge' => 2303956,
    			'nome' => 'Chorozinho',
    			'UF' => 'CE',
    		),
    		939 => 
    		array (
    			'codigoIbge' => 2304004,
    			'nome' => 'Coreaú',
    			'UF' => 'CE',
    		),
    		940 => 
    		array (
    			'codigoIbge' => 2304103,
    			'nome' => 'Crateús',
    			'UF' => 'CE',
    		),
    		941 => 
    		array (
    			'codigoIbge' => 2304202,
    			'nome' => 'Crato',
    			'UF' => 'CE',
    		),
    		942 => 
    		array (
    			'codigoIbge' => 2304236,
    			'nome' => 'Croatá',
    			'UF' => 'CE',
    		),
    		943 => 
    		array (
    			'codigoIbge' => 2304251,
    			'nome' => 'Cruz',
    			'UF' => 'CE',
    		),
    		944 => 
    		array (
    			'codigoIbge' => 2304269,
    			'nome' => 'Deputado Irapuan Pinheiro',
    			'UF' => 'CE',
    		),
    		945 => 
    		array (
    			'codigoIbge' => 2304277,
    			'nome' => 'Ereré',
    			'UF' => 'CE',
    		),
    		946 => 
    		array (
    			'codigoIbge' => 2304285,
    			'nome' => 'Eusébio',
    			'UF' => 'CE',
    		),
    		947 => 
    		array (
    			'codigoIbge' => 2304301,
    			'nome' => 'Farias Brito',
    			'UF' => 'CE',
    		),
    		948 => 
    		array (
    			'codigoIbge' => 2304350,
    			'nome' => 'Forquilha',
    			'UF' => 'CE',
    		),
    		949 => 
    		array (
    			'codigoIbge' => 2304400,
    			'nome' => 'Fortaleza',
    			'UF' => 'CE',
    		),
    		950 => 
    		array (
    			'codigoIbge' => 2304459,
    			'nome' => 'Fortim',
    			'UF' => 'CE',
    		),
    		951 => 
    		array (
    			'codigoIbge' => 2304509,
    			'nome' => 'Frecheirinha',
    			'UF' => 'CE',
    		),
    		952 => 
    		array (
    			'codigoIbge' => 2304608,
    			'nome' => 'General Sampaio',
    			'UF' => 'CE',
    		),
    		953 => 
    		array (
    			'codigoIbge' => 2304657,
    			'nome' => 'Graça',
    			'UF' => 'CE',
    		),
    		954 => 
    		array (
    			'codigoIbge' => 2304707,
    			'nome' => 'Granja',
    			'UF' => 'CE',
    		),
    		955 => 
    		array (
    			'codigoIbge' => 2304806,
    			'nome' => 'Granjeiro',
    			'UF' => 'CE',
    		),
    		956 => 
    		array (
    			'codigoIbge' => 2304905,
    			'nome' => 'Groaíras',
    			'UF' => 'CE',
    		),
    		957 => 
    		array (
    			'codigoIbge' => 2304954,
    			'nome' => 'Guaiúba',
    			'UF' => 'CE',
    		),
    		958 => 
    		array (
    			'codigoIbge' => 2305001,
    			'nome' => 'Guaraciaba do Norte',
    			'UF' => 'CE',
    		),
    		959 => 
    		array (
    			'codigoIbge' => 2305100,
    			'nome' => 'Guaramiranga',
    			'UF' => 'CE',
    		),
    		960 => 
    		array (
    			'codigoIbge' => 2305209,
    			'nome' => 'Hidrolândia',
    			'UF' => 'CE',
    		),
    		961 => 
    		array (
    			'codigoIbge' => 2305233,
    			'nome' => 'Horizonte',
    			'UF' => 'CE',
    		),
    		962 => 
    		array (
    			'codigoIbge' => 2305266,
    			'nome' => 'Ibaretama',
    			'UF' => 'CE',
    		),
    		963 => 
    		array (
    			'codigoIbge' => 2305308,
    			'nome' => 'Ibiapina',
    			'UF' => 'CE',
    		),
    		964 => 
    		array (
    			'codigoIbge' => 2305332,
    			'nome' => 'Ibicuitinga',
    			'UF' => 'CE',
    		),
    		965 => 
    		array (
    			'codigoIbge' => 2305357,
    			'nome' => 'Icapuí',
    			'UF' => 'CE',
    		),
    		966 => 
    		array (
    			'codigoIbge' => 2305407,
    			'nome' => 'Icó',
    			'UF' => 'CE',
    		),
    		967 => 
    		array (
    			'codigoIbge' => 2305506,
    			'nome' => 'Iguatu',
    			'UF' => 'CE',
    		),
    		968 => 
    		array (
    			'codigoIbge' => 2305605,
    			'nome' => 'Independência',
    			'UF' => 'CE',
    		),
    		969 => 
    		array (
    			'codigoIbge' => 2305654,
    			'nome' => 'Ipaporanga',
    			'UF' => 'CE',
    		),
    		970 => 
    		array (
    			'codigoIbge' => 2305704,
    			'nome' => 'Ipaumirim',
    			'UF' => 'CE',
    		),
    		971 => 
    		array (
    			'codigoIbge' => 2305803,
    			'nome' => 'Ipu',
    			'UF' => 'CE',
    		),
    		972 => 
    		array (
    			'codigoIbge' => 2305902,
    			'nome' => 'Ipueiras',
    			'UF' => 'CE',
    		),
    		973 => 
    		array (
    			'codigoIbge' => 2306009,
    			'nome' => 'Iracema',
    			'UF' => 'CE',
    		),
    		974 => 
    		array (
    			'codigoIbge' => 2306108,
    			'nome' => 'Irauçuba',
    			'UF' => 'CE',
    		),
    		975 => 
    		array (
    			'codigoIbge' => 2306207,
    			'nome' => 'Itaiçaba',
    			'UF' => 'CE',
    		),
    		976 => 
    		array (
    			'codigoIbge' => 2306256,
    			'nome' => 'Itaitinga',
    			'UF' => 'CE',
    		),
    		977 => 
    		array (
    			'codigoIbge' => 2306306,
    			'nome' => 'Itapajé',
    			'UF' => 'CE',
    		),
    		978 => 
    		array (
    			'codigoIbge' => 2306405,
    			'nome' => 'Itapipoca',
    			'UF' => 'CE',
    		),
    		979 => 
    		array (
    			'codigoIbge' => 2306504,
    			'nome' => 'Itapiúna',
    			'UF' => 'CE',
    		),
    		980 => 
    		array (
    			'codigoIbge' => 2306553,
    			'nome' => 'Itarema',
    			'UF' => 'CE',
    		),
    		981 => 
    		array (
    			'codigoIbge' => 2306603,
    			'nome' => 'Itatira',
    			'UF' => 'CE',
    		),
    		982 => 
    		array (
    			'codigoIbge' => 2306702,
    			'nome' => 'Jaguaretama',
    			'UF' => 'CE',
    		),
    		983 => 
    		array (
    			'codigoIbge' => 2306801,
    			'nome' => 'Jaguaribara',
    			'UF' => 'CE',
    		),
    		984 => 
    		array (
    			'codigoIbge' => 2306900,
    			'nome' => 'Jaguaribe',
    			'UF' => 'CE',
    		),
    		985 => 
    		array (
    			'codigoIbge' => 2307007,
    			'nome' => 'Jaguaruana',
    			'UF' => 'CE',
    		),
    		986 => 
    		array (
    			'codigoIbge' => 2307106,
    			'nome' => 'Jardim',
    			'UF' => 'CE',
    		),
    		987 => 
    		array (
    			'codigoIbge' => 2307205,
    			'nome' => 'Jati',
    			'UF' => 'CE',
    		),
    		988 => 
    		array (
    			'codigoIbge' => 2307254,
    			'nome' => 'Jijoca de Jericoacoara',
    			'UF' => 'CE',
    		),
    		989 => 
    		array (
    			'codigoIbge' => 2307304,
    			'nome' => 'Juazeiro do Norte',
    			'UF' => 'CE',
    		),
    		990 => 
    		array (
    			'codigoIbge' => 2307403,
    			'nome' => 'Jucás',
    			'UF' => 'CE',
    		),
    		991 => 
    		array (
    			'codigoIbge' => 2307502,
    			'nome' => 'Lavras da Mangabeira',
    			'UF' => 'CE',
    		),
    		992 => 
    		array (
    			'codigoIbge' => 2307601,
    			'nome' => 'Limoeiro do Norte',
    			'UF' => 'CE',
    		),
    		993 => 
    		array (
    			'codigoIbge' => 2307635,
    			'nome' => 'Madalena',
    			'UF' => 'CE',
    		),
    		994 => 
    		array (
    			'codigoIbge' => 2307650,
    			'nome' => 'Maracanaú',
    			'UF' => 'CE',
    		),
    		995 => 
    		array (
    			'codigoIbge' => 2307700,
    			'nome' => 'Maranguape',
    			'UF' => 'CE',
    		),
    		996 => 
    		array (
    			'codigoIbge' => 2307809,
    			'nome' => 'Marco',
    			'UF' => 'CE',
    		),
    		997 => 
    		array (
    			'codigoIbge' => 2307908,
    			'nome' => 'Martinópole',
    			'UF' => 'CE',
    		),
    		998 => 
    		array (
    			'codigoIbge' => 2308005,
    			'nome' => 'Massapê',
    			'UF' => 'CE',
    		),
    		999 => 
    		array (
    			'codigoIbge' => 2308104,
    			'nome' => 'Mauriti',
    			'UF' => 'CE',
    		),
    		1000 => 
    		array (
    			'codigoIbge' => 2308203,
    			'nome' => 'Meruoca',
    			'UF' => 'CE',
    		),
    		1001 => 
    		array (
    			'codigoIbge' => 2308302,
    			'nome' => 'Milagres',
    			'UF' => 'CE',
    		),
    		1002 => 
    		array (
    			'codigoIbge' => 2308351,
    			'nome' => 'Milhã',
    			'UF' => 'CE',
    		),
    		1003 => 
    		array (
    			'codigoIbge' => 2308377,
    			'nome' => 'Miraíma',
    			'UF' => 'CE',
    		),
    		1004 => 
    		array (
    			'codigoIbge' => 2308401,
    			'nome' => 'Missão Velha',
    			'UF' => 'CE',
    		),
    		1005 => 
    		array (
    			'codigoIbge' => 2308500,
    			'nome' => 'Mombaça',
    			'UF' => 'CE',
    		),
    		1006 => 
    		array (
    			'codigoIbge' => 2308609,
    			'nome' => 'Monsenhor Tabosa',
    			'UF' => 'CE',
    		),
    		1007 => 
    		array (
    			'codigoIbge' => 2308708,
    			'nome' => 'Morada Nova',
    			'UF' => 'CE',
    		),
    		1008 => 
    		array (
    			'codigoIbge' => 2308807,
    			'nome' => 'Moraújo',
    			'UF' => 'CE',
    		),
    		1009 => 
    		array (
    			'codigoIbge' => 2308906,
    			'nome' => 'Morrinhos',
    			'UF' => 'CE',
    		),
    		1010 => 
    		array (
    			'codigoIbge' => 2309003,
    			'nome' => 'Mucambo',
    			'UF' => 'CE',
    		),
    		1011 => 
    		array (
    			'codigoIbge' => 2309102,
    			'nome' => 'Mulungu',
    			'UF' => 'CE',
    		),
    		1012 => 
    		array (
    			'codigoIbge' => 2309201,
    			'nome' => 'Nova Olinda',
    			'UF' => 'CE',
    		),
    		1013 => 
    		array (
    			'codigoIbge' => 2309300,
    			'nome' => 'Nova Russas',
    			'UF' => 'CE',
    		),
    		1014 => 
    		array (
    			'codigoIbge' => 2309409,
    			'nome' => 'Novo Oriente',
    			'UF' => 'CE',
    		),
    		1015 => 
    		array (
    			'codigoIbge' => 2309458,
    			'nome' => 'Ocara',
    			'UF' => 'CE',
    		),
    		1016 => 
    		array (
    			'codigoIbge' => 2309508,
    			'nome' => 'Orós',
    			'UF' => 'CE',
    		),
    		1017 => 
    		array (
    			'codigoIbge' => 2309607,
    			'nome' => 'Pacajus',
    			'UF' => 'CE',
    		),
    		1018 => 
    		array (
    			'codigoIbge' => 2309706,
    			'nome' => 'Pacatuba',
    			'UF' => 'CE',
    		),
    		1019 => 
    		array (
    			'codigoIbge' => 2309805,
    			'nome' => 'Pacoti',
    			'UF' => 'CE',
    		),
    		1020 => 
    		array (
    			'codigoIbge' => 2309904,
    			'nome' => 'Pacujá',
    			'UF' => 'CE',
    		),
    		1021 => 
    		array (
    			'codigoIbge' => 2310001,
    			'nome' => 'Palhano',
    			'UF' => 'CE',
    		),
    		1022 => 
    		array (
    			'codigoIbge' => 2310100,
    			'nome' => 'Palmácia',
    			'UF' => 'CE',
    		),
    		1023 => 
    		array (
    			'codigoIbge' => 2310209,
    			'nome' => 'Paracuru',
    			'UF' => 'CE',
    		),
    		1024 => 
    		array (
    			'codigoIbge' => 2310258,
    			'nome' => 'Paraipaba',
    			'UF' => 'CE',
    		),
    		1025 => 
    		array (
    			'codigoIbge' => 2310308,
    			'nome' => 'Parambu',
    			'UF' => 'CE',
    		),
    		1026 => 
    		array (
    			'codigoIbge' => 2310407,
    			'nome' => 'Paramoti',
    			'UF' => 'CE',
    		),
    		1027 => 
    		array (
    			'codigoIbge' => 2310506,
    			'nome' => 'Pedra Branca',
    			'UF' => 'CE',
    		),
    		1028 => 
    		array (
    			'codigoIbge' => 2310605,
    			'nome' => 'Penaforte',
    			'UF' => 'CE',
    		),
    		1029 => 
    		array (
    			'codigoIbge' => 2310704,
    			'nome' => 'Pentecoste',
    			'UF' => 'CE',
    		),
    		1030 => 
    		array (
    			'codigoIbge' => 2310803,
    			'nome' => 'Pereiro',
    			'UF' => 'CE',
    		),
    		1031 => 
    		array (
    			'codigoIbge' => 2310852,
    			'nome' => 'Pindoretama',
    			'UF' => 'CE',
    		),
    		1032 => 
    		array (
    			'codigoIbge' => 2310902,
    			'nome' => 'Piquet Carneiro',
    			'UF' => 'CE',
    		),
    		1033 => 
    		array (
    			'codigoIbge' => 2310951,
    			'nome' => 'Pires Ferreira',
    			'UF' => 'CE',
    		),
    		1034 => 
    		array (
    			'codigoIbge' => 2311009,
    			'nome' => 'Poranga',
    			'UF' => 'CE',
    		),
    		1035 => 
    		array (
    			'codigoIbge' => 2311108,
    			'nome' => 'Porteiras',
    			'UF' => 'CE',
    		),
    		1036 => 
    		array (
    			'codigoIbge' => 2311207,
    			'nome' => 'Potengi',
    			'UF' => 'CE',
    		),
    		1037 => 
    		array (
    			'codigoIbge' => 2311231,
    			'nome' => 'Potiretama',
    			'UF' => 'CE',
    		),
    		1038 => 
    		array (
    			'codigoIbge' => 2311264,
    			'nome' => 'Quiterianópolis',
    			'UF' => 'CE',
    		),
    		1039 => 
    		array (
    			'codigoIbge' => 2311306,
    			'nome' => 'Quixadá',
    			'UF' => 'CE',
    		),
    		1040 => 
    		array (
    			'codigoIbge' => 2311355,
    			'nome' => 'Quixelô',
    			'UF' => 'CE',
    		),
    		1041 => 
    		array (
    			'codigoIbge' => 2311405,
    			'nome' => 'Quixeramobim',
    			'UF' => 'CE',
    		),
    		1042 => 
    		array (
    			'codigoIbge' => 2311504,
    			'nome' => 'Quixeré',
    			'UF' => 'CE',
    		),
    		1043 => 
    		array (
    			'codigoIbge' => 2311603,
    			'nome' => 'Redenção',
    			'UF' => 'CE',
    		),
    		1044 => 
    		array (
    			'codigoIbge' => 2311702,
    			'nome' => 'Reriutaba',
    			'UF' => 'CE',
    		),
    		1045 => 
    		array (
    			'codigoIbge' => 2311801,
    			'nome' => 'Russas',
    			'UF' => 'CE',
    		),
    		1046 => 
    		array (
    			'codigoIbge' => 2311900,
    			'nome' => 'Saboeiro',
    			'UF' => 'CE',
    		),
    		1047 => 
    		array (
    			'codigoIbge' => 2311959,
    			'nome' => 'Salitre',
    			'UF' => 'CE',
    		),
    		1048 => 
    		array (
    			'codigoIbge' => 2312007,
    			'nome' => 'Santana do Acaraú',
    			'UF' => 'CE',
    		),
    		1049 => 
    		array (
    			'codigoIbge' => 2312106,
    			'nome' => 'Santana do Cariri',
    			'UF' => 'CE',
    		),
    		1050 => 
    		array (
    			'codigoIbge' => 2312205,
    			'nome' => 'Santa Quitéria',
    			'UF' => 'CE',
    		),
    		1051 => 
    		array (
    			'codigoIbge' => 2312304,
    			'nome' => 'São Benedito',
    			'UF' => 'CE',
    		),
    		1052 => 
    		array (
    			'codigoIbge' => 2312403,
    			'nome' => 'São Gonçalo do Amarante',
    			'UF' => 'CE',
    		),
    		1053 => 
    		array (
    			'codigoIbge' => 2312502,
    			'nome' => 'São João do Jaguaribe',
    			'UF' => 'CE',
    		),
    		1054 => 
    		array (
    			'codigoIbge' => 2312601,
    			'nome' => 'São Luís do Curu',
    			'UF' => 'CE',
    		),
    		1055 => 
    		array (
    			'codigoIbge' => 2312700,
    			'nome' => 'Senador Pompeu',
    			'UF' => 'CE',
    		),
    		1056 => 
    		array (
    			'codigoIbge' => 2312809,
    			'nome' => 'Senador Sá',
    			'UF' => 'CE',
    		),
    		1057 => 
    		array (
    			'codigoIbge' => 2312908,
    			'nome' => 'Sobral',
    			'UF' => 'CE',
    		),
    		1058 => 
    		array (
    			'codigoIbge' => 2313005,
    			'nome' => 'Solonópole',
    			'UF' => 'CE',
    		),
    		1059 => 
    		array (
    			'codigoIbge' => 2313104,
    			'nome' => 'Tabuleiro do Norte',
    			'UF' => 'CE',
    		),
    		1060 => 
    		array (
    			'codigoIbge' => 2313203,
    			'nome' => 'Tamboril',
    			'UF' => 'CE',
    		),
    		1061 => 
    		array (
    			'codigoIbge' => 2313252,
    			'nome' => 'Tarrafas',
    			'UF' => 'CE',
    		),
    		1062 => 
    		array (
    			'codigoIbge' => 2313302,
    			'nome' => 'Tauá',
    			'UF' => 'CE',
    		),
    		1063 => 
    		array (
    			'codigoIbge' => 2313351,
    			'nome' => 'Tejuçuoca',
    			'UF' => 'CE',
    		),
    		1064 => 
    		array (
    			'codigoIbge' => 2313401,
    			'nome' => 'Tianguá',
    			'UF' => 'CE',
    		),
    		1065 => 
    		array (
    			'codigoIbge' => 2313500,
    			'nome' => 'Trairi',
    			'UF' => 'CE',
    		),
    		1066 => 
    		array (
    			'codigoIbge' => 2313559,
    			'nome' => 'Tururu',
    			'UF' => 'CE',
    		),
    		1067 => 
    		array (
    			'codigoIbge' => 2313609,
    			'nome' => 'Ubajara',
    			'UF' => 'CE',
    		),
    		1068 => 
    		array (
    			'codigoIbge' => 2313708,
    			'nome' => 'Umari',
    			'UF' => 'CE',
    		),
    		1069 => 
    		array (
    			'codigoIbge' => 2313757,
    			'nome' => 'Umirim',
    			'UF' => 'CE',
    		),
    		1070 => 
    		array (
    			'codigoIbge' => 2313807,
    			'nome' => 'Uruburetama',
    			'UF' => 'CE',
    		),
    		1071 => 
    		array (
    			'codigoIbge' => 2313906,
    			'nome' => 'Uruoca',
    			'UF' => 'CE',
    		),
    		1072 => 
    		array (
    			'codigoIbge' => 2313955,
    			'nome' => 'Varjota',
    			'UF' => 'CE',
    		),
    		1073 => 
    		array (
    			'codigoIbge' => 2314003,
    			'nome' => 'Várzea Alegre',
    			'UF' => 'CE',
    		),
    		1074 => 
    		array (
    			'codigoIbge' => 2314102,
    			'nome' => 'Viçosa do Ceará',
    			'UF' => 'CE',
    		),
    		1075 => 
    		array (
    			'codigoIbge' => 2400109,
    			'nome' => 'Acari',
    			'UF' => 'RN',
    		),
    		1076 => 
    		array (
    			'codigoIbge' => 2400208,
    			'nome' => 'Açu',
    			'UF' => 'RN',
    		),
    		1077 => 
    		array (
    			'codigoIbge' => 2400307,
    			'nome' => 'Afonso Bezerra',
    			'UF' => 'RN',
    		),
    		1078 => 
    		array (
    			'codigoIbge' => 2400406,
    			'nome' => 'Água Nova',
    			'UF' => 'RN',
    		),
    		1079 => 
    		array (
    			'codigoIbge' => 2400505,
    			'nome' => 'Alexandria',
    			'UF' => 'RN',
    		),
    		1080 => 
    		array (
    			'codigoIbge' => 2400604,
    			'nome' => 'Almino Afonso',
    			'UF' => 'RN',
    		),
    		1081 => 
    		array (
    			'codigoIbge' => 2400703,
    			'nome' => 'Alto do Rodrigues',
    			'UF' => 'RN',
    		),
    		1082 => 
    		array (
    			'codigoIbge' => 2400802,
    			'nome' => 'Angicos',
    			'UF' => 'RN',
    		),
    		1083 => 
    		array (
    			'codigoIbge' => 2400901,
    			'nome' => 'Antônio Martins',
    			'UF' => 'RN',
    		),
    		1084 => 
    		array (
    			'codigoIbge' => 2401008,
    			'nome' => 'Apodi',
    			'UF' => 'RN',
    		),
    		1085 => 
    		array (
    			'codigoIbge' => 2401107,
    			'nome' => 'Areia Branca',
    			'UF' => 'RN',
    		),
    		1086 => 
    		array (
    			'codigoIbge' => 2401206,
    			'nome' => 'Arês',
    			'UF' => 'RN',
    		),
    		1087 => 
    		array (
    			'codigoIbge' => 2401305,
    			'nome' => 'Campo Grande',
    			'UF' => 'RN',
    		),
    		1088 => 
    		array (
    			'codigoIbge' => 2401404,
    			'nome' => 'Baía Formosa',
    			'UF' => 'RN',
    		),
    		1089 => 
    		array (
    			'codigoIbge' => 2401453,
    			'nome' => 'Baraúna',
    			'UF' => 'RN',
    		),
    		1090 => 
    		array (
    			'codigoIbge' => 2401503,
    			'nome' => 'Barcelona',
    			'UF' => 'RN',
    		),
    		1091 => 
    		array (
    			'codigoIbge' => 2401602,
    			'nome' => 'Bento Fernandes',
    			'UF' => 'RN',
    		),
    		1092 => 
    		array (
    			'codigoIbge' => 2401651,
    			'nome' => 'Bodó',
    			'UF' => 'RN',
    		),
    		1093 => 
    		array (
    			'codigoIbge' => 2401701,
    			'nome' => 'Bom Jesus',
    			'UF' => 'RN',
    		),
    		1094 => 
    		array (
    			'codigoIbge' => 2401800,
    			'nome' => 'Brejinho',
    			'UF' => 'RN',
    		),
    		1095 => 
    		array (
    			'codigoIbge' => 2401859,
    			'nome' => 'Caiçara do Norte',
    			'UF' => 'RN',
    		),
    		1096 => 
    		array (
    			'codigoIbge' => 2401909,
    			'nome' => 'Caiçara do Rio do Vento',
    			'UF' => 'RN',
    		),
    		1097 => 
    		array (
    			'codigoIbge' => 2402006,
    			'nome' => 'Caicó',
    			'UF' => 'RN',
    		),
    		1098 => 
    		array (
    			'codigoIbge' => 2402105,
    			'nome' => 'Campo Redondo',
    			'UF' => 'RN',
    		),
    		1099 => 
    		array (
    			'codigoIbge' => 2402204,
    			'nome' => 'Canguaretama',
    			'UF' => 'RN',
    		),
    		1100 => 
    		array (
    			'codigoIbge' => 2402303,
    			'nome' => 'Caraúbas',
    			'UF' => 'RN',
    		),
    		1101 => 
    		array (
    			'codigoIbge' => 2402402,
    			'nome' => 'Carnaúba dos Dantas',
    			'UF' => 'RN',
    		),
    		1102 => 
    		array (
    			'codigoIbge' => 2402501,
    			'nome' => 'Carnaubais',
    			'UF' => 'RN',
    		),
    		1103 => 
    		array (
    			'codigoIbge' => 2402600,
    			'nome' => 'Ceará-Mirim',
    			'UF' => 'RN',
    		),
    		1104 => 
    		array (
    			'codigoIbge' => 2402709,
    			'nome' => 'Cerro Corá',
    			'UF' => 'RN',
    		),
    		1105 => 
    		array (
    			'codigoIbge' => 2402808,
    			'nome' => 'Coronel Ezequiel',
    			'UF' => 'RN',
    		),
    		1106 => 
    		array (
    			'codigoIbge' => 2402907,
    			'nome' => 'Coronel João Pessoa',
    			'UF' => 'RN',
    		),
    		1107 => 
    		array (
    			'codigoIbge' => 2403004,
    			'nome' => 'Cruzeta',
    			'UF' => 'RN',
    		),
    		1108 => 
    		array (
    			'codigoIbge' => 2403103,
    			'nome' => 'Currais Novos',
    			'UF' => 'RN',
    		),
    		1109 => 
    		array (
    			'codigoIbge' => 2403202,
    			'nome' => 'Doutor Severiano',
    			'UF' => 'RN',
    		),
    		1110 => 
    		array (
    			'codigoIbge' => 2403251,
    			'nome' => 'Parnamirim',
    			'UF' => 'RN',
    		),
    		1111 => 
    		array (
    			'codigoIbge' => 2403301,
    			'nome' => 'Encanto',
    			'UF' => 'RN',
    		),
    		1112 => 
    		array (
    			'codigoIbge' => 2403400,
    			'nome' => 'Equador',
    			'UF' => 'RN',
    		),
    		1113 => 
    		array (
    			'codigoIbge' => 2403509,
    			'nome' => 'Espírito Santo',
    			'UF' => 'RN',
    		),
    		1114 => 
    		array (
    			'codigoIbge' => 2403608,
    			'nome' => 'Extremoz',
    			'UF' => 'RN',
    		),
    		1115 => 
    		array (
    			'codigoIbge' => 2403707,
    			'nome' => 'Felipe Guerra',
    			'UF' => 'RN',
    		),
    		1116 => 
    		array (
    			'codigoIbge' => 2403756,
    			'nome' => 'Fernando Pedroza',
    			'UF' => 'RN',
    		),
    		1117 => 
    		array (
    			'codigoIbge' => 2403806,
    			'nome' => 'Florânia',
    			'UF' => 'RN',
    		),
    		1118 => 
    		array (
    			'codigoIbge' => 2403905,
    			'nome' => 'Francisco Dantas',
    			'UF' => 'RN',
    		),
    		1119 => 
    		array (
    			'codigoIbge' => 2404002,
    			'nome' => 'Frutuoso Gomes',
    			'UF' => 'RN',
    		),
    		1120 => 
    		array (
    			'codigoIbge' => 2404101,
    			'nome' => 'Galinhos',
    			'UF' => 'RN',
    		),
    		1121 => 
    		array (
    			'codigoIbge' => 2404200,
    			'nome' => 'Goianinha',
    			'UF' => 'RN',
    		),
    		1122 => 
    		array (
    			'codigoIbge' => 2404309,
    			'nome' => 'Governador Dix-Sept Rosado',
    			'UF' => 'RN',
    		),
    		1123 => 
    		array (
    			'codigoIbge' => 2404408,
    			'nome' => 'Grossos',
    			'UF' => 'RN',
    		),
    		1124 => 
    		array (
    			'codigoIbge' => 2404507,
    			'nome' => 'Guamaré',
    			'UF' => 'RN',
    		),
    		1125 => 
    		array (
    			'codigoIbge' => 2404606,
    			'nome' => 'Ielmo Marinho',
    			'UF' => 'RN',
    		),
    		1126 => 
    		array (
    			'codigoIbge' => 2404705,
    			'nome' => 'Ipanguaçu',
    			'UF' => 'RN',
    		),
    		1127 => 
    		array (
    			'codigoIbge' => 2404804,
    			'nome' => 'Ipueira',
    			'UF' => 'RN',
    		),
    		1128 => 
    		array (
    			'codigoIbge' => 2404853,
    			'nome' => 'Itajá',
    			'UF' => 'RN',
    		),
    		1129 => 
    		array (
    			'codigoIbge' => 2404903,
    			'nome' => 'Itaú',
    			'UF' => 'RN',
    		),
    		1130 => 
    		array (
    			'codigoIbge' => 2405009,
    			'nome' => 'Jaçanã',
    			'UF' => 'RN',
    		),
    		1131 => 
    		array (
    			'codigoIbge' => 2405108,
    			'nome' => 'Jandaíra',
    			'UF' => 'RN',
    		),
    		1132 => 
    		array (
    			'codigoIbge' => 2405207,
    			'nome' => 'Janduís',
    			'UF' => 'RN',
    		),
    		1133 => 
    		array (
    			'codigoIbge' => 2405306,
    			'nome' => 'Januário Cicco',
    			'UF' => 'RN',
    		),
    		1134 => 
    		array (
    			'codigoIbge' => 2405405,
    			'nome' => 'Japi',
    			'UF' => 'RN',
    		),
    		1135 => 
    		array (
    			'codigoIbge' => 2405504,
    			'nome' => 'Jardim de Angicos',
    			'UF' => 'RN',
    		),
    		1136 => 
    		array (
    			'codigoIbge' => 2405603,
    			'nome' => 'Jardim de Piranhas',
    			'UF' => 'RN',
    		),
    		1137 => 
    		array (
    			'codigoIbge' => 2405702,
    			'nome' => 'Jardim do Seridó',
    			'UF' => 'RN',
    		),
    		1138 => 
    		array (
    			'codigoIbge' => 2405801,
    			'nome' => 'João Câmara',
    			'UF' => 'RN',
    		),
    		1139 => 
    		array (
    			'codigoIbge' => 2405900,
    			'nome' => 'João Dias',
    			'UF' => 'RN',
    		),
    		1140 => 
    		array (
    			'codigoIbge' => 2406007,
    			'nome' => 'José da Penha',
    			'UF' => 'RN',
    		),
    		1141 => 
    		array (
    			'codigoIbge' => 2406106,
    			'nome' => 'Jucurutu',
    			'UF' => 'RN',
    		),
    		1142 => 
    		array (
    			'codigoIbge' => 2406155,
    			'nome' => 'Jundiá',
    			'UF' => 'RN',
    		),
    		1143 => 
    		array (
    			'codigoIbge' => 2406205,
    			'nome' => 'Lagoa d\'Anta',
    			'UF' => 'RN',
    		),
    		1144 => 
    		array (
    			'codigoIbge' => 2406304,
    			'nome' => 'Lagoa de Pedras',
    			'UF' => 'RN',
    		),
    		1145 => 
    		array (
    			'codigoIbge' => 2406403,
    			'nome' => 'Lagoa de Velhos',
    			'UF' => 'RN',
    		),
    		1146 => 
    		array (
    			'codigoIbge' => 2406502,
    			'nome' => 'Lagoa Nova',
    			'UF' => 'RN',
    		),
    		1147 => 
    		array (
    			'codigoIbge' => 2406601,
    			'nome' => 'Lagoa Salgada',
    			'UF' => 'RN',
    		),
    		1148 => 
    		array (
    			'codigoIbge' => 2406700,
    			'nome' => 'Lajes',
    			'UF' => 'RN',
    		),
    		1149 => 
    		array (
    			'codigoIbge' => 2406809,
    			'nome' => 'Lajes Pintadas',
    			'UF' => 'RN',
    		),
    		1150 => 
    		array (
    			'codigoIbge' => 2406908,
    			'nome' => 'Lucrécia',
    			'UF' => 'RN',
    		),
    		1151 => 
    		array (
    			'codigoIbge' => 2407005,
    			'nome' => 'Luís Gomes',
    			'UF' => 'RN',
    		),
    		1152 => 
    		array (
    			'codigoIbge' => 2407104,
    			'nome' => 'Macaíba',
    			'UF' => 'RN',
    		),
    		1153 => 
    		array (
    			'codigoIbge' => 2407203,
    			'nome' => 'Macau',
    			'UF' => 'RN',
    		),
    		1154 => 
    		array (
    			'codigoIbge' => 2407252,
    			'nome' => 'Major Sales',
    			'UF' => 'RN',
    		),
    		1155 => 
    		array (
    			'codigoIbge' => 2407302,
    			'nome' => 'Marcelino Vieira',
    			'UF' => 'RN',
    		),
    		1156 => 
    		array (
    			'codigoIbge' => 2407401,
    			'nome' => 'Martins',
    			'UF' => 'RN',
    		),
    		1157 => 
    		array (
    			'codigoIbge' => 2407500,
    			'nome' => 'Maxaranguape',
    			'UF' => 'RN',
    		),
    		1158 => 
    		array (
    			'codigoIbge' => 2407609,
    			'nome' => 'Messias Targino',
    			'UF' => 'RN',
    		),
    		1159 => 
    		array (
    			'codigoIbge' => 2407708,
    			'nome' => 'Montanhas',
    			'UF' => 'RN',
    		),
    		1160 => 
    		array (
    			'codigoIbge' => 2407807,
    			'nome' => 'Monte Alegre',
    			'UF' => 'RN',
    		),
    		1161 => 
    		array (
    			'codigoIbge' => 2407906,
    			'nome' => 'Monte das Gameleiras',
    			'UF' => 'RN',
    		),
    		1162 => 
    		array (
    			'codigoIbge' => 2408003,
    			'nome' => 'Mossoró',
    			'UF' => 'RN',
    		),
    		1163 => 
    		array (
    			'codigoIbge' => 2408102,
    			'nome' => 'Natal',
    			'UF' => 'RN',
    		),
    		1164 => 
    		array (
    			'codigoIbge' => 2408201,
    			'nome' => 'Nísia Floresta',
    			'UF' => 'RN',
    		),
    		1165 => 
    		array (
    			'codigoIbge' => 2408300,
    			'nome' => 'Nova Cruz',
    			'UF' => 'RN',
    		),
    		1166 => 
    		array (
    			'codigoIbge' => 2408409,
    			'nome' => 'Olho d\'Água do Borges',
    			'UF' => 'RN',
    		),
    		1167 => 
    		array (
    			'codigoIbge' => 2408508,
    			'nome' => 'Ouro Branco',
    			'UF' => 'RN',
    		),
    		1168 => 
    		array (
    			'codigoIbge' => 2408607,
    			'nome' => 'Paraná',
    			'UF' => 'RN',
    		),
    		1169 => 
    		array (
    			'codigoIbge' => 2408706,
    			'nome' => 'Paraú',
    			'UF' => 'RN',
    		),
    		1170 => 
    		array (
    			'codigoIbge' => 2408805,
    			'nome' => 'Parazinho',
    			'UF' => 'RN',
    		),
    		1171 => 
    		array (
    			'codigoIbge' => 2408904,
    			'nome' => 'Parelhas',
    			'UF' => 'RN',
    		),
    		1172 => 
    		array (
    			'codigoIbge' => 2408953,
    			'nome' => 'Rio do Fogo',
    			'UF' => 'RN',
    		),
    		1173 => 
    		array (
    			'codigoIbge' => 2409100,
    			'nome' => 'Passa e Fica',
    			'UF' => 'RN',
    		),
    		1174 => 
    		array (
    			'codigoIbge' => 2409209,
    			'nome' => 'Passagem',
    			'UF' => 'RN',
    		),
    		1175 => 
    		array (
    			'codigoIbge' => 2409308,
    			'nome' => 'Patu',
    			'UF' => 'RN',
    		),
    		1176 => 
    		array (
    			'codigoIbge' => 2409332,
    			'nome' => 'Santa Maria',
    			'UF' => 'RN',
    		),
    		1177 => 
    		array (
    			'codigoIbge' => 2409407,
    			'nome' => 'Pau dos Ferros',
    			'UF' => 'RN',
    		),
    		1178 => 
    		array (
    			'codigoIbge' => 2409506,
    			'nome' => 'Pedra Grande',
    			'UF' => 'RN',
    		),
    		1179 => 
    		array (
    			'codigoIbge' => 2409605,
    			'nome' => 'Pedra Preta',
    			'UF' => 'RN',
    		),
    		1180 => 
    		array (
    			'codigoIbge' => 2409704,
    			'nome' => 'Pedro Avelino',
    			'UF' => 'RN',
    		),
    		1181 => 
    		array (
    			'codigoIbge' => 2409803,
    			'nome' => 'Pedro Velho',
    			'UF' => 'RN',
    		),
    		1182 => 
    		array (
    			'codigoIbge' => 2409902,
    			'nome' => 'Pendências',
    			'UF' => 'RN',
    		),
    		1183 => 
    		array (
    			'codigoIbge' => 2410009,
    			'nome' => 'Pilões',
    			'UF' => 'RN',
    		),
    		1184 => 
    		array (
    			'codigoIbge' => 2410108,
    			'nome' => 'Poço Branco',
    			'UF' => 'RN',
    		),
    		1185 => 
    		array (
    			'codigoIbge' => 2410207,
    			'nome' => 'Portalegre',
    			'UF' => 'RN',
    		),
    		1186 => 
    		array (
    			'codigoIbge' => 2410256,
    			'nome' => 'Porto do Mangue',
    			'UF' => 'RN',
    		),
    		1187 => 
    		array (
    			'codigoIbge' => 2410306,
    			'nome' => 'Serra Caiada',
    			'UF' => 'RN',
    		),
    		1188 => 
    		array (
    			'codigoIbge' => 2410405,
    			'nome' => 'Pureza',
    			'UF' => 'RN',
    		),
    		1189 => 
    		array (
    			'codigoIbge' => 2410504,
    			'nome' => 'Rafael Fernandes',
    			'UF' => 'RN',
    		),
    		1190 => 
    		array (
    			'codigoIbge' => 2410603,
    			'nome' => 'Rafael Godeiro',
    			'UF' => 'RN',
    		),
    		1191 => 
    		array (
    			'codigoIbge' => 2410702,
    			'nome' => 'Riacho da Cruz',
    			'UF' => 'RN',
    		),
    		1192 => 
    		array (
    			'codigoIbge' => 2410801,
    			'nome' => 'Riacho de Santana',
    			'UF' => 'RN',
    		),
    		1193 => 
    		array (
    			'codigoIbge' => 2410900,
    			'nome' => 'Riachuelo',
    			'UF' => 'RN',
    		),
    		1194 => 
    		array (
    			'codigoIbge' => 2411007,
    			'nome' => 'Rodolfo Fernandes',
    			'UF' => 'RN',
    		),
    		1195 => 
    		array (
    			'codigoIbge' => 2411056,
    			'nome' => 'Tibau',
    			'UF' => 'RN',
    		),
    		1196 => 
    		array (
    			'codigoIbge' => 2411106,
    			'nome' => 'Ruy Barbosa',
    			'UF' => 'RN',
    		),
    		1197 => 
    		array (
    			'codigoIbge' => 2411205,
    			'nome' => 'Santa Cruz',
    			'UF' => 'RN',
    		),
    		1198 => 
    		array (
    			'codigoIbge' => 2411403,
    			'nome' => 'Santana do Matos',
    			'UF' => 'RN',
    		),
    		1199 => 
    		array (
    			'codigoIbge' => 2411429,
    			'nome' => 'Santana do Seridó',
    			'UF' => 'RN',
    		),
    		1200 => 
    		array (
    			'codigoIbge' => 2411502,
    			'nome' => 'Santo Antônio',
    			'UF' => 'RN',
    		),
    		1201 => 
    		array (
    			'codigoIbge' => 2411601,
    			'nome' => 'São Bento do Norte',
    			'UF' => 'RN',
    		),
    		1202 => 
    		array (
    			'codigoIbge' => 2411700,
    			'nome' => 'São Bento do Trairí',
    			'UF' => 'RN',
    		),
    		1203 => 
    		array (
    			'codigoIbge' => 2411809,
    			'nome' => 'São Fernando',
    			'UF' => 'RN',
    		),
    		1204 => 
    		array (
    			'codigoIbge' => 2411908,
    			'nome' => 'São Francisco do Oeste',
    			'UF' => 'RN',
    		),
    		1205 => 
    		array (
    			'codigoIbge' => 2412005,
    			'nome' => 'São Gonçalo do Amarante',
    			'UF' => 'RN',
    		),
    		1206 => 
    		array (
    			'codigoIbge' => 2412104,
    			'nome' => 'São João do Sabugi',
    			'UF' => 'RN',
    		),
    		1207 => 
    		array (
    			'codigoIbge' => 2412203,
    			'nome' => 'São José de Mipibu',
    			'UF' => 'RN',
    		),
    		1208 => 
    		array (
    			'codigoIbge' => 2412302,
    			'nome' => 'São José do Campestre',
    			'UF' => 'RN',
    		),
    		1209 => 
    		array (
    			'codigoIbge' => 2412401,
    			'nome' => 'São José do Seridó',
    			'UF' => 'RN',
    		),
    		1210 => 
    		array (
    			'codigoIbge' => 2412500,
    			'nome' => 'São Miguel',
    			'UF' => 'RN',
    		),
    		1211 => 
    		array (
    			'codigoIbge' => 2412559,
    			'nome' => 'São Miguel do Gostoso',
    			'UF' => 'RN',
    		),
    		1212 => 
    		array (
    			'codigoIbge' => 2412609,
    			'nome' => 'São Paulo do Potengi',
    			'UF' => 'RN',
    		),
    		1213 => 
    		array (
    			'codigoIbge' => 2412708,
    			'nome' => 'São Pedro',
    			'UF' => 'RN',
    		),
    		1214 => 
    		array (
    			'codigoIbge' => 2412807,
    			'nome' => 'São Rafael',
    			'UF' => 'RN',
    		),
    		1215 => 
    		array (
    			'codigoIbge' => 2412906,
    			'nome' => 'São Tomé',
    			'UF' => 'RN',
    		),
    		1216 => 
    		array (
    			'codigoIbge' => 2413003,
    			'nome' => 'São Vicente',
    			'UF' => 'RN',
    		),
    		1217 => 
    		array (
    			'codigoIbge' => 2413102,
    			'nome' => 'Senador Elói de Souza',
    			'UF' => 'RN',
    		),
    		1218 => 
    		array (
    			'codigoIbge' => 2413201,
    			'nome' => 'Senador Georgino Avelino',
    			'UF' => 'RN',
    		),
    		1219 => 
    		array (
    			'codigoIbge' => 2413300,
    			'nome' => 'Serra de São Bento',
    			'UF' => 'RN',
    		),
    		1220 => 
    		array (
    			'codigoIbge' => 2413359,
    			'nome' => 'Serra do Mel',
    			'UF' => 'RN',
    		),
    		1221 => 
    		array (
    			'codigoIbge' => 2413409,
    			'nome' => 'Serra Negra do Norte',
    			'UF' => 'RN',
    		),
    		1222 => 
    		array (
    			'codigoIbge' => 2413508,
    			'nome' => 'Serrinha',
    			'UF' => 'RN',
    		),
    		1223 => 
    		array (
    			'codigoIbge' => 2413557,
    			'nome' => 'Serrinha dos Pintos',
    			'UF' => 'RN',
    		),
    		1224 => 
    		array (
    			'codigoIbge' => 2413607,
    			'nome' => 'Severiano Melo',
    			'UF' => 'RN',
    		),
    		1225 => 
    		array (
    			'codigoIbge' => 2413706,
    			'nome' => 'Sítio Novo',
    			'UF' => 'RN',
    		),
    		1226 => 
    		array (
    			'codigoIbge' => 2413805,
    			'nome' => 'Taboleiro Grande',
    			'UF' => 'RN',
    		),
    		1227 => 
    		array (
    			'codigoIbge' => 2413904,
    			'nome' => 'Taipu',
    			'UF' => 'RN',
    		),
    		1228 => 
    		array (
    			'codigoIbge' => 2414001,
    			'nome' => 'Tangará',
    			'UF' => 'RN',
    		),
    		1229 => 
    		array (
    			'codigoIbge' => 2414100,
    			'nome' => 'Tenente Ananias',
    			'UF' => 'RN',
    		),
    		1230 => 
    		array (
    			'codigoIbge' => 2414159,
    			'nome' => 'Tenente Laurentino Cruz',
    			'UF' => 'RN',
    		),
    		1231 => 
    		array (
    			'codigoIbge' => 2414209,
    			'nome' => 'Tibau do Sul',
    			'UF' => 'RN',
    		),
    		1232 => 
    		array (
    			'codigoIbge' => 2414308,
    			'nome' => 'Timbaúba dos Batistas',
    			'UF' => 'RN',
    		),
    		1233 => 
    		array (
    			'codigoIbge' => 2414407,
    			'nome' => 'Touros',
    			'UF' => 'RN',
    		),
    		1234 => 
    		array (
    			'codigoIbge' => 2414456,
    			'nome' => 'Triunfo Potiguar',
    			'UF' => 'RN',
    		),
    		1235 => 
    		array (
    			'codigoIbge' => 2414506,
    			'nome' => 'Umarizal',
    			'UF' => 'RN',
    		),
    		1236 => 
    		array (
    			'codigoIbge' => 2414605,
    			'nome' => 'Upanema',
    			'UF' => 'RN',
    		),
    		1237 => 
    		array (
    			'codigoIbge' => 2414704,
    			'nome' => 'Várzea',
    			'UF' => 'RN',
    		),
    		1238 => 
    		array (
    			'codigoIbge' => 2414753,
    			'nome' => 'Venha-Ver',
    			'UF' => 'RN',
    		),
    		1239 => 
    		array (
    			'codigoIbge' => 2414803,
    			'nome' => 'Vera Cruz',
    			'UF' => 'RN',
    		),
    		1240 => 
    		array (
    			'codigoIbge' => 2414902,
    			'nome' => 'Viçosa',
    			'UF' => 'RN',
    		),
    		1241 => 
    		array (
    			'codigoIbge' => 2415008,
    			'nome' => 'Vila Flor',
    			'UF' => 'RN',
    		),
    		1242 => 
    		array (
    			'codigoIbge' => 2500106,
    			'nome' => 'Água Branca',
    			'UF' => 'PB',
    		),
    		1243 => 
    		array (
    			'codigoIbge' => 2500205,
    			'nome' => 'Aguiar',
    			'UF' => 'PB',
    		),
    		1244 => 
    		array (
    			'codigoIbge' => 2500304,
    			'nome' => 'Alagoa Grande',
    			'UF' => 'PB',
    		),
    		1245 => 
    		array (
    			'codigoIbge' => 2500403,
    			'nome' => 'Alagoa Nova',
    			'UF' => 'PB',
    		),
    		1246 => 
    		array (
    			'codigoIbge' => 2500502,
    			'nome' => 'Alagoinha',
    			'UF' => 'PB',
    		),
    		1247 => 
    		array (
    			'codigoIbge' => 2500536,
    			'nome' => 'Alcantil',
    			'UF' => 'PB',
    		),
    		1248 => 
    		array (
    			'codigoIbge' => 2500577,
    			'nome' => 'Algodão de Jandaíra',
    			'UF' => 'PB',
    		),
    		1249 => 
    		array (
    			'codigoIbge' => 2500601,
    			'nome' => 'Alhandra',
    			'UF' => 'PB',
    		),
    		1250 => 
    		array (
    			'codigoIbge' => 2500700,
    			'nome' => 'São João do Rio do Peixe',
    			'UF' => 'PB',
    		),
    		1251 => 
    		array (
    			'codigoIbge' => 2500734,
    			'nome' => 'Amparo',
    			'UF' => 'PB',
    		),
    		1252 => 
    		array (
    			'codigoIbge' => 2500775,
    			'nome' => 'Aparecida',
    			'UF' => 'PB',
    		),
    		1253 => 
    		array (
    			'codigoIbge' => 2500809,
    			'nome' => 'Araçagi',
    			'UF' => 'PB',
    		),
    		1254 => 
    		array (
    			'codigoIbge' => 2500908,
    			'nome' => 'Arara',
    			'UF' => 'PB',
    		),
    		1255 => 
    		array (
    			'codigoIbge' => 2501005,
    			'nome' => 'Araruna',
    			'UF' => 'PB',
    		),
    		1256 => 
    		array (
    			'codigoIbge' => 2501104,
    			'nome' => 'Areia',
    			'UF' => 'PB',
    		),
    		1257 => 
    		array (
    			'codigoIbge' => 2501153,
    			'nome' => 'Areia de Baraúnas',
    			'UF' => 'PB',
    		),
    		1258 => 
    		array (
    			'codigoIbge' => 2501203,
    			'nome' => 'Areial',
    			'UF' => 'PB',
    		),
    		1259 => 
    		array (
    			'codigoIbge' => 2501302,
    			'nome' => 'Aroeiras',
    			'UF' => 'PB',
    		),
    		1260 => 
    		array (
    			'codigoIbge' => 2501351,
    			'nome' => 'Assunção',
    			'UF' => 'PB',
    		),
    		1261 => 
    		array (
    			'codigoIbge' => 2501401,
    			'nome' => 'Baía da Traição',
    			'UF' => 'PB',
    		),
    		1262 => 
    		array (
    			'codigoIbge' => 2501500,
    			'nome' => 'Bananeiras',
    			'UF' => 'PB',
    		),
    		1263 => 
    		array (
    			'codigoIbge' => 2501534,
    			'nome' => 'Baraúna',
    			'UF' => 'PB',
    		),
    		1264 => 
    		array (
    			'codigoIbge' => 2501575,
    			'nome' => 'Barra de Santana',
    			'UF' => 'PB',
    		),
    		1265 => 
    		array (
    			'codigoIbge' => 2501609,
    			'nome' => 'Barra de Santa Rosa',
    			'UF' => 'PB',
    		),
    		1266 => 
    		array (
    			'codigoIbge' => 2501708,
    			'nome' => 'Barra de São Miguel',
    			'UF' => 'PB',
    		),
    		1267 => 
    		array (
    			'codigoIbge' => 2501807,
    			'nome' => 'Bayeux',
    			'UF' => 'PB',
    		),
    		1268 => 
    		array (
    			'codigoIbge' => 2501906,
    			'nome' => 'Belém',
    			'UF' => 'PB',
    		),
    		1269 => 
    		array (
    			'codigoIbge' => 2502003,
    			'nome' => 'Belém do Brejo do Cruz',
    			'UF' => 'PB',
    		),
    		1270 => 
    		array (
    			'codigoIbge' => 2502052,
    			'nome' => 'Bernardino Batista',
    			'UF' => 'PB',
    		),
    		1271 => 
    		array (
    			'codigoIbge' => 2502102,
    			'nome' => 'Boa Ventura',
    			'UF' => 'PB',
    		),
    		1272 => 
    		array (
    			'codigoIbge' => 2502151,
    			'nome' => 'Boa Vista',
    			'UF' => 'PB',
    		),
    		1273 => 
    		array (
    			'codigoIbge' => 2502201,
    			'nome' => 'Bom Jesus',
    			'UF' => 'PB',
    		),
    		1274 => 
    		array (
    			'codigoIbge' => 2502300,
    			'nome' => 'Bom Sucesso',
    			'UF' => 'PB',
    		),
    		1275 => 
    		array (
    			'codigoIbge' => 2502409,
    			'nome' => 'Bonito de Santa Fé',
    			'UF' => 'PB',
    		),
    		1276 => 
    		array (
    			'codigoIbge' => 2502508,
    			'nome' => 'Boqueirão',
    			'UF' => 'PB',
    		),
    		1277 => 
    		array (
    			'codigoIbge' => 2502607,
    			'nome' => 'Igaracy',
    			'UF' => 'PB',
    		),
    		1278 => 
    		array (
    			'codigoIbge' => 2502706,
    			'nome' => 'Borborema',
    			'UF' => 'PB',
    		),
    		1279 => 
    		array (
    			'codigoIbge' => 2502805,
    			'nome' => 'Brejo do Cruz',
    			'UF' => 'PB',
    		),
    		1280 => 
    		array (
    			'codigoIbge' => 2502904,
    			'nome' => 'Brejo dos Santos',
    			'UF' => 'PB',
    		),
    		1281 => 
    		array (
    			'codigoIbge' => 2503001,
    			'nome' => 'Caaporã',
    			'UF' => 'PB',
    		),
    		1282 => 
    		array (
    			'codigoIbge' => 2503100,
    			'nome' => 'Cabaceiras',
    			'UF' => 'PB',
    		),
    		1283 => 
    		array (
    			'codigoIbge' => 2503209,
    			'nome' => 'Cabedelo',
    			'UF' => 'PB',
    		),
    		1284 => 
    		array (
    			'codigoIbge' => 2503308,
    			'nome' => 'Cachoeira dos Índios',
    			'UF' => 'PB',
    		),
    		1285 => 
    		array (
    			'codigoIbge' => 2503407,
    			'nome' => 'Cacimba de Areia',
    			'UF' => 'PB',
    		),
    		1286 => 
    		array (
    			'codigoIbge' => 2503506,
    			'nome' => 'Cacimba de Dentro',
    			'UF' => 'PB',
    		),
    		1287 => 
    		array (
    			'codigoIbge' => 2503555,
    			'nome' => 'Cacimbas',
    			'UF' => 'PB',
    		),
    		1288 => 
    		array (
    			'codigoIbge' => 2503605,
    			'nome' => 'Caiçara',
    			'UF' => 'PB',
    		),
    		1289 => 
    		array (
    			'codigoIbge' => 2503704,
    			'nome' => 'Cajazeiras',
    			'UF' => 'PB',
    		),
    		1290 => 
    		array (
    			'codigoIbge' => 2503753,
    			'nome' => 'Cajazeirinhas',
    			'UF' => 'PB',
    		),
    		1291 => 
    		array (
    			'codigoIbge' => 2503803,
    			'nome' => 'Caldas Brandão',
    			'UF' => 'PB',
    		),
    		1292 => 
    		array (
    			'codigoIbge' => 2503902,
    			'nome' => 'Camalaú',
    			'UF' => 'PB',
    		),
    		1293 => 
    		array (
    			'codigoIbge' => 2504009,
    			'nome' => 'Campina Grande',
    			'UF' => 'PB',
    		),
    		1294 => 
    		array (
    			'codigoIbge' => 2504033,
    			'nome' => 'Capim',
    			'UF' => 'PB',
    		),
    		1295 => 
    		array (
    			'codigoIbge' => 2504074,
    			'nome' => 'Caraúbas',
    			'UF' => 'PB',
    		),
    		1296 => 
    		array (
    			'codigoIbge' => 2504108,
    			'nome' => 'Carrapateira',
    			'UF' => 'PB',
    		),
    		1297 => 
    		array (
    			'codigoIbge' => 2504157,
    			'nome' => 'Casserengue',
    			'UF' => 'PB',
    		),
    		1298 => 
    		array (
    			'codigoIbge' => 2504207,
    			'nome' => 'Catingueira',
    			'UF' => 'PB',
    		),
    		1299 => 
    		array (
    			'codigoIbge' => 2504306,
    			'nome' => 'Catolé do Rocha',
    			'UF' => 'PB',
    		),
    		1300 => 
    		array (
    			'codigoIbge' => 2504355,
    			'nome' => 'Caturité',
    			'UF' => 'PB',
    		),
    		1301 => 
    		array (
    			'codigoIbge' => 2504405,
    			'nome' => 'Conceição',
    			'UF' => 'PB',
    		),
    		1302 => 
    		array (
    			'codigoIbge' => 2504504,
    			'nome' => 'Condado',
    			'UF' => 'PB',
    		),
    		1303 => 
    		array (
    			'codigoIbge' => 2504603,
    			'nome' => 'Conde',
    			'UF' => 'PB',
    		),
    		1304 => 
    		array (
    			'codigoIbge' => 2504702,
    			'nome' => 'Congo',
    			'UF' => 'PB',
    		),
    		1305 => 
    		array (
    			'codigoIbge' => 2504801,
    			'nome' => 'Coremas',
    			'UF' => 'PB',
    		),
    		1306 => 
    		array (
    			'codigoIbge' => 2504850,
    			'nome' => 'Coxixola',
    			'UF' => 'PB',
    		),
    		1307 => 
    		array (
    			'codigoIbge' => 2504900,
    			'nome' => 'Cruz do Espírito Santo',
    			'UF' => 'PB',
    		),
    		1308 => 
    		array (
    			'codigoIbge' => 2505006,
    			'nome' => 'Cubati',
    			'UF' => 'PB',
    		),
    		1309 => 
    		array (
    			'codigoIbge' => 2505105,
    			'nome' => 'Cuité',
    			'UF' => 'PB',
    		),
    		1310 => 
    		array (
    			'codigoIbge' => 2505204,
    			'nome' => 'Cuitegi',
    			'UF' => 'PB',
    		),
    		1311 => 
    		array (
    			'codigoIbge' => 2505238,
    			'nome' => 'Cuité de Mamanguape',
    			'UF' => 'PB',
    		),
    		1312 => 
    		array (
    			'codigoIbge' => 2505279,
    			'nome' => 'Curral de Cima',
    			'UF' => 'PB',
    		),
    		1313 => 
    		array (
    			'codigoIbge' => 2505303,
    			'nome' => 'Curral Velho',
    			'UF' => 'PB',
    		),
    		1314 => 
    		array (
    			'codigoIbge' => 2505352,
    			'nome' => 'Damião',
    			'UF' => 'PB',
    		),
    		1315 => 
    		array (
    			'codigoIbge' => 2505402,
    			'nome' => 'Desterro',
    			'UF' => 'PB',
    		),
    		1316 => 
    		array (
    			'codigoIbge' => 2505501,
    			'nome' => 'Vista Serrana',
    			'UF' => 'PB',
    		),
    		1317 => 
    		array (
    			'codigoIbge' => 2505600,
    			'nome' => 'Diamante',
    			'UF' => 'PB',
    		),
    		1318 => 
    		array (
    			'codigoIbge' => 2505709,
    			'nome' => 'Dona Inês',
    			'UF' => 'PB',
    		),
    		1319 => 
    		array (
    			'codigoIbge' => 2505808,
    			'nome' => 'Duas Estradas',
    			'UF' => 'PB',
    		),
    		1320 => 
    		array (
    			'codigoIbge' => 2505907,
    			'nome' => 'Emas',
    			'UF' => 'PB',
    		),
    		1321 => 
    		array (
    			'codigoIbge' => 2506004,
    			'nome' => 'Esperança',
    			'UF' => 'PB',
    		),
    		1322 => 
    		array (
    			'codigoIbge' => 2506103,
    			'nome' => 'Fagundes',
    			'UF' => 'PB',
    		),
    		1323 => 
    		array (
    			'codigoIbge' => 2506202,
    			'nome' => 'Frei Martinho',
    			'UF' => 'PB',
    		),
    		1324 => 
    		array (
    			'codigoIbge' => 2506251,
    			'nome' => 'Gado Bravo',
    			'UF' => 'PB',
    		),
    		1325 => 
    		array (
    			'codigoIbge' => 2506301,
    			'nome' => 'Guarabira',
    			'UF' => 'PB',
    		),
    		1326 => 
    		array (
    			'codigoIbge' => 2506400,
    			'nome' => 'Gurinhém',
    			'UF' => 'PB',
    		),
    		1327 => 
    		array (
    			'codigoIbge' => 2506509,
    			'nome' => 'Gurjão',
    			'UF' => 'PB',
    		),
    		1328 => 
    		array (
    			'codigoIbge' => 2506608,
    			'nome' => 'Ibiara',
    			'UF' => 'PB',
    		),
    		1329 => 
    		array (
    			'codigoIbge' => 2506707,
    			'nome' => 'Imaculada',
    			'UF' => 'PB',
    		),
    		1330 => 
    		array (
    			'codigoIbge' => 2506806,
    			'nome' => 'Ingá',
    			'UF' => 'PB',
    		),
    		1331 => 
    		array (
    			'codigoIbge' => 2506905,
    			'nome' => 'Itabaiana',
    			'UF' => 'PB',
    		),
    		1332 => 
    		array (
    			'codigoIbge' => 2507002,
    			'nome' => 'Itaporanga',
    			'UF' => 'PB',
    		),
    		1333 => 
    		array (
    			'codigoIbge' => 2507101,
    			'nome' => 'Itapororoca',
    			'UF' => 'PB',
    		),
    		1334 => 
    		array (
    			'codigoIbge' => 2507200,
    			'nome' => 'Itatuba',
    			'UF' => 'PB',
    		),
    		1335 => 
    		array (
    			'codigoIbge' => 2507309,
    			'nome' => 'Jacaraú',
    			'UF' => 'PB',
    		),
    		1336 => 
    		array (
    			'codigoIbge' => 2507408,
    			'nome' => 'Jericó',
    			'UF' => 'PB',
    		),
    		1337 => 
    		array (
    			'codigoIbge' => 2507507,
    			'nome' => 'João Pessoa',
    			'UF' => 'PB',
    		),
    		1338 => 
    		array (
    			'codigoIbge' => 2507606,
    			'nome' => 'Juarez Távora',
    			'UF' => 'PB',
    		),
    		1339 => 
    		array (
    			'codigoIbge' => 2507705,
    			'nome' => 'Juazeirinho',
    			'UF' => 'PB',
    		),
    		1340 => 
    		array (
    			'codigoIbge' => 2507804,
    			'nome' => 'Junco do Seridó',
    			'UF' => 'PB',
    		),
    		1341 => 
    		array (
    			'codigoIbge' => 2507903,
    			'nome' => 'Juripiranga',
    			'UF' => 'PB',
    		),
    		1342 => 
    		array (
    			'codigoIbge' => 2508000,
    			'nome' => 'Juru',
    			'UF' => 'PB',
    		),
    		1343 => 
    		array (
    			'codigoIbge' => 2508109,
    			'nome' => 'Lagoa',
    			'UF' => 'PB',
    		),
    		1344 => 
    		array (
    			'codigoIbge' => 2508208,
    			'nome' => 'Lagoa de Dentro',
    			'UF' => 'PB',
    		),
    		1345 => 
    		array (
    			'codigoIbge' => 2508307,
    			'nome' => 'Lagoa Seca',
    			'UF' => 'PB',
    		),
    		1346 => 
    		array (
    			'codigoIbge' => 2508406,
    			'nome' => 'Lastro',
    			'UF' => 'PB',
    		),
    		1347 => 
    		array (
    			'codigoIbge' => 2508505,
    			'nome' => 'Livramento',
    			'UF' => 'PB',
    		),
    		1348 => 
    		array (
    			'codigoIbge' => 2508554,
    			'nome' => 'Logradouro',
    			'UF' => 'PB',
    		),
    		1349 => 
    		array (
    			'codigoIbge' => 2508604,
    			'nome' => 'Lucena',
    			'UF' => 'PB',
    		),
    		1350 => 
    		array (
    			'codigoIbge' => 2508703,
    			'nome' => 'Mãe d\'Água',
    			'UF' => 'PB',
    		),
    		1351 => 
    		array (
    			'codigoIbge' => 2508802,
    			'nome' => 'Malta',
    			'UF' => 'PB',
    		),
    		1352 => 
    		array (
    			'codigoIbge' => 2508901,
    			'nome' => 'Mamanguape',
    			'UF' => 'PB',
    		),
    		1353 => 
    		array (
    			'codigoIbge' => 2509008,
    			'nome' => 'Manaíra',
    			'UF' => 'PB',
    		),
    		1354 => 
    		array (
    			'codigoIbge' => 2509057,
    			'nome' => 'Marcação',
    			'UF' => 'PB',
    		),
    		1355 => 
    		array (
    			'codigoIbge' => 2509107,
    			'nome' => 'Mari',
    			'UF' => 'PB',
    		),
    		1356 => 
    		array (
    			'codigoIbge' => 2509156,
    			'nome' => 'Marizópolis',
    			'UF' => 'PB',
    		),
    		1357 => 
    		array (
    			'codigoIbge' => 2509206,
    			'nome' => 'Massaranduba',
    			'UF' => 'PB',
    		),
    		1358 => 
    		array (
    			'codigoIbge' => 2509305,
    			'nome' => 'Mataraca',
    			'UF' => 'PB',
    		),
    		1359 => 
    		array (
    			'codigoIbge' => 2509339,
    			'nome' => 'Matinhas',
    			'UF' => 'PB',
    		),
    		1360 => 
    		array (
    			'codigoIbge' => 2509370,
    			'nome' => 'Mato Grosso',
    			'UF' => 'PB',
    		),
    		1361 => 
    		array (
    			'codigoIbge' => 2509396,
    			'nome' => 'Maturéia',
    			'UF' => 'PB',
    		),
    		1362 => 
    		array (
    			'codigoIbge' => 2509404,
    			'nome' => 'Mogeiro',
    			'UF' => 'PB',
    		),
    		1363 => 
    		array (
    			'codigoIbge' => 2509503,
    			'nome' => 'Montadas',
    			'UF' => 'PB',
    		),
    		1364 => 
    		array (
    			'codigoIbge' => 2509602,
    			'nome' => 'Monte Horebe',
    			'UF' => 'PB',
    		),
    		1365 => 
    		array (
    			'codigoIbge' => 2509701,
    			'nome' => 'Monteiro',
    			'UF' => 'PB',
    		),
    		1366 => 
    		array (
    			'codigoIbge' => 2509800,
    			'nome' => 'Mulungu',
    			'UF' => 'PB',
    		),
    		1367 => 
    		array (
    			'codigoIbge' => 2509909,
    			'nome' => 'Natuba',
    			'UF' => 'PB',
    		),
    		1368 => 
    		array (
    			'codigoIbge' => 2510006,
    			'nome' => 'Nazarezinho',
    			'UF' => 'PB',
    		),
    		1369 => 
    		array (
    			'codigoIbge' => 2510105,
    			'nome' => 'Nova Floresta',
    			'UF' => 'PB',
    		),
    		1370 => 
    		array (
    			'codigoIbge' => 2510204,
    			'nome' => 'Nova Olinda',
    			'UF' => 'PB',
    		),
    		1371 => 
    		array (
    			'codigoIbge' => 2510303,
    			'nome' => 'Nova Palmeira',
    			'UF' => 'PB',
    		),
    		1372 => 
    		array (
    			'codigoIbge' => 2510402,
    			'nome' => 'Olho d\'Água',
    			'UF' => 'PB',
    		),
    		1373 => 
    		array (
    			'codigoIbge' => 2510501,
    			'nome' => 'Olivedos',
    			'UF' => 'PB',
    		),
    		1374 => 
    		array (
    			'codigoIbge' => 2510600,
    			'nome' => 'Ouro Velho',
    			'UF' => 'PB',
    		),
    		1375 => 
    		array (
    			'codigoIbge' => 2510659,
    			'nome' => 'Parari',
    			'UF' => 'PB',
    		),
    		1376 => 
    		array (
    			'codigoIbge' => 2510709,
    			'nome' => 'Passagem',
    			'UF' => 'PB',
    		),
    		1377 => 
    		array (
    			'codigoIbge' => 2510808,
    			'nome' => 'Patos',
    			'UF' => 'PB',
    		),
    		1378 => 
    		array (
    			'codigoIbge' => 2510907,
    			'nome' => 'Paulista',
    			'UF' => 'PB',
    		),
    		1379 => 
    		array (
    			'codigoIbge' => 2511004,
    			'nome' => 'Pedra Branca',
    			'UF' => 'PB',
    		),
    		1380 => 
    		array (
    			'codigoIbge' => 2511103,
    			'nome' => 'Pedra Lavrada',
    			'UF' => 'PB',
    		),
    		1381 => 
    		array (
    			'codigoIbge' => 2511202,
    			'nome' => 'Pedras de Fogo',
    			'UF' => 'PB',
    		),
    		1382 => 
    		array (
    			'codigoIbge' => 2511301,
    			'nome' => 'Piancó',
    			'UF' => 'PB',
    		),
    		1383 => 
    		array (
    			'codigoIbge' => 2511400,
    			'nome' => 'Picuí',
    			'UF' => 'PB',
    		),
    		1384 => 
    		array (
    			'codigoIbge' => 2511509,
    			'nome' => 'Pilar',
    			'UF' => 'PB',
    		),
    		1385 => 
    		array (
    			'codigoIbge' => 2511608,
    			'nome' => 'Pilões',
    			'UF' => 'PB',
    		),
    		1386 => 
    		array (
    			'codigoIbge' => 2511707,
    			'nome' => 'Pilõezinhos',
    			'UF' => 'PB',
    		),
    		1387 => 
    		array (
    			'codigoIbge' => 2511806,
    			'nome' => 'Pirpirituba',
    			'UF' => 'PB',
    		),
    		1388 => 
    		array (
    			'codigoIbge' => 2511905,
    			'nome' => 'Pitimbu',
    			'UF' => 'PB',
    		),
    		1389 => 
    		array (
    			'codigoIbge' => 2512002,
    			'nome' => 'Pocinhos',
    			'UF' => 'PB',
    		),
    		1390 => 
    		array (
    			'codigoIbge' => 2512036,
    			'nome' => 'Poço Dantas',
    			'UF' => 'PB',
    		),
    		1391 => 
    		array (
    			'codigoIbge' => 2512077,
    			'nome' => 'Poço de José de Moura',
    			'UF' => 'PB',
    		),
    		1392 => 
    		array (
    			'codigoIbge' => 2512101,
    			'nome' => 'Pombal',
    			'UF' => 'PB',
    		),
    		1393 => 
    		array (
    			'codigoIbge' => 2512200,
    			'nome' => 'Prata',
    			'UF' => 'PB',
    		),
    		1394 => 
    		array (
    			'codigoIbge' => 2512309,
    			'nome' => 'Princesa Isabel',
    			'UF' => 'PB',
    		),
    		1395 => 
    		array (
    			'codigoIbge' => 2512408,
    			'nome' => 'Puxinanã',
    			'UF' => 'PB',
    		),
    		1396 => 
    		array (
    			'codigoIbge' => 2512507,
    			'nome' => 'Queimadas',
    			'UF' => 'PB',
    		),
    		1397 => 
    		array (
    			'codigoIbge' => 2512606,
    			'nome' => 'Quixaba',
    			'UF' => 'PB',
    		),
    		1398 => 
    		array (
    			'codigoIbge' => 2512705,
    			'nome' => 'Remígio',
    			'UF' => 'PB',
    		),
    		1399 => 
    		array (
    			'codigoIbge' => 2512721,
    			'nome' => 'Pedro Régis',
    			'UF' => 'PB',
    		),
    		1400 => 
    		array (
    			'codigoIbge' => 2512747,
    			'nome' => 'Riachão',
    			'UF' => 'PB',
    		),
    		1401 => 
    		array (
    			'codigoIbge' => 2512754,
    			'nome' => 'Riachão do Bacamarte',
    			'UF' => 'PB',
    		),
    		1402 => 
    		array (
    			'codigoIbge' => 2512762,
    			'nome' => 'Riachão do Poço',
    			'UF' => 'PB',
    		),
    		1403 => 
    		array (
    			'codigoIbge' => 2512788,
    			'nome' => 'Riacho de Santo Antônio',
    			'UF' => 'PB',
    		),
    		1404 => 
    		array (
    			'codigoIbge' => 2512804,
    			'nome' => 'Riacho dos Cavalos',
    			'UF' => 'PB',
    		),
    		1405 => 
    		array (
    			'codigoIbge' => 2512903,
    			'nome' => 'Rio Tinto',
    			'UF' => 'PB',
    		),
    		1406 => 
    		array (
    			'codigoIbge' => 2513000,
    			'nome' => 'Salgadinho',
    			'UF' => 'PB',
    		),
    		1407 => 
    		array (
    			'codigoIbge' => 2513109,
    			'nome' => 'Salgado de São Félix',
    			'UF' => 'PB',
    		),
    		1408 => 
    		array (
    			'codigoIbge' => 2513158,
    			'nome' => 'Santa Cecília',
    			'UF' => 'PB',
    		),
    		1409 => 
    		array (
    			'codigoIbge' => 2513208,
    			'nome' => 'Santa Cruz',
    			'UF' => 'PB',
    		),
    		1410 => 
    		array (
    			'codigoIbge' => 2513307,
    			'nome' => 'Santa Helena',
    			'UF' => 'PB',
    		),
    		1411 => 
    		array (
    			'codigoIbge' => 2513356,
    			'nome' => 'Santa Inês',
    			'UF' => 'PB',
    		),
    		1412 => 
    		array (
    			'codigoIbge' => 2513406,
    			'nome' => 'Santa Luzia',
    			'UF' => 'PB',
    		),
    		1413 => 
    		array (
    			'codigoIbge' => 2513505,
    			'nome' => 'Santana de Mangueira',
    			'UF' => 'PB',
    		),
    		1414 => 
    		array (
    			'codigoIbge' => 2513604,
    			'nome' => 'Santana dos Garrotes',
    			'UF' => 'PB',
    		),
    		1415 => 
    		array (
    			'codigoIbge' => 2513653,
    			'nome' => 'Joca Claudino',
    			'UF' => 'PB',
    		),
    		1416 => 
    		array (
    			'codigoIbge' => 2513703,
    			'nome' => 'Santa Rita',
    			'UF' => 'PB',
    		),
    		1417 => 
    		array (
    			'codigoIbge' => 2513802,
    			'nome' => 'Santa Teresinha',
    			'UF' => 'PB',
    		),
    		1418 => 
    		array (
    			'codigoIbge' => 2513851,
    			'nome' => 'Santo André',
    			'UF' => 'PB',
    		),
    		1419 => 
    		array (
    			'codigoIbge' => 2513901,
    			'nome' => 'São Bento',
    			'UF' => 'PB',
    		),
    		1420 => 
    		array (
    			'codigoIbge' => 2513927,
    			'nome' => 'São Bentinho',
    			'UF' => 'PB',
    		),
    		1421 => 
    		array (
    			'codigoIbge' => 2513943,
    			'nome' => 'São Domingos do Cariri',
    			'UF' => 'PB',
    		),
    		1422 => 
    		array (
    			'codigoIbge' => 2513968,
    			'nome' => 'São Domingos',
    			'UF' => 'PB',
    		),
    		1423 => 
    		array (
    			'codigoIbge' => 2513984,
    			'nome' => 'São Francisco',
    			'UF' => 'PB',
    		),
    		1424 => 
    		array (
    			'codigoIbge' => 2514008,
    			'nome' => 'São João do Cariri',
    			'UF' => 'PB',
    		),
    		1425 => 
    		array (
    			'codigoIbge' => 2514107,
    			'nome' => 'São João do Tigre',
    			'UF' => 'PB',
    		),
    		1426 => 
    		array (
    			'codigoIbge' => 2514206,
    			'nome' => 'São José da Lagoa Tapada',
    			'UF' => 'PB',
    		),
    		1427 => 
    		array (
    			'codigoIbge' => 2514305,
    			'nome' => 'São José de Caiana',
    			'UF' => 'PB',
    		),
    		1428 => 
    		array (
    			'codigoIbge' => 2514404,
    			'nome' => 'São José de Espinharas',
    			'UF' => 'PB',
    		),
    		1429 => 
    		array (
    			'codigoIbge' => 2514453,
    			'nome' => 'São José dos Ramos',
    			'UF' => 'PB',
    		),
    		1430 => 
    		array (
    			'codigoIbge' => 2514503,
    			'nome' => 'São José de Piranhas',
    			'UF' => 'PB',
    		),
    		1431 => 
    		array (
    			'codigoIbge' => 2514552,
    			'nome' => 'São José de Princesa',
    			'UF' => 'PB',
    		),
    		1432 => 
    		array (
    			'codigoIbge' => 2514602,
    			'nome' => 'São José do Bonfim',
    			'UF' => 'PB',
    		),
    		1433 => 
    		array (
    			'codigoIbge' => 2514651,
    			'nome' => 'São José do Brejo do Cruz',
    			'UF' => 'PB',
    		),
    		1434 => 
    		array (
    			'codigoIbge' => 2514701,
    			'nome' => 'São José do Sabugi',
    			'UF' => 'PB',
    		),
    		1435 => 
    		array (
    			'codigoIbge' => 2514800,
    			'nome' => 'São José dos Cordeiros',
    			'UF' => 'PB',
    		),
    		1436 => 
    		array (
    			'codigoIbge' => 2514909,
    			'nome' => 'São Mamede',
    			'UF' => 'PB',
    		),
    		1437 => 
    		array (
    			'codigoIbge' => 2515005,
    			'nome' => 'São Miguel de Taipu',
    			'UF' => 'PB',
    		),
    		1438 => 
    		array (
    			'codigoIbge' => 2515104,
    			'nome' => 'São Sebastião de Lagoa de Roça',
    			'UF' => 'PB',
    		),
    		1439 => 
    		array (
    			'codigoIbge' => 2515203,
    			'nome' => 'São Sebastião do Umbuzeiro',
    			'UF' => 'PB',
    		),
    		1440 => 
    		array (
    			'codigoIbge' => 2515302,
    			'nome' => 'Sapé',
    			'UF' => 'PB',
    		),
    		1441 => 
    		array (
    			'codigoIbge' => 2515401,
    			'nome' => 'São Vicente do Seridó',
    			'UF' => 'PB',
    		),
    		1442 => 
    		array (
    			'codigoIbge' => 2515500,
    			'nome' => 'Serra Branca',
    			'UF' => 'PB',
    		),
    		1443 => 
    		array (
    			'codigoIbge' => 2515609,
    			'nome' => 'Serra da Raiz',
    			'UF' => 'PB',
    		),
    		1444 => 
    		array (
    			'codigoIbge' => 2515708,
    			'nome' => 'Serra Grande',
    			'UF' => 'PB',
    		),
    		1445 => 
    		array (
    			'codigoIbge' => 2515807,
    			'nome' => 'Serra Redonda',
    			'UF' => 'PB',
    		),
    		1446 => 
    		array (
    			'codigoIbge' => 2515906,
    			'nome' => 'Serraria',
    			'UF' => 'PB',
    		),
    		1447 => 
    		array (
    			'codigoIbge' => 2515930,
    			'nome' => 'Sertãozinho',
    			'UF' => 'PB',
    		),
    		1448 => 
    		array (
    			'codigoIbge' => 2515971,
    			'nome' => 'Sobrado',
    			'UF' => 'PB',
    		),
    		1449 => 
    		array (
    			'codigoIbge' => 2516003,
    			'nome' => 'Solânea',
    			'UF' => 'PB',
    		),
    		1450 => 
    		array (
    			'codigoIbge' => 2516102,
    			'nome' => 'Soledade',
    			'UF' => 'PB',
    		),
    		1451 => 
    		array (
    			'codigoIbge' => 2516151,
    			'nome' => 'Sossêgo',
    			'UF' => 'PB',
    		),
    		1452 => 
    		array (
    			'codigoIbge' => 2516201,
    			'nome' => 'Sousa',
    			'UF' => 'PB',
    		),
    		1453 => 
    		array (
    			'codigoIbge' => 2516300,
    			'nome' => 'Sumé',
    			'UF' => 'PB',
    		),
    		1454 => 
    		array (
    			'codigoIbge' => 2516409,
    			'nome' => 'Tacima',
    			'UF' => 'PB',
    		),
    		1455 => 
    		array (
    			'codigoIbge' => 2516508,
    			'nome' => 'Taperoá',
    			'UF' => 'PB',
    		),
    		1456 => 
    		array (
    			'codigoIbge' => 2516607,
    			'nome' => 'Tavares',
    			'UF' => 'PB',
    		),
    		1457 => 
    		array (
    			'codigoIbge' => 2516706,
    			'nome' => 'Teixeira',
    			'UF' => 'PB',
    		),
    		1458 => 
    		array (
    			'codigoIbge' => 2516755,
    			'nome' => 'Tenório',
    			'UF' => 'PB',
    		),
    		1459 => 
    		array (
    			'codigoIbge' => 2516805,
    			'nome' => 'Triunfo',
    			'UF' => 'PB',
    		),
    		1460 => 
    		array (
    			'codigoIbge' => 2516904,
    			'nome' => 'Uiraúna',
    			'UF' => 'PB',
    		),
    		1461 => 
    		array (
    			'codigoIbge' => 2517001,
    			'nome' => 'Umbuzeiro',
    			'UF' => 'PB',
    		),
    		1462 => 
    		array (
    			'codigoIbge' => 2517100,
    			'nome' => 'Várzea',
    			'UF' => 'PB',
    		),
    		1463 => 
    		array (
    			'codigoIbge' => 2517209,
    			'nome' => 'Vieirópolis',
    			'UF' => 'PB',
    		),
    		1464 => 
    		array (
    			'codigoIbge' => 2517407,
    			'nome' => 'Zabelê',
    			'UF' => 'PB',
    		),
    		1465 => 
    		array (
    			'codigoIbge' => 2600054,
    			'nome' => 'Abreu e Lima',
    			'UF' => 'PE',
    		),
    		1466 => 
    		array (
    			'codigoIbge' => 2600104,
    			'nome' => 'Afogados da Ingazeira',
    			'UF' => 'PE',
    		),
    		1467 => 
    		array (
    			'codigoIbge' => 2600203,
    			'nome' => 'Afrânio',
    			'UF' => 'PE',
    		),
    		1468 => 
    		array (
    			'codigoIbge' => 2600302,
    			'nome' => 'Agrestina',
    			'UF' => 'PE',
    		),
    		1469 => 
    		array (
    			'codigoIbge' => 2600401,
    			'nome' => 'Água Preta',
    			'UF' => 'PE',
    		),
    		1470 => 
    		array (
    			'codigoIbge' => 2600500,
    			'nome' => 'Águas Belas',
    			'UF' => 'PE',
    		),
    		1471 => 
    		array (
    			'codigoIbge' => 2600609,
    			'nome' => 'Alagoinha',
    			'UF' => 'PE',
    		),
    		1472 => 
    		array (
    			'codigoIbge' => 2600708,
    			'nome' => 'Aliança',
    			'UF' => 'PE',
    		),
    		1473 => 
    		array (
    			'codigoIbge' => 2600807,
    			'nome' => 'Altinho',
    			'UF' => 'PE',
    		),
    		1474 => 
    		array (
    			'codigoIbge' => 2600906,
    			'nome' => 'Amaraji',
    			'UF' => 'PE',
    		),
    		1475 => 
    		array (
    			'codigoIbge' => 2601003,
    			'nome' => 'Angelim',
    			'UF' => 'PE',
    		),
    		1476 => 
    		array (
    			'codigoIbge' => 2601052,
    			'nome' => 'Araçoiaba',
    			'UF' => 'PE',
    		),
    		1477 => 
    		array (
    			'codigoIbge' => 2601102,
    			'nome' => 'Araripina',
    			'UF' => 'PE',
    		),
    		1478 => 
    		array (
    			'codigoIbge' => 2601201,
    			'nome' => 'Arcoverde',
    			'UF' => 'PE',
    		),
    		1479 => 
    		array (
    			'codigoIbge' => 2601300,
    			'nome' => 'Barra de Guabiraba',
    			'UF' => 'PE',
    		),
    		1480 => 
    		array (
    			'codigoIbge' => 2601409,
    			'nome' => 'Barreiros',
    			'UF' => 'PE',
    		),
    		1481 => 
    		array (
    			'codigoIbge' => 2601508,
    			'nome' => 'Belém de Maria',
    			'UF' => 'PE',
    		),
    		1482 => 
    		array (
    			'codigoIbge' => 2601607,
    			'nome' => 'Belém do São Francisco',
    			'UF' => 'PE',
    		),
    		1483 => 
    		array (
    			'codigoIbge' => 2601706,
    			'nome' => 'Belo Jardim',
    			'UF' => 'PE',
    		),
    		1484 => 
    		array (
    			'codigoIbge' => 2601805,
    			'nome' => 'Betânia',
    			'UF' => 'PE',
    		),
    		1485 => 
    		array (
    			'codigoIbge' => 2601904,
    			'nome' => 'Bezerros',
    			'UF' => 'PE',
    		),
    		1486 => 
    		array (
    			'codigoIbge' => 2602001,
    			'nome' => 'Bodocó',
    			'UF' => 'PE',
    		),
    		1487 => 
    		array (
    			'codigoIbge' => 2602100,
    			'nome' => 'Bom Conselho',
    			'UF' => 'PE',
    		),
    		1488 => 
    		array (
    			'codigoIbge' => 2602209,
    			'nome' => 'Bom Jardim',
    			'UF' => 'PE',
    		),
    		1489 => 
    		array (
    			'codigoIbge' => 2602308,
    			'nome' => 'Bonito',
    			'UF' => 'PE',
    		),
    		1490 => 
    		array (
    			'codigoIbge' => 2602407,
    			'nome' => 'Brejão',
    			'UF' => 'PE',
    		),
    		1491 => 
    		array (
    			'codigoIbge' => 2602506,
    			'nome' => 'Brejinho',
    			'UF' => 'PE',
    		),
    		1492 => 
    		array (
    			'codigoIbge' => 2602605,
    			'nome' => 'Brejo da Madre de Deus',
    			'UF' => 'PE',
    		),
    		1493 => 
    		array (
    			'codigoIbge' => 2602704,
    			'nome' => 'Buenos Aires',
    			'UF' => 'PE',
    		),
    		1494 => 
    		array (
    			'codigoIbge' => 2602803,
    			'nome' => 'Buíque',
    			'UF' => 'PE',
    		),
    		1495 => 
    		array (
    			'codigoIbge' => 2602902,
    			'nome' => 'Cabo de Santo Agostinho',
    			'UF' => 'PE',
    		),
    		1496 => 
    		array (
    			'codigoIbge' => 2603009,
    			'nome' => 'Cabrobó',
    			'UF' => 'PE',
    		),
    		1497 => 
    		array (
    			'codigoIbge' => 2603108,
    			'nome' => 'Cachoeirinha',
    			'UF' => 'PE',
    		),
    		1498 => 
    		array (
    			'codigoIbge' => 2603207,
    			'nome' => 'Caetés',
    			'UF' => 'PE',
    		),
    		1499 => 
    		array (
    			'codigoIbge' => 2603306,
    			'nome' => 'Calçado',
    			'UF' => 'PE',
    		),
    		1500 => 
    		array (
    			'codigoIbge' => 2603405,
    			'nome' => 'Calumbi',
    			'UF' => 'PE',
    		),
    		1501 => 
    		array (
    			'codigoIbge' => 2603454,
    			'nome' => 'Camaragibe',
    			'UF' => 'PE',
    		),
    		1502 => 
    		array (
    			'codigoIbge' => 2603504,
    			'nome' => 'Camocim de São Félix',
    			'UF' => 'PE',
    		),
    		1503 => 
    		array (
    			'codigoIbge' => 2603603,
    			'nome' => 'Camutanga',
    			'UF' => 'PE',
    		),
    		1504 => 
    		array (
    			'codigoIbge' => 2603702,
    			'nome' => 'Canhotinho',
    			'UF' => 'PE',
    		),
    		1505 => 
    		array (
    			'codigoIbge' => 2603801,
    			'nome' => 'Capoeiras',
    			'UF' => 'PE',
    		),
    		1506 => 
    		array (
    			'codigoIbge' => 2603900,
    			'nome' => 'Carnaíba',
    			'UF' => 'PE',
    		),
    		1507 => 
    		array (
    			'codigoIbge' => 2603926,
    			'nome' => 'Carnaubeira da Penha',
    			'UF' => 'PE',
    		),
    		1508 => 
    		array (
    			'codigoIbge' => 2604007,
    			'nome' => 'Carpina',
    			'UF' => 'PE',
    		),
    		1509 => 
    		array (
    			'codigoIbge' => 2604106,
    			'nome' => 'Caruaru',
    			'UF' => 'PE',
    		),
    		1510 => 
    		array (
    			'codigoIbge' => 2604155,
    			'nome' => 'Casinhas',
    			'UF' => 'PE',
    		),
    		1511 => 
    		array (
    			'codigoIbge' => 2604205,
    			'nome' => 'Catende',
    			'UF' => 'PE',
    		),
    		1512 => 
    		array (
    			'codigoIbge' => 2604304,
    			'nome' => 'Cedro',
    			'UF' => 'PE',
    		),
    		1513 => 
    		array (
    			'codigoIbge' => 2604403,
    			'nome' => 'Chã de Alegria',
    			'UF' => 'PE',
    		),
    		1514 => 
    		array (
    			'codigoIbge' => 2604502,
    			'nome' => 'Chã Grande',
    			'UF' => 'PE',
    		),
    		1515 => 
    		array (
    			'codigoIbge' => 2604601,
    			'nome' => 'Condado',
    			'UF' => 'PE',
    		),
    		1516 => 
    		array (
    			'codigoIbge' => 2604700,
    			'nome' => 'Correntes',
    			'UF' => 'PE',
    		),
    		1517 => 
    		array (
    			'codigoIbge' => 2604809,
    			'nome' => 'Cortês',
    			'UF' => 'PE',
    		),
    		1518 => 
    		array (
    			'codigoIbge' => 2604908,
    			'nome' => 'Cumaru',
    			'UF' => 'PE',
    		),
    		1519 => 
    		array (
    			'codigoIbge' => 2605004,
    			'nome' => 'Cupira',
    			'UF' => 'PE',
    		),
    		1520 => 
    		array (
    			'codigoIbge' => 2605103,
    			'nome' => 'Custódia',
    			'UF' => 'PE',
    		),
    		1521 => 
    		array (
    			'codigoIbge' => 2605152,
    			'nome' => 'Dormentes',
    			'UF' => 'PE',
    		),
    		1522 => 
    		array (
    			'codigoIbge' => 2605202,
    			'nome' => 'Escada',
    			'UF' => 'PE',
    		),
    		1523 => 
    		array (
    			'codigoIbge' => 2605301,
    			'nome' => 'Exu',
    			'UF' => 'PE',
    		),
    		1524 => 
    		array (
    			'codigoIbge' => 2605400,
    			'nome' => 'Feira Nova',
    			'UF' => 'PE',
    		),
    		1525 => 
    		array (
    			'codigoIbge' => 2605459,
    			'nome' => 'Fernando de Noronha',
    			'UF' => 'PE',
    		),
    		1526 => 
    		array (
    			'codigoIbge' => 2605509,
    			'nome' => 'Ferreiros',
    			'UF' => 'PE',
    		),
    		1527 => 
    		array (
    			'codigoIbge' => 2605608,
    			'nome' => 'Flores',
    			'UF' => 'PE',
    		),
    		1528 => 
    		array (
    			'codigoIbge' => 2605707,
    			'nome' => 'Floresta',
    			'UF' => 'PE',
    		),
    		1529 => 
    		array (
    			'codigoIbge' => 2605806,
    			'nome' => 'Frei Miguelinho',
    			'UF' => 'PE',
    		),
    		1530 => 
    		array (
    			'codigoIbge' => 2605905,
    			'nome' => 'Gameleira',
    			'UF' => 'PE',
    		),
    		1531 => 
    		array (
    			'codigoIbge' => 2606002,
    			'nome' => 'Garanhuns',
    			'UF' => 'PE',
    		),
    		1532 => 
    		array (
    			'codigoIbge' => 2606101,
    			'nome' => 'Glória do Goitá',
    			'UF' => 'PE',
    		),
    		1533 => 
    		array (
    			'codigoIbge' => 2606200,
    			'nome' => 'Goiana',
    			'UF' => 'PE',
    		),
    		1534 => 
    		array (
    			'codigoIbge' => 2606309,
    			'nome' => 'Granito',
    			'UF' => 'PE',
    		),
    		1535 => 
    		array (
    			'codigoIbge' => 2606408,
    			'nome' => 'Gravatá',
    			'UF' => 'PE',
    		),
    		1536 => 
    		array (
    			'codigoIbge' => 2606507,
    			'nome' => 'Iati',
    			'UF' => 'PE',
    		),
    		1537 => 
    		array (
    			'codigoIbge' => 2606606,
    			'nome' => 'Ibimirim',
    			'UF' => 'PE',
    		),
    		1538 => 
    		array (
    			'codigoIbge' => 2606705,
    			'nome' => 'Ibirajuba',
    			'UF' => 'PE',
    		),
    		1539 => 
    		array (
    			'codigoIbge' => 2606804,
    			'nome' => 'Igarassu',
    			'UF' => 'PE',
    		),
    		1540 => 
    		array (
    			'codigoIbge' => 2606903,
    			'nome' => 'Iguaracy',
    			'UF' => 'PE',
    		),
    		1541 => 
    		array (
    			'codigoIbge' => 2607000,
    			'nome' => 'Inajá',
    			'UF' => 'PE',
    		),
    		1542 => 
    		array (
    			'codigoIbge' => 2607109,
    			'nome' => 'Ingazeira',
    			'UF' => 'PE',
    		),
    		1543 => 
    		array (
    			'codigoIbge' => 2607208,
    			'nome' => 'Ipojuca',
    			'UF' => 'PE',
    		),
    		1544 => 
    		array (
    			'codigoIbge' => 2607307,
    			'nome' => 'Ipubi',
    			'UF' => 'PE',
    		),
    		1545 => 
    		array (
    			'codigoIbge' => 2607406,
    			'nome' => 'Itacuruba',
    			'UF' => 'PE',
    		),
    		1546 => 
    		array (
    			'codigoIbge' => 2607505,
    			'nome' => 'Itaíba',
    			'UF' => 'PE',
    		),
    		1547 => 
    		array (
    			'codigoIbge' => 2607604,
    			'nome' => 'Ilha de Itamaracá',
    			'UF' => 'PE',
    		),
    		1548 => 
    		array (
    			'codigoIbge' => 2607653,
    			'nome' => 'Itambé',
    			'UF' => 'PE',
    		),
    		1549 => 
    		array (
    			'codigoIbge' => 2607703,
    			'nome' => 'Itapetim',
    			'UF' => 'PE',
    		),
    		1550 => 
    		array (
    			'codigoIbge' => 2607752,
    			'nome' => 'Itapissuma',
    			'UF' => 'PE',
    		),
    		1551 => 
    		array (
    			'codigoIbge' => 2607802,
    			'nome' => 'Itaquitinga',
    			'UF' => 'PE',
    		),
    		1552 => 
    		array (
    			'codigoIbge' => 2607901,
    			'nome' => 'Jaboatão dos Guararapes',
    			'UF' => 'PE',
    		),
    		1553 => 
    		array (
    			'codigoIbge' => 2607950,
    			'nome' => 'Jaqueira',
    			'UF' => 'PE',
    		),
    		1554 => 
    		array (
    			'codigoIbge' => 2608008,
    			'nome' => 'Jataúba',
    			'UF' => 'PE',
    		),
    		1555 => 
    		array (
    			'codigoIbge' => 2608057,
    			'nome' => 'Jatobá',
    			'UF' => 'PE',
    		),
    		1556 => 
    		array (
    			'codigoIbge' => 2608107,
    			'nome' => 'João Alfredo',
    			'UF' => 'PE',
    		),
    		1557 => 
    		array (
    			'codigoIbge' => 2608206,
    			'nome' => 'Joaquim Nabuco',
    			'UF' => 'PE',
    		),
    		1558 => 
    		array (
    			'codigoIbge' => 2608255,
    			'nome' => 'Jucati',
    			'UF' => 'PE',
    		),
    		1559 => 
    		array (
    			'codigoIbge' => 2608305,
    			'nome' => 'Jupi',
    			'UF' => 'PE',
    		),
    		1560 => 
    		array (
    			'codigoIbge' => 2608404,
    			'nome' => 'Jurema',
    			'UF' => 'PE',
    		),
    		1561 => 
    		array (
    			'codigoIbge' => 2608453,
    			'nome' => 'Lagoa do Carro',
    			'UF' => 'PE',
    		),
    		1562 => 
    		array (
    			'codigoIbge' => 2608503,
    			'nome' => 'Lagoa de Itaenga',
    			'UF' => 'PE',
    		),
    		1563 => 
    		array (
    			'codigoIbge' => 2608602,
    			'nome' => 'Lagoa do Ouro',
    			'UF' => 'PE',
    		),
    		1564 => 
    		array (
    			'codigoIbge' => 2608701,
    			'nome' => 'Lagoa dos Gatos',
    			'UF' => 'PE',
    		),
    		1565 => 
    		array (
    			'codigoIbge' => 2608750,
    			'nome' => 'Lagoa Grande',
    			'UF' => 'PE',
    		),
    		1566 => 
    		array (
    			'codigoIbge' => 2608800,
    			'nome' => 'Lajedo',
    			'UF' => 'PE',
    		),
    		1567 => 
    		array (
    			'codigoIbge' => 2608909,
    			'nome' => 'Limoeiro',
    			'UF' => 'PE',
    		),
    		1568 => 
    		array (
    			'codigoIbge' => 2609006,
    			'nome' => 'Macaparana',
    			'UF' => 'PE',
    		),
    		1569 => 
    		array (
    			'codigoIbge' => 2609105,
    			'nome' => 'Machados',
    			'UF' => 'PE',
    		),
    		1570 => 
    		array (
    			'codigoIbge' => 2609154,
    			'nome' => 'Manari',
    			'UF' => 'PE',
    		),
    		1571 => 
    		array (
    			'codigoIbge' => 2609204,
    			'nome' => 'Maraial',
    			'UF' => 'PE',
    		),
    		1572 => 
    		array (
    			'codigoIbge' => 2609303,
    			'nome' => 'Mirandiba',
    			'UF' => 'PE',
    		),
    		1573 => 
    		array (
    			'codigoIbge' => 2609402,
    			'nome' => 'Moreno',
    			'UF' => 'PE',
    		),
    		1574 => 
    		array (
    			'codigoIbge' => 2609501,
    			'nome' => 'Nazaré da Mata',
    			'UF' => 'PE',
    		),
    		1575 => 
    		array (
    			'codigoIbge' => 2609600,
    			'nome' => 'Olinda',
    			'UF' => 'PE',
    		),
    		1576 => 
    		array (
    			'codigoIbge' => 2609709,
    			'nome' => 'Orobó',
    			'UF' => 'PE',
    		),
    		1577 => 
    		array (
    			'codigoIbge' => 2609808,
    			'nome' => 'Orocó',
    			'UF' => 'PE',
    		),
    		1578 => 
    		array (
    			'codigoIbge' => 2609907,
    			'nome' => 'Ouricuri',
    			'UF' => 'PE',
    		),
    		1579 => 
    		array (
    			'codigoIbge' => 2610004,
    			'nome' => 'Palmares',
    			'UF' => 'PE',
    		),
    		1580 => 
    		array (
    			'codigoIbge' => 2610103,
    			'nome' => 'Palmeirina',
    			'UF' => 'PE',
    		),
    		1581 => 
    		array (
    			'codigoIbge' => 2610202,
    			'nome' => 'Panelas',
    			'UF' => 'PE',
    		),
    		1582 => 
    		array (
    			'codigoIbge' => 2610301,
    			'nome' => 'Paranatama',
    			'UF' => 'PE',
    		),
    		1583 => 
    		array (
    			'codigoIbge' => 2610400,
    			'nome' => 'Parnamirim',
    			'UF' => 'PE',
    		),
    		1584 => 
    		array (
    			'codigoIbge' => 2610509,
    			'nome' => 'Passira',
    			'UF' => 'PE',
    		),
    		1585 => 
    		array (
    			'codigoIbge' => 2610608,
    			'nome' => 'Paudalho',
    			'UF' => 'PE',
    		),
    		1586 => 
    		array (
    			'codigoIbge' => 2610707,
    			'nome' => 'Paulista',
    			'UF' => 'PE',
    		),
    		1587 => 
    		array (
    			'codigoIbge' => 2610806,
    			'nome' => 'Pedra',
    			'UF' => 'PE',
    		),
    		1588 => 
    		array (
    			'codigoIbge' => 2610905,
    			'nome' => 'Pesqueira',
    			'UF' => 'PE',
    		),
    		1589 => 
    		array (
    			'codigoIbge' => 2611002,
    			'nome' => 'Petrolândia',
    			'UF' => 'PE',
    		),
    		1590 => 
    		array (
    			'codigoIbge' => 2611101,
    			'nome' => 'Petrolina',
    			'UF' => 'PE',
    		),
    		1591 => 
    		array (
    			'codigoIbge' => 2611200,
    			'nome' => 'Poção',
    			'UF' => 'PE',
    		),
    		1592 => 
    		array (
    			'codigoIbge' => 2611309,
    			'nome' => 'Pombos',
    			'UF' => 'PE',
    		),
    		1593 => 
    		array (
    			'codigoIbge' => 2611408,
    			'nome' => 'Primavera',
    			'UF' => 'PE',
    		),
    		1594 => 
    		array (
    			'codigoIbge' => 2611507,
    			'nome' => 'Quipapá',
    			'UF' => 'PE',
    		),
    		1595 => 
    		array (
    			'codigoIbge' => 2611533,
    			'nome' => 'Quixaba',
    			'UF' => 'PE',
    		),
    		1596 => 
    		array (
    			'codigoIbge' => 2611606,
    			'nome' => 'Recife',
    			'UF' => 'PE',
    		),
    		1597 => 
    		array (
    			'codigoIbge' => 2611705,
    			'nome' => 'Riacho das Almas',
    			'UF' => 'PE',
    		),
    		1598 => 
    		array (
    			'codigoIbge' => 2611804,
    			'nome' => 'Ribeirão',
    			'UF' => 'PE',
    		),
    		1599 => 
    		array (
    			'codigoIbge' => 2611903,
    			'nome' => 'Rio Formoso',
    			'UF' => 'PE',
    		),
    		1600 => 
    		array (
    			'codigoIbge' => 2612000,
    			'nome' => 'Sairé',
    			'UF' => 'PE',
    		),
    		1601 => 
    		array (
    			'codigoIbge' => 2612109,
    			'nome' => 'Salgadinho',
    			'UF' => 'PE',
    		),
    		1602 => 
    		array (
    			'codigoIbge' => 2612208,
    			'nome' => 'Salgueiro',
    			'UF' => 'PE',
    		),
    		1603 => 
    		array (
    			'codigoIbge' => 2612307,
    			'nome' => 'Saloá',
    			'UF' => 'PE',
    		),
    		1604 => 
    		array (
    			'codigoIbge' => 2612406,
    			'nome' => 'Sanharó',
    			'UF' => 'PE',
    		),
    		1605 => 
    		array (
    			'codigoIbge' => 2612455,
    			'nome' => 'Santa Cruz',
    			'UF' => 'PE',
    		),
    		1606 => 
    		array (
    			'codigoIbge' => 2612471,
    			'nome' => 'Santa Cruz da Baixa Verde',
    			'UF' => 'PE',
    		),
    		1607 => 
    		array (
    			'codigoIbge' => 2612505,
    			'nome' => 'Santa Cruz do Capibaribe',
    			'UF' => 'PE',
    		),
    		1608 => 
    		array (
    			'codigoIbge' => 2612554,
    			'nome' => 'Santa Filomena',
    			'UF' => 'PE',
    		),
    		1609 => 
    		array (
    			'codigoIbge' => 2612604,
    			'nome' => 'Santa Maria da Boa Vista',
    			'UF' => 'PE',
    		),
    		1610 => 
    		array (
    			'codigoIbge' => 2612703,
    			'nome' => 'Santa Maria do Cambucá',
    			'UF' => 'PE',
    		),
    		1611 => 
    		array (
    			'codigoIbge' => 2612802,
    			'nome' => 'Santa Terezinha',
    			'UF' => 'PE',
    		),
    		1612 => 
    		array (
    			'codigoIbge' => 2612901,
    			'nome' => 'São Benedito do Sul',
    			'UF' => 'PE',
    		),
    		1613 => 
    		array (
    			'codigoIbge' => 2613008,
    			'nome' => 'São Bento do Una',
    			'UF' => 'PE',
    		),
    		1614 => 
    		array (
    			'codigoIbge' => 2613107,
    			'nome' => 'São Caitano',
    			'UF' => 'PE',
    		),
    		1615 => 
    		array (
    			'codigoIbge' => 2613206,
    			'nome' => 'São João',
    			'UF' => 'PE',
    		),
    		1616 => 
    		array (
    			'codigoIbge' => 2613305,
    			'nome' => 'São Joaquim do Monte',
    			'UF' => 'PE',
    		),
    		1617 => 
    		array (
    			'codigoIbge' => 2613404,
    			'nome' => 'São José da Coroa Grande',
    			'UF' => 'PE',
    		),
    		1618 => 
    		array (
    			'codigoIbge' => 2613503,
    			'nome' => 'São José do Belmonte',
    			'UF' => 'PE',
    		),
    		1619 => 
    		array (
    			'codigoIbge' => 2613602,
    			'nome' => 'São José do Egito',
    			'UF' => 'PE',
    		),
    		1620 => 
    		array (
    			'codigoIbge' => 2613701,
    			'nome' => 'São Lourenço da Mata',
    			'UF' => 'PE',
    		),
    		1621 => 
    		array (
    			'codigoIbge' => 2613800,
    			'nome' => 'São Vicente Férrer',
    			'UF' => 'PE',
    		),
    		1622 => 
    		array (
    			'codigoIbge' => 2613909,
    			'nome' => 'Serra Talhada',
    			'UF' => 'PE',
    		),
    		1623 => 
    		array (
    			'codigoIbge' => 2614006,
    			'nome' => 'Serrita',
    			'UF' => 'PE',
    		),
    		1624 => 
    		array (
    			'codigoIbge' => 2614105,
    			'nome' => 'Sertânia',
    			'UF' => 'PE',
    		),
    		1625 => 
    		array (
    			'codigoIbge' => 2614204,
    			'nome' => 'Sirinhaém',
    			'UF' => 'PE',
    		),
    		1626 => 
    		array (
    			'codigoIbge' => 2614303,
    			'nome' => 'Moreilândia',
    			'UF' => 'PE',
    		),
    		1627 => 
    		array (
    			'codigoIbge' => 2614402,
    			'nome' => 'Solidão',
    			'UF' => 'PE',
    		),
    		1628 => 
    		array (
    			'codigoIbge' => 2614501,
    			'nome' => 'Surubim',
    			'UF' => 'PE',
    		),
    		1629 => 
    		array (
    			'codigoIbge' => 2614600,
    			'nome' => 'Tabira',
    			'UF' => 'PE',
    		),
    		1630 => 
    		array (
    			'codigoIbge' => 2614709,
    			'nome' => 'Tacaimbó',
    			'UF' => 'PE',
    		),
    		1631 => 
    		array (
    			'codigoIbge' => 2614808,
    			'nome' => 'Tacaratu',
    			'UF' => 'PE',
    		),
    		1632 => 
    		array (
    			'codigoIbge' => 2614857,
    			'nome' => 'Tamandaré',
    			'UF' => 'PE',
    		),
    		1633 => 
    		array (
    			'codigoIbge' => 2615003,
    			'nome' => 'Taquaritinga do Norte',
    			'UF' => 'PE',
    		),
    		1634 => 
    		array (
    			'codigoIbge' => 2615102,
    			'nome' => 'Terezinha',
    			'UF' => 'PE',
    		),
    		1635 => 
    		array (
    			'codigoIbge' => 2615201,
    			'nome' => 'Terra Nova',
    			'UF' => 'PE',
    		),
    		1636 => 
    		array (
    			'codigoIbge' => 2615300,
    			'nome' => 'Timbaúba',
    			'UF' => 'PE',
    		),
    		1637 => 
    		array (
    			'codigoIbge' => 2615409,
    			'nome' => 'Toritama',
    			'UF' => 'PE',
    		),
    		1638 => 
    		array (
    			'codigoIbge' => 2615508,
    			'nome' => 'Tracunhaém',
    			'UF' => 'PE',
    		),
    		1639 => 
    		array (
    			'codigoIbge' => 2615607,
    			'nome' => 'Trindade',
    			'UF' => 'PE',
    		),
    		1640 => 
    		array (
    			'codigoIbge' => 2615706,
    			'nome' => 'Triunfo',
    			'UF' => 'PE',
    		),
    		1641 => 
    		array (
    			'codigoIbge' => 2615805,
    			'nome' => 'Tupanatinga',
    			'UF' => 'PE',
    		),
    		1642 => 
    		array (
    			'codigoIbge' => 2615904,
    			'nome' => 'Tuparetama',
    			'UF' => 'PE',
    		),
    		1643 => 
    		array (
    			'codigoIbge' => 2616001,
    			'nome' => 'Venturosa',
    			'UF' => 'PE',
    		),
    		1644 => 
    		array (
    			'codigoIbge' => 2616100,
    			'nome' => 'Verdejante',
    			'UF' => 'PE',
    		),
    		1645 => 
    		array (
    			'codigoIbge' => 2616183,
    			'nome' => 'Vertente do Lério',
    			'UF' => 'PE',
    		),
    		1646 => 
    		array (
    			'codigoIbge' => 2616209,
    			'nome' => 'Vertentes',
    			'UF' => 'PE',
    		),
    		1647 => 
    		array (
    			'codigoIbge' => 2616308,
    			'nome' => 'Vicência',
    			'UF' => 'PE',
    		),
    		1648 => 
    		array (
    			'codigoIbge' => 2616407,
    			'nome' => 'Vitória de Santo Antão',
    			'UF' => 'PE',
    		),
    		1649 => 
    		array (
    			'codigoIbge' => 2616506,
    			'nome' => 'Xexéu',
    			'UF' => 'PE',
    		),
    		1650 => 
    		array (
    			'codigoIbge' => 2700102,
    			'nome' => 'Água Branca',
    			'UF' => 'AL',
    		),
    		1651 => 
    		array (
    			'codigoIbge' => 2700201,
    			'nome' => 'Anadia',
    			'UF' => 'AL',
    		),
    		1652 => 
    		array (
    			'codigoIbge' => 2700300,
    			'nome' => 'Arapiraca',
    			'UF' => 'AL',
    		),
    		1653 => 
    		array (
    			'codigoIbge' => 2700409,
    			'nome' => 'Atalaia',
    			'UF' => 'AL',
    		),
    		1654 => 
    		array (
    			'codigoIbge' => 2700508,
    			'nome' => 'Barra de Santo Antônio',
    			'UF' => 'AL',
    		),
    		1655 => 
    		array (
    			'codigoIbge' => 2700607,
    			'nome' => 'Barra de São Miguel',
    			'UF' => 'AL',
    		),
    		1656 => 
    		array (
    			'codigoIbge' => 2700706,
    			'nome' => 'Batalha',
    			'UF' => 'AL',
    		),
    		1657 => 
    		array (
    			'codigoIbge' => 2700805,
    			'nome' => 'Belém',
    			'UF' => 'AL',
    		),
    		1658 => 
    		array (
    			'codigoIbge' => 2700904,
    			'nome' => 'Belo Monte',
    			'UF' => 'AL',
    		),
    		1659 => 
    		array (
    			'codigoIbge' => 2701001,
    			'nome' => 'Boca da Mata',
    			'UF' => 'AL',
    		),
    		1660 => 
    		array (
    			'codigoIbge' => 2701100,
    			'nome' => 'Branquinha',
    			'UF' => 'AL',
    		),
    		1661 => 
    		array (
    			'codigoIbge' => 2701209,
    			'nome' => 'Cacimbinhas',
    			'UF' => 'AL',
    		),
    		1662 => 
    		array (
    			'codigoIbge' => 2701308,
    			'nome' => 'Cajueiro',
    			'UF' => 'AL',
    		),
    		1663 => 
    		array (
    			'codigoIbge' => 2701357,
    			'nome' => 'Campestre',
    			'UF' => 'AL',
    		),
    		1664 => 
    		array (
    			'codigoIbge' => 2701407,
    			'nome' => 'Campo Alegre',
    			'UF' => 'AL',
    		),
    		1665 => 
    		array (
    			'codigoIbge' => 2701506,
    			'nome' => 'Campo Grande',
    			'UF' => 'AL',
    		),
    		1666 => 
    		array (
    			'codigoIbge' => 2701605,
    			'nome' => 'Canapi',
    			'UF' => 'AL',
    		),
    		1667 => 
    		array (
    			'codigoIbge' => 2701704,
    			'nome' => 'Capela',
    			'UF' => 'AL',
    		),
    		1668 => 
    		array (
    			'codigoIbge' => 2701803,
    			'nome' => 'Carneiros',
    			'UF' => 'AL',
    		),
    		1669 => 
    		array (
    			'codigoIbge' => 2701902,
    			'nome' => 'Chã Preta',
    			'UF' => 'AL',
    		),
    		1670 => 
    		array (
    			'codigoIbge' => 2702009,
    			'nome' => 'Coité do Nóia',
    			'UF' => 'AL',
    		),
    		1671 => 
    		array (
    			'codigoIbge' => 2702108,
    			'nome' => 'Colônia Leopoldina',
    			'UF' => 'AL',
    		),
    		1672 => 
    		array (
    			'codigoIbge' => 2702207,
    			'nome' => 'Coqueiro Seco',
    			'UF' => 'AL',
    		),
    		1673 => 
    		array (
    			'codigoIbge' => 2702306,
    			'nome' => 'Coruripe',
    			'UF' => 'AL',
    		),
    		1674 => 
    		array (
    			'codigoIbge' => 2702355,
    			'nome' => 'Craíbas',
    			'UF' => 'AL',
    		),
    		1675 => 
    		array (
    			'codigoIbge' => 2702405,
    			'nome' => 'Delmiro Gouveia',
    			'UF' => 'AL',
    		),
    		1676 => 
    		array (
    			'codigoIbge' => 2702504,
    			'nome' => 'Dois Riachos',
    			'UF' => 'AL',
    		),
    		1677 => 
    		array (
    			'codigoIbge' => 2702553,
    			'nome' => 'Estrela de Alagoas',
    			'UF' => 'AL',
    		),
    		1678 => 
    		array (
    			'codigoIbge' => 2702603,
    			'nome' => 'Feira Grande',
    			'UF' => 'AL',
    		),
    		1679 => 
    		array (
    			'codigoIbge' => 2702702,
    			'nome' => 'Feliz Deserto',
    			'UF' => 'AL',
    		),
    		1680 => 
    		array (
    			'codigoIbge' => 2702801,
    			'nome' => 'Flexeiras',
    			'UF' => 'AL',
    		),
    		1681 => 
    		array (
    			'codigoIbge' => 2702900,
    			'nome' => 'Girau do Ponciano',
    			'UF' => 'AL',
    		),
    		1682 => 
    		array (
    			'codigoIbge' => 2703007,
    			'nome' => 'Ibateguara',
    			'UF' => 'AL',
    		),
    		1683 => 
    		array (
    			'codigoIbge' => 2703106,
    			'nome' => 'Igaci',
    			'UF' => 'AL',
    		),
    		1684 => 
    		array (
    			'codigoIbge' => 2703205,
    			'nome' => 'Igreja Nova',
    			'UF' => 'AL',
    		),
    		1685 => 
    		array (
    			'codigoIbge' => 2703304,
    			'nome' => 'Inhapi',
    			'UF' => 'AL',
    		),
    		1686 => 
    		array (
    			'codigoIbge' => 2703403,
    			'nome' => 'Jacaré dos Homens',
    			'UF' => 'AL',
    		),
    		1687 => 
    		array (
    			'codigoIbge' => 2703502,
    			'nome' => 'Jacuípe',
    			'UF' => 'AL',
    		),
    		1688 => 
    		array (
    			'codigoIbge' => 2703601,
    			'nome' => 'Japaratinga',
    			'UF' => 'AL',
    		),
    		1689 => 
    		array (
    			'codigoIbge' => 2703700,
    			'nome' => 'Jaramataia',
    			'UF' => 'AL',
    		),
    		1690 => 
    		array (
    			'codigoIbge' => 2703759,
    			'nome' => 'Jequiá da Praia',
    			'UF' => 'AL',
    		),
    		1691 => 
    		array (
    			'codigoIbge' => 2703809,
    			'nome' => 'Joaquim Gomes',
    			'UF' => 'AL',
    		),
    		1692 => 
    		array (
    			'codigoIbge' => 2703908,
    			'nome' => 'Jundiá',
    			'UF' => 'AL',
    		),
    		1693 => 
    		array (
    			'codigoIbge' => 2704005,
    			'nome' => 'Junqueiro',
    			'UF' => 'AL',
    		),
    		1694 => 
    		array (
    			'codigoIbge' => 2704104,
    			'nome' => 'Lagoa da Canoa',
    			'UF' => 'AL',
    		),
    		1695 => 
    		array (
    			'codigoIbge' => 2704203,
    			'nome' => 'Limoeiro de Anadia',
    			'UF' => 'AL',
    		),
    		1696 => 
    		array (
    			'codigoIbge' => 2704302,
    			'nome' => 'Maceió',
    			'UF' => 'AL',
    		),
    		1697 => 
    		array (
    			'codigoIbge' => 2704401,
    			'nome' => 'Major Isidoro',
    			'UF' => 'AL',
    		),
    		1698 => 
    		array (
    			'codigoIbge' => 2704500,
    			'nome' => 'Maragogi',
    			'UF' => 'AL',
    		),
    		1699 => 
    		array (
    			'codigoIbge' => 2704609,
    			'nome' => 'Maravilha',
    			'UF' => 'AL',
    		),
    		1700 => 
    		array (
    			'codigoIbge' => 2704708,
    			'nome' => 'Marechal Deodoro',
    			'UF' => 'AL',
    		),
    		1701 => 
    		array (
    			'codigoIbge' => 2704807,
    			'nome' => 'Maribondo',
    			'UF' => 'AL',
    		),
    		1702 => 
    		array (
    			'codigoIbge' => 2704906,
    			'nome' => 'Mar Vermelho',
    			'UF' => 'AL',
    		),
    		1703 => 
    		array (
    			'codigoIbge' => 2705002,
    			'nome' => 'Mata Grande',
    			'UF' => 'AL',
    		),
    		1704 => 
    		array (
    			'codigoIbge' => 2705101,
    			'nome' => 'Matriz de Camaragibe',
    			'UF' => 'AL',
    		),
    		1705 => 
    		array (
    			'codigoIbge' => 2705200,
    			'nome' => 'Messias',
    			'UF' => 'AL',
    		),
    		1706 => 
    		array (
    			'codigoIbge' => 2705309,
    			'nome' => 'Minador do Negrão',
    			'UF' => 'AL',
    		),
    		1707 => 
    		array (
    			'codigoIbge' => 2705408,
    			'nome' => 'Monteirópolis',
    			'UF' => 'AL',
    		),
    		1708 => 
    		array (
    			'codigoIbge' => 2705507,
    			'nome' => 'Murici',
    			'UF' => 'AL',
    		),
    		1709 => 
    		array (
    			'codigoIbge' => 2705606,
    			'nome' => 'Novo Lino',
    			'UF' => 'AL',
    		),
    		1710 => 
    		array (
    			'codigoIbge' => 2705705,
    			'nome' => 'Olho d\'Água das Flores',
    			'UF' => 'AL',
    		),
    		1711 => 
    		array (
    			'codigoIbge' => 2705804,
    			'nome' => 'Olho d\'Água do Casado',
    			'UF' => 'AL',
    		),
    		1712 => 
    		array (
    			'codigoIbge' => 2705903,
    			'nome' => 'Olho d\'Água Grande',
    			'UF' => 'AL',
    		),
    		1713 => 
    		array (
    			'codigoIbge' => 2706000,
    			'nome' => 'Olivença',
    			'UF' => 'AL',
    		),
    		1714 => 
    		array (
    			'codigoIbge' => 2706109,
    			'nome' => 'Ouro Branco',
    			'UF' => 'AL',
    		),
    		1715 => 
    		array (
    			'codigoIbge' => 2706208,
    			'nome' => 'Palestina',
    			'UF' => 'AL',
    		),
    		1716 => 
    		array (
    			'codigoIbge' => 2706307,
    			'nome' => 'Palmeira dos Índios',
    			'UF' => 'AL',
    		),
    		1717 => 
    		array (
    			'codigoIbge' => 2706406,
    			'nome' => 'Pão de Açúcar',
    			'UF' => 'AL',
    		),
    		1718 => 
    		array (
    			'codigoIbge' => 2706422,
    			'nome' => 'Pariconha',
    			'UF' => 'AL',
    		),
    		1719 => 
    		array (
    			'codigoIbge' => 2706448,
    			'nome' => 'Paripueira',
    			'UF' => 'AL',
    		),
    		1720 => 
    		array (
    			'codigoIbge' => 2706505,
    			'nome' => 'Passo de Camaragibe',
    			'UF' => 'AL',
    		),
    		1721 => 
    		array (
    			'codigoIbge' => 2706604,
    			'nome' => 'Paulo Jacinto',
    			'UF' => 'AL',
    		),
    		1722 => 
    		array (
    			'codigoIbge' => 2706703,
    			'nome' => 'Penedo',
    			'UF' => 'AL',
    		),
    		1723 => 
    		array (
    			'codigoIbge' => 2706802,
    			'nome' => 'Piaçabuçu',
    			'UF' => 'AL',
    		),
    		1724 => 
    		array (
    			'codigoIbge' => 2706901,
    			'nome' => 'Pilar',
    			'UF' => 'AL',
    		),
    		1725 => 
    		array (
    			'codigoIbge' => 2707008,
    			'nome' => 'Pindoba',
    			'UF' => 'AL',
    		),
    		1726 => 
    		array (
    			'codigoIbge' => 2707107,
    			'nome' => 'Piranhas',
    			'UF' => 'AL',
    		),
    		1727 => 
    		array (
    			'codigoIbge' => 2707206,
    			'nome' => 'Poço das Trincheiras',
    			'UF' => 'AL',
    		),
    		1728 => 
    		array (
    			'codigoIbge' => 2707305,
    			'nome' => 'Porto Calvo',
    			'UF' => 'AL',
    		),
    		1729 => 
    		array (
    			'codigoIbge' => 2707404,
    			'nome' => 'Porto de Pedras',
    			'UF' => 'AL',
    		),
    		1730 => 
    		array (
    			'codigoIbge' => 2707503,
    			'nome' => 'Porto Real do Colégio',
    			'UF' => 'AL',
    		),
    		1731 => 
    		array (
    			'codigoIbge' => 2707602,
    			'nome' => 'Quebrangulo',
    			'UF' => 'AL',
    		),
    		1732 => 
    		array (
    			'codigoIbge' => 2707701,
    			'nome' => 'Rio Largo',
    			'UF' => 'AL',
    		),
    		1733 => 
    		array (
    			'codigoIbge' => 2707800,
    			'nome' => 'Roteiro',
    			'UF' => 'AL',
    		),
    		1734 => 
    		array (
    			'codigoIbge' => 2707909,
    			'nome' => 'Santa Luzia do Norte',
    			'UF' => 'AL',
    		),
    		1735 => 
    		array (
    			'codigoIbge' => 2708006,
    			'nome' => 'Santana do Ipanema',
    			'UF' => 'AL',
    		),
    		1736 => 
    		array (
    			'codigoIbge' => 2708105,
    			'nome' => 'Santana do Mundaú',
    			'UF' => 'AL',
    		),
    		1737 => 
    		array (
    			'codigoIbge' => 2708204,
    			'nome' => 'São Brás',
    			'UF' => 'AL',
    		),
    		1738 => 
    		array (
    			'codigoIbge' => 2708303,
    			'nome' => 'São José da Laje',
    			'UF' => 'AL',
    		),
    		1739 => 
    		array (
    			'codigoIbge' => 2708402,
    			'nome' => 'São José da Tapera',
    			'UF' => 'AL',
    		),
    		1740 => 
    		array (
    			'codigoIbge' => 2708501,
    			'nome' => 'São Luís do Quitunde',
    			'UF' => 'AL',
    		),
    		1741 => 
    		array (
    			'codigoIbge' => 2708600,
    			'nome' => 'São Miguel dos Campos',
    			'UF' => 'AL',
    		),
    		1742 => 
    		array (
    			'codigoIbge' => 2708709,
    			'nome' => 'São Miguel dos Milagres',
    			'UF' => 'AL',
    		),
    		1743 => 
    		array (
    			'codigoIbge' => 2708808,
    			'nome' => 'São Sebastião',
    			'UF' => 'AL',
    		),
    		1744 => 
    		array (
    			'codigoIbge' => 2708907,
    			'nome' => 'Satuba',
    			'UF' => 'AL',
    		),
    		1745 => 
    		array (
    			'codigoIbge' => 2708956,
    			'nome' => 'Senador Rui Palmeira',
    			'UF' => 'AL',
    		),
    		1746 => 
    		array (
    			'codigoIbge' => 2709004,
    			'nome' => 'Tanque d\'Arca',
    			'UF' => 'AL',
    		),
    		1747 => 
    		array (
    			'codigoIbge' => 2709103,
    			'nome' => 'Taquarana',
    			'UF' => 'AL',
    		),
    		1748 => 
    		array (
    			'codigoIbge' => 2709152,
    			'nome' => 'Teotônio Vilela',
    			'UF' => 'AL',
    		),
    		1749 => 
    		array (
    			'codigoIbge' => 2709202,
    			'nome' => 'Traipu',
    			'UF' => 'AL',
    		),
    		1750 => 
    		array (
    			'codigoIbge' => 2709301,
    			'nome' => 'União dos Palmares',
    			'UF' => 'AL',
    		),
    		1751 => 
    		array (
    			'codigoIbge' => 2709400,
    			'nome' => 'Viçosa',
    			'UF' => 'AL',
    		),
    		1752 => 
    		array (
    			'codigoIbge' => 2800100,
    			'nome' => 'Amparo do São Francisco',
    			'UF' => 'SE',
    		),
    		1753 => 
    		array (
    			'codigoIbge' => 2800209,
    			'nome' => 'Aquidabã',
    			'UF' => 'SE',
    		),
    		1754 => 
    		array (
    			'codigoIbge' => 2800308,
    			'nome' => 'Aracaju',
    			'UF' => 'SE',
    		),
    		1755 => 
    		array (
    			'codigoIbge' => 2800407,
    			'nome' => 'Arauá',
    			'UF' => 'SE',
    		),
    		1756 => 
    		array (
    			'codigoIbge' => 2800506,
    			'nome' => 'Areia Branca',
    			'UF' => 'SE',
    		),
    		1757 => 
    		array (
    			'codigoIbge' => 2800605,
    			'nome' => 'Barra dos Coqueiros',
    			'UF' => 'SE',
    		),
    		1758 => 
    		array (
    			'codigoIbge' => 2800670,
    			'nome' => 'Boquim',
    			'UF' => 'SE',
    		),
    		1759 => 
    		array (
    			'codigoIbge' => 2800704,
    			'nome' => 'Brejo Grande',
    			'UF' => 'SE',
    		),
    		1760 => 
    		array (
    			'codigoIbge' => 2801009,
    			'nome' => 'Campo do Brito',
    			'UF' => 'SE',
    		),
    		1761 => 
    		array (
    			'codigoIbge' => 2801108,
    			'nome' => 'Canhoba',
    			'UF' => 'SE',
    		),
    		1762 => 
    		array (
    			'codigoIbge' => 2801207,
    			'nome' => 'Canindé de São Francisco',
    			'UF' => 'SE',
    		),
    		1763 => 
    		array (
    			'codigoIbge' => 2801306,
    			'nome' => 'Capela',
    			'UF' => 'SE',
    		),
    		1764 => 
    		array (
    			'codigoIbge' => 2801405,
    			'nome' => 'Carira',
    			'UF' => 'SE',
    		),
    		1765 => 
    		array (
    			'codigoIbge' => 2801504,
    			'nome' => 'Carmópolis',
    			'UF' => 'SE',
    		),
    		1766 => 
    		array (
    			'codigoIbge' => 2801603,
    			'nome' => 'Cedro de São João',
    			'UF' => 'SE',
    		),
    		1767 => 
    		array (
    			'codigoIbge' => 2801702,
    			'nome' => 'Cristinápolis',
    			'UF' => 'SE',
    		),
    		1768 => 
    		array (
    			'codigoIbge' => 2801900,
    			'nome' => 'Cumbe',
    			'UF' => 'SE',
    		),
    		1769 => 
    		array (
    			'codigoIbge' => 2802007,
    			'nome' => 'Divina Pastora',
    			'UF' => 'SE',
    		),
    		1770 => 
    		array (
    			'codigoIbge' => 2802106,
    			'nome' => 'Estância',
    			'UF' => 'SE',
    		),
    		1771 => 
    		array (
    			'codigoIbge' => 2802205,
    			'nome' => 'Feira Nova',
    			'UF' => 'SE',
    		),
    		1772 => 
    		array (
    			'codigoIbge' => 2802304,
    			'nome' => 'Frei Paulo',
    			'UF' => 'SE',
    		),
    		1773 => 
    		array (
    			'codigoIbge' => 2802403,
    			'nome' => 'Gararu',
    			'UF' => 'SE',
    		),
    		1774 => 
    		array (
    			'codigoIbge' => 2802502,
    			'nome' => 'General Maynard',
    			'UF' => 'SE',
    		),
    		1775 => 
    		array (
    			'codigoIbge' => 2802601,
    			'nome' => 'Gracho Cardoso',
    			'UF' => 'SE',
    		),
    		1776 => 
    		array (
    			'codigoIbge' => 2802700,
    			'nome' => 'Ilha das Flores',
    			'UF' => 'SE',
    		),
    		1777 => 
    		array (
    			'codigoIbge' => 2802809,
    			'nome' => 'Indiaroba',
    			'UF' => 'SE',
    		),
    		1778 => 
    		array (
    			'codigoIbge' => 2802908,
    			'nome' => 'Itabaiana',
    			'UF' => 'SE',
    		),
    		1779 => 
    		array (
    			'codigoIbge' => 2803005,
    			'nome' => 'Itabaianinha',
    			'UF' => 'SE',
    		),
    		1780 => 
    		array (
    			'codigoIbge' => 2803104,
    			'nome' => 'Itabi',
    			'UF' => 'SE',
    		),
    		1781 => 
    		array (
    			'codigoIbge' => 2803203,
    			'nome' => 'Itaporanga d\'Ajuda',
    			'UF' => 'SE',
    		),
    		1782 => 
    		array (
    			'codigoIbge' => 2803302,
    			'nome' => 'Japaratuba',
    			'UF' => 'SE',
    		),
    		1783 => 
    		array (
    			'codigoIbge' => 2803401,
    			'nome' => 'Japoatã',
    			'UF' => 'SE',
    		),
    		1784 => 
    		array (
    			'codigoIbge' => 2803500,
    			'nome' => 'Lagarto',
    			'UF' => 'SE',
    		),
    		1785 => 
    		array (
    			'codigoIbge' => 2803609,
    			'nome' => 'Laranjeiras',
    			'UF' => 'SE',
    		),
    		1786 => 
    		array (
    			'codigoIbge' => 2803708,
    			'nome' => 'Macambira',
    			'UF' => 'SE',
    		),
    		1787 => 
    		array (
    			'codigoIbge' => 2803807,
    			'nome' => 'Malhada dos Bois',
    			'UF' => 'SE',
    		),
    		1788 => 
    		array (
    			'codigoIbge' => 2803906,
    			'nome' => 'Malhador',
    			'UF' => 'SE',
    		),
    		1789 => 
    		array (
    			'codigoIbge' => 2804003,
    			'nome' => 'Maruim',
    			'UF' => 'SE',
    		),
    		1790 => 
    		array (
    			'codigoIbge' => 2804102,
    			'nome' => 'Moita Bonita',
    			'UF' => 'SE',
    		),
    		1791 => 
    		array (
    			'codigoIbge' => 2804201,
    			'nome' => 'Monte Alegre de Sergipe',
    			'UF' => 'SE',
    		),
    		1792 => 
    		array (
    			'codigoIbge' => 2804300,
    			'nome' => 'Muribeca',
    			'UF' => 'SE',
    		),
    		1793 => 
    		array (
    			'codigoIbge' => 2804409,
    			'nome' => 'Neópolis',
    			'UF' => 'SE',
    		),
    		1794 => 
    		array (
    			'codigoIbge' => 2804458,
    			'nome' => 'Nossa Senhora Aparecida',
    			'UF' => 'SE',
    		),
    		1795 => 
    		array (
    			'codigoIbge' => 2804508,
    			'nome' => 'Nossa Senhora da Glória',
    			'UF' => 'SE',
    		),
    		1796 => 
    		array (
    			'codigoIbge' => 2804607,
    			'nome' => 'Nossa Senhora das Dores',
    			'UF' => 'SE',
    		),
    		1797 => 
    		array (
    			'codigoIbge' => 2804706,
    			'nome' => 'Nossa Senhora de Lourdes',
    			'UF' => 'SE',
    		),
    		1798 => 
    		array (
    			'codigoIbge' => 2804805,
    			'nome' => 'Nossa Senhora do Socorro',
    			'UF' => 'SE',
    		),
    		1799 => 
    		array (
    			'codigoIbge' => 2804904,
    			'nome' => 'Pacatuba',
    			'UF' => 'SE',
    		),
    		1800 => 
    		array (
    			'codigoIbge' => 2805000,
    			'nome' => 'Pedra Mole',
    			'UF' => 'SE',
    		),
    		1801 => 
    		array (
    			'codigoIbge' => 2805109,
    			'nome' => 'Pedrinhas',
    			'UF' => 'SE',
    		),
    		1802 => 
    		array (
    			'codigoIbge' => 2805208,
    			'nome' => 'Pinhão',
    			'UF' => 'SE',
    		),
    		1803 => 
    		array (
    			'codigoIbge' => 2805307,
    			'nome' => 'Pirambu',
    			'UF' => 'SE',
    		),
    		1804 => 
    		array (
    			'codigoIbge' => 2805406,
    			'nome' => 'Poço Redondo',
    			'UF' => 'SE',
    		),
    		1805 => 
    		array (
    			'codigoIbge' => 2805505,
    			'nome' => 'Poço Verde',
    			'UF' => 'SE',
    		),
    		1806 => 
    		array (
    			'codigoIbge' => 2805604,
    			'nome' => 'Porto da Folha',
    			'UF' => 'SE',
    		),
    		1807 => 
    		array (
    			'codigoIbge' => 2805703,
    			'nome' => 'Propriá',
    			'UF' => 'SE',
    		),
    		1808 => 
    		array (
    			'codigoIbge' => 2805802,
    			'nome' => 'Riachão do Dantas',
    			'UF' => 'SE',
    		),
    		1809 => 
    		array (
    			'codigoIbge' => 2805901,
    			'nome' => 'Riachuelo',
    			'UF' => 'SE',
    		),
    		1810 => 
    		array (
    			'codigoIbge' => 2806008,
    			'nome' => 'Ribeirópolis',
    			'UF' => 'SE',
    		),
    		1811 => 
    		array (
    			'codigoIbge' => 2806107,
    			'nome' => 'Rosário do Catete',
    			'UF' => 'SE',
    		),
    		1812 => 
    		array (
    			'codigoIbge' => 2806206,
    			'nome' => 'Salgado',
    			'UF' => 'SE',
    		),
    		1813 => 
    		array (
    			'codigoIbge' => 2806305,
    			'nome' => 'Santa Luzia do Itanhy',
    			'UF' => 'SE',
    		),
    		1814 => 
    		array (
    			'codigoIbge' => 2806404,
    			'nome' => 'Santana do São Francisco',
    			'UF' => 'SE',
    		),
    		1815 => 
    		array (
    			'codigoIbge' => 2806503,
    			'nome' => 'Santa Rosa de Lima',
    			'UF' => 'SE',
    		),
    		1816 => 
    		array (
    			'codigoIbge' => 2806602,
    			'nome' => 'Santo Amaro das Brotas',
    			'UF' => 'SE',
    		),
    		1817 => 
    		array (
    			'codigoIbge' => 2806701,
    			'nome' => 'São Cristóvão',
    			'UF' => 'SE',
    		),
    		1818 => 
    		array (
    			'codigoIbge' => 2806800,
    			'nome' => 'São Domingos',
    			'UF' => 'SE',
    		),
    		1819 => 
    		array (
    			'codigoIbge' => 2806909,
    			'nome' => 'São Francisco',
    			'UF' => 'SE',
    		),
    		1820 => 
    		array (
    			'codigoIbge' => 2807006,
    			'nome' => 'São Miguel do Aleixo',
    			'UF' => 'SE',
    		),
    		1821 => 
    		array (
    			'codigoIbge' => 2807105,
    			'nome' => 'Simão Dias',
    			'UF' => 'SE',
    		),
    		1822 => 
    		array (
    			'codigoIbge' => 2807204,
    			'nome' => 'Siriri',
    			'UF' => 'SE',
    		),
    		1823 => 
    		array (
    			'codigoIbge' => 2807303,
    			'nome' => 'Telha',
    			'UF' => 'SE',
    		),
    		1824 => 
    		array (
    			'codigoIbge' => 2807402,
    			'nome' => 'Tobias Barreto',
    			'UF' => 'SE',
    		),
    		1825 => 
    		array (
    			'codigoIbge' => 2807501,
    			'nome' => 'Tomar do Geru',
    			'UF' => 'SE',
    		),
    		1826 => 
    		array (
    			'codigoIbge' => 2807600,
    			'nome' => 'Umbaúba',
    			'UF' => 'SE',
    		),
    		1827 => 
    		array (
    			'codigoIbge' => 2900108,
    			'nome' => 'Abaíra',
    			'UF' => 'BA',
    		),
    		1828 => 
    		array (
    			'codigoIbge' => 2900207,
    			'nome' => 'Abaré',
    			'UF' => 'BA',
    		),
    		1829 => 
    		array (
    			'codigoIbge' => 2900306,
    			'nome' => 'Acajutiba',
    			'UF' => 'BA',
    		),
    		1830 => 
    		array (
    			'codigoIbge' => 2900355,
    			'nome' => 'Adustina',
    			'UF' => 'BA',
    		),
    		1831 => 
    		array (
    			'codigoIbge' => 2900405,
    			'nome' => 'Água Fria',
    			'UF' => 'BA',
    		),
    		1832 => 
    		array (
    			'codigoIbge' => 2900504,
    			'nome' => 'Érico Cardoso',
    			'UF' => 'BA',
    		),
    		1833 => 
    		array (
    			'codigoIbge' => 2900603,
    			'nome' => 'Aiquara',
    			'UF' => 'BA',
    		),
    		1834 => 
    		array (
    			'codigoIbge' => 2900702,
    			'nome' => 'Alagoinhas',
    			'UF' => 'BA',
    		),
    		1835 => 
    		array (
    			'codigoIbge' => 2900801,
    			'nome' => 'Alcobaça',
    			'UF' => 'BA',
    		),
    		1836 => 
    		array (
    			'codigoIbge' => 2900900,
    			'nome' => 'Almadina',
    			'UF' => 'BA',
    		),
    		1837 => 
    		array (
    			'codigoIbge' => 2901007,
    			'nome' => 'Amargosa',
    			'UF' => 'BA',
    		),
    		1838 => 
    		array (
    			'codigoIbge' => 2901106,
    			'nome' => 'Amélia Rodrigues',
    			'UF' => 'BA',
    		),
    		1839 => 
    		array (
    			'codigoIbge' => 2901155,
    			'nome' => 'América Dourada',
    			'UF' => 'BA',
    		),
    		1840 => 
    		array (
    			'codigoIbge' => 2901205,
    			'nome' => 'Anagé',
    			'UF' => 'BA',
    		),
    		1841 => 
    		array (
    			'codigoIbge' => 2901304,
    			'nome' => 'Andaraí',
    			'UF' => 'BA',
    		),
    		1842 => 
    		array (
    			'codigoIbge' => 2901353,
    			'nome' => 'Andorinha',
    			'UF' => 'BA',
    		),
    		1843 => 
    		array (
    			'codigoIbge' => 2901403,
    			'nome' => 'Angical',
    			'UF' => 'BA',
    		),
    		1844 => 
    		array (
    			'codigoIbge' => 2901502,
    			'nome' => 'Anguera',
    			'UF' => 'BA',
    		),
    		1845 => 
    		array (
    			'codigoIbge' => 2901601,
    			'nome' => 'Antas',
    			'UF' => 'BA',
    		),
    		1846 => 
    		array (
    			'codigoIbge' => 2901700,
    			'nome' => 'Antônio Cardoso',
    			'UF' => 'BA',
    		),
    		1847 => 
    		array (
    			'codigoIbge' => 2901809,
    			'nome' => 'Antônio Gonçalves',
    			'UF' => 'BA',
    		),
    		1848 => 
    		array (
    			'codigoIbge' => 2901908,
    			'nome' => 'Aporá',
    			'UF' => 'BA',
    		),
    		1849 => 
    		array (
    			'codigoIbge' => 2901957,
    			'nome' => 'Apuarema',
    			'UF' => 'BA',
    		),
    		1850 => 
    		array (
    			'codigoIbge' => 2902005,
    			'nome' => 'Aracatu',
    			'UF' => 'BA',
    		),
    		1851 => 
    		array (
    			'codigoIbge' => 2902054,
    			'nome' => 'Araçás',
    			'UF' => 'BA',
    		),
    		1852 => 
    		array (
    			'codigoIbge' => 2902104,
    			'nome' => 'Araci',
    			'UF' => 'BA',
    		),
    		1853 => 
    		array (
    			'codigoIbge' => 2902203,
    			'nome' => 'Aramari',
    			'UF' => 'BA',
    		),
    		1854 => 
    		array (
    			'codigoIbge' => 2902252,
    			'nome' => 'Arataca',
    			'UF' => 'BA',
    		),
    		1855 => 
    		array (
    			'codigoIbge' => 2902302,
    			'nome' => 'Aratuípe',
    			'UF' => 'BA',
    		),
    		1856 => 
    		array (
    			'codigoIbge' => 2902401,
    			'nome' => 'Aurelino Leal',
    			'UF' => 'BA',
    		),
    		1857 => 
    		array (
    			'codigoIbge' => 2902500,
    			'nome' => 'Baianópolis',
    			'UF' => 'BA',
    		),
    		1858 => 
    		array (
    			'codigoIbge' => 2902609,
    			'nome' => 'Baixa Grande',
    			'UF' => 'BA',
    		),
    		1859 => 
    		array (
    			'codigoIbge' => 2902658,
    			'nome' => 'Banzaê',
    			'UF' => 'BA',
    		),
    		1860 => 
    		array (
    			'codigoIbge' => 2902708,
    			'nome' => 'Barra',
    			'UF' => 'BA',
    		),
    		1861 => 
    		array (
    			'codigoIbge' => 2902807,
    			'nome' => 'Barra da Estiva',
    			'UF' => 'BA',
    		),
    		1862 => 
    		array (
    			'codigoIbge' => 2902906,
    			'nome' => 'Barra do Choça',
    			'UF' => 'BA',
    		),
    		1863 => 
    		array (
    			'codigoIbge' => 2903003,
    			'nome' => 'Barra do Mendes',
    			'UF' => 'BA',
    		),
    		1864 => 
    		array (
    			'codigoIbge' => 2903102,
    			'nome' => 'Barra do Rocha',
    			'UF' => 'BA',
    		),
    		1865 => 
    		array (
    			'codigoIbge' => 2903201,
    			'nome' => 'Barreiras',
    			'UF' => 'BA',
    		),
    		1866 => 
    		array (
    			'codigoIbge' => 2903235,
    			'nome' => 'Barro Alto',
    			'UF' => 'BA',
    		),
    		1867 => 
    		array (
    			'codigoIbge' => 2903276,
    			'nome' => 'Barrocas',
    			'UF' => 'BA',
    		),
    		1868 => 
    		array (
    			'codigoIbge' => 2903300,
    			'nome' => 'Barro Preto',
    			'UF' => 'BA',
    		),
    		1869 => 
    		array (
    			'codigoIbge' => 2903409,
    			'nome' => 'Belmonte',
    			'UF' => 'BA',
    		),
    		1870 => 
    		array (
    			'codigoIbge' => 2903508,
    			'nome' => 'Belo Campo',
    			'UF' => 'BA',
    		),
    		1871 => 
    		array (
    			'codigoIbge' => 2903607,
    			'nome' => 'Biritinga',
    			'UF' => 'BA',
    		),
    		1872 => 
    		array (
    			'codigoIbge' => 2903706,
    			'nome' => 'Boa Nova',
    			'UF' => 'BA',
    		),
    		1873 => 
    		array (
    			'codigoIbge' => 2903805,
    			'nome' => 'Boa Vista do Tupim',
    			'UF' => 'BA',
    		),
    		1874 => 
    		array (
    			'codigoIbge' => 2903904,
    			'nome' => 'Bom Jesus da Lapa',
    			'UF' => 'BA',
    		),
    		1875 => 
    		array (
    			'codigoIbge' => 2903953,
    			'nome' => 'Bom Jesus da Serra',
    			'UF' => 'BA',
    		),
    		1876 => 
    		array (
    			'codigoIbge' => 2904001,
    			'nome' => 'Boninal',
    			'UF' => 'BA',
    		),
    		1877 => 
    		array (
    			'codigoIbge' => 2904050,
    			'nome' => 'Bonito',
    			'UF' => 'BA',
    		),
    		1878 => 
    		array (
    			'codigoIbge' => 2904100,
    			'nome' => 'Boquira',
    			'UF' => 'BA',
    		),
    		1879 => 
    		array (
    			'codigoIbge' => 2904209,
    			'nome' => 'Botuporã',
    			'UF' => 'BA',
    		),
    		1880 => 
    		array (
    			'codigoIbge' => 2904308,
    			'nome' => 'Brejões',
    			'UF' => 'BA',
    		),
    		1881 => 
    		array (
    			'codigoIbge' => 2904407,
    			'nome' => 'Brejolândia',
    			'UF' => 'BA',
    		),
    		1882 => 
    		array (
    			'codigoIbge' => 2904506,
    			'nome' => 'Brotas de Macaúbas',
    			'UF' => 'BA',
    		),
    		1883 => 
    		array (
    			'codigoIbge' => 2904605,
    			'nome' => 'Brumado',
    			'UF' => 'BA',
    		),
    		1884 => 
    		array (
    			'codigoIbge' => 2904704,
    			'nome' => 'Buerarema',
    			'UF' => 'BA',
    		),
    		1885 => 
    		array (
    			'codigoIbge' => 2904753,
    			'nome' => 'Buritirama',
    			'UF' => 'BA',
    		),
    		1886 => 
    		array (
    			'codigoIbge' => 2904803,
    			'nome' => 'Caatiba',
    			'UF' => 'BA',
    		),
    		1887 => 
    		array (
    			'codigoIbge' => 2904852,
    			'nome' => 'Cabaceiras do Paraguaçu',
    			'UF' => 'BA',
    		),
    		1888 => 
    		array (
    			'codigoIbge' => 2904902,
    			'nome' => 'Cachoeira',
    			'UF' => 'BA',
    		),
    		1889 => 
    		array (
    			'codigoIbge' => 2905008,
    			'nome' => 'Caculé',
    			'UF' => 'BA',
    		),
    		1890 => 
    		array (
    			'codigoIbge' => 2905107,
    			'nome' => 'Caém',
    			'UF' => 'BA',
    		),
    		1891 => 
    		array (
    			'codigoIbge' => 2905156,
    			'nome' => 'Caetanos',
    			'UF' => 'BA',
    		),
    		1892 => 
    		array (
    			'codigoIbge' => 2905206,
    			'nome' => 'Caetité',
    			'UF' => 'BA',
    		),
    		1893 => 
    		array (
    			'codigoIbge' => 2905305,
    			'nome' => 'Cafarnaum',
    			'UF' => 'BA',
    		),
    		1894 => 
    		array (
    			'codigoIbge' => 2905404,
    			'nome' => 'Cairu',
    			'UF' => 'BA',
    		),
    		1895 => 
    		array (
    			'codigoIbge' => 2905503,
    			'nome' => 'Caldeirão Grande',
    			'UF' => 'BA',
    		),
    		1896 => 
    		array (
    			'codigoIbge' => 2905602,
    			'nome' => 'Camacan',
    			'UF' => 'BA',
    		),
    		1897 => 
    		array (
    			'codigoIbge' => 2905701,
    			'nome' => 'Camaçari',
    			'UF' => 'BA',
    		),
    		1898 => 
    		array (
    			'codigoIbge' => 2905800,
    			'nome' => 'Camamu',
    			'UF' => 'BA',
    		),
    		1899 => 
    		array (
    			'codigoIbge' => 2905909,
    			'nome' => 'Campo Alegre de Lourdes',
    			'UF' => 'BA',
    		),
    		1900 => 
    		array (
    			'codigoIbge' => 2906006,
    			'nome' => 'Campo Formoso',
    			'UF' => 'BA',
    		),
    		1901 => 
    		array (
    			'codigoIbge' => 2906105,
    			'nome' => 'Canápolis',
    			'UF' => 'BA',
    		),
    		1902 => 
    		array (
    			'codigoIbge' => 2906204,
    			'nome' => 'Canarana',
    			'UF' => 'BA',
    		),
    		1903 => 
    		array (
    			'codigoIbge' => 2906303,
    			'nome' => 'Canavieiras',
    			'UF' => 'BA',
    		),
    		1904 => 
    		array (
    			'codigoIbge' => 2906402,
    			'nome' => 'Candeal',
    			'UF' => 'BA',
    		),
    		1905 => 
    		array (
    			'codigoIbge' => 2906501,
    			'nome' => 'Candeias',
    			'UF' => 'BA',
    		),
    		1906 => 
    		array (
    			'codigoIbge' => 2906600,
    			'nome' => 'Candiba',
    			'UF' => 'BA',
    		),
    		1907 => 
    		array (
    			'codigoIbge' => 2906709,
    			'nome' => 'Cândido Sales',
    			'UF' => 'BA',
    		),
    		1908 => 
    		array (
    			'codigoIbge' => 2906808,
    			'nome' => 'Cansanção',
    			'UF' => 'BA',
    		),
    		1909 => 
    		array (
    			'codigoIbge' => 2906824,
    			'nome' => 'Canudos',
    			'UF' => 'BA',
    		),
    		1910 => 
    		array (
    			'codigoIbge' => 2906857,
    			'nome' => 'Capela do Alto Alegre',
    			'UF' => 'BA',
    		),
    		1911 => 
    		array (
    			'codigoIbge' => 2906873,
    			'nome' => 'Capim Grosso',
    			'UF' => 'BA',
    		),
    		1912 => 
    		array (
    			'codigoIbge' => 2906899,
    			'nome' => 'Caraíbas',
    			'UF' => 'BA',
    		),
    		1913 => 
    		array (
    			'codigoIbge' => 2906907,
    			'nome' => 'Caravelas',
    			'UF' => 'BA',
    		),
    		1914 => 
    		array (
    			'codigoIbge' => 2907004,
    			'nome' => 'Cardeal da Silva',
    			'UF' => 'BA',
    		),
    		1915 => 
    		array (
    			'codigoIbge' => 2907103,
    			'nome' => 'Carinhanha',
    			'UF' => 'BA',
    		),
    		1916 => 
    		array (
    			'codigoIbge' => 2907202,
    			'nome' => 'Casa Nova',
    			'UF' => 'BA',
    		),
    		1917 => 
    		array (
    			'codigoIbge' => 2907301,
    			'nome' => 'Castro Alves',
    			'UF' => 'BA',
    		),
    		1918 => 
    		array (
    			'codigoIbge' => 2907400,
    			'nome' => 'Catolândia',
    			'UF' => 'BA',
    		),
    		1919 => 
    		array (
    			'codigoIbge' => 2907509,
    			'nome' => 'Catu',
    			'UF' => 'BA',
    		),
    		1920 => 
    		array (
    			'codigoIbge' => 2907558,
    			'nome' => 'Caturama',
    			'UF' => 'BA',
    		),
    		1921 => 
    		array (
    			'codigoIbge' => 2907608,
    			'nome' => 'Central',
    			'UF' => 'BA',
    		),
    		1922 => 
    		array (
    			'codigoIbge' => 2907707,
    			'nome' => 'Chorrochó',
    			'UF' => 'BA',
    		),
    		1923 => 
    		array (
    			'codigoIbge' => 2907806,
    			'nome' => 'Cícero Dantas',
    			'UF' => 'BA',
    		),
    		1924 => 
    		array (
    			'codigoIbge' => 2907905,
    			'nome' => 'Cipó',
    			'UF' => 'BA',
    		),
    		1925 => 
    		array (
    			'codigoIbge' => 2908002,
    			'nome' => 'Coaraci',
    			'UF' => 'BA',
    		),
    		1926 => 
    		array (
    			'codigoIbge' => 2908101,
    			'nome' => 'Cocos',
    			'UF' => 'BA',
    		),
    		1927 => 
    		array (
    			'codigoIbge' => 2908200,
    			'nome' => 'Conceição da Feira',
    			'UF' => 'BA',
    		),
    		1928 => 
    		array (
    			'codigoIbge' => 2908309,
    			'nome' => 'Conceição do Almeida',
    			'UF' => 'BA',
    		),
    		1929 => 
    		array (
    			'codigoIbge' => 2908408,
    			'nome' => 'Conceição do Coité',
    			'UF' => 'BA',
    		),
    		1930 => 
    		array (
    			'codigoIbge' => 2908507,
    			'nome' => 'Conceição do Jacuípe',
    			'UF' => 'BA',
    		),
    		1931 => 
    		array (
    			'codigoIbge' => 2908606,
    			'nome' => 'Conde',
    			'UF' => 'BA',
    		),
    		1932 => 
    		array (
    			'codigoIbge' => 2908705,
    			'nome' => 'Condeúba',
    			'UF' => 'BA',
    		),
    		1933 => 
    		array (
    			'codigoIbge' => 2908804,
    			'nome' => 'Contendas do Sincorá',
    			'UF' => 'BA',
    		),
    		1934 => 
    		array (
    			'codigoIbge' => 2908903,
    			'nome' => 'Coração de Maria',
    			'UF' => 'BA',
    		),
    		1935 => 
    		array (
    			'codigoIbge' => 2909000,
    			'nome' => 'Cordeiros',
    			'UF' => 'BA',
    		),
    		1936 => 
    		array (
    			'codigoIbge' => 2909109,
    			'nome' => 'Coribe',
    			'UF' => 'BA',
    		),
    		1937 => 
    		array (
    			'codigoIbge' => 2909208,
    			'nome' => 'Coronel João Sá',
    			'UF' => 'BA',
    		),
    		1938 => 
    		array (
    			'codigoIbge' => 2909307,
    			'nome' => 'Correntina',
    			'UF' => 'BA',
    		),
    		1939 => 
    		array (
    			'codigoIbge' => 2909406,
    			'nome' => 'Cotegipe',
    			'UF' => 'BA',
    		),
    		1940 => 
    		array (
    			'codigoIbge' => 2909505,
    			'nome' => 'Cravolândia',
    			'UF' => 'BA',
    		),
    		1941 => 
    		array (
    			'codigoIbge' => 2909604,
    			'nome' => 'Crisópolis',
    			'UF' => 'BA',
    		),
    		1942 => 
    		array (
    			'codigoIbge' => 2909703,
    			'nome' => 'Cristópolis',
    			'UF' => 'BA',
    		),
    		1943 => 
    		array (
    			'codigoIbge' => 2909802,
    			'nome' => 'Cruz das Almas',
    			'UF' => 'BA',
    		),
    		1944 => 
    		array (
    			'codigoIbge' => 2909901,
    			'nome' => 'Curaçá',
    			'UF' => 'BA',
    		),
    		1945 => 
    		array (
    			'codigoIbge' => 2910008,
    			'nome' => 'Dário Meira',
    			'UF' => 'BA',
    		),
    		1946 => 
    		array (
    			'codigoIbge' => 2910057,
    			'nome' => 'Dias d\'Ávila',
    			'UF' => 'BA',
    		),
    		1947 => 
    		array (
    			'codigoIbge' => 2910107,
    			'nome' => 'Dom Basílio',
    			'UF' => 'BA',
    		),
    		1948 => 
    		array (
    			'codigoIbge' => 2910206,
    			'nome' => 'Dom Macedo Costa',
    			'UF' => 'BA',
    		),
    		1949 => 
    		array (
    			'codigoIbge' => 2910305,
    			'nome' => 'Elísio Medrado',
    			'UF' => 'BA',
    		),
    		1950 => 
    		array (
    			'codigoIbge' => 2910404,
    			'nome' => 'Encruzilhada',
    			'UF' => 'BA',
    		),
    		1951 => 
    		array (
    			'codigoIbge' => 2910503,
    			'nome' => 'Entre Rios',
    			'UF' => 'BA',
    		),
    		1952 => 
    		array (
    			'codigoIbge' => 2910602,
    			'nome' => 'Esplanada',
    			'UF' => 'BA',
    		),
    		1953 => 
    		array (
    			'codigoIbge' => 2910701,
    			'nome' => 'Euclides da Cunha',
    			'UF' => 'BA',
    		),
    		1954 => 
    		array (
    			'codigoIbge' => 2910727,
    			'nome' => 'Eunápolis',
    			'UF' => 'BA',
    		),
    		1955 => 
    		array (
    			'codigoIbge' => 2910750,
    			'nome' => 'Fátima',
    			'UF' => 'BA',
    		),
    		1956 => 
    		array (
    			'codigoIbge' => 2910776,
    			'nome' => 'Feira da Mata',
    			'UF' => 'BA',
    		),
    		1957 => 
    		array (
    			'codigoIbge' => 2910800,
    			'nome' => 'Feira de Santana',
    			'UF' => 'BA',
    		),
    		1958 => 
    		array (
    			'codigoIbge' => 2910859,
    			'nome' => 'Filadélfia',
    			'UF' => 'BA',
    		),
    		1959 => 
    		array (
    			'codigoIbge' => 2910909,
    			'nome' => 'Firmino Alves',
    			'UF' => 'BA',
    		),
    		1960 => 
    		array (
    			'codigoIbge' => 2911006,
    			'nome' => 'Floresta Azul',
    			'UF' => 'BA',
    		),
    		1961 => 
    		array (
    			'codigoIbge' => 2911105,
    			'nome' => 'Formosa do Rio Preto',
    			'UF' => 'BA',
    		),
    		1962 => 
    		array (
    			'codigoIbge' => 2911204,
    			'nome' => 'Gandu',
    			'UF' => 'BA',
    		),
    		1963 => 
    		array (
    			'codigoIbge' => 2911253,
    			'nome' => 'Gavião',
    			'UF' => 'BA',
    		),
    		1964 => 
    		array (
    			'codigoIbge' => 2911303,
    			'nome' => 'Gentio do Ouro',
    			'UF' => 'BA',
    		),
    		1965 => 
    		array (
    			'codigoIbge' => 2911402,
    			'nome' => 'Glória',
    			'UF' => 'BA',
    		),
    		1966 => 
    		array (
    			'codigoIbge' => 2911501,
    			'nome' => 'Gongogi',
    			'UF' => 'BA',
    		),
    		1967 => 
    		array (
    			'codigoIbge' => 2911600,
    			'nome' => 'Governador Mangabeira',
    			'UF' => 'BA',
    		),
    		1968 => 
    		array (
    			'codigoIbge' => 2911659,
    			'nome' => 'Guajeru',
    			'UF' => 'BA',
    		),
    		1969 => 
    		array (
    			'codigoIbge' => 2911709,
    			'nome' => 'Guanambi',
    			'UF' => 'BA',
    		),
    		1970 => 
    		array (
    			'codigoIbge' => 2911808,
    			'nome' => 'Guaratinga',
    			'UF' => 'BA',
    		),
    		1971 => 
    		array (
    			'codigoIbge' => 2911857,
    			'nome' => 'Heliópolis',
    			'UF' => 'BA',
    		),
    		1972 => 
    		array (
    			'codigoIbge' => 2911907,
    			'nome' => 'Iaçu',
    			'UF' => 'BA',
    		),
    		1973 => 
    		array (
    			'codigoIbge' => 2912004,
    			'nome' => 'Ibiassucê',
    			'UF' => 'BA',
    		),
    		1974 => 
    		array (
    			'codigoIbge' => 2912103,
    			'nome' => 'Ibicaraí',
    			'UF' => 'BA',
    		),
    		1975 => 
    		array (
    			'codigoIbge' => 2912202,
    			'nome' => 'Ibicoara',
    			'UF' => 'BA',
    		),
    		1976 => 
    		array (
    			'codigoIbge' => 2912301,
    			'nome' => 'Ibicuí',
    			'UF' => 'BA',
    		),
    		1977 => 
    		array (
    			'codigoIbge' => 2912400,
    			'nome' => 'Ibipeba',
    			'UF' => 'BA',
    		),
    		1978 => 
    		array (
    			'codigoIbge' => 2912509,
    			'nome' => 'Ibipitanga',
    			'UF' => 'BA',
    		),
    		1979 => 
    		array (
    			'codigoIbge' => 2912608,
    			'nome' => 'Ibiquera',
    			'UF' => 'BA',
    		),
    		1980 => 
    		array (
    			'codigoIbge' => 2912707,
    			'nome' => 'Ibirapitanga',
    			'UF' => 'BA',
    		),
    		1981 => 
    		array (
    			'codigoIbge' => 2912806,
    			'nome' => 'Ibirapuã',
    			'UF' => 'BA',
    		),
    		1982 => 
    		array (
    			'codigoIbge' => 2912905,
    			'nome' => 'Ibirataia',
    			'UF' => 'BA',
    		),
    		1983 => 
    		array (
    			'codigoIbge' => 2913002,
    			'nome' => 'Ibitiara',
    			'UF' => 'BA',
    		),
    		1984 => 
    		array (
    			'codigoIbge' => 2913101,
    			'nome' => 'Ibititá',
    			'UF' => 'BA',
    		),
    		1985 => 
    		array (
    			'codigoIbge' => 2913200,
    			'nome' => 'Ibotirama',
    			'UF' => 'BA',
    		),
    		1986 => 
    		array (
    			'codigoIbge' => 2913309,
    			'nome' => 'Ichu',
    			'UF' => 'BA',
    		),
    		1987 => 
    		array (
    			'codigoIbge' => 2913408,
    			'nome' => 'Igaporã',
    			'UF' => 'BA',
    		),
    		1988 => 
    		array (
    			'codigoIbge' => 2913457,
    			'nome' => 'Igrapiúna',
    			'UF' => 'BA',
    		),
    		1989 => 
    		array (
    			'codigoIbge' => 2913507,
    			'nome' => 'Iguaí',
    			'UF' => 'BA',
    		),
    		1990 => 
    		array (
    			'codigoIbge' => 2913606,
    			'nome' => 'Ilhéus',
    			'UF' => 'BA',
    		),
    		1991 => 
    		array (
    			'codigoIbge' => 2913705,
    			'nome' => 'Inhambupe',
    			'UF' => 'BA',
    		),
    		1992 => 
    		array (
    			'codigoIbge' => 2913804,
    			'nome' => 'Ipecaetá',
    			'UF' => 'BA',
    		),
    		1993 => 
    		array (
    			'codigoIbge' => 2913903,
    			'nome' => 'Ipiaú',
    			'UF' => 'BA',
    		),
    		1994 => 
    		array (
    			'codigoIbge' => 2914000,
    			'nome' => 'Ipirá',
    			'UF' => 'BA',
    		),
    		1995 => 
    		array (
    			'codigoIbge' => 2914109,
    			'nome' => 'Ipupiara',
    			'UF' => 'BA',
    		),
    		1996 => 
    		array (
    			'codigoIbge' => 2914208,
    			'nome' => 'Irajuba',
    			'UF' => 'BA',
    		),
    		1997 => 
    		array (
    			'codigoIbge' => 2914307,
    			'nome' => 'Iramaia',
    			'UF' => 'BA',
    		),
    		1998 => 
    		array (
    			'codigoIbge' => 2914406,
    			'nome' => 'Iraquara',
    			'UF' => 'BA',
    		),
    		1999 => 
    		array (
    			'codigoIbge' => 2914505,
    			'nome' => 'Irará',
    			'UF' => 'BA',
    		),
    		2000 => 
    		array (
    			'codigoIbge' => 2914604,
    			'nome' => 'Irecê',
    			'UF' => 'BA',
    		),
    		2001 => 
    		array (
    			'codigoIbge' => 2914653,
    			'nome' => 'Itabela',
    			'UF' => 'BA',
    		),
    		2002 => 
    		array (
    			'codigoIbge' => 2914703,
    			'nome' => 'Itaberaba',
    			'UF' => 'BA',
    		),
    		2003 => 
    		array (
    			'codigoIbge' => 2914802,
    			'nome' => 'Itabuna',
    			'UF' => 'BA',
    		),
    		2004 => 
    		array (
    			'codigoIbge' => 2914901,
    			'nome' => 'Itacaré',
    			'UF' => 'BA',
    		),
    		2005 => 
    		array (
    			'codigoIbge' => 2915007,
    			'nome' => 'Itaeté',
    			'UF' => 'BA',
    		),
    		2006 => 
    		array (
    			'codigoIbge' => 2915106,
    			'nome' => 'Itagi',
    			'UF' => 'BA',
    		),
    		2007 => 
    		array (
    			'codigoIbge' => 2915205,
    			'nome' => 'Itagibá',
    			'UF' => 'BA',
    		),
    		2008 => 
    		array (
    			'codigoIbge' => 2915304,
    			'nome' => 'Itagimirim',
    			'UF' => 'BA',
    		),
    		2009 => 
    		array (
    			'codigoIbge' => 2915353,
    			'nome' => 'Itaguaçu da Bahia',
    			'UF' => 'BA',
    		),
    		2010 => 
    		array (
    			'codigoIbge' => 2915403,
    			'nome' => 'Itaju do Colônia',
    			'UF' => 'BA',
    		),
    		2011 => 
    		array (
    			'codigoIbge' => 2915502,
    			'nome' => 'Itajuípe',
    			'UF' => 'BA',
    		),
    		2012 => 
    		array (
    			'codigoIbge' => 2915601,
    			'nome' => 'Itamaraju',
    			'UF' => 'BA',
    		),
    		2013 => 
    		array (
    			'codigoIbge' => 2915700,
    			'nome' => 'Itamari',
    			'UF' => 'BA',
    		),
    		2014 => 
    		array (
    			'codigoIbge' => 2915809,
    			'nome' => 'Itambé',
    			'UF' => 'BA',
    		),
    		2015 => 
    		array (
    			'codigoIbge' => 2915908,
    			'nome' => 'Itanagra',
    			'UF' => 'BA',
    		),
    		2016 => 
    		array (
    			'codigoIbge' => 2916005,
    			'nome' => 'Itanhém',
    			'UF' => 'BA',
    		),
    		2017 => 
    		array (
    			'codigoIbge' => 2916104,
    			'nome' => 'Itaparica',
    			'UF' => 'BA',
    		),
    		2018 => 
    		array (
    			'codigoIbge' => 2916203,
    			'nome' => 'Itapé',
    			'UF' => 'BA',
    		),
    		2019 => 
    		array (
    			'codigoIbge' => 2916302,
    			'nome' => 'Itapebi',
    			'UF' => 'BA',
    		),
    		2020 => 
    		array (
    			'codigoIbge' => 2916401,
    			'nome' => 'Itapetinga',
    			'UF' => 'BA',
    		),
    		2021 => 
    		array (
    			'codigoIbge' => 2916500,
    			'nome' => 'Itapicuru',
    			'UF' => 'BA',
    		),
    		2022 => 
    		array (
    			'codigoIbge' => 2916609,
    			'nome' => 'Itapitanga',
    			'UF' => 'BA',
    		),
    		2023 => 
    		array (
    			'codigoIbge' => 2916708,
    			'nome' => 'Itaquara',
    			'UF' => 'BA',
    		),
    		2024 => 
    		array (
    			'codigoIbge' => 2916807,
    			'nome' => 'Itarantim',
    			'UF' => 'BA',
    		),
    		2025 => 
    		array (
    			'codigoIbge' => 2916856,
    			'nome' => 'Itatim',
    			'UF' => 'BA',
    		),
    		2026 => 
    		array (
    			'codigoIbge' => 2916906,
    			'nome' => 'Itiruçu',
    			'UF' => 'BA',
    		),
    		2027 => 
    		array (
    			'codigoIbge' => 2917003,
    			'nome' => 'Itiúba',
    			'UF' => 'BA',
    		),
    		2028 => 
    		array (
    			'codigoIbge' => 2917102,
    			'nome' => 'Itororó',
    			'UF' => 'BA',
    		),
    		2029 => 
    		array (
    			'codigoIbge' => 2917201,
    			'nome' => 'Ituaçu',
    			'UF' => 'BA',
    		),
    		2030 => 
    		array (
    			'codigoIbge' => 2917300,
    			'nome' => 'Ituberá',
    			'UF' => 'BA',
    		),
    		2031 => 
    		array (
    			'codigoIbge' => 2917334,
    			'nome' => 'Iuiu',
    			'UF' => 'BA',
    		),
    		2032 => 
    		array (
    			'codigoIbge' => 2917359,
    			'nome' => 'Jaborandi',
    			'UF' => 'BA',
    		),
    		2033 => 
    		array (
    			'codigoIbge' => 2917409,
    			'nome' => 'Jacaraci',
    			'UF' => 'BA',
    		),
    		2034 => 
    		array (
    			'codigoIbge' => 2917508,
    			'nome' => 'Jacobina',
    			'UF' => 'BA',
    		),
    		2035 => 
    		array (
    			'codigoIbge' => 2917607,
    			'nome' => 'Jaguaquara',
    			'UF' => 'BA',
    		),
    		2036 => 
    		array (
    			'codigoIbge' => 2917706,
    			'nome' => 'Jaguarari',
    			'UF' => 'BA',
    		),
    		2037 => 
    		array (
    			'codigoIbge' => 2917805,
    			'nome' => 'Jaguaripe',
    			'UF' => 'BA',
    		),
    		2038 => 
    		array (
    			'codigoIbge' => 2917904,
    			'nome' => 'Jandaíra',
    			'UF' => 'BA',
    		),
    		2039 => 
    		array (
    			'codigoIbge' => 2918001,
    			'nome' => 'Jequié',
    			'UF' => 'BA',
    		),
    		2040 => 
    		array (
    			'codigoIbge' => 2918100,
    			'nome' => 'Jeremoabo',
    			'UF' => 'BA',
    		),
    		2041 => 
    		array (
    			'codigoIbge' => 2918209,
    			'nome' => 'Jiquiriçá',
    			'UF' => 'BA',
    		),
    		2042 => 
    		array (
    			'codigoIbge' => 2918308,
    			'nome' => 'Jitaúna',
    			'UF' => 'BA',
    		),
    		2043 => 
    		array (
    			'codigoIbge' => 2918357,
    			'nome' => 'João Dourado',
    			'UF' => 'BA',
    		),
    		2044 => 
    		array (
    			'codigoIbge' => 2918407,
    			'nome' => 'Juazeiro',
    			'UF' => 'BA',
    		),
    		2045 => 
    		array (
    			'codigoIbge' => 2918456,
    			'nome' => 'Jucuruçu',
    			'UF' => 'BA',
    		),
    		2046 => 
    		array (
    			'codigoIbge' => 2918506,
    			'nome' => 'Jussara',
    			'UF' => 'BA',
    		),
    		2047 => 
    		array (
    			'codigoIbge' => 2918555,
    			'nome' => 'Jussari',
    			'UF' => 'BA',
    		),
    		2048 => 
    		array (
    			'codigoIbge' => 2918605,
    			'nome' => 'Jussiape',
    			'UF' => 'BA',
    		),
    		2049 => 
    		array (
    			'codigoIbge' => 2918704,
    			'nome' => 'Lafaiete Coutinho',
    			'UF' => 'BA',
    		),
    		2050 => 
    		array (
    			'codigoIbge' => 2918753,
    			'nome' => 'Lagoa Real',
    			'UF' => 'BA',
    		),
    		2051 => 
    		array (
    			'codigoIbge' => 2918803,
    			'nome' => 'Laje',
    			'UF' => 'BA',
    		),
    		2052 => 
    		array (
    			'codigoIbge' => 2918902,
    			'nome' => 'Lajedão',
    			'UF' => 'BA',
    		),
    		2053 => 
    		array (
    			'codigoIbge' => 2919009,
    			'nome' => 'Lajedinho',
    			'UF' => 'BA',
    		),
    		2054 => 
    		array (
    			'codigoIbge' => 2919058,
    			'nome' => 'Lajedo do Tabocal',
    			'UF' => 'BA',
    		),
    		2055 => 
    		array (
    			'codigoIbge' => 2919108,
    			'nome' => 'Lamarão',
    			'UF' => 'BA',
    		),
    		2056 => 
    		array (
    			'codigoIbge' => 2919157,
    			'nome' => 'Lapão',
    			'UF' => 'BA',
    		),
    		2057 => 
    		array (
    			'codigoIbge' => 2919207,
    			'nome' => 'Lauro de Freitas',
    			'UF' => 'BA',
    		),
    		2058 => 
    		array (
    			'codigoIbge' => 2919306,
    			'nome' => 'Lençóis',
    			'UF' => 'BA',
    		),
    		2059 => 
    		array (
    			'codigoIbge' => 2919405,
    			'nome' => 'Licínio de Almeida',
    			'UF' => 'BA',
    		),
    		2060 => 
    		array (
    			'codigoIbge' => 2919504,
    			'nome' => 'Livramento de Nossa Senhora',
    			'UF' => 'BA',
    		),
    		2061 => 
    		array (
    			'codigoIbge' => 2919553,
    			'nome' => 'Luís Eduardo Magalhães',
    			'UF' => 'BA',
    		),
    		2062 => 
    		array (
    			'codigoIbge' => 2919603,
    			'nome' => 'Macajuba',
    			'UF' => 'BA',
    		),
    		2063 => 
    		array (
    			'codigoIbge' => 2919702,
    			'nome' => 'Macarani',
    			'UF' => 'BA',
    		),
    		2064 => 
    		array (
    			'codigoIbge' => 2919801,
    			'nome' => 'Macaúbas',
    			'UF' => 'BA',
    		),
    		2065 => 
    		array (
    			'codigoIbge' => 2919900,
    			'nome' => 'Macururé',
    			'UF' => 'BA',
    		),
    		2066 => 
    		array (
    			'codigoIbge' => 2919926,
    			'nome' => 'Madre de Deus',
    			'UF' => 'BA',
    		),
    		2067 => 
    		array (
    			'codigoIbge' => 2919959,
    			'nome' => 'Maetinga',
    			'UF' => 'BA',
    		),
    		2068 => 
    		array (
    			'codigoIbge' => 2920007,
    			'nome' => 'Maiquinique',
    			'UF' => 'BA',
    		),
    		2069 => 
    		array (
    			'codigoIbge' => 2920106,
    			'nome' => 'Mairi',
    			'UF' => 'BA',
    		),
    		2070 => 
    		array (
    			'codigoIbge' => 2920205,
    			'nome' => 'Malhada',
    			'UF' => 'BA',
    		),
    		2071 => 
    		array (
    			'codigoIbge' => 2920304,
    			'nome' => 'Malhada de Pedras',
    			'UF' => 'BA',
    		),
    		2072 => 
    		array (
    			'codigoIbge' => 2920403,
    			'nome' => 'Manoel Vitorino',
    			'UF' => 'BA',
    		),
    		2073 => 
    		array (
    			'codigoIbge' => 2920452,
    			'nome' => 'Mansidão',
    			'UF' => 'BA',
    		),
    		2074 => 
    		array (
    			'codigoIbge' => 2920502,
    			'nome' => 'Maracás',
    			'UF' => 'BA',
    		),
    		2075 => 
    		array (
    			'codigoIbge' => 2920601,
    			'nome' => 'Maragogipe',
    			'UF' => 'BA',
    		),
    		2076 => 
    		array (
    			'codigoIbge' => 2920700,
    			'nome' => 'Maraú',
    			'UF' => 'BA',
    		),
    		2077 => 
    		array (
    			'codigoIbge' => 2920809,
    			'nome' => 'Marcionílio Souza',
    			'UF' => 'BA',
    		),
    		2078 => 
    		array (
    			'codigoIbge' => 2920908,
    			'nome' => 'Mascote',
    			'UF' => 'BA',
    		),
    		2079 => 
    		array (
    			'codigoIbge' => 2921005,
    			'nome' => 'Mata de São João',
    			'UF' => 'BA',
    		),
    		2080 => 
    		array (
    			'codigoIbge' => 2921054,
    			'nome' => 'Matina',
    			'UF' => 'BA',
    		),
    		2081 => 
    		array (
    			'codigoIbge' => 2921104,
    			'nome' => 'Medeiros Neto',
    			'UF' => 'BA',
    		),
    		2082 => 
    		array (
    			'codigoIbge' => 2921203,
    			'nome' => 'Miguel Calmon',
    			'UF' => 'BA',
    		),
    		2083 => 
    		array (
    			'codigoIbge' => 2921302,
    			'nome' => 'Milagres',
    			'UF' => 'BA',
    		),
    		2084 => 
    		array (
    			'codigoIbge' => 2921401,
    			'nome' => 'Mirangaba',
    			'UF' => 'BA',
    		),
    		2085 => 
    		array (
    			'codigoIbge' => 2921450,
    			'nome' => 'Mirante',
    			'UF' => 'BA',
    		),
    		2086 => 
    		array (
    			'codigoIbge' => 2921500,
    			'nome' => 'Monte Santo',
    			'UF' => 'BA',
    		),
    		2087 => 
    		array (
    			'codigoIbge' => 2921609,
    			'nome' => 'Morpará',
    			'UF' => 'BA',
    		),
    		2088 => 
    		array (
    			'codigoIbge' => 2921708,
    			'nome' => 'Morro do Chapéu',
    			'UF' => 'BA',
    		),
    		2089 => 
    		array (
    			'codigoIbge' => 2921807,
    			'nome' => 'Mortugaba',
    			'UF' => 'BA',
    		),
    		2090 => 
    		array (
    			'codigoIbge' => 2921906,
    			'nome' => 'Mucugê',
    			'UF' => 'BA',
    		),
    		2091 => 
    		array (
    			'codigoIbge' => 2922003,
    			'nome' => 'Mucuri',
    			'UF' => 'BA',
    		),
    		2092 => 
    		array (
    			'codigoIbge' => 2922052,
    			'nome' => 'Mulungu do Morro',
    			'UF' => 'BA',
    		),
    		2093 => 
    		array (
    			'codigoIbge' => 2922102,
    			'nome' => 'Mundo Novo',
    			'UF' => 'BA',
    		),
    		2094 => 
    		array (
    			'codigoIbge' => 2922201,
    			'nome' => 'Muniz Ferreira',
    			'UF' => 'BA',
    		),
    		2095 => 
    		array (
    			'codigoIbge' => 2922250,
    			'nome' => 'Muquém do São Francisco',
    			'UF' => 'BA',
    		),
    		2096 => 
    		array (
    			'codigoIbge' => 2922300,
    			'nome' => 'Muritiba',
    			'UF' => 'BA',
    		),
    		2097 => 
    		array (
    			'codigoIbge' => 2922409,
    			'nome' => 'Mutuípe',
    			'UF' => 'BA',
    		),
    		2098 => 
    		array (
    			'codigoIbge' => 2922508,
    			'nome' => 'Nazaré',
    			'UF' => 'BA',
    		),
    		2099 => 
    		array (
    			'codigoIbge' => 2922607,
    			'nome' => 'Nilo Peçanha',
    			'UF' => 'BA',
    		),
    		2100 => 
    		array (
    			'codigoIbge' => 2922656,
    			'nome' => 'Nordestina',
    			'UF' => 'BA',
    		),
    		2101 => 
    		array (
    			'codigoIbge' => 2922706,
    			'nome' => 'Nova Canaã',
    			'UF' => 'BA',
    		),
    		2102 => 
    		array (
    			'codigoIbge' => 2922730,
    			'nome' => 'Nova Fátima',
    			'UF' => 'BA',
    		),
    		2103 => 
    		array (
    			'codigoIbge' => 2922755,
    			'nome' => 'Nova Ibiá',
    			'UF' => 'BA',
    		),
    		2104 => 
    		array (
    			'codigoIbge' => 2922805,
    			'nome' => 'Nova Itarana',
    			'UF' => 'BA',
    		),
    		2105 => 
    		array (
    			'codigoIbge' => 2922854,
    			'nome' => 'Nova Redenção',
    			'UF' => 'BA',
    		),
    		2106 => 
    		array (
    			'codigoIbge' => 2922904,
    			'nome' => 'Nova Soure',
    			'UF' => 'BA',
    		),
    		2107 => 
    		array (
    			'codigoIbge' => 2923001,
    			'nome' => 'Nova Viçosa',
    			'UF' => 'BA',
    		),
    		2108 => 
    		array (
    			'codigoIbge' => 2923035,
    			'nome' => 'Novo Horizonte',
    			'UF' => 'BA',
    		),
    		2109 => 
    		array (
    			'codigoIbge' => 2923050,
    			'nome' => 'Novo Triunfo',
    			'UF' => 'BA',
    		),
    		2110 => 
    		array (
    			'codigoIbge' => 2923100,
    			'nome' => 'Olindina',
    			'UF' => 'BA',
    		),
    		2111 => 
    		array (
    			'codigoIbge' => 2923209,
    			'nome' => 'Oliveira dos Brejinhos',
    			'UF' => 'BA',
    		),
    		2112 => 
    		array (
    			'codigoIbge' => 2923308,
    			'nome' => 'Ouriçangas',
    			'UF' => 'BA',
    		),
    		2113 => 
    		array (
    			'codigoIbge' => 2923357,
    			'nome' => 'Ourolândia',
    			'UF' => 'BA',
    		),
    		2114 => 
    		array (
    			'codigoIbge' => 2923407,
    			'nome' => 'Palmas de Monte Alto',
    			'UF' => 'BA',
    		),
    		2115 => 
    		array (
    			'codigoIbge' => 2923506,
    			'nome' => 'Palmeiras',
    			'UF' => 'BA',
    		),
    		2116 => 
    		array (
    			'codigoIbge' => 2923605,
    			'nome' => 'Paramirim',
    			'UF' => 'BA',
    		),
    		2117 => 
    		array (
    			'codigoIbge' => 2923704,
    			'nome' => 'Paratinga',
    			'UF' => 'BA',
    		),
    		2118 => 
    		array (
    			'codigoIbge' => 2923803,
    			'nome' => 'Paripiranga',
    			'UF' => 'BA',
    		),
    		2119 => 
    		array (
    			'codigoIbge' => 2923902,
    			'nome' => 'Pau Brasil',
    			'UF' => 'BA',
    		),
    		2120 => 
    		array (
    			'codigoIbge' => 2924009,
    			'nome' => 'Paulo Afonso',
    			'UF' => 'BA',
    		),
    		2121 => 
    		array (
    			'codigoIbge' => 2924058,
    			'nome' => 'Pé de Serra',
    			'UF' => 'BA',
    		),
    		2122 => 
    		array (
    			'codigoIbge' => 2924108,
    			'nome' => 'Pedrão',
    			'UF' => 'BA',
    		),
    		2123 => 
    		array (
    			'codigoIbge' => 2924207,
    			'nome' => 'Pedro Alexandre',
    			'UF' => 'BA',
    		),
    		2124 => 
    		array (
    			'codigoIbge' => 2924306,
    			'nome' => 'Piatã',
    			'UF' => 'BA',
    		),
    		2125 => 
    		array (
    			'codigoIbge' => 2924405,
    			'nome' => 'Pilão Arcado',
    			'UF' => 'BA',
    		),
    		2126 => 
    		array (
    			'codigoIbge' => 2924504,
    			'nome' => 'Pindaí',
    			'UF' => 'BA',
    		),
    		2127 => 
    		array (
    			'codigoIbge' => 2924603,
    			'nome' => 'Pindobaçu',
    			'UF' => 'BA',
    		),
    		2128 => 
    		array (
    			'codigoIbge' => 2924652,
    			'nome' => 'Pintadas',
    			'UF' => 'BA',
    		),
    		2129 => 
    		array (
    			'codigoIbge' => 2924678,
    			'nome' => 'Piraí do Norte',
    			'UF' => 'BA',
    		),
    		2130 => 
    		array (
    			'codigoIbge' => 2924702,
    			'nome' => 'Piripá',
    			'UF' => 'BA',
    		),
    		2131 => 
    		array (
    			'codigoIbge' => 2924801,
    			'nome' => 'Piritiba',
    			'UF' => 'BA',
    		),
    		2132 => 
    		array (
    			'codigoIbge' => 2924900,
    			'nome' => 'Planaltino',
    			'UF' => 'BA',
    		),
    		2133 => 
    		array (
    			'codigoIbge' => 2925006,
    			'nome' => 'Planalto',
    			'UF' => 'BA',
    		),
    		2134 => 
    		array (
    			'codigoIbge' => 2925105,
    			'nome' => 'Poções',
    			'UF' => 'BA',
    		),
    		2135 => 
    		array (
    			'codigoIbge' => 2925204,
    			'nome' => 'Pojuca',
    			'UF' => 'BA',
    		),
    		2136 => 
    		array (
    			'codigoIbge' => 2925253,
    			'nome' => 'Ponto Novo',
    			'UF' => 'BA',
    		),
    		2137 => 
    		array (
    			'codigoIbge' => 2925303,
    			'nome' => 'Porto Seguro',
    			'UF' => 'BA',
    		),
    		2138 => 
    		array (
    			'codigoIbge' => 2925402,
    			'nome' => 'Potiraguá',
    			'UF' => 'BA',
    		),
    		2139 => 
    		array (
    			'codigoIbge' => 2925501,
    			'nome' => 'Prado',
    			'UF' => 'BA',
    		),
    		2140 => 
    		array (
    			'codigoIbge' => 2925600,
    			'nome' => 'Presidente Dutra',
    			'UF' => 'BA',
    		),
    		2141 => 
    		array (
    			'codigoIbge' => 2925709,
    			'nome' => 'Presidente Jânio Quadros',
    			'UF' => 'BA',
    		),
    		2142 => 
    		array (
    			'codigoIbge' => 2925758,
    			'nome' => 'Presidente Tancredo Neves',
    			'UF' => 'BA',
    		),
    		2143 => 
    		array (
    			'codigoIbge' => 2925808,
    			'nome' => 'Queimadas',
    			'UF' => 'BA',
    		),
    		2144 => 
    		array (
    			'codigoIbge' => 2925907,
    			'nome' => 'Quijingue',
    			'UF' => 'BA',
    		),
    		2145 => 
    		array (
    			'codigoIbge' => 2925931,
    			'nome' => 'Quixabeira',
    			'UF' => 'BA',
    		),
    		2146 => 
    		array (
    			'codigoIbge' => 2925956,
    			'nome' => 'Rafael Jambeiro',
    			'UF' => 'BA',
    		),
    		2147 => 
    		array (
    			'codigoIbge' => 2926004,
    			'nome' => 'Remanso',
    			'UF' => 'BA',
    		),
    		2148 => 
    		array (
    			'codigoIbge' => 2926103,
    			'nome' => 'Retirolândia',
    			'UF' => 'BA',
    		),
    		2149 => 
    		array (
    			'codigoIbge' => 2926202,
    			'nome' => 'Riachão das Neves',
    			'UF' => 'BA',
    		),
    		2150 => 
    		array (
    			'codigoIbge' => 2926301,
    			'nome' => 'Riachão do Jacuípe',
    			'UF' => 'BA',
    		),
    		2151 => 
    		array (
    			'codigoIbge' => 2926400,
    			'nome' => 'Riacho de Santana',
    			'UF' => 'BA',
    		),
    		2152 => 
    		array (
    			'codigoIbge' => 2926509,
    			'nome' => 'Ribeira do Amparo',
    			'UF' => 'BA',
    		),
    		2153 => 
    		array (
    			'codigoIbge' => 2926608,
    			'nome' => 'Ribeira do Pombal',
    			'UF' => 'BA',
    		),
    		2154 => 
    		array (
    			'codigoIbge' => 2926657,
    			'nome' => 'Ribeirão do Largo',
    			'UF' => 'BA',
    		),
    		2155 => 
    		array (
    			'codigoIbge' => 2926707,
    			'nome' => 'Rio de Contas',
    			'UF' => 'BA',
    		),
    		2156 => 
    		array (
    			'codigoIbge' => 2926806,
    			'nome' => 'Rio do Antônio',
    			'UF' => 'BA',
    		),
    		2157 => 
    		array (
    			'codigoIbge' => 2926905,
    			'nome' => 'Rio do Pires',
    			'UF' => 'BA',
    		),
    		2158 => 
    		array (
    			'codigoIbge' => 2927002,
    			'nome' => 'Rio Real',
    			'UF' => 'BA',
    		),
    		2159 => 
    		array (
    			'codigoIbge' => 2927101,
    			'nome' => 'Rodelas',
    			'UF' => 'BA',
    		),
    		2160 => 
    		array (
    			'codigoIbge' => 2927200,
    			'nome' => 'Ruy Barbosa',
    			'UF' => 'BA',
    		),
    		2161 => 
    		array (
    			'codigoIbge' => 2927309,
    			'nome' => 'Salinas da Margarida',
    			'UF' => 'BA',
    		),
    		2162 => 
    		array (
    			'codigoIbge' => 2927408,
    			'nome' => 'Salvador',
    			'UF' => 'BA',
    		),
    		2163 => 
    		array (
    			'codigoIbge' => 2927507,
    			'nome' => 'Santa Bárbara',
    			'UF' => 'BA',
    		),
    		2164 => 
    		array (
    			'codigoIbge' => 2927606,
    			'nome' => 'Santa Brígida',
    			'UF' => 'BA',
    		),
    		2165 => 
    		array (
    			'codigoIbge' => 2927705,
    			'nome' => 'Santa Cruz Cabrália',
    			'UF' => 'BA',
    		),
    		2166 => 
    		array (
    			'codigoIbge' => 2927804,
    			'nome' => 'Santa Cruz da Vitória',
    			'UF' => 'BA',
    		),
    		2167 => 
    		array (
    			'codigoIbge' => 2927903,
    			'nome' => 'Santa Inês',
    			'UF' => 'BA',
    		),
    		2168 => 
    		array (
    			'codigoIbge' => 2928000,
    			'nome' => 'Santaluz',
    			'UF' => 'BA',
    		),
    		2169 => 
    		array (
    			'codigoIbge' => 2928059,
    			'nome' => 'Santa Luzia',
    			'UF' => 'BA',
    		),
    		2170 => 
    		array (
    			'codigoIbge' => 2928109,
    			'nome' => 'Santa Maria da Vitória',
    			'UF' => 'BA',
    		),
    		2171 => 
    		array (
    			'codigoIbge' => 2928208,
    			'nome' => 'Santana',
    			'UF' => 'BA',
    		),
    		2172 => 
    		array (
    			'codigoIbge' => 2928307,
    			'nome' => 'Santanópolis',
    			'UF' => 'BA',
    		),
    		2173 => 
    		array (
    			'codigoIbge' => 2928406,
    			'nome' => 'Santa Rita de Cássia',
    			'UF' => 'BA',
    		),
    		2174 => 
    		array (
    			'codigoIbge' => 2928505,
    			'nome' => 'Santa Terezinha',
    			'UF' => 'BA',
    		),
    		2175 => 
    		array (
    			'codigoIbge' => 2928604,
    			'nome' => 'Santo Amaro',
    			'UF' => 'BA',
    		),
    		2176 => 
    		array (
    			'codigoIbge' => 2928703,
    			'nome' => 'Santo Antônio de Jesus',
    			'UF' => 'BA',
    		),
    		2177 => 
    		array (
    			'codigoIbge' => 2928802,
    			'nome' => 'Santo Estêvão',
    			'UF' => 'BA',
    		),
    		2178 => 
    		array (
    			'codigoIbge' => 2928901,
    			'nome' => 'São Desidério',
    			'UF' => 'BA',
    		),
    		2179 => 
    		array (
    			'codigoIbge' => 2928950,
    			'nome' => 'São Domingos',
    			'UF' => 'BA',
    		),
    		2180 => 
    		array (
    			'codigoIbge' => 2929008,
    			'nome' => 'São Félix',
    			'UF' => 'BA',
    		),
    		2181 => 
    		array (
    			'codigoIbge' => 2929057,
    			'nome' => 'São Félix do Coribe',
    			'UF' => 'BA',
    		),
    		2182 => 
    		array (
    			'codigoIbge' => 2929107,
    			'nome' => 'São Felipe',
    			'UF' => 'BA',
    		),
    		2183 => 
    		array (
    			'codigoIbge' => 2929206,
    			'nome' => 'São Francisco do Conde',
    			'UF' => 'BA',
    		),
    		2184 => 
    		array (
    			'codigoIbge' => 2929255,
    			'nome' => 'São Gabriel',
    			'UF' => 'BA',
    		),
    		2185 => 
    		array (
    			'codigoIbge' => 2929305,
    			'nome' => 'São Gonçalo dos Campos',
    			'UF' => 'BA',
    		),
    		2186 => 
    		array (
    			'codigoIbge' => 2929354,
    			'nome' => 'São José da Vitória',
    			'UF' => 'BA',
    		),
    		2187 => 
    		array (
    			'codigoIbge' => 2929370,
    			'nome' => 'São José do Jacuípe',
    			'UF' => 'BA',
    		),
    		2188 => 
    		array (
    			'codigoIbge' => 2929404,
    			'nome' => 'São Miguel das Matas',
    			'UF' => 'BA',
    		),
    		2189 => 
    		array (
    			'codigoIbge' => 2929503,
    			'nome' => 'São Sebastião do Passé',
    			'UF' => 'BA',
    		),
    		2190 => 
    		array (
    			'codigoIbge' => 2929602,
    			'nome' => 'Sapeaçu',
    			'UF' => 'BA',
    		),
    		2191 => 
    		array (
    			'codigoIbge' => 2929701,
    			'nome' => 'Sátiro Dias',
    			'UF' => 'BA',
    		),
    		2192 => 
    		array (
    			'codigoIbge' => 2929750,
    			'nome' => 'Saubara',
    			'UF' => 'BA',
    		),
    		2193 => 
    		array (
    			'codigoIbge' => 2929800,
    			'nome' => 'Saúde',
    			'UF' => 'BA',
    		),
    		2194 => 
    		array (
    			'codigoIbge' => 2929909,
    			'nome' => 'Seabra',
    			'UF' => 'BA',
    		),
    		2195 => 
    		array (
    			'codigoIbge' => 2930006,
    			'nome' => 'Sebastião Laranjeiras',
    			'UF' => 'BA',
    		),
    		2196 => 
    		array (
    			'codigoIbge' => 2930105,
    			'nome' => 'Senhor do Bonfim',
    			'UF' => 'BA',
    		),
    		2197 => 
    		array (
    			'codigoIbge' => 2930154,
    			'nome' => 'Serra do Ramalho',
    			'UF' => 'BA',
    		),
    		2198 => 
    		array (
    			'codigoIbge' => 2930204,
    			'nome' => 'Sento Sé',
    			'UF' => 'BA',
    		),
    		2199 => 
    		array (
    			'codigoIbge' => 2930303,
    			'nome' => 'Serra Dourada',
    			'UF' => 'BA',
    		),
    		2200 => 
    		array (
    			'codigoIbge' => 2930402,
    			'nome' => 'Serra Preta',
    			'UF' => 'BA',
    		),
    		2201 => 
    		array (
    			'codigoIbge' => 2930501,
    			'nome' => 'Serrinha',
    			'UF' => 'BA',
    		),
    		2202 => 
    		array (
    			'codigoIbge' => 2930600,
    			'nome' => 'Serrolândia',
    			'UF' => 'BA',
    		),
    		2203 => 
    		array (
    			'codigoIbge' => 2930709,
    			'nome' => 'Simões Filho',
    			'UF' => 'BA',
    		),
    		2204 => 
    		array (
    			'codigoIbge' => 2930758,
    			'nome' => 'Sítio do Mato',
    			'UF' => 'BA',
    		),
    		2205 => 
    		array (
    			'codigoIbge' => 2930766,
    			'nome' => 'Sítio do Quinto',
    			'UF' => 'BA',
    		),
    		2206 => 
    		array (
    			'codigoIbge' => 2930774,
    			'nome' => 'Sobradinho',
    			'UF' => 'BA',
    		),
    		2207 => 
    		array (
    			'codigoIbge' => 2930808,
    			'nome' => 'Souto Soares',
    			'UF' => 'BA',
    		),
    		2208 => 
    		array (
    			'codigoIbge' => 2930907,
    			'nome' => 'Tabocas do Brejo Velho',
    			'UF' => 'BA',
    		),
    		2209 => 
    		array (
    			'codigoIbge' => 2931004,
    			'nome' => 'Tanhaçu',
    			'UF' => 'BA',
    		),
    		2210 => 
    		array (
    			'codigoIbge' => 2931053,
    			'nome' => 'Tanque Novo',
    			'UF' => 'BA',
    		),
    		2211 => 
    		array (
    			'codigoIbge' => 2931103,
    			'nome' => 'Tanquinho',
    			'UF' => 'BA',
    		),
    		2212 => 
    		array (
    			'codigoIbge' => 2931202,
    			'nome' => 'Taperoá',
    			'UF' => 'BA',
    		),
    		2213 => 
    		array (
    			'codigoIbge' => 2931301,
    			'nome' => 'Tapiramutá',
    			'UF' => 'BA',
    		),
    		2214 => 
    		array (
    			'codigoIbge' => 2931350,
    			'nome' => 'Teixeira de Freitas',
    			'UF' => 'BA',
    		),
    		2215 => 
    		array (
    			'codigoIbge' => 2931400,
    			'nome' => 'Teodoro Sampaio',
    			'UF' => 'BA',
    		),
    		2216 => 
    		array (
    			'codigoIbge' => 2931509,
    			'nome' => 'Teofilândia',
    			'UF' => 'BA',
    		),
    		2217 => 
    		array (
    			'codigoIbge' => 2931608,
    			'nome' => 'Teolândia',
    			'UF' => 'BA',
    		),
    		2218 => 
    		array (
    			'codigoIbge' => 2931707,
    			'nome' => 'Terra Nova',
    			'UF' => 'BA',
    		),
    		2219 => 
    		array (
    			'codigoIbge' => 2931806,
    			'nome' => 'Tremedal',
    			'UF' => 'BA',
    		),
    		2220 => 
    		array (
    			'codigoIbge' => 2931905,
    			'nome' => 'Tucano',
    			'UF' => 'BA',
    		),
    		2221 => 
    		array (
    			'codigoIbge' => 2932002,
    			'nome' => 'Uauá',
    			'UF' => 'BA',
    		),
    		2222 => 
    		array (
    			'codigoIbge' => 2932101,
    			'nome' => 'Ubaíra',
    			'UF' => 'BA',
    		),
    		2223 => 
    		array (
    			'codigoIbge' => 2932200,
    			'nome' => 'Ubaitaba',
    			'UF' => 'BA',
    		),
    		2224 => 
    		array (
    			'codigoIbge' => 2932309,
    			'nome' => 'Ubatã',
    			'UF' => 'BA',
    		),
    		2225 => 
    		array (
    			'codigoIbge' => 2932408,
    			'nome' => 'Uibaí',
    			'UF' => 'BA',
    		),
    		2226 => 
    		array (
    			'codigoIbge' => 2932457,
    			'nome' => 'Umburanas',
    			'UF' => 'BA',
    		),
    		2227 => 
    		array (
    			'codigoIbge' => 2932507,
    			'nome' => 'Una',
    			'UF' => 'BA',
    		),
    		2228 => 
    		array (
    			'codigoIbge' => 2932606,
    			'nome' => 'Urandi',
    			'UF' => 'BA',
    		),
    		2229 => 
    		array (
    			'codigoIbge' => 2932705,
    			'nome' => 'Uruçuca',
    			'UF' => 'BA',
    		),
    		2230 => 
    		array (
    			'codigoIbge' => 2932804,
    			'nome' => 'Utinga',
    			'UF' => 'BA',
    		),
    		2231 => 
    		array (
    			'codigoIbge' => 2932903,
    			'nome' => 'Valença',
    			'UF' => 'BA',
    		),
    		2232 => 
    		array (
    			'codigoIbge' => 2933000,
    			'nome' => 'Valente',
    			'UF' => 'BA',
    		),
    		2233 => 
    		array (
    			'codigoIbge' => 2933059,
    			'nome' => 'Várzea da Roça',
    			'UF' => 'BA',
    		),
    		2234 => 
    		array (
    			'codigoIbge' => 2933109,
    			'nome' => 'Várzea do Poço',
    			'UF' => 'BA',
    		),
    		2235 => 
    		array (
    			'codigoIbge' => 2933158,
    			'nome' => 'Várzea Nova',
    			'UF' => 'BA',
    		),
    		2236 => 
    		array (
    			'codigoIbge' => 2933174,
    			'nome' => 'Varzedo',
    			'UF' => 'BA',
    		),
    		2237 => 
    		array (
    			'codigoIbge' => 2933208,
    			'nome' => 'Vera Cruz',
    			'UF' => 'BA',
    		),
    		2238 => 
    		array (
    			'codigoIbge' => 2933257,
    			'nome' => 'Vereda',
    			'UF' => 'BA',
    		),
    		2239 => 
    		array (
    			'codigoIbge' => 2933307,
    			'nome' => 'Vitória da Conquista',
    			'UF' => 'BA',
    		),
    		2240 => 
    		array (
    			'codigoIbge' => 2933406,
    			'nome' => 'Wagner',
    			'UF' => 'BA',
    		),
    		2241 => 
    		array (
    			'codigoIbge' => 2933455,
    			'nome' => 'Wanderley',
    			'UF' => 'BA',
    		),
    		2242 => 
    		array (
    			'codigoIbge' => 2933505,
    			'nome' => 'Wenceslau Guimarães',
    			'UF' => 'BA',
    		),
    		2243 => 
    		array (
    			'codigoIbge' => 2933604,
    			'nome' => 'Xique-Xique',
    			'UF' => 'BA',
    		),
    		2244 => 
    		array (
    			'codigoIbge' => 3100104,
    			'nome' => 'Abadia dos Dourados',
    			'UF' => 'MG',
    		),
    		2245 => 
    		array (
    			'codigoIbge' => 3100203,
    			'nome' => 'Abaeté',
    			'UF' => 'MG',
    		),
    		2246 => 
    		array (
    			'codigoIbge' => 3100302,
    			'nome' => 'Abre Campo',
    			'UF' => 'MG',
    		),
    		2247 => 
    		array (
    			'codigoIbge' => 3100401,
    			'nome' => 'Acaiaca',
    			'UF' => 'MG',
    		),
    		2248 => 
    		array (
    			'codigoIbge' => 3100500,
    			'nome' => 'Açucena',
    			'UF' => 'MG',
    		),
    		2249 => 
    		array (
    			'codigoIbge' => 3100609,
    			'nome' => 'Água Boa',
    			'UF' => 'MG',
    		),
    		2250 => 
    		array (
    			'codigoIbge' => 3100708,
    			'nome' => 'Água Comprida',
    			'UF' => 'MG',
    		),
    		2251 => 
    		array (
    			'codigoIbge' => 3100807,
    			'nome' => 'Aguanil',
    			'UF' => 'MG',
    		),
    		2252 => 
    		array (
    			'codigoIbge' => 3100906,
    			'nome' => 'Águas Formosas',
    			'UF' => 'MG',
    		),
    		2253 => 
    		array (
    			'codigoIbge' => 3101003,
    			'nome' => 'Águas Vermelhas',
    			'UF' => 'MG',
    		),
    		2254 => 
    		array (
    			'codigoIbge' => 3101102,
    			'nome' => 'Aimorés',
    			'UF' => 'MG',
    		),
    		2255 => 
    		array (
    			'codigoIbge' => 3101201,
    			'nome' => 'Aiuruoca',
    			'UF' => 'MG',
    		),
    		2256 => 
    		array (
    			'codigoIbge' => 3101300,
    			'nome' => 'Alagoa',
    			'UF' => 'MG',
    		),
    		2257 => 
    		array (
    			'codigoIbge' => 3101409,
    			'nome' => 'Albertina',
    			'UF' => 'MG',
    		),
    		2258 => 
    		array (
    			'codigoIbge' => 3101508,
    			'nome' => 'Além Paraíba',
    			'UF' => 'MG',
    		),
    		2259 => 
    		array (
    			'codigoIbge' => 3101607,
    			'nome' => 'Alfenas',
    			'UF' => 'MG',
    		),
    		2260 => 
    		array (
    			'codigoIbge' => 3101631,
    			'nome' => 'Alfredo Vasconcelos',
    			'UF' => 'MG',
    		),
    		2261 => 
    		array (
    			'codigoIbge' => 3101706,
    			'nome' => 'Almenara',
    			'UF' => 'MG',
    		),
    		2262 => 
    		array (
    			'codigoIbge' => 3101805,
    			'nome' => 'Alpercata',
    			'UF' => 'MG',
    		),
    		2263 => 
    		array (
    			'codigoIbge' => 3101904,
    			'nome' => 'Alpinópolis',
    			'UF' => 'MG',
    		),
    		2264 => 
    		array (
    			'codigoIbge' => 3102001,
    			'nome' => 'Alterosa',
    			'UF' => 'MG',
    		),
    		2265 => 
    		array (
    			'codigoIbge' => 3102050,
    			'nome' => 'Alto Caparaó',
    			'UF' => 'MG',
    		),
    		2266 => 
    		array (
    			'codigoIbge' => 3102100,
    			'nome' => 'Alto Rio Doce',
    			'UF' => 'MG',
    		),
    		2267 => 
    		array (
    			'codigoIbge' => 3102209,
    			'nome' => 'Alvarenga',
    			'UF' => 'MG',
    		),
    		2268 => 
    		array (
    			'codigoIbge' => 3102308,
    			'nome' => 'Alvinópolis',
    			'UF' => 'MG',
    		),
    		2269 => 
    		array (
    			'codigoIbge' => 3102407,
    			'nome' => 'Alvorada de Minas',
    			'UF' => 'MG',
    		),
    		2270 => 
    		array (
    			'codigoIbge' => 3102506,
    			'nome' => 'Amparo do Serra',
    			'UF' => 'MG',
    		),
    		2271 => 
    		array (
    			'codigoIbge' => 3102605,
    			'nome' => 'Andradas',
    			'UF' => 'MG',
    		),
    		2272 => 
    		array (
    			'codigoIbge' => 3102704,
    			'nome' => 'Cachoeira de Pajeú',
    			'UF' => 'MG',
    		),
    		2273 => 
    		array (
    			'codigoIbge' => 3102803,
    			'nome' => 'Andrelândia',
    			'UF' => 'MG',
    		),
    		2274 => 
    		array (
    			'codigoIbge' => 3102852,
    			'nome' => 'Angelândia',
    			'UF' => 'MG',
    		),
    		2275 => 
    		array (
    			'codigoIbge' => 3102902,
    			'nome' => 'Antônio Carlos',
    			'UF' => 'MG',
    		),
    		2276 => 
    		array (
    			'codigoIbge' => 3103009,
    			'nome' => 'Antônio Dias',
    			'UF' => 'MG',
    		),
    		2277 => 
    		array (
    			'codigoIbge' => 3103108,
    			'nome' => 'Antônio Prado de Minas',
    			'UF' => 'MG',
    		),
    		2278 => 
    		array (
    			'codigoIbge' => 3103207,
    			'nome' => 'Araçaí',
    			'UF' => 'MG',
    		),
    		2279 => 
    		array (
    			'codigoIbge' => 3103306,
    			'nome' => 'Aracitaba',
    			'UF' => 'MG',
    		),
    		2280 => 
    		array (
    			'codigoIbge' => 3103405,
    			'nome' => 'Araçuaí',
    			'UF' => 'MG',
    		),
    		2281 => 
    		array (
    			'codigoIbge' => 3103504,
    			'nome' => 'Araguari',
    			'UF' => 'MG',
    		),
    		2282 => 
    		array (
    			'codigoIbge' => 3103603,
    			'nome' => 'Arantina',
    			'UF' => 'MG',
    		),
    		2283 => 
    		array (
    			'codigoIbge' => 3103702,
    			'nome' => 'Araponga',
    			'UF' => 'MG',
    		),
    		2284 => 
    		array (
    			'codigoIbge' => 3103751,
    			'nome' => 'Araporã',
    			'UF' => 'MG',
    		),
    		2285 => 
    		array (
    			'codigoIbge' => 3103801,
    			'nome' => 'Arapuá',
    			'UF' => 'MG',
    		),
    		2286 => 
    		array (
    			'codigoIbge' => 3103900,
    			'nome' => 'Araújos',
    			'UF' => 'MG',
    		),
    		2287 => 
    		array (
    			'codigoIbge' => 3104007,
    			'nome' => 'Araxá',
    			'UF' => 'MG',
    		),
    		2288 => 
    		array (
    			'codigoIbge' => 3104106,
    			'nome' => 'Arceburgo',
    			'UF' => 'MG',
    		),
    		2289 => 
    		array (
    			'codigoIbge' => 3104205,
    			'nome' => 'Arcos',
    			'UF' => 'MG',
    		),
    		2290 => 
    		array (
    			'codigoIbge' => 3104304,
    			'nome' => 'Areado',
    			'UF' => 'MG',
    		),
    		2291 => 
    		array (
    			'codigoIbge' => 3104403,
    			'nome' => 'Argirita',
    			'UF' => 'MG',
    		),
    		2292 => 
    		array (
    			'codigoIbge' => 3104452,
    			'nome' => 'Aricanduva',
    			'UF' => 'MG',
    		),
    		2293 => 
    		array (
    			'codigoIbge' => 3104502,
    			'nome' => 'Arinos',
    			'UF' => 'MG',
    		),
    		2294 => 
    		array (
    			'codigoIbge' => 3104601,
    			'nome' => 'Astolfo Dutra',
    			'UF' => 'MG',
    		),
    		2295 => 
    		array (
    			'codigoIbge' => 3104700,
    			'nome' => 'Ataléia',
    			'UF' => 'MG',
    		),
    		2296 => 
    		array (
    			'codigoIbge' => 3104809,
    			'nome' => 'Augusto de Lima',
    			'UF' => 'MG',
    		),
    		2297 => 
    		array (
    			'codigoIbge' => 3104908,
    			'nome' => 'Baependi',
    			'UF' => 'MG',
    		),
    		2298 => 
    		array (
    			'codigoIbge' => 3105004,
    			'nome' => 'Baldim',
    			'UF' => 'MG',
    		),
    		2299 => 
    		array (
    			'codigoIbge' => 3105103,
    			'nome' => 'Bambuí',
    			'UF' => 'MG',
    		),
    		2300 => 
    		array (
    			'codigoIbge' => 3105202,
    			'nome' => 'Bandeira',
    			'UF' => 'MG',
    		),
    		2301 => 
    		array (
    			'codigoIbge' => 3105301,
    			'nome' => 'Bandeira do Sul',
    			'UF' => 'MG',
    		),
    		2302 => 
    		array (
    			'codigoIbge' => 3105400,
    			'nome' => 'Barão de Cocais',
    			'UF' => 'MG',
    		),
    		2303 => 
    		array (
    			'codigoIbge' => 3105509,
    			'nome' => 'Barão de Monte Alto',
    			'UF' => 'MG',
    		),
    		2304 => 
    		array (
    			'codigoIbge' => 3105608,
    			'nome' => 'Barbacena',
    			'UF' => 'MG',
    		),
    		2305 => 
    		array (
    			'codigoIbge' => 3105707,
    			'nome' => 'Barra Longa',
    			'UF' => 'MG',
    		),
    		2306 => 
    		array (
    			'codigoIbge' => 3105905,
    			'nome' => 'Barroso',
    			'UF' => 'MG',
    		),
    		2307 => 
    		array (
    			'codigoIbge' => 3106002,
    			'nome' => 'Bela Vista de Minas',
    			'UF' => 'MG',
    		),
    		2308 => 
    		array (
    			'codigoIbge' => 3106101,
    			'nome' => 'Belmiro Braga',
    			'UF' => 'MG',
    		),
    		2309 => 
    		array (
    			'codigoIbge' => 3106200,
    			'nome' => 'Belo Horizonte',
    			'UF' => 'MG',
    		),
    		2310 => 
    		array (
    			'codigoIbge' => 3106309,
    			'nome' => 'Belo Oriente',
    			'UF' => 'MG',
    		),
    		2311 => 
    		array (
    			'codigoIbge' => 3106408,
    			'nome' => 'Belo Vale',
    			'UF' => 'MG',
    		),
    		2312 => 
    		array (
    			'codigoIbge' => 3106507,
    			'nome' => 'Berilo',
    			'UF' => 'MG',
    		),
    		2313 => 
    		array (
    			'codigoIbge' => 3106606,
    			'nome' => 'Bertópolis',
    			'UF' => 'MG',
    		),
    		2314 => 
    		array (
    			'codigoIbge' => 3106655,
    			'nome' => 'Berizal',
    			'UF' => 'MG',
    		),
    		2315 => 
    		array (
    			'codigoIbge' => 3106705,
    			'nome' => 'Betim',
    			'UF' => 'MG',
    		),
    		2316 => 
    		array (
    			'codigoIbge' => 3106804,
    			'nome' => 'Bias Fortes',
    			'UF' => 'MG',
    		),
    		2317 => 
    		array (
    			'codigoIbge' => 3106903,
    			'nome' => 'Bicas',
    			'UF' => 'MG',
    		),
    		2318 => 
    		array (
    			'codigoIbge' => 3107000,
    			'nome' => 'Biquinhas',
    			'UF' => 'MG',
    		),
    		2319 => 
    		array (
    			'codigoIbge' => 3107109,
    			'nome' => 'Boa Esperança',
    			'UF' => 'MG',
    		),
    		2320 => 
    		array (
    			'codigoIbge' => 3107208,
    			'nome' => 'Bocaina de Minas',
    			'UF' => 'MG',
    		),
    		2321 => 
    		array (
    			'codigoIbge' => 3107307,
    			'nome' => 'Bocaiúva',
    			'UF' => 'MG',
    		),
    		2322 => 
    		array (
    			'codigoIbge' => 3107406,
    			'nome' => 'Bom Despacho',
    			'UF' => 'MG',
    		),
    		2323 => 
    		array (
    			'codigoIbge' => 3107505,
    			'nome' => 'Bom Jardim de Minas',
    			'UF' => 'MG',
    		),
    		2324 => 
    		array (
    			'codigoIbge' => 3107604,
    			'nome' => 'Bom Jesus da Penha',
    			'UF' => 'MG',
    		),
    		2325 => 
    		array (
    			'codigoIbge' => 3107703,
    			'nome' => 'Bom Jesus do Amparo',
    			'UF' => 'MG',
    		),
    		2326 => 
    		array (
    			'codigoIbge' => 3107802,
    			'nome' => 'Bom Jesus do Galho',
    			'UF' => 'MG',
    		),
    		2327 => 
    		array (
    			'codigoIbge' => 3107901,
    			'nome' => 'Bom Repouso',
    			'UF' => 'MG',
    		),
    		2328 => 
    		array (
    			'codigoIbge' => 3108008,
    			'nome' => 'Bom Sucesso',
    			'UF' => 'MG',
    		),
    		2329 => 
    		array (
    			'codigoIbge' => 3108107,
    			'nome' => 'Bonfim',
    			'UF' => 'MG',
    		),
    		2330 => 
    		array (
    			'codigoIbge' => 3108206,
    			'nome' => 'Bonfinópolis de Minas',
    			'UF' => 'MG',
    		),
    		2331 => 
    		array (
    			'codigoIbge' => 3108255,
    			'nome' => 'Bonito de Minas',
    			'UF' => 'MG',
    		),
    		2332 => 
    		array (
    			'codigoIbge' => 3108305,
    			'nome' => 'Borda da Mata',
    			'UF' => 'MG',
    		),
    		2333 => 
    		array (
    			'codigoIbge' => 3108404,
    			'nome' => 'Botelhos',
    			'UF' => 'MG',
    		),
    		2334 => 
    		array (
    			'codigoIbge' => 3108503,
    			'nome' => 'Botumirim',
    			'UF' => 'MG',
    		),
    		2335 => 
    		array (
    			'codigoIbge' => 3108552,
    			'nome' => 'Brasilândia de Minas',
    			'UF' => 'MG',
    		),
    		2336 => 
    		array (
    			'codigoIbge' => 3108602,
    			'nome' => 'Brasília de Minas',
    			'UF' => 'MG',
    		),
    		2337 => 
    		array (
    			'codigoIbge' => 3108701,
    			'nome' => 'Brás Pires',
    			'UF' => 'MG',
    		),
    		2338 => 
    		array (
    			'codigoIbge' => 3108800,
    			'nome' => 'Braúnas',
    			'UF' => 'MG',
    		),
    		2339 => 
    		array (
    			'codigoIbge' => 3108909,
    			'nome' => 'Brazópolis',
    			'UF' => 'MG',
    		),
    		2340 => 
    		array (
    			'codigoIbge' => 3109006,
    			'nome' => 'Brumadinho',
    			'UF' => 'MG',
    		),
    		2341 => 
    		array (
    			'codigoIbge' => 3109105,
    			'nome' => 'Bueno Brandão',
    			'UF' => 'MG',
    		),
    		2342 => 
    		array (
    			'codigoIbge' => 3109204,
    			'nome' => 'Buenópolis',
    			'UF' => 'MG',
    		),
    		2343 => 
    		array (
    			'codigoIbge' => 3109253,
    			'nome' => 'Bugre',
    			'UF' => 'MG',
    		),
    		2344 => 
    		array (
    			'codigoIbge' => 3109303,
    			'nome' => 'Buritis',
    			'UF' => 'MG',
    		),
    		2345 => 
    		array (
    			'codigoIbge' => 3109402,
    			'nome' => 'Buritizeiro',
    			'UF' => 'MG',
    		),
    		2346 => 
    		array (
    			'codigoIbge' => 3109451,
    			'nome' => 'Cabeceira Grande',
    			'UF' => 'MG',
    		),
    		2347 => 
    		array (
    			'codigoIbge' => 3109501,
    			'nome' => 'Cabo Verde',
    			'UF' => 'MG',
    		),
    		2348 => 
    		array (
    			'codigoIbge' => 3109600,
    			'nome' => 'Cachoeira da Prata',
    			'UF' => 'MG',
    		),
    		2349 => 
    		array (
    			'codigoIbge' => 3109709,
    			'nome' => 'Cachoeira de Minas',
    			'UF' => 'MG',
    		),
    		2350 => 
    		array (
    			'codigoIbge' => 3109808,
    			'nome' => 'Cachoeira Dourada',
    			'UF' => 'MG',
    		),
    		2351 => 
    		array (
    			'codigoIbge' => 3109907,
    			'nome' => 'Caetanópolis',
    			'UF' => 'MG',
    		),
    		2352 => 
    		array (
    			'codigoIbge' => 3110004,
    			'nome' => 'Caeté',
    			'UF' => 'MG',
    		),
    		2353 => 
    		array (
    			'codigoIbge' => 3110103,
    			'nome' => 'Caiana',
    			'UF' => 'MG',
    		),
    		2354 => 
    		array (
    			'codigoIbge' => 3110202,
    			'nome' => 'Cajuri',
    			'UF' => 'MG',
    		),
    		2355 => 
    		array (
    			'codigoIbge' => 3110301,
    			'nome' => 'Caldas',
    			'UF' => 'MG',
    		),
    		2356 => 
    		array (
    			'codigoIbge' => 3110400,
    			'nome' => 'Camacho',
    			'UF' => 'MG',
    		),
    		2357 => 
    		array (
    			'codigoIbge' => 3110509,
    			'nome' => 'Camanducaia',
    			'UF' => 'MG',
    		),
    		2358 => 
    		array (
    			'codigoIbge' => 3110608,
    			'nome' => 'Cambuí',
    			'UF' => 'MG',
    		),
    		2359 => 
    		array (
    			'codigoIbge' => 3110707,
    			'nome' => 'Cambuquira',
    			'UF' => 'MG',
    		),
    		2360 => 
    		array (
    			'codigoIbge' => 3110806,
    			'nome' => 'Campanário',
    			'UF' => 'MG',
    		),
    		2361 => 
    		array (
    			'codigoIbge' => 3110905,
    			'nome' => 'Campanha',
    			'UF' => 'MG',
    		),
    		2362 => 
    		array (
    			'codigoIbge' => 3111002,
    			'nome' => 'Campestre',
    			'UF' => 'MG',
    		),
    		2363 => 
    		array (
    			'codigoIbge' => 3111101,
    			'nome' => 'Campina Verde',
    			'UF' => 'MG',
    		),
    		2364 => 
    		array (
    			'codigoIbge' => 3111150,
    			'nome' => 'Campo Azul',
    			'UF' => 'MG',
    		),
    		2365 => 
    		array (
    			'codigoIbge' => 3111200,
    			'nome' => 'Campo Belo',
    			'UF' => 'MG',
    		),
    		2366 => 
    		array (
    			'codigoIbge' => 3111309,
    			'nome' => 'Campo do Meio',
    			'UF' => 'MG',
    		),
    		2367 => 
    		array (
    			'codigoIbge' => 3111408,
    			'nome' => 'Campo Florido',
    			'UF' => 'MG',
    		),
    		2368 => 
    		array (
    			'codigoIbge' => 3111507,
    			'nome' => 'Campos Altos',
    			'UF' => 'MG',
    		),
    		2369 => 
    		array (
    			'codigoIbge' => 3111606,
    			'nome' => 'Campos Gerais',
    			'UF' => 'MG',
    		),
    		2370 => 
    		array (
    			'codigoIbge' => 3111705,
    			'nome' => 'Canaã',
    			'UF' => 'MG',
    		),
    		2371 => 
    		array (
    			'codigoIbge' => 3111804,
    			'nome' => 'Canápolis',
    			'UF' => 'MG',
    		),
    		2372 => 
    		array (
    			'codigoIbge' => 3111903,
    			'nome' => 'Cana Verde',
    			'UF' => 'MG',
    		),
    		2373 => 
    		array (
    			'codigoIbge' => 3112000,
    			'nome' => 'Candeias',
    			'UF' => 'MG',
    		),
    		2374 => 
    		array (
    			'codigoIbge' => 3112059,
    			'nome' => 'Cantagalo',
    			'UF' => 'MG',
    		),
    		2375 => 
    		array (
    			'codigoIbge' => 3112109,
    			'nome' => 'Caparaó',
    			'UF' => 'MG',
    		),
    		2376 => 
    		array (
    			'codigoIbge' => 3112208,
    			'nome' => 'Capela Nova',
    			'UF' => 'MG',
    		),
    		2377 => 
    		array (
    			'codigoIbge' => 3112307,
    			'nome' => 'Capelinha',
    			'UF' => 'MG',
    		),
    		2378 => 
    		array (
    			'codigoIbge' => 3112406,
    			'nome' => 'Capetinga',
    			'UF' => 'MG',
    		),
    		2379 => 
    		array (
    			'codigoIbge' => 3112505,
    			'nome' => 'Capim Branco',
    			'UF' => 'MG',
    		),
    		2380 => 
    		array (
    			'codigoIbge' => 3112604,
    			'nome' => 'Capinópolis',
    			'UF' => 'MG',
    		),
    		2381 => 
    		array (
    			'codigoIbge' => 3112653,
    			'nome' => 'Capitão Andrade',
    			'UF' => 'MG',
    		),
    		2382 => 
    		array (
    			'codigoIbge' => 3112703,
    			'nome' => 'Capitão Enéas',
    			'UF' => 'MG',
    		),
    		2383 => 
    		array (
    			'codigoIbge' => 3112802,
    			'nome' => 'Capitólio',
    			'UF' => 'MG',
    		),
    		2384 => 
    		array (
    			'codigoIbge' => 3112901,
    			'nome' => 'Caputira',
    			'UF' => 'MG',
    		),
    		2385 => 
    		array (
    			'codigoIbge' => 3113008,
    			'nome' => 'Caraí',
    			'UF' => 'MG',
    		),
    		2386 => 
    		array (
    			'codigoIbge' => 3113107,
    			'nome' => 'Caranaíba',
    			'UF' => 'MG',
    		),
    		2387 => 
    		array (
    			'codigoIbge' => 3113206,
    			'nome' => 'Carandaí',
    			'UF' => 'MG',
    		),
    		2388 => 
    		array (
    			'codigoIbge' => 3113305,
    			'nome' => 'Carangola',
    			'UF' => 'MG',
    		),
    		2389 => 
    		array (
    			'codigoIbge' => 3113404,
    			'nome' => 'Caratinga',
    			'UF' => 'MG',
    		),
    		2390 => 
    		array (
    			'codigoIbge' => 3113503,
    			'nome' => 'Carbonita',
    			'UF' => 'MG',
    		),
    		2391 => 
    		array (
    			'codigoIbge' => 3113602,
    			'nome' => 'Careaçu',
    			'UF' => 'MG',
    		),
    		2392 => 
    		array (
    			'codigoIbge' => 3113701,
    			'nome' => 'Carlos Chagas',
    			'UF' => 'MG',
    		),
    		2393 => 
    		array (
    			'codigoIbge' => 3113800,
    			'nome' => 'Carmésia',
    			'UF' => 'MG',
    		),
    		2394 => 
    		array (
    			'codigoIbge' => 3113909,
    			'nome' => 'Carmo da Cachoeira',
    			'UF' => 'MG',
    		),
    		2395 => 
    		array (
    			'codigoIbge' => 3114006,
    			'nome' => 'Carmo da Mata',
    			'UF' => 'MG',
    		),
    		2396 => 
    		array (
    			'codigoIbge' => 3114105,
    			'nome' => 'Carmo de Minas',
    			'UF' => 'MG',
    		),
    		2397 => 
    		array (
    			'codigoIbge' => 3114204,
    			'nome' => 'Carmo do Cajuru',
    			'UF' => 'MG',
    		),
    		2398 => 
    		array (
    			'codigoIbge' => 3114303,
    			'nome' => 'Carmo do Paranaíba',
    			'UF' => 'MG',
    		),
    		2399 => 
    		array (
    			'codigoIbge' => 3114402,
    			'nome' => 'Carmo do Rio Claro',
    			'UF' => 'MG',
    		),
    		2400 => 
    		array (
    			'codigoIbge' => 3114501,
    			'nome' => 'Carmópolis de Minas',
    			'UF' => 'MG',
    		),
    		2401 => 
    		array (
    			'codigoIbge' => 3114550,
    			'nome' => 'Carneirinho',
    			'UF' => 'MG',
    		),
    		2402 => 
    		array (
    			'codigoIbge' => 3114600,
    			'nome' => 'Carrancas',
    			'UF' => 'MG',
    		),
    		2403 => 
    		array (
    			'codigoIbge' => 3114709,
    			'nome' => 'Carvalhópolis',
    			'UF' => 'MG',
    		),
    		2404 => 
    		array (
    			'codigoIbge' => 3114808,
    			'nome' => 'Carvalhos',
    			'UF' => 'MG',
    		),
    		2405 => 
    		array (
    			'codigoIbge' => 3114907,
    			'nome' => 'Casa Grande',
    			'UF' => 'MG',
    		),
    		2406 => 
    		array (
    			'codigoIbge' => 3115003,
    			'nome' => 'Cascalho Rico',
    			'UF' => 'MG',
    		),
    		2407 => 
    		array (
    			'codigoIbge' => 3115102,
    			'nome' => 'Cássia',
    			'UF' => 'MG',
    		),
    		2408 => 
    		array (
    			'codigoIbge' => 3115201,
    			'nome' => 'Conceição da Barra de Minas',
    			'UF' => 'MG',
    		),
    		2409 => 
    		array (
    			'codigoIbge' => 3115300,
    			'nome' => 'Cataguases',
    			'UF' => 'MG',
    		),
    		2410 => 
    		array (
    			'codigoIbge' => 3115359,
    			'nome' => 'Catas Altas',
    			'UF' => 'MG',
    		),
    		2411 => 
    		array (
    			'codigoIbge' => 3115409,
    			'nome' => 'Catas Altas da Noruega',
    			'UF' => 'MG',
    		),
    		2412 => 
    		array (
    			'codigoIbge' => 3115458,
    			'nome' => 'Catuji',
    			'UF' => 'MG',
    		),
    		2413 => 
    		array (
    			'codigoIbge' => 3115474,
    			'nome' => 'Catuti',
    			'UF' => 'MG',
    		),
    		2414 => 
    		array (
    			'codigoIbge' => 3115508,
    			'nome' => 'Caxambu',
    			'UF' => 'MG',
    		),
    		2415 => 
    		array (
    			'codigoIbge' => 3115607,
    			'nome' => 'Cedro do Abaeté',
    			'UF' => 'MG',
    		),
    		2416 => 
    		array (
    			'codigoIbge' => 3115706,
    			'nome' => 'Central de Minas',
    			'UF' => 'MG',
    		),
    		2417 => 
    		array (
    			'codigoIbge' => 3115805,
    			'nome' => 'Centralina',
    			'UF' => 'MG',
    		),
    		2418 => 
    		array (
    			'codigoIbge' => 3115904,
    			'nome' => 'Chácara',
    			'UF' => 'MG',
    		),
    		2419 => 
    		array (
    			'codigoIbge' => 3116001,
    			'nome' => 'Chalé',
    			'UF' => 'MG',
    		),
    		2420 => 
    		array (
    			'codigoIbge' => 3116100,
    			'nome' => 'Chapada do Norte',
    			'UF' => 'MG',
    		),
    		2421 => 
    		array (
    			'codigoIbge' => 3116159,
    			'nome' => 'Chapada Gaúcha',
    			'UF' => 'MG',
    		),
    		2422 => 
    		array (
    			'codigoIbge' => 3116209,
    			'nome' => 'Chiador',
    			'UF' => 'MG',
    		),
    		2423 => 
    		array (
    			'codigoIbge' => 3116308,
    			'nome' => 'Cipotânea',
    			'UF' => 'MG',
    		),
    		2424 => 
    		array (
    			'codigoIbge' => 3116407,
    			'nome' => 'Claraval',
    			'UF' => 'MG',
    		),
    		2425 => 
    		array (
    			'codigoIbge' => 3116506,
    			'nome' => 'Claro dos Poções',
    			'UF' => 'MG',
    		),
    		2426 => 
    		array (
    			'codigoIbge' => 3116605,
    			'nome' => 'Cláudio',
    			'UF' => 'MG',
    		),
    		2427 => 
    		array (
    			'codigoIbge' => 3116704,
    			'nome' => 'Coimbra',
    			'UF' => 'MG',
    		),
    		2428 => 
    		array (
    			'codigoIbge' => 3116803,
    			'nome' => 'Coluna',
    			'UF' => 'MG',
    		),
    		2429 => 
    		array (
    			'codigoIbge' => 3116902,
    			'nome' => 'Comendador Gomes',
    			'UF' => 'MG',
    		),
    		2430 => 
    		array (
    			'codigoIbge' => 3117009,
    			'nome' => 'Comercinho',
    			'UF' => 'MG',
    		),
    		2431 => 
    		array (
    			'codigoIbge' => 3117108,
    			'nome' => 'Conceição da Aparecida',
    			'UF' => 'MG',
    		),
    		2432 => 
    		array (
    			'codigoIbge' => 3117207,
    			'nome' => 'Conceição das Pedras',
    			'UF' => 'MG',
    		),
    		2433 => 
    		array (
    			'codigoIbge' => 3117306,
    			'nome' => 'Conceição das Alagoas',
    			'UF' => 'MG',
    		),
    		2434 => 
    		array (
    			'codigoIbge' => 3117405,
    			'nome' => 'Conceição de Ipanema',
    			'UF' => 'MG',
    		),
    		2435 => 
    		array (
    			'codigoIbge' => 3117504,
    			'nome' => 'Conceição do Mato Dentro',
    			'UF' => 'MG',
    		),
    		2436 => 
    		array (
    			'codigoIbge' => 3117603,
    			'nome' => 'Conceição do Pará',
    			'UF' => 'MG',
    		),
    		2437 => 
    		array (
    			'codigoIbge' => 3117702,
    			'nome' => 'Conceição do Rio Verde',
    			'UF' => 'MG',
    		),
    		2438 => 
    		array (
    			'codigoIbge' => 3117801,
    			'nome' => 'Conceição dos Ouros',
    			'UF' => 'MG',
    		),
    		2439 => 
    		array (
    			'codigoIbge' => 3117836,
    			'nome' => 'Cônego Marinho',
    			'UF' => 'MG',
    		),
    		2440 => 
    		array (
    			'codigoIbge' => 3117876,
    			'nome' => 'Confins',
    			'UF' => 'MG',
    		),
    		2441 => 
    		array (
    			'codigoIbge' => 3117900,
    			'nome' => 'Congonhal',
    			'UF' => 'MG',
    		),
    		2442 => 
    		array (
    			'codigoIbge' => 3118007,
    			'nome' => 'Congonhas',
    			'UF' => 'MG',
    		),
    		2443 => 
    		array (
    			'codigoIbge' => 3118106,
    			'nome' => 'Congonhas do Norte',
    			'UF' => 'MG',
    		),
    		2444 => 
    		array (
    			'codigoIbge' => 3118205,
    			'nome' => 'Conquista',
    			'UF' => 'MG',
    		),
    		2445 => 
    		array (
    			'codigoIbge' => 3118304,
    			'nome' => 'Conselheiro Lafaiete',
    			'UF' => 'MG',
    		),
    		2446 => 
    		array (
    			'codigoIbge' => 3118403,
    			'nome' => 'Conselheiro Pena',
    			'UF' => 'MG',
    		),
    		2447 => 
    		array (
    			'codigoIbge' => 3118502,
    			'nome' => 'Consolação',
    			'UF' => 'MG',
    		),
    		2448 => 
    		array (
    			'codigoIbge' => 3118601,
    			'nome' => 'Contagem',
    			'UF' => 'MG',
    		),
    		2449 => 
    		array (
    			'codigoIbge' => 3118700,
    			'nome' => 'Coqueiral',
    			'UF' => 'MG',
    		),
    		2450 => 
    		array (
    			'codigoIbge' => 3118809,
    			'nome' => 'Coração de Jesus',
    			'UF' => 'MG',
    		),
    		2451 => 
    		array (
    			'codigoIbge' => 3118908,
    			'nome' => 'Cordisburgo',
    			'UF' => 'MG',
    		),
    		2452 => 
    		array (
    			'codigoIbge' => 3119005,
    			'nome' => 'Cordislândia',
    			'UF' => 'MG',
    		),
    		2453 => 
    		array (
    			'codigoIbge' => 3119104,
    			'nome' => 'Corinto',
    			'UF' => 'MG',
    		),
    		2454 => 
    		array (
    			'codigoIbge' => 3119203,
    			'nome' => 'Coroaci',
    			'UF' => 'MG',
    		),
    		2455 => 
    		array (
    			'codigoIbge' => 3119302,
    			'nome' => 'Coromandel',
    			'UF' => 'MG',
    		),
    		2456 => 
    		array (
    			'codigoIbge' => 3119401,
    			'nome' => 'Coronel Fabriciano',
    			'UF' => 'MG',
    		),
    		2457 => 
    		array (
    			'codigoIbge' => 3119500,
    			'nome' => 'Coronel Murta',
    			'UF' => 'MG',
    		),
    		2458 => 
    		array (
    			'codigoIbge' => 3119609,
    			'nome' => 'Coronel Pacheco',
    			'UF' => 'MG',
    		),
    		2459 => 
    		array (
    			'codigoIbge' => 3119708,
    			'nome' => 'Coronel Xavier Chaves',
    			'UF' => 'MG',
    		),
    		2460 => 
    		array (
    			'codigoIbge' => 3119807,
    			'nome' => 'Córrego Danta',
    			'UF' => 'MG',
    		),
    		2461 => 
    		array (
    			'codigoIbge' => 3119906,
    			'nome' => 'Córrego do Bom Jesus',
    			'UF' => 'MG',
    		),
    		2462 => 
    		array (
    			'codigoIbge' => 3119955,
    			'nome' => 'Córrego Fundo',
    			'UF' => 'MG',
    		),
    		2463 => 
    		array (
    			'codigoIbge' => 3120003,
    			'nome' => 'Córrego Novo',
    			'UF' => 'MG',
    		),
    		2464 => 
    		array (
    			'codigoIbge' => 3120102,
    			'nome' => 'Couto de Magalhães de Minas',
    			'UF' => 'MG',
    		),
    		2465 => 
    		array (
    			'codigoIbge' => 3120151,
    			'nome' => 'Crisólita',
    			'UF' => 'MG',
    		),
    		2466 => 
    		array (
    			'codigoIbge' => 3120201,
    			'nome' => 'Cristais',
    			'UF' => 'MG',
    		),
    		2467 => 
    		array (
    			'codigoIbge' => 3120300,
    			'nome' => 'Cristália',
    			'UF' => 'MG',
    		),
    		2468 => 
    		array (
    			'codigoIbge' => 3120409,
    			'nome' => 'Cristiano Otoni',
    			'UF' => 'MG',
    		),
    		2469 => 
    		array (
    			'codigoIbge' => 3120508,
    			'nome' => 'Cristina',
    			'UF' => 'MG',
    		),
    		2470 => 
    		array (
    			'codigoIbge' => 3120607,
    			'nome' => 'Crucilândia',
    			'UF' => 'MG',
    		),
    		2471 => 
    		array (
    			'codigoIbge' => 3120706,
    			'nome' => 'Cruzeiro da Fortaleza',
    			'UF' => 'MG',
    		),
    		2472 => 
    		array (
    			'codigoIbge' => 3120805,
    			'nome' => 'Cruzília',
    			'UF' => 'MG',
    		),
    		2473 => 
    		array (
    			'codigoIbge' => 3120839,
    			'nome' => 'Cuparaque',
    			'UF' => 'MG',
    		),
    		2474 => 
    		array (
    			'codigoIbge' => 3120870,
    			'nome' => 'Curral de Dentro',
    			'UF' => 'MG',
    		),
    		2475 => 
    		array (
    			'codigoIbge' => 3120904,
    			'nome' => 'Curvelo',
    			'UF' => 'MG',
    		),
    		2476 => 
    		array (
    			'codigoIbge' => 3121001,
    			'nome' => 'Datas',
    			'UF' => 'MG',
    		),
    		2477 => 
    		array (
    			'codigoIbge' => 3121100,
    			'nome' => 'Delfim Moreira',
    			'UF' => 'MG',
    		),
    		2478 => 
    		array (
    			'codigoIbge' => 3121209,
    			'nome' => 'Delfinópolis',
    			'UF' => 'MG',
    		),
    		2479 => 
    		array (
    			'codigoIbge' => 3121258,
    			'nome' => 'Delta',
    			'UF' => 'MG',
    		),
    		2480 => 
    		array (
    			'codigoIbge' => 3121308,
    			'nome' => 'Descoberto',
    			'UF' => 'MG',
    		),
    		2481 => 
    		array (
    			'codigoIbge' => 3121407,
    			'nome' => 'Desterro de Entre Rios',
    			'UF' => 'MG',
    		),
    		2482 => 
    		array (
    			'codigoIbge' => 3121506,
    			'nome' => 'Desterro do Melo',
    			'UF' => 'MG',
    		),
    		2483 => 
    		array (
    			'codigoIbge' => 3121605,
    			'nome' => 'Diamantina',
    			'UF' => 'MG',
    		),
    		2484 => 
    		array (
    			'codigoIbge' => 3121704,
    			'nome' => 'Diogo de Vasconcelos',
    			'UF' => 'MG',
    		),
    		2485 => 
    		array (
    			'codigoIbge' => 3121803,
    			'nome' => 'Dionísio',
    			'UF' => 'MG',
    		),
    		2486 => 
    		array (
    			'codigoIbge' => 3121902,
    			'nome' => 'Divinésia',
    			'UF' => 'MG',
    		),
    		2487 => 
    		array (
    			'codigoIbge' => 3122009,
    			'nome' => 'Divino',
    			'UF' => 'MG',
    		),
    		2488 => 
    		array (
    			'codigoIbge' => 3122108,
    			'nome' => 'Divino das Laranjeiras',
    			'UF' => 'MG',
    		),
    		2489 => 
    		array (
    			'codigoIbge' => 3122207,
    			'nome' => 'Divinolândia de Minas',
    			'UF' => 'MG',
    		),
    		2490 => 
    		array (
    			'codigoIbge' => 3122306,
    			'nome' => 'Divinópolis',
    			'UF' => 'MG',
    		),
    		2491 => 
    		array (
    			'codigoIbge' => 3122355,
    			'nome' => 'Divisa Alegre',
    			'UF' => 'MG',
    		),
    		2492 => 
    		array (
    			'codigoIbge' => 3122405,
    			'nome' => 'Divisa Nova',
    			'UF' => 'MG',
    		),
    		2493 => 
    		array (
    			'codigoIbge' => 3122454,
    			'nome' => 'Divisópolis',
    			'UF' => 'MG',
    		),
    		2494 => 
    		array (
    			'codigoIbge' => 3122470,
    			'nome' => 'Dom Bosco',
    			'UF' => 'MG',
    		),
    		2495 => 
    		array (
    			'codigoIbge' => 3122504,
    			'nome' => 'Dom Cavati',
    			'UF' => 'MG',
    		),
    		2496 => 
    		array (
    			'codigoIbge' => 3122603,
    			'nome' => 'Dom Joaquim',
    			'UF' => 'MG',
    		),
    		2497 => 
    		array (
    			'codigoIbge' => 3122702,
    			'nome' => 'Dom Silvério',
    			'UF' => 'MG',
    		),
    		2498 => 
    		array (
    			'codigoIbge' => 3122801,
    			'nome' => 'Dom Viçoso',
    			'UF' => 'MG',
    		),
    		2499 => 
    		array (
    			'codigoIbge' => 3122900,
    			'nome' => 'Dona Euzébia',
    			'UF' => 'MG',
    		),
    		2500 => 
    		array (
    			'codigoIbge' => 3123007,
    			'nome' => 'Dores de Campos',
    			'UF' => 'MG',
    		),
    		2501 => 
    		array (
    			'codigoIbge' => 3123106,
    			'nome' => 'Dores de Guanhães',
    			'UF' => 'MG',
    		),
    		2502 => 
    		array (
    			'codigoIbge' => 3123205,
    			'nome' => 'Dores do Indaiá',
    			'UF' => 'MG',
    		),
    		2503 => 
    		array (
    			'codigoIbge' => 3123304,
    			'nome' => 'Dores do Turvo',
    			'UF' => 'MG',
    		),
    		2504 => 
    		array (
    			'codigoIbge' => 3123403,
    			'nome' => 'Doresópolis',
    			'UF' => 'MG',
    		),
    		2505 => 
    		array (
    			'codigoIbge' => 3123502,
    			'nome' => 'Douradoquara',
    			'UF' => 'MG',
    		),
    		2506 => 
    		array (
    			'codigoIbge' => 3123528,
    			'nome' => 'Durandé',
    			'UF' => 'MG',
    		),
    		2507 => 
    		array (
    			'codigoIbge' => 3123601,
    			'nome' => 'Elói Mendes',
    			'UF' => 'MG',
    		),
    		2508 => 
    		array (
    			'codigoIbge' => 3123700,
    			'nome' => 'Engenheiro Caldas',
    			'UF' => 'MG',
    		),
    		2509 => 
    		array (
    			'codigoIbge' => 3123809,
    			'nome' => 'Engenheiro Navarro',
    			'UF' => 'MG',
    		),
    		2510 => 
    		array (
    			'codigoIbge' => 3123858,
    			'nome' => 'Entre Folhas',
    			'UF' => 'MG',
    		),
    		2511 => 
    		array (
    			'codigoIbge' => 3123908,
    			'nome' => 'Entre Rios de Minas',
    			'UF' => 'MG',
    		),
    		2512 => 
    		array (
    			'codigoIbge' => 3124005,
    			'nome' => 'Ervália',
    			'UF' => 'MG',
    		),
    		2513 => 
    		array (
    			'codigoIbge' => 3124104,
    			'nome' => 'Esmeraldas',
    			'UF' => 'MG',
    		),
    		2514 => 
    		array (
    			'codigoIbge' => 3124203,
    			'nome' => 'Espera Feliz',
    			'UF' => 'MG',
    		),
    		2515 => 
    		array (
    			'codigoIbge' => 3124302,
    			'nome' => 'Espinosa',
    			'UF' => 'MG',
    		),
    		2516 => 
    		array (
    			'codigoIbge' => 3124401,
    			'nome' => 'Espírito Santo do Dourado',
    			'UF' => 'MG',
    		),
    		2517 => 
    		array (
    			'codigoIbge' => 3124500,
    			'nome' => 'Estiva',
    			'UF' => 'MG',
    		),
    		2518 => 
    		array (
    			'codigoIbge' => 3124609,
    			'nome' => 'Estrela Dalva',
    			'UF' => 'MG',
    		),
    		2519 => 
    		array (
    			'codigoIbge' => 3124708,
    			'nome' => 'Estrela do Indaiá',
    			'UF' => 'MG',
    		),
    		2520 => 
    		array (
    			'codigoIbge' => 3124807,
    			'nome' => 'Estrela do Sul',
    			'UF' => 'MG',
    		),
    		2521 => 
    		array (
    			'codigoIbge' => 3124906,
    			'nome' => 'Eugenópolis',
    			'UF' => 'MG',
    		),
    		2522 => 
    		array (
    			'codigoIbge' => 3125002,
    			'nome' => 'Ewbank da Câmara',
    			'UF' => 'MG',
    		),
    		2523 => 
    		array (
    			'codigoIbge' => 3125101,
    			'nome' => 'Extrema',
    			'UF' => 'MG',
    		),
    		2524 => 
    		array (
    			'codigoIbge' => 3125200,
    			'nome' => 'Fama',
    			'UF' => 'MG',
    		),
    		2525 => 
    		array (
    			'codigoIbge' => 3125309,
    			'nome' => 'Faria Lemos',
    			'UF' => 'MG',
    		),
    		2526 => 
    		array (
    			'codigoIbge' => 3125408,
    			'nome' => 'Felício dos Santos',
    			'UF' => 'MG',
    		),
    		2527 => 
    		array (
    			'codigoIbge' => 3125507,
    			'nome' => 'São Gonçalo do Rio Preto',
    			'UF' => 'MG',
    		),
    		2528 => 
    		array (
    			'codigoIbge' => 3125606,
    			'nome' => 'Felisburgo',
    			'UF' => 'MG',
    		),
    		2529 => 
    		array (
    			'codigoIbge' => 3125705,
    			'nome' => 'Felixlândia',
    			'UF' => 'MG',
    		),
    		2530 => 
    		array (
    			'codigoIbge' => 3125804,
    			'nome' => 'Fernandes Tourinho',
    			'UF' => 'MG',
    		),
    		2531 => 
    		array (
    			'codigoIbge' => 3125903,
    			'nome' => 'Ferros',
    			'UF' => 'MG',
    		),
    		2532 => 
    		array (
    			'codigoIbge' => 3125952,
    			'nome' => 'Fervedouro',
    			'UF' => 'MG',
    		),
    		2533 => 
    		array (
    			'codigoIbge' => 3126000,
    			'nome' => 'Florestal',
    			'UF' => 'MG',
    		),
    		2534 => 
    		array (
    			'codigoIbge' => 3126109,
    			'nome' => 'Formiga',
    			'UF' => 'MG',
    		),
    		2535 => 
    		array (
    			'codigoIbge' => 3126208,
    			'nome' => 'Formoso',
    			'UF' => 'MG',
    		),
    		2536 => 
    		array (
    			'codigoIbge' => 3126307,
    			'nome' => 'Fortaleza de Minas',
    			'UF' => 'MG',
    		),
    		2537 => 
    		array (
    			'codigoIbge' => 3126406,
    			'nome' => 'Fortuna de Minas',
    			'UF' => 'MG',
    		),
    		2538 => 
    		array (
    			'codigoIbge' => 3126505,
    			'nome' => 'Francisco Badaró',
    			'UF' => 'MG',
    		),
    		2539 => 
    		array (
    			'codigoIbge' => 3126604,
    			'nome' => 'Francisco Dumont',
    			'UF' => 'MG',
    		),
    		2540 => 
    		array (
    			'codigoIbge' => 3126703,
    			'nome' => 'Francisco Sá',
    			'UF' => 'MG',
    		),
    		2541 => 
    		array (
    			'codigoIbge' => 3126752,
    			'nome' => 'Franciscópolis',
    			'UF' => 'MG',
    		),
    		2542 => 
    		array (
    			'codigoIbge' => 3126802,
    			'nome' => 'Frei Gaspar',
    			'UF' => 'MG',
    		),
    		2543 => 
    		array (
    			'codigoIbge' => 3126901,
    			'nome' => 'Frei Inocêncio',
    			'UF' => 'MG',
    		),
    		2544 => 
    		array (
    			'codigoIbge' => 3126950,
    			'nome' => 'Frei Lagonegro',
    			'UF' => 'MG',
    		),
    		2545 => 
    		array (
    			'codigoIbge' => 3127008,
    			'nome' => 'Fronteira',
    			'UF' => 'MG',
    		),
    		2546 => 
    		array (
    			'codigoIbge' => 3127057,
    			'nome' => 'Fronteira dos Vales',
    			'UF' => 'MG',
    		),
    		2547 => 
    		array (
    			'codigoIbge' => 3127073,
    			'nome' => 'Fruta de Leite',
    			'UF' => 'MG',
    		),
    		2548 => 
    		array (
    			'codigoIbge' => 3127107,
    			'nome' => 'Frutal',
    			'UF' => 'MG',
    		),
    		2549 => 
    		array (
    			'codigoIbge' => 3127206,
    			'nome' => 'Funilândia',
    			'UF' => 'MG',
    		),
    		2550 => 
    		array (
    			'codigoIbge' => 3127305,
    			'nome' => 'Galiléia',
    			'UF' => 'MG',
    		),
    		2551 => 
    		array (
    			'codigoIbge' => 3127339,
    			'nome' => 'Gameleiras',
    			'UF' => 'MG',
    		),
    		2552 => 
    		array (
    			'codigoIbge' => 3127354,
    			'nome' => 'Glaucilândia',
    			'UF' => 'MG',
    		),
    		2553 => 
    		array (
    			'codigoIbge' => 3127370,
    			'nome' => 'Goiabeira',
    			'UF' => 'MG',
    		),
    		2554 => 
    		array (
    			'codigoIbge' => 3127388,
    			'nome' => 'Goianá',
    			'UF' => 'MG',
    		),
    		2555 => 
    		array (
    			'codigoIbge' => 3127404,
    			'nome' => 'Gonçalves',
    			'UF' => 'MG',
    		),
    		2556 => 
    		array (
    			'codigoIbge' => 3127503,
    			'nome' => 'Gonzaga',
    			'UF' => 'MG',
    		),
    		2557 => 
    		array (
    			'codigoIbge' => 3127602,
    			'nome' => 'Gouveia',
    			'UF' => 'MG',
    		),
    		2558 => 
    		array (
    			'codigoIbge' => 3127701,
    			'nome' => 'Governador Valadares',
    			'UF' => 'MG',
    		),
    		2559 => 
    		array (
    			'codigoIbge' => 3127800,
    			'nome' => 'Grão Mogol',
    			'UF' => 'MG',
    		),
    		2560 => 
    		array (
    			'codigoIbge' => 3127909,
    			'nome' => 'Grupiara',
    			'UF' => 'MG',
    		),
    		2561 => 
    		array (
    			'codigoIbge' => 3128006,
    			'nome' => 'Guanhães',
    			'UF' => 'MG',
    		),
    		2562 => 
    		array (
    			'codigoIbge' => 3128105,
    			'nome' => 'Guapé',
    			'UF' => 'MG',
    		),
    		2563 => 
    		array (
    			'codigoIbge' => 3128204,
    			'nome' => 'Guaraciaba',
    			'UF' => 'MG',
    		),
    		2564 => 
    		array (
    			'codigoIbge' => 3128253,
    			'nome' => 'Guaraciama',
    			'UF' => 'MG',
    		),
    		2565 => 
    		array (
    			'codigoIbge' => 3128303,
    			'nome' => 'Guaranésia',
    			'UF' => 'MG',
    		),
    		2566 => 
    		array (
    			'codigoIbge' => 3128402,
    			'nome' => 'Guarani',
    			'UF' => 'MG',
    		),
    		2567 => 
    		array (
    			'codigoIbge' => 3128501,
    			'nome' => 'Guarará',
    			'UF' => 'MG',
    		),
    		2568 => 
    		array (
    			'codigoIbge' => 3128600,
    			'nome' => 'Guarda-Mor',
    			'UF' => 'MG',
    		),
    		2569 => 
    		array (
    			'codigoIbge' => 3128709,
    			'nome' => 'Guaxupé',
    			'UF' => 'MG',
    		),
    		2570 => 
    		array (
    			'codigoIbge' => 3128808,
    			'nome' => 'Guidoval',
    			'UF' => 'MG',
    		),
    		2571 => 
    		array (
    			'codigoIbge' => 3128907,
    			'nome' => 'Guimarânia',
    			'UF' => 'MG',
    		),
    		2572 => 
    		array (
    			'codigoIbge' => 3129004,
    			'nome' => 'Guiricema',
    			'UF' => 'MG',
    		),
    		2573 => 
    		array (
    			'codigoIbge' => 3129103,
    			'nome' => 'Gurinhatã',
    			'UF' => 'MG',
    		),
    		2574 => 
    		array (
    			'codigoIbge' => 3129202,
    			'nome' => 'Heliodora',
    			'UF' => 'MG',
    		),
    		2575 => 
    		array (
    			'codigoIbge' => 3129301,
    			'nome' => 'Iapu',
    			'UF' => 'MG',
    		),
    		2576 => 
    		array (
    			'codigoIbge' => 3129400,
    			'nome' => 'Ibertioga',
    			'UF' => 'MG',
    		),
    		2577 => 
    		array (
    			'codigoIbge' => 3129509,
    			'nome' => 'Ibiá',
    			'UF' => 'MG',
    		),
    		2578 => 
    		array (
    			'codigoIbge' => 3129608,
    			'nome' => 'Ibiaí',
    			'UF' => 'MG',
    		),
    		2579 => 
    		array (
    			'codigoIbge' => 3129657,
    			'nome' => 'Ibiracatu',
    			'UF' => 'MG',
    		),
    		2580 => 
    		array (
    			'codigoIbge' => 3129707,
    			'nome' => 'Ibiraci',
    			'UF' => 'MG',
    		),
    		2581 => 
    		array (
    			'codigoIbge' => 3129806,
    			'nome' => 'Ibirité',
    			'UF' => 'MG',
    		),
    		2582 => 
    		array (
    			'codigoIbge' => 3129905,
    			'nome' => 'Ibitiúra de Minas',
    			'UF' => 'MG',
    		),
    		2583 => 
    		array (
    			'codigoIbge' => 3130002,
    			'nome' => 'Ibituruna',
    			'UF' => 'MG',
    		),
    		2584 => 
    		array (
    			'codigoIbge' => 3130051,
    			'nome' => 'Icaraí de Minas',
    			'UF' => 'MG',
    		),
    		2585 => 
    		array (
    			'codigoIbge' => 3130101,
    			'nome' => 'Igarapé',
    			'UF' => 'MG',
    		),
    		2586 => 
    		array (
    			'codigoIbge' => 3130200,
    			'nome' => 'Igaratinga',
    			'UF' => 'MG',
    		),
    		2587 => 
    		array (
    			'codigoIbge' => 3130309,
    			'nome' => 'Iguatama',
    			'UF' => 'MG',
    		),
    		2588 => 
    		array (
    			'codigoIbge' => 3130408,
    			'nome' => 'Ijaci',
    			'UF' => 'MG',
    		),
    		2589 => 
    		array (
    			'codigoIbge' => 3130507,
    			'nome' => 'Ilicínea',
    			'UF' => 'MG',
    		),
    		2590 => 
    		array (
    			'codigoIbge' => 3130556,
    			'nome' => 'Imbé de Minas',
    			'UF' => 'MG',
    		),
    		2591 => 
    		array (
    			'codigoIbge' => 3130606,
    			'nome' => 'Inconfidentes',
    			'UF' => 'MG',
    		),
    		2592 => 
    		array (
    			'codigoIbge' => 3130655,
    			'nome' => 'Indaiabira',
    			'UF' => 'MG',
    		),
    		2593 => 
    		array (
    			'codigoIbge' => 3130705,
    			'nome' => 'Indianópolis',
    			'UF' => 'MG',
    		),
    		2594 => 
    		array (
    			'codigoIbge' => 3130804,
    			'nome' => 'Ingaí',
    			'UF' => 'MG',
    		),
    		2595 => 
    		array (
    			'codigoIbge' => 3130903,
    			'nome' => 'Inhapim',
    			'UF' => 'MG',
    		),
    		2596 => 
    		array (
    			'codigoIbge' => 3131000,
    			'nome' => 'Inhaúma',
    			'UF' => 'MG',
    		),
    		2597 => 
    		array (
    			'codigoIbge' => 3131109,
    			'nome' => 'Inimutaba',
    			'UF' => 'MG',
    		),
    		2598 => 
    		array (
    			'codigoIbge' => 3131158,
    			'nome' => 'Ipaba',
    			'UF' => 'MG',
    		),
    		2599 => 
    		array (
    			'codigoIbge' => 3131208,
    			'nome' => 'Ipanema',
    			'UF' => 'MG',
    		),
    		2600 => 
    		array (
    			'codigoIbge' => 3131307,
    			'nome' => 'Ipatinga',
    			'UF' => 'MG',
    		),
    		2601 => 
    		array (
    			'codigoIbge' => 3131406,
    			'nome' => 'Ipiaçu',
    			'UF' => 'MG',
    		),
    		2602 => 
    		array (
    			'codigoIbge' => 3131505,
    			'nome' => 'Ipuiúna',
    			'UF' => 'MG',
    		),
    		2603 => 
    		array (
    			'codigoIbge' => 3131604,
    			'nome' => 'Iraí de Minas',
    			'UF' => 'MG',
    		),
    		2604 => 
    		array (
    			'codigoIbge' => 3131703,
    			'nome' => 'Itabira',
    			'UF' => 'MG',
    		),
    		2605 => 
    		array (
    			'codigoIbge' => 3131802,
    			'nome' => 'Itabirinha',
    			'UF' => 'MG',
    		),
    		2606 => 
    		array (
    			'codigoIbge' => 3131901,
    			'nome' => 'Itabirito',
    			'UF' => 'MG',
    		),
    		2607 => 
    		array (
    			'codigoIbge' => 3132008,
    			'nome' => 'Itacambira',
    			'UF' => 'MG',
    		),
    		2608 => 
    		array (
    			'codigoIbge' => 3132107,
    			'nome' => 'Itacarambi',
    			'UF' => 'MG',
    		),
    		2609 => 
    		array (
    			'codigoIbge' => 3132206,
    			'nome' => 'Itaguara',
    			'UF' => 'MG',
    		),
    		2610 => 
    		array (
    			'codigoIbge' => 3132305,
    			'nome' => 'Itaipé',
    			'UF' => 'MG',
    		),
    		2611 => 
    		array (
    			'codigoIbge' => 3132404,
    			'nome' => 'Itajubá',
    			'UF' => 'MG',
    		),
    		2612 => 
    		array (
    			'codigoIbge' => 3132503,
    			'nome' => 'Itamarandiba',
    			'UF' => 'MG',
    		),
    		2613 => 
    		array (
    			'codigoIbge' => 3132602,
    			'nome' => 'Itamarati de Minas',
    			'UF' => 'MG',
    		),
    		2614 => 
    		array (
    			'codigoIbge' => 3132701,
    			'nome' => 'Itambacuri',
    			'UF' => 'MG',
    		),
    		2615 => 
    		array (
    			'codigoIbge' => 3132800,
    			'nome' => 'Itambé do Mato Dentro',
    			'UF' => 'MG',
    		),
    		2616 => 
    		array (
    			'codigoIbge' => 3132909,
    			'nome' => 'Itamogi',
    			'UF' => 'MG',
    		),
    		2617 => 
    		array (
    			'codigoIbge' => 3133006,
    			'nome' => 'Itamonte',
    			'UF' => 'MG',
    		),
    		2618 => 
    		array (
    			'codigoIbge' => 3133105,
    			'nome' => 'Itanhandu',
    			'UF' => 'MG',
    		),
    		2619 => 
    		array (
    			'codigoIbge' => 3133204,
    			'nome' => 'Itanhomi',
    			'UF' => 'MG',
    		),
    		2620 => 
    		array (
    			'codigoIbge' => 3133303,
    			'nome' => 'Itaobim',
    			'UF' => 'MG',
    		),
    		2621 => 
    		array (
    			'codigoIbge' => 3133402,
    			'nome' => 'Itapagipe',
    			'UF' => 'MG',
    		),
    		2622 => 
    		array (
    			'codigoIbge' => 3133501,
    			'nome' => 'Itapecerica',
    			'UF' => 'MG',
    		),
    		2623 => 
    		array (
    			'codigoIbge' => 3133600,
    			'nome' => 'Itapeva',
    			'UF' => 'MG',
    		),
    		2624 => 
    		array (
    			'codigoIbge' => 3133709,
    			'nome' => 'Itatiaiuçu',
    			'UF' => 'MG',
    		),
    		2625 => 
    		array (
    			'codigoIbge' => 3133758,
    			'nome' => 'Itaú de Minas',
    			'UF' => 'MG',
    		),
    		2626 => 
    		array (
    			'codigoIbge' => 3133808,
    			'nome' => 'Itaúna',
    			'UF' => 'MG',
    		),
    		2627 => 
    		array (
    			'codigoIbge' => 3133907,
    			'nome' => 'Itaverava',
    			'UF' => 'MG',
    		),
    		2628 => 
    		array (
    			'codigoIbge' => 3134004,
    			'nome' => 'Itinga',
    			'UF' => 'MG',
    		),
    		2629 => 
    		array (
    			'codigoIbge' => 3134103,
    			'nome' => 'Itueta',
    			'UF' => 'MG',
    		),
    		2630 => 
    		array (
    			'codigoIbge' => 3134202,
    			'nome' => 'Ituiutaba',
    			'UF' => 'MG',
    		),
    		2631 => 
    		array (
    			'codigoIbge' => 3134301,
    			'nome' => 'Itumirim',
    			'UF' => 'MG',
    		),
    		2632 => 
    		array (
    			'codigoIbge' => 3134400,
    			'nome' => 'Iturama',
    			'UF' => 'MG',
    		),
    		2633 => 
    		array (
    			'codigoIbge' => 3134509,
    			'nome' => 'Itutinga',
    			'UF' => 'MG',
    		),
    		2634 => 
    		array (
    			'codigoIbge' => 3134608,
    			'nome' => 'Jaboticatubas',
    			'UF' => 'MG',
    		),
    		2635 => 
    		array (
    			'codigoIbge' => 3134707,
    			'nome' => 'Jacinto',
    			'UF' => 'MG',
    		),
    		2636 => 
    		array (
    			'codigoIbge' => 3134806,
    			'nome' => 'Jacuí',
    			'UF' => 'MG',
    		),
    		2637 => 
    		array (
    			'codigoIbge' => 3134905,
    			'nome' => 'Jacutinga',
    			'UF' => 'MG',
    		),
    		2638 => 
    		array (
    			'codigoIbge' => 3135001,
    			'nome' => 'Jaguaraçu',
    			'UF' => 'MG',
    		),
    		2639 => 
    		array (
    			'codigoIbge' => 3135050,
    			'nome' => 'Jaíba',
    			'UF' => 'MG',
    		),
    		2640 => 
    		array (
    			'codigoIbge' => 3135076,
    			'nome' => 'Jampruca',
    			'UF' => 'MG',
    		),
    		2641 => 
    		array (
    			'codigoIbge' => 3135100,
    			'nome' => 'Janaúba',
    			'UF' => 'MG',
    		),
    		2642 => 
    		array (
    			'codigoIbge' => 3135209,
    			'nome' => 'Januária',
    			'UF' => 'MG',
    		),
    		2643 => 
    		array (
    			'codigoIbge' => 3135308,
    			'nome' => 'Japaraíba',
    			'UF' => 'MG',
    		),
    		2644 => 
    		array (
    			'codigoIbge' => 3135357,
    			'nome' => 'Japonvar',
    			'UF' => 'MG',
    		),
    		2645 => 
    		array (
    			'codigoIbge' => 3135407,
    			'nome' => 'Jeceaba',
    			'UF' => 'MG',
    		),
    		2646 => 
    		array (
    			'codigoIbge' => 3135456,
    			'nome' => 'Jenipapo de Minas',
    			'UF' => 'MG',
    		),
    		2647 => 
    		array (
    			'codigoIbge' => 3135506,
    			'nome' => 'Jequeri',
    			'UF' => 'MG',
    		),
    		2648 => 
    		array (
    			'codigoIbge' => 3135605,
    			'nome' => 'Jequitaí',
    			'UF' => 'MG',
    		),
    		2649 => 
    		array (
    			'codigoIbge' => 3135704,
    			'nome' => 'Jequitibá',
    			'UF' => 'MG',
    		),
    		2650 => 
    		array (
    			'codigoIbge' => 3135803,
    			'nome' => 'Jequitinhonha',
    			'UF' => 'MG',
    		),
    		2651 => 
    		array (
    			'codigoIbge' => 3135902,
    			'nome' => 'Jesuânia',
    			'UF' => 'MG',
    		),
    		2652 => 
    		array (
    			'codigoIbge' => 3136009,
    			'nome' => 'Joaíma',
    			'UF' => 'MG',
    		),
    		2653 => 
    		array (
    			'codigoIbge' => 3136108,
    			'nome' => 'Joanésia',
    			'UF' => 'MG',
    		),
    		2654 => 
    		array (
    			'codigoIbge' => 3136207,
    			'nome' => 'João Monlevade',
    			'UF' => 'MG',
    		),
    		2655 => 
    		array (
    			'codigoIbge' => 3136306,
    			'nome' => 'João Pinheiro',
    			'UF' => 'MG',
    		),
    		2656 => 
    		array (
    			'codigoIbge' => 3136405,
    			'nome' => 'Joaquim Felício',
    			'UF' => 'MG',
    		),
    		2657 => 
    		array (
    			'codigoIbge' => 3136504,
    			'nome' => 'Jordânia',
    			'UF' => 'MG',
    		),
    		2658 => 
    		array (
    			'codigoIbge' => 3136520,
    			'nome' => 'José Gonçalves de Minas',
    			'UF' => 'MG',
    		),
    		2659 => 
    		array (
    			'codigoIbge' => 3136553,
    			'nome' => 'José Raydan',
    			'UF' => 'MG',
    		),
    		2660 => 
    		array (
    			'codigoIbge' => 3136579,
    			'nome' => 'Josenópolis',
    			'UF' => 'MG',
    		),
    		2661 => 
    		array (
    			'codigoIbge' => 3136603,
    			'nome' => 'Nova União',
    			'UF' => 'MG',
    		),
    		2662 => 
    		array (
    			'codigoIbge' => 3136652,
    			'nome' => 'Juatuba',
    			'UF' => 'MG',
    		),
    		2663 => 
    		array (
    			'codigoIbge' => 3136702,
    			'nome' => 'Juiz de Fora',
    			'UF' => 'MG',
    		),
    		2664 => 
    		array (
    			'codigoIbge' => 3136801,
    			'nome' => 'Juramento',
    			'UF' => 'MG',
    		),
    		2665 => 
    		array (
    			'codigoIbge' => 3136900,
    			'nome' => 'Juruaia',
    			'UF' => 'MG',
    		),
    		2666 => 
    		array (
    			'codigoIbge' => 3136959,
    			'nome' => 'Juvenília',
    			'UF' => 'MG',
    		),
    		2667 => 
    		array (
    			'codigoIbge' => 3137007,
    			'nome' => 'Ladainha',
    			'UF' => 'MG',
    		),
    		2668 => 
    		array (
    			'codigoIbge' => 3137106,
    			'nome' => 'Lagamar',
    			'UF' => 'MG',
    		),
    		2669 => 
    		array (
    			'codigoIbge' => 3137205,
    			'nome' => 'Lagoa da Prata',
    			'UF' => 'MG',
    		),
    		2670 => 
    		array (
    			'codigoIbge' => 3137304,
    			'nome' => 'Lagoa dos Patos',
    			'UF' => 'MG',
    		),
    		2671 => 
    		array (
    			'codigoIbge' => 3137403,
    			'nome' => 'Lagoa Dourada',
    			'UF' => 'MG',
    		),
    		2672 => 
    		array (
    			'codigoIbge' => 3137502,
    			'nome' => 'Lagoa Formosa',
    			'UF' => 'MG',
    		),
    		2673 => 
    		array (
    			'codigoIbge' => 3137536,
    			'nome' => 'Lagoa Grande',
    			'UF' => 'MG',
    		),
    		2674 => 
    		array (
    			'codigoIbge' => 3137601,
    			'nome' => 'Lagoa Santa',
    			'UF' => 'MG',
    		),
    		2675 => 
    		array (
    			'codigoIbge' => 3137700,
    			'nome' => 'Lajinha',
    			'UF' => 'MG',
    		),
    		2676 => 
    		array (
    			'codigoIbge' => 3137809,
    			'nome' => 'Lambari',
    			'UF' => 'MG',
    		),
    		2677 => 
    		array (
    			'codigoIbge' => 3137908,
    			'nome' => 'Lamim',
    			'UF' => 'MG',
    		),
    		2678 => 
    		array (
    			'codigoIbge' => 3138005,
    			'nome' => 'Laranjal',
    			'UF' => 'MG',
    		),
    		2679 => 
    		array (
    			'codigoIbge' => 3138104,
    			'nome' => 'Lassance',
    			'UF' => 'MG',
    		),
    		2680 => 
    		array (
    			'codigoIbge' => 3138203,
    			'nome' => 'Lavras',
    			'UF' => 'MG',
    		),
    		2681 => 
    		array (
    			'codigoIbge' => 3138302,
    			'nome' => 'Leandro Ferreira',
    			'UF' => 'MG',
    		),
    		2682 => 
    		array (
    			'codigoIbge' => 3138351,
    			'nome' => 'Leme do Prado',
    			'UF' => 'MG',
    		),
    		2683 => 
    		array (
    			'codigoIbge' => 3138401,
    			'nome' => 'Leopoldina',
    			'UF' => 'MG',
    		),
    		2684 => 
    		array (
    			'codigoIbge' => 3138500,
    			'nome' => 'Liberdade',
    			'UF' => 'MG',
    		),
    		2685 => 
    		array (
    			'codigoIbge' => 3138609,
    			'nome' => 'Lima Duarte',
    			'UF' => 'MG',
    		),
    		2686 => 
    		array (
    			'codigoIbge' => 3138625,
    			'nome' => 'Limeira do Oeste',
    			'UF' => 'MG',
    		),
    		2687 => 
    		array (
    			'codigoIbge' => 3138658,
    			'nome' => 'Lontra',
    			'UF' => 'MG',
    		),
    		2688 => 
    		array (
    			'codigoIbge' => 3138674,
    			'nome' => 'Luisburgo',
    			'UF' => 'MG',
    		),
    		2689 => 
    		array (
    			'codigoIbge' => 3138682,
    			'nome' => 'Luislândia',
    			'UF' => 'MG',
    		),
    		2690 => 
    		array (
    			'codigoIbge' => 3138708,
    			'nome' => 'Luminárias',
    			'UF' => 'MG',
    		),
    		2691 => 
    		array (
    			'codigoIbge' => 3138807,
    			'nome' => 'Luz',
    			'UF' => 'MG',
    		),
    		2692 => 
    		array (
    			'codigoIbge' => 3138906,
    			'nome' => 'Machacalis',
    			'UF' => 'MG',
    		),
    		2693 => 
    		array (
    			'codigoIbge' => 3139003,
    			'nome' => 'Machado',
    			'UF' => 'MG',
    		),
    		2694 => 
    		array (
    			'codigoIbge' => 3139102,
    			'nome' => 'Madre de Deus de Minas',
    			'UF' => 'MG',
    		),
    		2695 => 
    		array (
    			'codigoIbge' => 3139201,
    			'nome' => 'Malacacheta',
    			'UF' => 'MG',
    		),
    		2696 => 
    		array (
    			'codigoIbge' => 3139250,
    			'nome' => 'Mamonas',
    			'UF' => 'MG',
    		),
    		2697 => 
    		array (
    			'codigoIbge' => 3139300,
    			'nome' => 'Manga',
    			'UF' => 'MG',
    		),
    		2698 => 
    		array (
    			'codigoIbge' => 3139409,
    			'nome' => 'Manhuaçu',
    			'UF' => 'MG',
    		),
    		2699 => 
    		array (
    			'codigoIbge' => 3139508,
    			'nome' => 'Manhumirim',
    			'UF' => 'MG',
    		),
    		2700 => 
    		array (
    			'codigoIbge' => 3139607,
    			'nome' => 'Mantena',
    			'UF' => 'MG',
    		),
    		2701 => 
    		array (
    			'codigoIbge' => 3139706,
    			'nome' => 'Maravilhas',
    			'UF' => 'MG',
    		),
    		2702 => 
    		array (
    			'codigoIbge' => 3139805,
    			'nome' => 'Mar de Espanha',
    			'UF' => 'MG',
    		),
    		2703 => 
    		array (
    			'codigoIbge' => 3139904,
    			'nome' => 'Maria da Fé',
    			'UF' => 'MG',
    		),
    		2704 => 
    		array (
    			'codigoIbge' => 3140001,
    			'nome' => 'Mariana',
    			'UF' => 'MG',
    		),
    		2705 => 
    		array (
    			'codigoIbge' => 3140100,
    			'nome' => 'Marilac',
    			'UF' => 'MG',
    		),
    		2706 => 
    		array (
    			'codigoIbge' => 3140159,
    			'nome' => 'Mário Campos',
    			'UF' => 'MG',
    		),
    		2707 => 
    		array (
    			'codigoIbge' => 3140209,
    			'nome' => 'Maripá de Minas',
    			'UF' => 'MG',
    		),
    		2708 => 
    		array (
    			'codigoIbge' => 3140308,
    			'nome' => 'Marliéria',
    			'UF' => 'MG',
    		),
    		2709 => 
    		array (
    			'codigoIbge' => 3140407,
    			'nome' => 'Marmelópolis',
    			'UF' => 'MG',
    		),
    		2710 => 
    		array (
    			'codigoIbge' => 3140506,
    			'nome' => 'Martinho Campos',
    			'UF' => 'MG',
    		),
    		2711 => 
    		array (
    			'codigoIbge' => 3140530,
    			'nome' => 'Martins Soares',
    			'UF' => 'MG',
    		),
    		2712 => 
    		array (
    			'codigoIbge' => 3140555,
    			'nome' => 'Mata Verde',
    			'UF' => 'MG',
    		),
    		2713 => 
    		array (
    			'codigoIbge' => 3140605,
    			'nome' => 'Materlândia',
    			'UF' => 'MG',
    		),
    		2714 => 
    		array (
    			'codigoIbge' => 3140704,
    			'nome' => 'Mateus Leme',
    			'UF' => 'MG',
    		),
    		2715 => 
    		array (
    			'codigoIbge' => 3140803,
    			'nome' => 'Matias Barbosa',
    			'UF' => 'MG',
    		),
    		2716 => 
    		array (
    			'codigoIbge' => 3140852,
    			'nome' => 'Matias Cardoso',
    			'UF' => 'MG',
    		),
    		2717 => 
    		array (
    			'codigoIbge' => 3140902,
    			'nome' => 'Matipó',
    			'UF' => 'MG',
    		),
    		2718 => 
    		array (
    			'codigoIbge' => 3141009,
    			'nome' => 'Mato Verde',
    			'UF' => 'MG',
    		),
    		2719 => 
    		array (
    			'codigoIbge' => 3141108,
    			'nome' => 'Matozinhos',
    			'UF' => 'MG',
    		),
    		2720 => 
    		array (
    			'codigoIbge' => 3141207,
    			'nome' => 'Matutina',
    			'UF' => 'MG',
    		),
    		2721 => 
    		array (
    			'codigoIbge' => 3141306,
    			'nome' => 'Medeiros',
    			'UF' => 'MG',
    		),
    		2722 => 
    		array (
    			'codigoIbge' => 3141405,
    			'nome' => 'Medina',
    			'UF' => 'MG',
    		),
    		2723 => 
    		array (
    			'codigoIbge' => 3141504,
    			'nome' => 'Mendes Pimentel',
    			'UF' => 'MG',
    		),
    		2724 => 
    		array (
    			'codigoIbge' => 3141603,
    			'nome' => 'Mercês',
    			'UF' => 'MG',
    		),
    		2725 => 
    		array (
    			'codigoIbge' => 3141702,
    			'nome' => 'Mesquita',
    			'UF' => 'MG',
    		),
    		2726 => 
    		array (
    			'codigoIbge' => 3141801,
    			'nome' => 'Minas Novas',
    			'UF' => 'MG',
    		),
    		2727 => 
    		array (
    			'codigoIbge' => 3141900,
    			'nome' => 'Minduri',
    			'UF' => 'MG',
    		),
    		2728 => 
    		array (
    			'codigoIbge' => 3142007,
    			'nome' => 'Mirabela',
    			'UF' => 'MG',
    		),
    		2729 => 
    		array (
    			'codigoIbge' => 3142106,
    			'nome' => 'Miradouro',
    			'UF' => 'MG',
    		),
    		2730 => 
    		array (
    			'codigoIbge' => 3142205,
    			'nome' => 'Miraí',
    			'UF' => 'MG',
    		),
    		2731 => 
    		array (
    			'codigoIbge' => 3142254,
    			'nome' => 'Miravânia',
    			'UF' => 'MG',
    		),
    		2732 => 
    		array (
    			'codigoIbge' => 3142304,
    			'nome' => 'Moeda',
    			'UF' => 'MG',
    		),
    		2733 => 
    		array (
    			'codigoIbge' => 3142403,
    			'nome' => 'Moema',
    			'UF' => 'MG',
    		),
    		2734 => 
    		array (
    			'codigoIbge' => 3142502,
    			'nome' => 'Monjolos',
    			'UF' => 'MG',
    		),
    		2735 => 
    		array (
    			'codigoIbge' => 3142601,
    			'nome' => 'Monsenhor Paulo',
    			'UF' => 'MG',
    		),
    		2736 => 
    		array (
    			'codigoIbge' => 3142700,
    			'nome' => 'Montalvânia',
    			'UF' => 'MG',
    		),
    		2737 => 
    		array (
    			'codigoIbge' => 3142809,
    			'nome' => 'Monte Alegre de Minas',
    			'UF' => 'MG',
    		),
    		2738 => 
    		array (
    			'codigoIbge' => 3142908,
    			'nome' => 'Monte Azul',
    			'UF' => 'MG',
    		),
    		2739 => 
    		array (
    			'codigoIbge' => 3143005,
    			'nome' => 'Monte Belo',
    			'UF' => 'MG',
    		),
    		2740 => 
    		array (
    			'codigoIbge' => 3143104,
    			'nome' => 'Monte Carmelo',
    			'UF' => 'MG',
    		),
    		2741 => 
    		array (
    			'codigoIbge' => 3143153,
    			'nome' => 'Monte Formoso',
    			'UF' => 'MG',
    		),
    		2742 => 
    		array (
    			'codigoIbge' => 3143203,
    			'nome' => 'Monte Santo de Minas',
    			'UF' => 'MG',
    		),
    		2743 => 
    		array (
    			'codigoIbge' => 3143302,
    			'nome' => 'Montes Claros',
    			'UF' => 'MG',
    		),
    		2744 => 
    		array (
    			'codigoIbge' => 3143401,
    			'nome' => 'Monte Sião',
    			'UF' => 'MG',
    		),
    		2745 => 
    		array (
    			'codigoIbge' => 3143450,
    			'nome' => 'Montezuma',
    			'UF' => 'MG',
    		),
    		2746 => 
    		array (
    			'codigoIbge' => 3143500,
    			'nome' => 'Morada Nova de Minas',
    			'UF' => 'MG',
    		),
    		2747 => 
    		array (
    			'codigoIbge' => 3143609,
    			'nome' => 'Morro da Garça',
    			'UF' => 'MG',
    		),
    		2748 => 
    		array (
    			'codigoIbge' => 3143708,
    			'nome' => 'Morro do Pilar',
    			'UF' => 'MG',
    		),
    		2749 => 
    		array (
    			'codigoIbge' => 3143807,
    			'nome' => 'Munhoz',
    			'UF' => 'MG',
    		),
    		2750 => 
    		array (
    			'codigoIbge' => 3143906,
    			'nome' => 'Muriaé',
    			'UF' => 'MG',
    		),
    		2751 => 
    		array (
    			'codigoIbge' => 3144003,
    			'nome' => 'Mutum',
    			'UF' => 'MG',
    		),
    		2752 => 
    		array (
    			'codigoIbge' => 3144102,
    			'nome' => 'Muzambinho',
    			'UF' => 'MG',
    		),
    		2753 => 
    		array (
    			'codigoIbge' => 3144201,
    			'nome' => 'Nacip Raydan',
    			'UF' => 'MG',
    		),
    		2754 => 
    		array (
    			'codigoIbge' => 3144300,
    			'nome' => 'Nanuque',
    			'UF' => 'MG',
    		),
    		2755 => 
    		array (
    			'codigoIbge' => 3144359,
    			'nome' => 'Naque',
    			'UF' => 'MG',
    		),
    		2756 => 
    		array (
    			'codigoIbge' => 3144375,
    			'nome' => 'Natalândia',
    			'UF' => 'MG',
    		),
    		2757 => 
    		array (
    			'codigoIbge' => 3144409,
    			'nome' => 'Natércia',
    			'UF' => 'MG',
    		),
    		2758 => 
    		array (
    			'codigoIbge' => 3144508,
    			'nome' => 'Nazareno',
    			'UF' => 'MG',
    		),
    		2759 => 
    		array (
    			'codigoIbge' => 3144607,
    			'nome' => 'Nepomuceno',
    			'UF' => 'MG',
    		),
    		2760 => 
    		array (
    			'codigoIbge' => 3144656,
    			'nome' => 'Ninheira',
    			'UF' => 'MG',
    		),
    		2761 => 
    		array (
    			'codigoIbge' => 3144672,
    			'nome' => 'Nova Belém',
    			'UF' => 'MG',
    		),
    		2762 => 
    		array (
    			'codigoIbge' => 3144706,
    			'nome' => 'Nova Era',
    			'UF' => 'MG',
    		),
    		2763 => 
    		array (
    			'codigoIbge' => 3144805,
    			'nome' => 'Nova Lima',
    			'UF' => 'MG',
    		),
    		2764 => 
    		array (
    			'codigoIbge' => 3144904,
    			'nome' => 'Nova Módica',
    			'UF' => 'MG',
    		),
    		2765 => 
    		array (
    			'codigoIbge' => 3145000,
    			'nome' => 'Nova Ponte',
    			'UF' => 'MG',
    		),
    		2766 => 
    		array (
    			'codigoIbge' => 3145059,
    			'nome' => 'Nova Porteirinha',
    			'UF' => 'MG',
    		),
    		2767 => 
    		array (
    			'codigoIbge' => 3145109,
    			'nome' => 'Nova Resende',
    			'UF' => 'MG',
    		),
    		2768 => 
    		array (
    			'codigoIbge' => 3145208,
    			'nome' => 'Nova Serrana',
    			'UF' => 'MG',
    		),
    		2769 => 
    		array (
    			'codigoIbge' => 3145307,
    			'nome' => 'Novo Cruzeiro',
    			'UF' => 'MG',
    		),
    		2770 => 
    		array (
    			'codigoIbge' => 3145356,
    			'nome' => 'Novo Oriente de Minas',
    			'UF' => 'MG',
    		),
    		2771 => 
    		array (
    			'codigoIbge' => 3145372,
    			'nome' => 'Novorizonte',
    			'UF' => 'MG',
    		),
    		2772 => 
    		array (
    			'codigoIbge' => 3145406,
    			'nome' => 'Olaria',
    			'UF' => 'MG',
    		),
    		2773 => 
    		array (
    			'codigoIbge' => 3145455,
    			'nome' => 'Olhos-d\'Água',
    			'UF' => 'MG',
    		),
    		2774 => 
    		array (
    			'codigoIbge' => 3145505,
    			'nome' => 'Olímpio Noronha',
    			'UF' => 'MG',
    		),
    		2775 => 
    		array (
    			'codigoIbge' => 3145604,
    			'nome' => 'Oliveira',
    			'UF' => 'MG',
    		),
    		2776 => 
    		array (
    			'codigoIbge' => 3145703,
    			'nome' => 'Oliveira Fortes',
    			'UF' => 'MG',
    		),
    		2777 => 
    		array (
    			'codigoIbge' => 3145802,
    			'nome' => 'Onça de Pitangui',
    			'UF' => 'MG',
    		),
    		2778 => 
    		array (
    			'codigoIbge' => 3145851,
    			'nome' => 'Oratórios',
    			'UF' => 'MG',
    		),
    		2779 => 
    		array (
    			'codigoIbge' => 3145877,
    			'nome' => 'Orizânia',
    			'UF' => 'MG',
    		),
    		2780 => 
    		array (
    			'codigoIbge' => 3145901,
    			'nome' => 'Ouro Branco',
    			'UF' => 'MG',
    		),
    		2781 => 
    		array (
    			'codigoIbge' => 3146008,
    			'nome' => 'Ouro Fino',
    			'UF' => 'MG',
    		),
    		2782 => 
    		array (
    			'codigoIbge' => 3146107,
    			'nome' => 'Ouro Preto',
    			'UF' => 'MG',
    		),
    		2783 => 
    		array (
    			'codigoIbge' => 3146206,
    			'nome' => 'Ouro Verde de Minas',
    			'UF' => 'MG',
    		),
    		2784 => 
    		array (
    			'codigoIbge' => 3146255,
    			'nome' => 'Padre Carvalho',
    			'UF' => 'MG',
    		),
    		2785 => 
    		array (
    			'codigoIbge' => 3146305,
    			'nome' => 'Padre Paraíso',
    			'UF' => 'MG',
    		),
    		2786 => 
    		array (
    			'codigoIbge' => 3146404,
    			'nome' => 'Paineiras',
    			'UF' => 'MG',
    		),
    		2787 => 
    		array (
    			'codigoIbge' => 3146503,
    			'nome' => 'Pains',
    			'UF' => 'MG',
    		),
    		2788 => 
    		array (
    			'codigoIbge' => 3146552,
    			'nome' => 'Pai Pedro',
    			'UF' => 'MG',
    		),
    		2789 => 
    		array (
    			'codigoIbge' => 3146602,
    			'nome' => 'Paiva',
    			'UF' => 'MG',
    		),
    		2790 => 
    		array (
    			'codigoIbge' => 3146701,
    			'nome' => 'Palma',
    			'UF' => 'MG',
    		),
    		2791 => 
    		array (
    			'codigoIbge' => 3146750,
    			'nome' => 'Palmópolis',
    			'UF' => 'MG',
    		),
    		2792 => 
    		array (
    			'codigoIbge' => 3146909,
    			'nome' => 'Papagaios',
    			'UF' => 'MG',
    		),
    		2793 => 
    		array (
    			'codigoIbge' => 3147006,
    			'nome' => 'Paracatu',
    			'UF' => 'MG',
    		),
    		2794 => 
    		array (
    			'codigoIbge' => 3147105,
    			'nome' => 'Pará de Minas',
    			'UF' => 'MG',
    		),
    		2795 => 
    		array (
    			'codigoIbge' => 3147204,
    			'nome' => 'Paraguaçu',
    			'UF' => 'MG',
    		),
    		2796 => 
    		array (
    			'codigoIbge' => 3147303,
    			'nome' => 'Paraisópolis',
    			'UF' => 'MG',
    		),
    		2797 => 
    		array (
    			'codigoIbge' => 3147402,
    			'nome' => 'Paraopeba',
    			'UF' => 'MG',
    		),
    		2798 => 
    		array (
    			'codigoIbge' => 3147501,
    			'nome' => 'Passabém',
    			'UF' => 'MG',
    		),
    		2799 => 
    		array (
    			'codigoIbge' => 3147600,
    			'nome' => 'Passa Quatro',
    			'UF' => 'MG',
    		),
    		2800 => 
    		array (
    			'codigoIbge' => 3147709,
    			'nome' => 'Passa Tempo',
    			'UF' => 'MG',
    		),
    		2801 => 
    		array (
    			'codigoIbge' => 3147808,
    			'nome' => 'Passa Vinte',
    			'UF' => 'MG',
    		),
    		2802 => 
    		array (
    			'codigoIbge' => 3147907,
    			'nome' => 'Passos',
    			'UF' => 'MG',
    		),
    		2803 => 
    		array (
    			'codigoIbge' => 3147956,
    			'nome' => 'Patis',
    			'UF' => 'MG',
    		),
    		2804 => 
    		array (
    			'codigoIbge' => 3148004,
    			'nome' => 'Patos de Minas',
    			'UF' => 'MG',
    		),
    		2805 => 
    		array (
    			'codigoIbge' => 3148103,
    			'nome' => 'Patrocínio',
    			'UF' => 'MG',
    		),
    		2806 => 
    		array (
    			'codigoIbge' => 3148202,
    			'nome' => 'Patrocínio do Muriaé',
    			'UF' => 'MG',
    		),
    		2807 => 
    		array (
    			'codigoIbge' => 3148301,
    			'nome' => 'Paula Cândido',
    			'UF' => 'MG',
    		),
    		2808 => 
    		array (
    			'codigoIbge' => 3148400,
    			'nome' => 'Paulistas',
    			'UF' => 'MG',
    		),
    		2809 => 
    		array (
    			'codigoIbge' => 3148509,
    			'nome' => 'Pavão',
    			'UF' => 'MG',
    		),
    		2810 => 
    		array (
    			'codigoIbge' => 3148608,
    			'nome' => 'Peçanha',
    			'UF' => 'MG',
    		),
    		2811 => 
    		array (
    			'codigoIbge' => 3148707,
    			'nome' => 'Pedra Azul',
    			'UF' => 'MG',
    		),
    		2812 => 
    		array (
    			'codigoIbge' => 3148756,
    			'nome' => 'Pedra Bonita',
    			'UF' => 'MG',
    		),
    		2813 => 
    		array (
    			'codigoIbge' => 3148806,
    			'nome' => 'Pedra do Anta',
    			'UF' => 'MG',
    		),
    		2814 => 
    		array (
    			'codigoIbge' => 3148905,
    			'nome' => 'Pedra do Indaiá',
    			'UF' => 'MG',
    		),
    		2815 => 
    		array (
    			'codigoIbge' => 3149002,
    			'nome' => 'Pedra Dourada',
    			'UF' => 'MG',
    		),
    		2816 => 
    		array (
    			'codigoIbge' => 3149101,
    			'nome' => 'Pedralva',
    			'UF' => 'MG',
    		),
    		2817 => 
    		array (
    			'codigoIbge' => 3149150,
    			'nome' => 'Pedras de Maria da Cruz',
    			'UF' => 'MG',
    		),
    		2818 => 
    		array (
    			'codigoIbge' => 3149200,
    			'nome' => 'Pedrinópolis',
    			'UF' => 'MG',
    		),
    		2819 => 
    		array (
    			'codigoIbge' => 3149309,
    			'nome' => 'Pedro Leopoldo',
    			'UF' => 'MG',
    		),
    		2820 => 
    		array (
    			'codigoIbge' => 3149408,
    			'nome' => 'Pedro Teixeira',
    			'UF' => 'MG',
    		),
    		2821 => 
    		array (
    			'codigoIbge' => 3149507,
    			'nome' => 'Pequeri',
    			'UF' => 'MG',
    		),
    		2822 => 
    		array (
    			'codigoIbge' => 3149606,
    			'nome' => 'Pequi',
    			'UF' => 'MG',
    		),
    		2823 => 
    		array (
    			'codigoIbge' => 3149705,
    			'nome' => 'Perdigão',
    			'UF' => 'MG',
    		),
    		2824 => 
    		array (
    			'codigoIbge' => 3149804,
    			'nome' => 'Perdizes',
    			'UF' => 'MG',
    		),
    		2825 => 
    		array (
    			'codigoIbge' => 3149903,
    			'nome' => 'Perdões',
    			'UF' => 'MG',
    		),
    		2826 => 
    		array (
    			'codigoIbge' => 3149952,
    			'nome' => 'Periquito',
    			'UF' => 'MG',
    		),
    		2827 => 
    		array (
    			'codigoIbge' => 3150000,
    			'nome' => 'Pescador',
    			'UF' => 'MG',
    		),
    		2828 => 
    		array (
    			'codigoIbge' => 3150109,
    			'nome' => 'Piau',
    			'UF' => 'MG',
    		),
    		2829 => 
    		array (
    			'codigoIbge' => 3150158,
    			'nome' => 'Piedade de Caratinga',
    			'UF' => 'MG',
    		),
    		2830 => 
    		array (
    			'codigoIbge' => 3150208,
    			'nome' => 'Piedade de Ponte Nova',
    			'UF' => 'MG',
    		),
    		2831 => 
    		array (
    			'codigoIbge' => 3150307,
    			'nome' => 'Piedade do Rio Grande',
    			'UF' => 'MG',
    		),
    		2832 => 
    		array (
    			'codigoIbge' => 3150406,
    			'nome' => 'Piedade dos Gerais',
    			'UF' => 'MG',
    		),
    		2833 => 
    		array (
    			'codigoIbge' => 3150505,
    			'nome' => 'Pimenta',
    			'UF' => 'MG',
    		),
    		2834 => 
    		array (
    			'codigoIbge' => 3150539,
    			'nome' => 'Pingo d\'Água',
    			'UF' => 'MG',
    		),
    		2835 => 
    		array (
    			'codigoIbge' => 3150570,
    			'nome' => 'Pintópolis',
    			'UF' => 'MG',
    		),
    		2836 => 
    		array (
    			'codigoIbge' => 3150604,
    			'nome' => 'Piracema',
    			'UF' => 'MG',
    		),
    		2837 => 
    		array (
    			'codigoIbge' => 3150703,
    			'nome' => 'Pirajuba',
    			'UF' => 'MG',
    		),
    		2838 => 
    		array (
    			'codigoIbge' => 3150802,
    			'nome' => 'Piranga',
    			'UF' => 'MG',
    		),
    		2839 => 
    		array (
    			'codigoIbge' => 3150901,
    			'nome' => 'Piranguçu',
    			'UF' => 'MG',
    		),
    		2840 => 
    		array (
    			'codigoIbge' => 3151008,
    			'nome' => 'Piranguinho',
    			'UF' => 'MG',
    		),
    		2841 => 
    		array (
    			'codigoIbge' => 3151107,
    			'nome' => 'Pirapetinga',
    			'UF' => 'MG',
    		),
    		2842 => 
    		array (
    			'codigoIbge' => 3151206,
    			'nome' => 'Pirapora',
    			'UF' => 'MG',
    		),
    		2843 => 
    		array (
    			'codigoIbge' => 3151305,
    			'nome' => 'Piraúba',
    			'UF' => 'MG',
    		),
    		2844 => 
    		array (
    			'codigoIbge' => 3151404,
    			'nome' => 'Pitangui',
    			'UF' => 'MG',
    		),
    		2845 => 
    		array (
    			'codigoIbge' => 3151503,
    			'nome' => 'Piumhi',
    			'UF' => 'MG',
    		),
    		2846 => 
    		array (
    			'codigoIbge' => 3151602,
    			'nome' => 'Planura',
    			'UF' => 'MG',
    		),
    		2847 => 
    		array (
    			'codigoIbge' => 3151701,
    			'nome' => 'Poço Fundo',
    			'UF' => 'MG',
    		),
    		2848 => 
    		array (
    			'codigoIbge' => 3151800,
    			'nome' => 'Poços de Caldas',
    			'UF' => 'MG',
    		),
    		2849 => 
    		array (
    			'codigoIbge' => 3151909,
    			'nome' => 'Pocrane',
    			'UF' => 'MG',
    		),
    		2850 => 
    		array (
    			'codigoIbge' => 3152006,
    			'nome' => 'Pompéu',
    			'UF' => 'MG',
    		),
    		2851 => 
    		array (
    			'codigoIbge' => 3152105,
    			'nome' => 'Ponte Nova',
    			'UF' => 'MG',
    		),
    		2852 => 
    		array (
    			'codigoIbge' => 3152131,
    			'nome' => 'Ponto Chique',
    			'UF' => 'MG',
    		),
    		2853 => 
    		array (
    			'codigoIbge' => 3152170,
    			'nome' => 'Ponto dos Volantes',
    			'UF' => 'MG',
    		),
    		2854 => 
    		array (
    			'codigoIbge' => 3152204,
    			'nome' => 'Porteirinha',
    			'UF' => 'MG',
    		),
    		2855 => 
    		array (
    			'codigoIbge' => 3152303,
    			'nome' => 'Porto Firme',
    			'UF' => 'MG',
    		),
    		2856 => 
    		array (
    			'codigoIbge' => 3152402,
    			'nome' => 'Poté',
    			'UF' => 'MG',
    		),
    		2857 => 
    		array (
    			'codigoIbge' => 3152501,
    			'nome' => 'Pouso Alegre',
    			'UF' => 'MG',
    		),
    		2858 => 
    		array (
    			'codigoIbge' => 3152600,
    			'nome' => 'Pouso Alto',
    			'UF' => 'MG',
    		),
    		2859 => 
    		array (
    			'codigoIbge' => 3152709,
    			'nome' => 'Prados',
    			'UF' => 'MG',
    		),
    		2860 => 
    		array (
    			'codigoIbge' => 3152808,
    			'nome' => 'Prata',
    			'UF' => 'MG',
    		),
    		2861 => 
    		array (
    			'codigoIbge' => 3152907,
    			'nome' => 'Pratápolis',
    			'UF' => 'MG',
    		),
    		2862 => 
    		array (
    			'codigoIbge' => 3153004,
    			'nome' => 'Pratinha',
    			'UF' => 'MG',
    		),
    		2863 => 
    		array (
    			'codigoIbge' => 3153103,
    			'nome' => 'Presidente Bernardes',
    			'UF' => 'MG',
    		),
    		2864 => 
    		array (
    			'codigoIbge' => 3153202,
    			'nome' => 'Presidente Juscelino',
    			'UF' => 'MG',
    		),
    		2865 => 
    		array (
    			'codigoIbge' => 3153301,
    			'nome' => 'Presidente Kubitschek',
    			'UF' => 'MG',
    		),
    		2866 => 
    		array (
    			'codigoIbge' => 3153400,
    			'nome' => 'Presidente Olegário',
    			'UF' => 'MG',
    		),
    		2867 => 
    		array (
    			'codigoIbge' => 3153509,
    			'nome' => 'Alto Jequitibá',
    			'UF' => 'MG',
    		),
    		2868 => 
    		array (
    			'codigoIbge' => 3153608,
    			'nome' => 'Prudente de Morais',
    			'UF' => 'MG',
    		),
    		2869 => 
    		array (
    			'codigoIbge' => 3153707,
    			'nome' => 'Quartel Geral',
    			'UF' => 'MG',
    		),
    		2870 => 
    		array (
    			'codigoIbge' => 3153806,
    			'nome' => 'Queluzito',
    			'UF' => 'MG',
    		),
    		2871 => 
    		array (
    			'codigoIbge' => 3153905,
    			'nome' => 'Raposos',
    			'UF' => 'MG',
    		),
    		2872 => 
    		array (
    			'codigoIbge' => 3154002,
    			'nome' => 'Raul Soares',
    			'UF' => 'MG',
    		),
    		2873 => 
    		array (
    			'codigoIbge' => 3154101,
    			'nome' => 'Recreio',
    			'UF' => 'MG',
    		),
    		2874 => 
    		array (
    			'codigoIbge' => 3154150,
    			'nome' => 'Reduto',
    			'UF' => 'MG',
    		),
    		2875 => 
    		array (
    			'codigoIbge' => 3154200,
    			'nome' => 'Resende Costa',
    			'UF' => 'MG',
    		),
    		2876 => 
    		array (
    			'codigoIbge' => 3154309,
    			'nome' => 'Resplendor',
    			'UF' => 'MG',
    		),
    		2877 => 
    		array (
    			'codigoIbge' => 3154408,
    			'nome' => 'Ressaquinha',
    			'UF' => 'MG',
    		),
    		2878 => 
    		array (
    			'codigoIbge' => 3154457,
    			'nome' => 'Riachinho',
    			'UF' => 'MG',
    		),
    		2879 => 
    		array (
    			'codigoIbge' => 3154507,
    			'nome' => 'Riacho dos Machados',
    			'UF' => 'MG',
    		),
    		2880 => 
    		array (
    			'codigoIbge' => 3154606,
    			'nome' => 'Ribeirão das Neves',
    			'UF' => 'MG',
    		),
    		2881 => 
    		array (
    			'codigoIbge' => 3154705,
    			'nome' => 'Ribeirão Vermelho',
    			'UF' => 'MG',
    		),
    		2882 => 
    		array (
    			'codigoIbge' => 3154804,
    			'nome' => 'Rio Acima',
    			'UF' => 'MG',
    		),
    		2883 => 
    		array (
    			'codigoIbge' => 3154903,
    			'nome' => 'Rio Casca',
    			'UF' => 'MG',
    		),
    		2884 => 
    		array (
    			'codigoIbge' => 3155009,
    			'nome' => 'Rio Doce',
    			'UF' => 'MG',
    		),
    		2885 => 
    		array (
    			'codigoIbge' => 3155108,
    			'nome' => 'Rio do Prado',
    			'UF' => 'MG',
    		),
    		2886 => 
    		array (
    			'codigoIbge' => 3155207,
    			'nome' => 'Rio Espera',
    			'UF' => 'MG',
    		),
    		2887 => 
    		array (
    			'codigoIbge' => 3155306,
    			'nome' => 'Rio Manso',
    			'UF' => 'MG',
    		),
    		2888 => 
    		array (
    			'codigoIbge' => 3155405,
    			'nome' => 'Rio Novo',
    			'UF' => 'MG',
    		),
    		2889 => 
    		array (
    			'codigoIbge' => 3155504,
    			'nome' => 'Rio Paranaíba',
    			'UF' => 'MG',
    		),
    		2890 => 
    		array (
    			'codigoIbge' => 3155603,
    			'nome' => 'Rio Pardo de Minas',
    			'UF' => 'MG',
    		),
    		2891 => 
    		array (
    			'codigoIbge' => 3155702,
    			'nome' => 'Rio Piracicaba',
    			'UF' => 'MG',
    		),
    		2892 => 
    		array (
    			'codigoIbge' => 3155801,
    			'nome' => 'Rio Pomba',
    			'UF' => 'MG',
    		),
    		2893 => 
    		array (
    			'codigoIbge' => 3155900,
    			'nome' => 'Rio Preto',
    			'UF' => 'MG',
    		),
    		2894 => 
    		array (
    			'codigoIbge' => 3156007,
    			'nome' => 'Rio Vermelho',
    			'UF' => 'MG',
    		),
    		2895 => 
    		array (
    			'codigoIbge' => 3156106,
    			'nome' => 'Ritápolis',
    			'UF' => 'MG',
    		),
    		2896 => 
    		array (
    			'codigoIbge' => 3156205,
    			'nome' => 'Rochedo de Minas',
    			'UF' => 'MG',
    		),
    		2897 => 
    		array (
    			'codigoIbge' => 3156304,
    			'nome' => 'Rodeiro',
    			'UF' => 'MG',
    		),
    		2898 => 
    		array (
    			'codigoIbge' => 3156403,
    			'nome' => 'Romaria',
    			'UF' => 'MG',
    		),
    		2899 => 
    		array (
    			'codigoIbge' => 3156452,
    			'nome' => 'Rosário da Limeira',
    			'UF' => 'MG',
    		),
    		2900 => 
    		array (
    			'codigoIbge' => 3156502,
    			'nome' => 'Rubelita',
    			'UF' => 'MG',
    		),
    		2901 => 
    		array (
    			'codigoIbge' => 3156601,
    			'nome' => 'Rubim',
    			'UF' => 'MG',
    		),
    		2902 => 
    		array (
    			'codigoIbge' => 3156700,
    			'nome' => 'Sabará',
    			'UF' => 'MG',
    		),
    		2903 => 
    		array (
    			'codigoIbge' => 3156809,
    			'nome' => 'Sabinópolis',
    			'UF' => 'MG',
    		),
    		2904 => 
    		array (
    			'codigoIbge' => 3156908,
    			'nome' => 'Sacramento',
    			'UF' => 'MG',
    		),
    		2905 => 
    		array (
    			'codigoIbge' => 3157005,
    			'nome' => 'Salinas',
    			'UF' => 'MG',
    		),
    		2906 => 
    		array (
    			'codigoIbge' => 3157104,
    			'nome' => 'Salto da Divisa',
    			'UF' => 'MG',
    		),
    		2907 => 
    		array (
    			'codigoIbge' => 3157203,
    			'nome' => 'Santa Bárbara',
    			'UF' => 'MG',
    		),
    		2908 => 
    		array (
    			'codigoIbge' => 3157252,
    			'nome' => 'Santa Bárbara do Leste',
    			'UF' => 'MG',
    		),
    		2909 => 
    		array (
    			'codigoIbge' => 3157278,
    			'nome' => 'Santa Bárbara do Monte Verde',
    			'UF' => 'MG',
    		),
    		2910 => 
    		array (
    			'codigoIbge' => 3157302,
    			'nome' => 'Santa Bárbara do Tugúrio',
    			'UF' => 'MG',
    		),
    		2911 => 
    		array (
    			'codigoIbge' => 3157336,
    			'nome' => 'Santa Cruz de Minas',
    			'UF' => 'MG',
    		),
    		2912 => 
    		array (
    			'codigoIbge' => 3157377,
    			'nome' => 'Santa Cruz de Salinas',
    			'UF' => 'MG',
    		),
    		2913 => 
    		array (
    			'codigoIbge' => 3157401,
    			'nome' => 'Santa Cruz do Escalvado',
    			'UF' => 'MG',
    		),
    		2914 => 
    		array (
    			'codigoIbge' => 3157500,
    			'nome' => 'Santa Efigênia de Minas',
    			'UF' => 'MG',
    		),
    		2915 => 
    		array (
    			'codigoIbge' => 3157609,
    			'nome' => 'Santa Fé de Minas',
    			'UF' => 'MG',
    		),
    		2916 => 
    		array (
    			'codigoIbge' => 3157658,
    			'nome' => 'Santa Helena de Minas',
    			'UF' => 'MG',
    		),
    		2917 => 
    		array (
    			'codigoIbge' => 3157708,
    			'nome' => 'Santa Juliana',
    			'UF' => 'MG',
    		),
    		2918 => 
    		array (
    			'codigoIbge' => 3157807,
    			'nome' => 'Santa Luzia',
    			'UF' => 'MG',
    		),
    		2919 => 
    		array (
    			'codigoIbge' => 3157906,
    			'nome' => 'Santa Margarida',
    			'UF' => 'MG',
    		),
    		2920 => 
    		array (
    			'codigoIbge' => 3158003,
    			'nome' => 'Santa Maria de Itabira',
    			'UF' => 'MG',
    		),
    		2921 => 
    		array (
    			'codigoIbge' => 3158102,
    			'nome' => 'Santa Maria do Salto',
    			'UF' => 'MG',
    		),
    		2922 => 
    		array (
    			'codigoIbge' => 3158201,
    			'nome' => 'Santa Maria do Suaçuí',
    			'UF' => 'MG',
    		),
    		2923 => 
    		array (
    			'codigoIbge' => 3158300,
    			'nome' => 'Santana da Vargem',
    			'UF' => 'MG',
    		),
    		2924 => 
    		array (
    			'codigoIbge' => 3158409,
    			'nome' => 'Santana de Cataguases',
    			'UF' => 'MG',
    		),
    		2925 => 
    		array (
    			'codigoIbge' => 3158508,
    			'nome' => 'Santana de Pirapama',
    			'UF' => 'MG',
    		),
    		2926 => 
    		array (
    			'codigoIbge' => 3158607,
    			'nome' => 'Santana do Deserto',
    			'UF' => 'MG',
    		),
    		2927 => 
    		array (
    			'codigoIbge' => 3158706,
    			'nome' => 'Santana do Garambéu',
    			'UF' => 'MG',
    		),
    		2928 => 
    		array (
    			'codigoIbge' => 3158805,
    			'nome' => 'Santana do Jacaré',
    			'UF' => 'MG',
    		),
    		2929 => 
    		array (
    			'codigoIbge' => 3158904,
    			'nome' => 'Santana do Manhuaçu',
    			'UF' => 'MG',
    		),
    		2930 => 
    		array (
    			'codigoIbge' => 3158953,
    			'nome' => 'Santana do Paraíso',
    			'UF' => 'MG',
    		),
    		2931 => 
    		array (
    			'codigoIbge' => 3159001,
    			'nome' => 'Santana do Riacho',
    			'UF' => 'MG',
    		),
    		2932 => 
    		array (
    			'codigoIbge' => 3159100,
    			'nome' => 'Santana dos Montes',
    			'UF' => 'MG',
    		),
    		2933 => 
    		array (
    			'codigoIbge' => 3159209,
    			'nome' => 'Santa Rita de Caldas',
    			'UF' => 'MG',
    		),
    		2934 => 
    		array (
    			'codigoIbge' => 3159308,
    			'nome' => 'Santa Rita de Jacutinga',
    			'UF' => 'MG',
    		),
    		2935 => 
    		array (
    			'codigoIbge' => 3159357,
    			'nome' => 'Santa Rita de Minas',
    			'UF' => 'MG',
    		),
    		2936 => 
    		array (
    			'codigoIbge' => 3159407,
    			'nome' => 'Santa Rita de Ibitipoca',
    			'UF' => 'MG',
    		),
    		2937 => 
    		array (
    			'codigoIbge' => 3159506,
    			'nome' => 'Santa Rita do Itueto',
    			'UF' => 'MG',
    		),
    		2938 => 
    		array (
    			'codigoIbge' => 3159605,
    			'nome' => 'Santa Rita do Sapucaí',
    			'UF' => 'MG',
    		),
    		2939 => 
    		array (
    			'codigoIbge' => 3159704,
    			'nome' => 'Santa Rosa da Serra',
    			'UF' => 'MG',
    		),
    		2940 => 
    		array (
    			'codigoIbge' => 3159803,
    			'nome' => 'Santa Vitória',
    			'UF' => 'MG',
    		),
    		2941 => 
    		array (
    			'codigoIbge' => 3159902,
    			'nome' => 'Santo Antônio do Amparo',
    			'UF' => 'MG',
    		),
    		2942 => 
    		array (
    			'codigoIbge' => 3160009,
    			'nome' => 'Santo Antônio do Aventureiro',
    			'UF' => 'MG',
    		),
    		2943 => 
    		array (
    			'codigoIbge' => 3160108,
    			'nome' => 'Santo Antônio do Grama',
    			'UF' => 'MG',
    		),
    		2944 => 
    		array (
    			'codigoIbge' => 3160207,
    			'nome' => 'Santo Antônio do Itambé',
    			'UF' => 'MG',
    		),
    		2945 => 
    		array (
    			'codigoIbge' => 3160306,
    			'nome' => 'Santo Antônio do Jacinto',
    			'UF' => 'MG',
    		),
    		2946 => 
    		array (
    			'codigoIbge' => 3160405,
    			'nome' => 'Santo Antônio do Monte',
    			'UF' => 'MG',
    		),
    		2947 => 
    		array (
    			'codigoIbge' => 3160454,
    			'nome' => 'Santo Antônio do Retiro',
    			'UF' => 'MG',
    		),
    		2948 => 
    		array (
    			'codigoIbge' => 3160504,
    			'nome' => 'Santo Antônio do Rio Abaixo',
    			'UF' => 'MG',
    		),
    		2949 => 
    		array (
    			'codigoIbge' => 3160603,
    			'nome' => 'Santo Hipólito',
    			'UF' => 'MG',
    		),
    		2950 => 
    		array (
    			'codigoIbge' => 3160702,
    			'nome' => 'Santos Dumont',
    			'UF' => 'MG',
    		),
    		2951 => 
    		array (
    			'codigoIbge' => 3160801,
    			'nome' => 'São Bento Abade',
    			'UF' => 'MG',
    		),
    		2952 => 
    		array (
    			'codigoIbge' => 3160900,
    			'nome' => 'São Brás do Suaçuí',
    			'UF' => 'MG',
    		),
    		2953 => 
    		array (
    			'codigoIbge' => 3160959,
    			'nome' => 'São Domingos das Dores',
    			'UF' => 'MG',
    		),
    		2954 => 
    		array (
    			'codigoIbge' => 3161007,
    			'nome' => 'São Domingos do Prata',
    			'UF' => 'MG',
    		),
    		2955 => 
    		array (
    			'codigoIbge' => 3161056,
    			'nome' => 'São Félix de Minas',
    			'UF' => 'MG',
    		),
    		2956 => 
    		array (
    			'codigoIbge' => 3161106,
    			'nome' => 'São Francisco',
    			'UF' => 'MG',
    		),
    		2957 => 
    		array (
    			'codigoIbge' => 3161205,
    			'nome' => 'São Francisco de Paula',
    			'UF' => 'MG',
    		),
    		2958 => 
    		array (
    			'codigoIbge' => 3161304,
    			'nome' => 'São Francisco de Sales',
    			'UF' => 'MG',
    		),
    		2959 => 
    		array (
    			'codigoIbge' => 3161403,
    			'nome' => 'São Francisco do Glória',
    			'UF' => 'MG',
    		),
    		2960 => 
    		array (
    			'codigoIbge' => 3161502,
    			'nome' => 'São Geraldo',
    			'UF' => 'MG',
    		),
    		2961 => 
    		array (
    			'codigoIbge' => 3161601,
    			'nome' => 'São Geraldo da Piedade',
    			'UF' => 'MG',
    		),
    		2962 => 
    		array (
    			'codigoIbge' => 3161650,
    			'nome' => 'São Geraldo do Baixio',
    			'UF' => 'MG',
    		),
    		2963 => 
    		array (
    			'codigoIbge' => 3161700,
    			'nome' => 'São Gonçalo do Abaeté',
    			'UF' => 'MG',
    		),
    		2964 => 
    		array (
    			'codigoIbge' => 3161809,
    			'nome' => 'São Gonçalo do Pará',
    			'UF' => 'MG',
    		),
    		2965 => 
    		array (
    			'codigoIbge' => 3161908,
    			'nome' => 'São Gonçalo do Rio Abaixo',
    			'UF' => 'MG',
    		),
    		2966 => 
    		array (
    			'codigoIbge' => 3162005,
    			'nome' => 'São Gonçalo do Sapucaí',
    			'UF' => 'MG',
    		),
    		2967 => 
    		array (
    			'codigoIbge' => 3162104,
    			'nome' => 'São Gotardo',
    			'UF' => 'MG',
    		),
    		2968 => 
    		array (
    			'codigoIbge' => 3162203,
    			'nome' => 'São João Batista do Glória',
    			'UF' => 'MG',
    		),
    		2969 => 
    		array (
    			'codigoIbge' => 3162252,
    			'nome' => 'São João da Lagoa',
    			'UF' => 'MG',
    		),
    		2970 => 
    		array (
    			'codigoIbge' => 3162302,
    			'nome' => 'São João da Mata',
    			'UF' => 'MG',
    		),
    		2971 => 
    		array (
    			'codigoIbge' => 3162401,
    			'nome' => 'São João da Ponte',
    			'UF' => 'MG',
    		),
    		2972 => 
    		array (
    			'codigoIbge' => 3162450,
    			'nome' => 'São João das Missões',
    			'UF' => 'MG',
    		),
    		2973 => 
    		array (
    			'codigoIbge' => 3162500,
    			'nome' => 'São João del Rei',
    			'UF' => 'MG',
    		),
    		2974 => 
    		array (
    			'codigoIbge' => 3162559,
    			'nome' => 'São João do Manhuaçu',
    			'UF' => 'MG',
    		),
    		2975 => 
    		array (
    			'codigoIbge' => 3162575,
    			'nome' => 'São João do Manteninha',
    			'UF' => 'MG',
    		),
    		2976 => 
    		array (
    			'codigoIbge' => 3162609,
    			'nome' => 'São João do Oriente',
    			'UF' => 'MG',
    		),
    		2977 => 
    		array (
    			'codigoIbge' => 3162658,
    			'nome' => 'São João do Pacuí',
    			'UF' => 'MG',
    		),
    		2978 => 
    		array (
    			'codigoIbge' => 3162708,
    			'nome' => 'São João do Paraíso',
    			'UF' => 'MG',
    		),
    		2979 => 
    		array (
    			'codigoIbge' => 3162807,
    			'nome' => 'São João Evangelista',
    			'UF' => 'MG',
    		),
    		2980 => 
    		array (
    			'codigoIbge' => 3162906,
    			'nome' => 'São João Nepomuceno',
    			'UF' => 'MG',
    		),
    		2981 => 
    		array (
    			'codigoIbge' => 3162922,
    			'nome' => 'São Joaquim de Bicas',
    			'UF' => 'MG',
    		),
    		2982 => 
    		array (
    			'codigoIbge' => 3162948,
    			'nome' => 'São José da Barra',
    			'UF' => 'MG',
    		),
    		2983 => 
    		array (
    			'codigoIbge' => 3162955,
    			'nome' => 'São José da Lapa',
    			'UF' => 'MG',
    		),
    		2984 => 
    		array (
    			'codigoIbge' => 3163003,
    			'nome' => 'São José da Safira',
    			'UF' => 'MG',
    		),
    		2985 => 
    		array (
    			'codigoIbge' => 3163102,
    			'nome' => 'São José da Varginha',
    			'UF' => 'MG',
    		),
    		2986 => 
    		array (
    			'codigoIbge' => 3163201,
    			'nome' => 'São José do Alegre',
    			'UF' => 'MG',
    		),
    		2987 => 
    		array (
    			'codigoIbge' => 3163300,
    			'nome' => 'São José do Divino',
    			'UF' => 'MG',
    		),
    		2988 => 
    		array (
    			'codigoIbge' => 3163409,
    			'nome' => 'São José do Goiabal',
    			'UF' => 'MG',
    		),
    		2989 => 
    		array (
    			'codigoIbge' => 3163508,
    			'nome' => 'São José do Jacuri',
    			'UF' => 'MG',
    		),
    		2990 => 
    		array (
    			'codigoIbge' => 3163607,
    			'nome' => 'São José do Mantimento',
    			'UF' => 'MG',
    		),
    		2991 => 
    		array (
    			'codigoIbge' => 3163706,
    			'nome' => 'São Lourenço',
    			'UF' => 'MG',
    		),
    		2992 => 
    		array (
    			'codigoIbge' => 3163805,
    			'nome' => 'São Miguel do Anta',
    			'UF' => 'MG',
    		),
    		2993 => 
    		array (
    			'codigoIbge' => 3163904,
    			'nome' => 'São Pedro da União',
    			'UF' => 'MG',
    		),
    		2994 => 
    		array (
    			'codigoIbge' => 3164001,
    			'nome' => 'São Pedro dos Ferros',
    			'UF' => 'MG',
    		),
    		2995 => 
    		array (
    			'codigoIbge' => 3164100,
    			'nome' => 'São Pedro do Suaçuí',
    			'UF' => 'MG',
    		),
    		2996 => 
    		array (
    			'codigoIbge' => 3164209,
    			'nome' => 'São Romão',
    			'UF' => 'MG',
    		),
    		2997 => 
    		array (
    			'codigoIbge' => 3164308,
    			'nome' => 'São Roque de Minas',
    			'UF' => 'MG',
    		),
    		2998 => 
    		array (
    			'codigoIbge' => 3164407,
    			'nome' => 'São Sebastião da Bela Vista',
    			'UF' => 'MG',
    		),
    		2999 => 
    		array (
    			'codigoIbge' => 3164431,
    			'nome' => 'São Sebastião da Vargem Alegre',
    			'UF' => 'MG',
    		),
    		3000 => 
    		array (
    			'codigoIbge' => 3164472,
    			'nome' => 'São Sebastião do Anta',
    			'UF' => 'MG',
    		),
    		3001 => 
    		array (
    			'codigoIbge' => 3164506,
    			'nome' => 'São Sebastião do Maranhão',
    			'UF' => 'MG',
    		),
    		3002 => 
    		array (
    			'codigoIbge' => 3164605,
    			'nome' => 'São Sebastião do Oeste',
    			'UF' => 'MG',
    		),
    		3003 => 
    		array (
    			'codigoIbge' => 3164704,
    			'nome' => 'São Sebastião do Paraíso',
    			'UF' => 'MG',
    		),
    		3004 => 
    		array (
    			'codigoIbge' => 3164803,
    			'nome' => 'São Sebastião do Rio Preto',
    			'UF' => 'MG',
    		),
    		3005 => 
    		array (
    			'codigoIbge' => 3164902,
    			'nome' => 'São Sebastião do Rio Verde',
    			'UF' => 'MG',
    		),
    		3006 => 
    		array (
    			'codigoIbge' => 3165008,
    			'nome' => 'São Tiago',
    			'UF' => 'MG',
    		),
    		3007 => 
    		array (
    			'codigoIbge' => 3165107,
    			'nome' => 'São Tomás de Aquino',
    			'UF' => 'MG',
    		),
    		3008 => 
    		array (
    			'codigoIbge' => 3165206,
    			'nome' => 'São Tomé das Letras',
    			'UF' => 'MG',
    		),
    		3009 => 
    		array (
    			'codigoIbge' => 3165305,
    			'nome' => 'São Vicente de Minas',
    			'UF' => 'MG',
    		),
    		3010 => 
    		array (
    			'codigoIbge' => 3165404,
    			'nome' => 'Sapucaí-Mirim',
    			'UF' => 'MG',
    		),
    		3011 => 
    		array (
    			'codigoIbge' => 3165503,
    			'nome' => 'Sardoá',
    			'UF' => 'MG',
    		),
    		3012 => 
    		array (
    			'codigoIbge' => 3165537,
    			'nome' => 'Sarzedo',
    			'UF' => 'MG',
    		),
    		3013 => 
    		array (
    			'codigoIbge' => 3165552,
    			'nome' => 'Setubinha',
    			'UF' => 'MG',
    		),
    		3014 => 
    		array (
    			'codigoIbge' => 3165560,
    			'nome' => 'Sem-Peixe',
    			'UF' => 'MG',
    		),
    		3015 => 
    		array (
    			'codigoIbge' => 3165578,
    			'nome' => 'Senador Amaral',
    			'UF' => 'MG',
    		),
    		3016 => 
    		array (
    			'codigoIbge' => 3165602,
    			'nome' => 'Senador Cortes',
    			'UF' => 'MG',
    		),
    		3017 => 
    		array (
    			'codigoIbge' => 3165701,
    			'nome' => 'Senador Firmino',
    			'UF' => 'MG',
    		),
    		3018 => 
    		array (
    			'codigoIbge' => 3165800,
    			'nome' => 'Senador José Bento',
    			'UF' => 'MG',
    		),
    		3019 => 
    		array (
    			'codigoIbge' => 3165909,
    			'nome' => 'Senador Modestino Gonçalves',
    			'UF' => 'MG',
    		),
    		3020 => 
    		array (
    			'codigoIbge' => 3166006,
    			'nome' => 'Senhora de Oliveira',
    			'UF' => 'MG',
    		),
    		3021 => 
    		array (
    			'codigoIbge' => 3166105,
    			'nome' => 'Senhora do Porto',
    			'UF' => 'MG',
    		),
    		3022 => 
    		array (
    			'codigoIbge' => 3166204,
    			'nome' => 'Senhora dos Remédios',
    			'UF' => 'MG',
    		),
    		3023 => 
    		array (
    			'codigoIbge' => 3166303,
    			'nome' => 'Sericita',
    			'UF' => 'MG',
    		),
    		3024 => 
    		array (
    			'codigoIbge' => 3166402,
    			'nome' => 'Seritinga',
    			'UF' => 'MG',
    		),
    		3025 => 
    		array (
    			'codigoIbge' => 3166501,
    			'nome' => 'Serra Azul de Minas',
    			'UF' => 'MG',
    		),
    		3026 => 
    		array (
    			'codigoIbge' => 3166600,
    			'nome' => 'Serra da Saudade',
    			'UF' => 'MG',
    		),
    		3027 => 
    		array (
    			'codigoIbge' => 3166709,
    			'nome' => 'Serra dos Aimorés',
    			'UF' => 'MG',
    		),
    		3028 => 
    		array (
    			'codigoIbge' => 3166808,
    			'nome' => 'Serra do Salitre',
    			'UF' => 'MG',
    		),
    		3029 => 
    		array (
    			'codigoIbge' => 3166907,
    			'nome' => 'Serrania',
    			'UF' => 'MG',
    		),
    		3030 => 
    		array (
    			'codigoIbge' => 3166956,
    			'nome' => 'Serranópolis de Minas',
    			'UF' => 'MG',
    		),
    		3031 => 
    		array (
    			'codigoIbge' => 3167004,
    			'nome' => 'Serranos',
    			'UF' => 'MG',
    		),
    		3032 => 
    		array (
    			'codigoIbge' => 3167103,
    			'nome' => 'Serro',
    			'UF' => 'MG',
    		),
    		3033 => 
    		array (
    			'codigoIbge' => 3167202,
    			'nome' => 'Sete Lagoas',
    			'UF' => 'MG',
    		),
    		3034 => 
    		array (
    			'codigoIbge' => 3167301,
    			'nome' => 'Silveirânia',
    			'UF' => 'MG',
    		),
    		3035 => 
    		array (
    			'codigoIbge' => 3167400,
    			'nome' => 'Silvianópolis',
    			'UF' => 'MG',
    		),
    		3036 => 
    		array (
    			'codigoIbge' => 3167509,
    			'nome' => 'Simão Pereira',
    			'UF' => 'MG',
    		),
    		3037 => 
    		array (
    			'codigoIbge' => 3167608,
    			'nome' => 'Simonésia',
    			'UF' => 'MG',
    		),
    		3038 => 
    		array (
    			'codigoIbge' => 3167707,
    			'nome' => 'Sobrália',
    			'UF' => 'MG',
    		),
    		3039 => 
    		array (
    			'codigoIbge' => 3167806,
    			'nome' => 'Soledade de Minas',
    			'UF' => 'MG',
    		),
    		3040 => 
    		array (
    			'codigoIbge' => 3167905,
    			'nome' => 'Tabuleiro',
    			'UF' => 'MG',
    		),
    		3041 => 
    		array (
    			'codigoIbge' => 3168002,
    			'nome' => 'Taiobeiras',
    			'UF' => 'MG',
    		),
    		3042 => 
    		array (
    			'codigoIbge' => 3168051,
    			'nome' => 'Taparuba',
    			'UF' => 'MG',
    		),
    		3043 => 
    		array (
    			'codigoIbge' => 3168101,
    			'nome' => 'Tapira',
    			'UF' => 'MG',
    		),
    		3044 => 
    		array (
    			'codigoIbge' => 3168200,
    			'nome' => 'Tapiraí',
    			'UF' => 'MG',
    		),
    		3045 => 
    		array (
    			'codigoIbge' => 3168309,
    			'nome' => 'Taquaraçu de Minas',
    			'UF' => 'MG',
    		),
    		3046 => 
    		array (
    			'codigoIbge' => 3168408,
    			'nome' => 'Tarumirim',
    			'UF' => 'MG',
    		),
    		3047 => 
    		array (
    			'codigoIbge' => 3168507,
    			'nome' => 'Teixeiras',
    			'UF' => 'MG',
    		),
    		3048 => 
    		array (
    			'codigoIbge' => 3168606,
    			'nome' => 'Teófilo Otoni',
    			'UF' => 'MG',
    		),
    		3049 => 
    		array (
    			'codigoIbge' => 3168705,
    			'nome' => 'Timóteo',
    			'UF' => 'MG',
    		),
    		3050 => 
    		array (
    			'codigoIbge' => 3168804,
    			'nome' => 'Tiradentes',
    			'UF' => 'MG',
    		),
    		3051 => 
    		array (
    			'codigoIbge' => 3168903,
    			'nome' => 'Tiros',
    			'UF' => 'MG',
    		),
    		3052 => 
    		array (
    			'codigoIbge' => 3169000,
    			'nome' => 'Tocantins',
    			'UF' => 'MG',
    		),
    		3053 => 
    		array (
    			'codigoIbge' => 3169059,
    			'nome' => 'Tocos do Moji',
    			'UF' => 'MG',
    		),
    		3054 => 
    		array (
    			'codigoIbge' => 3169109,
    			'nome' => 'Toledo',
    			'UF' => 'MG',
    		),
    		3055 => 
    		array (
    			'codigoIbge' => 3169208,
    			'nome' => 'Tombos',
    			'UF' => 'MG',
    		),
    		3056 => 
    		array (
    			'codigoIbge' => 3169307,
    			'nome' => 'Três Corações',
    			'UF' => 'MG',
    		),
    		3057 => 
    		array (
    			'codigoIbge' => 3169356,
    			'nome' => 'Três Marias',
    			'UF' => 'MG',
    		),
    		3058 => 
    		array (
    			'codigoIbge' => 3169406,
    			'nome' => 'Três Pontas',
    			'UF' => 'MG',
    		),
    		3059 => 
    		array (
    			'codigoIbge' => 3169505,
    			'nome' => 'Tumiritinga',
    			'UF' => 'MG',
    		),
    		3060 => 
    		array (
    			'codigoIbge' => 3169604,
    			'nome' => 'Tupaciguara',
    			'UF' => 'MG',
    		),
    		3061 => 
    		array (
    			'codigoIbge' => 3169703,
    			'nome' => 'Turmalina',
    			'UF' => 'MG',
    		),
    		3062 => 
    		array (
    			'codigoIbge' => 3169802,
    			'nome' => 'Turvolândia',
    			'UF' => 'MG',
    		),
    		3063 => 
    		array (
    			'codigoIbge' => 3169901,
    			'nome' => 'Ubá',
    			'UF' => 'MG',
    		),
    		3064 => 
    		array (
    			'codigoIbge' => 3170008,
    			'nome' => 'Ubaí',
    			'UF' => 'MG',
    		),
    		3065 => 
    		array (
    			'codigoIbge' => 3170057,
    			'nome' => 'Ubaporanga',
    			'UF' => 'MG',
    		),
    		3066 => 
    		array (
    			'codigoIbge' => 3170107,
    			'nome' => 'Uberaba',
    			'UF' => 'MG',
    		),
    		3067 => 
    		array (
    			'codigoIbge' => 3170206,
    			'nome' => 'Uberlândia',
    			'UF' => 'MG',
    		),
    		3068 => 
    		array (
    			'codigoIbge' => 3170305,
    			'nome' => 'Umburatiba',
    			'UF' => 'MG',
    		),
    		3069 => 
    		array (
    			'codigoIbge' => 3170404,
    			'nome' => 'Unaí',
    			'UF' => 'MG',
    		),
    		3070 => 
    		array (
    			'codigoIbge' => 3170438,
    			'nome' => 'União de Minas',
    			'UF' => 'MG',
    		),
    		3071 => 
    		array (
    			'codigoIbge' => 3170479,
    			'nome' => 'Uruana de Minas',
    			'UF' => 'MG',
    		),
    		3072 => 
    		array (
    			'codigoIbge' => 3170503,
    			'nome' => 'Urucânia',
    			'UF' => 'MG',
    		),
    		3073 => 
    		array (
    			'codigoIbge' => 3170529,
    			'nome' => 'Urucuia',
    			'UF' => 'MG',
    		),
    		3074 => 
    		array (
    			'codigoIbge' => 3170578,
    			'nome' => 'Vargem Alegre',
    			'UF' => 'MG',
    		),
    		3075 => 
    		array (
    			'codigoIbge' => 3170602,
    			'nome' => 'Vargem Bonita',
    			'UF' => 'MG',
    		),
    		3076 => 
    		array (
    			'codigoIbge' => 3170651,
    			'nome' => 'Vargem Grande do Rio Pardo',
    			'UF' => 'MG',
    		),
    		3077 => 
    		array (
    			'codigoIbge' => 3170701,
    			'nome' => 'Varginha',
    			'UF' => 'MG',
    		),
    		3078 => 
    		array (
    			'codigoIbge' => 3170750,
    			'nome' => 'Varjão de Minas',
    			'UF' => 'MG',
    		),
    		3079 => 
    		array (
    			'codigoIbge' => 3170800,
    			'nome' => 'Várzea da Palma',
    			'UF' => 'MG',
    		),
    		3080 => 
    		array (
    			'codigoIbge' => 3170909,
    			'nome' => 'Varzelândia',
    			'UF' => 'MG',
    		),
    		3081 => 
    		array (
    			'codigoIbge' => 3171006,
    			'nome' => 'Vazante',
    			'UF' => 'MG',
    		),
    		3082 => 
    		array (
    			'codigoIbge' => 3171030,
    			'nome' => 'Verdelândia',
    			'UF' => 'MG',
    		),
    		3083 => 
    		array (
    			'codigoIbge' => 3171071,
    			'nome' => 'Veredinha',
    			'UF' => 'MG',
    		),
    		3084 => 
    		array (
    			'codigoIbge' => 3171105,
    			'nome' => 'Veríssimo',
    			'UF' => 'MG',
    		),
    		3085 => 
    		array (
    			'codigoIbge' => 3171154,
    			'nome' => 'Vermelho Novo',
    			'UF' => 'MG',
    		),
    		3086 => 
    		array (
    			'codigoIbge' => 3171204,
    			'nome' => 'Vespasiano',
    			'UF' => 'MG',
    		),
    		3087 => 
    		array (
    			'codigoIbge' => 3171303,
    			'nome' => 'Viçosa',
    			'UF' => 'MG',
    		),
    		3088 => 
    		array (
    			'codigoIbge' => 3171402,
    			'nome' => 'Vieiras',
    			'UF' => 'MG',
    		),
    		3089 => 
    		array (
    			'codigoIbge' => 3171501,
    			'nome' => 'Mathias Lobato',
    			'UF' => 'MG',
    		),
    		3090 => 
    		array (
    			'codigoIbge' => 3171600,
    			'nome' => 'Virgem da Lapa',
    			'UF' => 'MG',
    		),
    		3091 => 
    		array (
    			'codigoIbge' => 3171709,
    			'nome' => 'Virgínia',
    			'UF' => 'MG',
    		),
    		3092 => 
    		array (
    			'codigoIbge' => 3171808,
    			'nome' => 'Virginópolis',
    			'UF' => 'MG',
    		),
    		3093 => 
    		array (
    			'codigoIbge' => 3171907,
    			'nome' => 'Virgolândia',
    			'UF' => 'MG',
    		),
    		3094 => 
    		array (
    			'codigoIbge' => 3172004,
    			'nome' => 'Visconde do Rio Branco',
    			'UF' => 'MG',
    		),
    		3095 => 
    		array (
    			'codigoIbge' => 3172103,
    			'nome' => 'Volta Grande',
    			'UF' => 'MG',
    		),
    		3096 => 
    		array (
    			'codigoIbge' => 3172202,
    			'nome' => 'Wenceslau Braz',
    			'UF' => 'MG',
    		),
    		3097 => 
    		array (
    			'codigoIbge' => 3200102,
    			'nome' => 'Afonso Cláudio',
    			'UF' => 'ES',
    		),
    		3098 => 
    		array (
    			'codigoIbge' => 3200136,
    			'nome' => 'Águia Branca',
    			'UF' => 'ES',
    		),
    		3099 => 
    		array (
    			'codigoIbge' => 3200169,
    			'nome' => 'Água Doce do Norte',
    			'UF' => 'ES',
    		),
    		3100 => 
    		array (
    			'codigoIbge' => 3200201,
    			'nome' => 'Alegre',
    			'UF' => 'ES',
    		),
    		3101 => 
    		array (
    			'codigoIbge' => 3200300,
    			'nome' => 'Alfredo Chaves',
    			'UF' => 'ES',
    		),
    		3102 => 
    		array (
    			'codigoIbge' => 3200359,
    			'nome' => 'Alto Rio Novo',
    			'UF' => 'ES',
    		),
    		3103 => 
    		array (
    			'codigoIbge' => 3200409,
    			'nome' => 'Anchieta',
    			'UF' => 'ES',
    		),
    		3104 => 
    		array (
    			'codigoIbge' => 3200508,
    			'nome' => 'Apiacá',
    			'UF' => 'ES',
    		),
    		3105 => 
    		array (
    			'codigoIbge' => 3200607,
    			'nome' => 'Aracruz',
    			'UF' => 'ES',
    		),
    		3106 => 
    		array (
    			'codigoIbge' => 3200706,
    			'nome' => 'Atílio Vivacqua',
    			'UF' => 'ES',
    		),
    		3107 => 
    		array (
    			'codigoIbge' => 3200805,
    			'nome' => 'Baixo Guandu',
    			'UF' => 'ES',
    		),
    		3108 => 
    		array (
    			'codigoIbge' => 3200904,
    			'nome' => 'Barra de São Francisco',
    			'UF' => 'ES',
    		),
    		3109 => 
    		array (
    			'codigoIbge' => 3201001,
    			'nome' => 'Boa Esperança',
    			'UF' => 'ES',
    		),
    		3110 => 
    		array (
    			'codigoIbge' => 3201100,
    			'nome' => 'Bom Jesus do Norte',
    			'UF' => 'ES',
    		),
    		3111 => 
    		array (
    			'codigoIbge' => 3201159,
    			'nome' => 'Brejetuba',
    			'UF' => 'ES',
    		),
    		3112 => 
    		array (
    			'codigoIbge' => 3201209,
    			'nome' => 'Cachoeiro de Itapemirim',
    			'UF' => 'ES',
    		),
    		3113 => 
    		array (
    			'codigoIbge' => 3201308,
    			'nome' => 'Cariacica',
    			'UF' => 'ES',
    		),
    		3114 => 
    		array (
    			'codigoIbge' => 3201407,
    			'nome' => 'Castelo',
    			'UF' => 'ES',
    		),
    		3115 => 
    		array (
    			'codigoIbge' => 3201506,
    			'nome' => 'Colatina',
    			'UF' => 'ES',
    		),
    		3116 => 
    		array (
    			'codigoIbge' => 3201605,
    			'nome' => 'Conceição da Barra',
    			'UF' => 'ES',
    		),
    		3117 => 
    		array (
    			'codigoIbge' => 3201704,
    			'nome' => 'Conceição do Castelo',
    			'UF' => 'ES',
    		),
    		3118 => 
    		array (
    			'codigoIbge' => 3201803,
    			'nome' => 'Divino de São Lourenço',
    			'UF' => 'ES',
    		),
    		3119 => 
    		array (
    			'codigoIbge' => 3201902,
    			'nome' => 'Domingos Martins',
    			'UF' => 'ES',
    		),
    		3120 => 
    		array (
    			'codigoIbge' => 3202009,
    			'nome' => 'Dores do Rio Preto',
    			'UF' => 'ES',
    		),
    		3121 => 
    		array (
    			'codigoIbge' => 3202108,
    			'nome' => 'Ecoporanga',
    			'UF' => 'ES',
    		),
    		3122 => 
    		array (
    			'codigoIbge' => 3202207,
    			'nome' => 'Fundão',
    			'UF' => 'ES',
    		),
    		3123 => 
    		array (
    			'codigoIbge' => 3202256,
    			'nome' => 'Governador Lindenberg',
    			'UF' => 'ES',
    		),
    		3124 => 
    		array (
    			'codigoIbge' => 3202306,
    			'nome' => 'Guaçuí',
    			'UF' => 'ES',
    		),
    		3125 => 
    		array (
    			'codigoIbge' => 3202405,
    			'nome' => 'Guarapari',
    			'UF' => 'ES',
    		),
    		3126 => 
    		array (
    			'codigoIbge' => 3202454,
    			'nome' => 'Ibatiba',
    			'UF' => 'ES',
    		),
    		3127 => 
    		array (
    			'codigoIbge' => 3202504,
    			'nome' => 'Ibiraçu',
    			'UF' => 'ES',
    		),
    		3128 => 
    		array (
    			'codigoIbge' => 3202553,
    			'nome' => 'Ibitirama',
    			'UF' => 'ES',
    		),
    		3129 => 
    		array (
    			'codigoIbge' => 3202603,
    			'nome' => 'Iconha',
    			'UF' => 'ES',
    		),
    		3130 => 
    		array (
    			'codigoIbge' => 3202652,
    			'nome' => 'Irupi',
    			'UF' => 'ES',
    		),
    		3131 => 
    		array (
    			'codigoIbge' => 3202702,
    			'nome' => 'Itaguaçu',
    			'UF' => 'ES',
    		),
    		3132 => 
    		array (
    			'codigoIbge' => 3202801,
    			'nome' => 'Itapemirim',
    			'UF' => 'ES',
    		),
    		3133 => 
    		array (
    			'codigoIbge' => 3202900,
    			'nome' => 'Itarana',
    			'UF' => 'ES',
    		),
    		3134 => 
    		array (
    			'codigoIbge' => 3203007,
    			'nome' => 'Iúna',
    			'UF' => 'ES',
    		),
    		3135 => 
    		array (
    			'codigoIbge' => 3203056,
    			'nome' => 'Jaguaré',
    			'UF' => 'ES',
    		),
    		3136 => 
    		array (
    			'codigoIbge' => 3203106,
    			'nome' => 'Jerônimo Monteiro',
    			'UF' => 'ES',
    		),
    		3137 => 
    		array (
    			'codigoIbge' => 3203130,
    			'nome' => 'João Neiva',
    			'UF' => 'ES',
    		),
    		3138 => 
    		array (
    			'codigoIbge' => 3203163,
    			'nome' => 'Laranja da Terra',
    			'UF' => 'ES',
    		),
    		3139 => 
    		array (
    			'codigoIbge' => 3203205,
    			'nome' => 'Linhares',
    			'UF' => 'ES',
    		),
    		3140 => 
    		array (
    			'codigoIbge' => 3203304,
    			'nome' => 'Mantenópolis',
    			'UF' => 'ES',
    		),
    		3141 => 
    		array (
    			'codigoIbge' => 3203320,
    			'nome' => 'Marataízes',
    			'UF' => 'ES',
    		),
    		3142 => 
    		array (
    			'codigoIbge' => 3203346,
    			'nome' => 'Marechal Floriano',
    			'UF' => 'ES',
    		),
    		3143 => 
    		array (
    			'codigoIbge' => 3203353,
    			'nome' => 'Marilândia',
    			'UF' => 'ES',
    		),
    		3144 => 
    		array (
    			'codigoIbge' => 3203403,
    			'nome' => 'Mimoso do Sul',
    			'UF' => 'ES',
    		),
    		3145 => 
    		array (
    			'codigoIbge' => 3203502,
    			'nome' => 'Montanha',
    			'UF' => 'ES',
    		),
    		3146 => 
    		array (
    			'codigoIbge' => 3203601,
    			'nome' => 'Mucurici',
    			'UF' => 'ES',
    		),
    		3147 => 
    		array (
    			'codigoIbge' => 3203700,
    			'nome' => 'Muniz Freire',
    			'UF' => 'ES',
    		),
    		3148 => 
    		array (
    			'codigoIbge' => 3203809,
    			'nome' => 'Muqui',
    			'UF' => 'ES',
    		),
    		3149 => 
    		array (
    			'codigoIbge' => 3203908,
    			'nome' => 'Nova Venécia',
    			'UF' => 'ES',
    		),
    		3150 => 
    		array (
    			'codigoIbge' => 3204005,
    			'nome' => 'Pancas',
    			'UF' => 'ES',
    		),
    		3151 => 
    		array (
    			'codigoIbge' => 3204054,
    			'nome' => 'Pedro Canário',
    			'UF' => 'ES',
    		),
    		3152 => 
    		array (
    			'codigoIbge' => 3204104,
    			'nome' => 'Pinheiros',
    			'UF' => 'ES',
    		),
    		3153 => 
    		array (
    			'codigoIbge' => 3204203,
    			'nome' => 'Piúma',
    			'UF' => 'ES',
    		),
    		3154 => 
    		array (
    			'codigoIbge' => 3204252,
    			'nome' => 'Ponto Belo',
    			'UF' => 'ES',
    		),
    		3155 => 
    		array (
    			'codigoIbge' => 3204302,
    			'nome' => 'Presidente Kennedy',
    			'UF' => 'ES',
    		),
    		3156 => 
    		array (
    			'codigoIbge' => 3204351,
    			'nome' => 'Rio Bananal',
    			'UF' => 'ES',
    		),
    		3157 => 
    		array (
    			'codigoIbge' => 3204401,
    			'nome' => 'Rio Novo do Sul',
    			'UF' => 'ES',
    		),
    		3158 => 
    		array (
    			'codigoIbge' => 3204500,
    			'nome' => 'Santa Leopoldina',
    			'UF' => 'ES',
    		),
    		3159 => 
    		array (
    			'codigoIbge' => 3204559,
    			'nome' => 'Santa Maria de Jetibá',
    			'UF' => 'ES',
    		),
    		3160 => 
    		array (
    			'codigoIbge' => 3204609,
    			'nome' => 'Santa Teresa',
    			'UF' => 'ES',
    		),
    		3161 => 
    		array (
    			'codigoIbge' => 3204658,
    			'nome' => 'São Domingos do Norte',
    			'UF' => 'ES',
    		),
    		3162 => 
    		array (
    			'codigoIbge' => 3204708,
    			'nome' => 'São Gabriel da Palha',
    			'UF' => 'ES',
    		),
    		3163 => 
    		array (
    			'codigoIbge' => 3204807,
    			'nome' => 'São José do Calçado',
    			'UF' => 'ES',
    		),
    		3164 => 
    		array (
    			'codigoIbge' => 3204906,
    			'nome' => 'São Mateus',
    			'UF' => 'ES',
    		),
    		3165 => 
    		array (
    			'codigoIbge' => 3204955,
    			'nome' => 'São Roque do Canaã',
    			'UF' => 'ES',
    		),
    		3166 => 
    		array (
    			'codigoIbge' => 3205002,
    			'nome' => 'Serra',
    			'UF' => 'ES',
    		),
    		3167 => 
    		array (
    			'codigoIbge' => 3205010,
    			'nome' => 'Sooretama',
    			'UF' => 'ES',
    		),
    		3168 => 
    		array (
    			'codigoIbge' => 3205036,
    			'nome' => 'Vargem Alta',
    			'UF' => 'ES',
    		),
    		3169 => 
    		array (
    			'codigoIbge' => 3205069,
    			'nome' => 'Venda Nova do Imigrante',
    			'UF' => 'ES',
    		),
    		3170 => 
    		array (
    			'codigoIbge' => 3205101,
    			'nome' => 'Viana',
    			'UF' => 'ES',
    		),
    		3171 => 
    		array (
    			'codigoIbge' => 3205150,
    			'nome' => 'Vila Pavão',
    			'UF' => 'ES',
    		),
    		3172 => 
    		array (
    			'codigoIbge' => 3205176,
    			'nome' => 'Vila Valério',
    			'UF' => 'ES',
    		),
    		3173 => 
    		array (
    			'codigoIbge' => 3205200,
    			'nome' => 'Vila Velha',
    			'UF' => 'ES',
    		),
    		3174 => 
    		array (
    			'codigoIbge' => 3205309,
    			'nome' => 'Vitória',
    			'UF' => 'ES',
    		),
    		3175 => 
    		array (
    			'codigoIbge' => 3300100,
    			'nome' => 'Angra dos Reis',
    			'UF' => 'RJ',
    		),
    		3176 => 
    		array (
    			'codigoIbge' => 3300159,
    			'nome' => 'Aperibé',
    			'UF' => 'RJ',
    		),
    		3177 => 
    		array (
    			'codigoIbge' => 3300209,
    			'nome' => 'Araruama',
    			'UF' => 'RJ',
    		),
    		3178 => 
    		array (
    			'codigoIbge' => 3300225,
    			'nome' => 'Areal',
    			'UF' => 'RJ',
    		),
    		3179 => 
    		array (
    			'codigoIbge' => 3300233,
    			'nome' => 'Armação dos Búzios',
    			'UF' => 'RJ',
    		),
    		3180 => 
    		array (
    			'codigoIbge' => 3300258,
    			'nome' => 'Arraial do Cabo',
    			'UF' => 'RJ',
    		),
    		3181 => 
    		array (
    			'codigoIbge' => 3300308,
    			'nome' => 'Barra do Piraí',
    			'UF' => 'RJ',
    		),
    		3182 => 
    		array (
    			'codigoIbge' => 3300407,
    			'nome' => 'Barra Mansa',
    			'UF' => 'RJ',
    		),
    		3183 => 
    		array (
    			'codigoIbge' => 3300456,
    			'nome' => 'Belford Roxo',
    			'UF' => 'RJ',
    		),
    		3184 => 
    		array (
    			'codigoIbge' => 3300506,
    			'nome' => 'Bom Jardim',
    			'UF' => 'RJ',
    		),
    		3185 => 
    		array (
    			'codigoIbge' => 3300605,
    			'nome' => 'Bom Jesus do Itabapoana',
    			'UF' => 'RJ',
    		),
    		3186 => 
    		array (
    			'codigoIbge' => 3300704,
    			'nome' => 'Cabo Frio',
    			'UF' => 'RJ',
    		),
    		3187 => 
    		array (
    			'codigoIbge' => 3300803,
    			'nome' => 'Cachoeiras de Macacu',
    			'UF' => 'RJ',
    		),
    		3188 => 
    		array (
    			'codigoIbge' => 3300902,
    			'nome' => 'Cambuci',
    			'UF' => 'RJ',
    		),
    		3189 => 
    		array (
    			'codigoIbge' => 3300936,
    			'nome' => 'Carapebus',
    			'UF' => 'RJ',
    		),
    		3190 => 
    		array (
    			'codigoIbge' => 3300951,
    			'nome' => 'Comendador Levy Gasparian',
    			'UF' => 'RJ',
    		),
    		3191 => 
    		array (
    			'codigoIbge' => 3301009,
    			'nome' => 'Campos dos Goytacazes',
    			'UF' => 'RJ',
    		),
    		3192 => 
    		array (
    			'codigoIbge' => 3301108,
    			'nome' => 'Cantagalo',
    			'UF' => 'RJ',
    		),
    		3193 => 
    		array (
    			'codigoIbge' => 3301157,
    			'nome' => 'Cardoso Moreira',
    			'UF' => 'RJ',
    		),
    		3194 => 
    		array (
    			'codigoIbge' => 3301207,
    			'nome' => 'Carmo',
    			'UF' => 'RJ',
    		),
    		3195 => 
    		array (
    			'codigoIbge' => 3301306,
    			'nome' => 'Casimiro de Abreu',
    			'UF' => 'RJ',
    		),
    		3196 => 
    		array (
    			'codigoIbge' => 3301405,
    			'nome' => 'Conceição de Macabu',
    			'UF' => 'RJ',
    		),
    		3197 => 
    		array (
    			'codigoIbge' => 3301504,
    			'nome' => 'Cordeiro',
    			'UF' => 'RJ',
    		),
    		3198 => 
    		array (
    			'codigoIbge' => 3301603,
    			'nome' => 'Duas Barras',
    			'UF' => 'RJ',
    		),
    		3199 => 
    		array (
    			'codigoIbge' => 3301702,
    			'nome' => 'Duque de Caxias',
    			'UF' => 'RJ',
    		),
    		3200 => 
    		array (
    			'codigoIbge' => 3301801,
    			'nome' => 'Engenheiro Paulo de Frontin',
    			'UF' => 'RJ',
    		),
    		3201 => 
    		array (
    			'codigoIbge' => 3301850,
    			'nome' => 'Guapimirim',
    			'UF' => 'RJ',
    		),
    		3202 => 
    		array (
    			'codigoIbge' => 3301876,
    			'nome' => 'Iguaba Grande',
    			'UF' => 'RJ',
    		),
    		3203 => 
    		array (
    			'codigoIbge' => 3301900,
    			'nome' => 'Itaboraí',
    			'UF' => 'RJ',
    		),
    		3204 => 
    		array (
    			'codigoIbge' => 3302007,
    			'nome' => 'Itaguaí',
    			'UF' => 'RJ',
    		),
    		3205 => 
    		array (
    			'codigoIbge' => 3302056,
    			'nome' => 'Italva',
    			'UF' => 'RJ',
    		),
    		3206 => 
    		array (
    			'codigoIbge' => 3302106,
    			'nome' => 'Itaocara',
    			'UF' => 'RJ',
    		),
    		3207 => 
    		array (
    			'codigoIbge' => 3302205,
    			'nome' => 'Itaperuna',
    			'UF' => 'RJ',
    		),
    		3208 => 
    		array (
    			'codigoIbge' => 3302254,
    			'nome' => 'Itatiaia',
    			'UF' => 'RJ',
    		),
    		3209 => 
    		array (
    			'codigoIbge' => 3302270,
    			'nome' => 'Japeri',
    			'UF' => 'RJ',
    		),
    		3210 => 
    		array (
    			'codigoIbge' => 3302304,
    			'nome' => 'Laje do Muriaé',
    			'UF' => 'RJ',
    		),
    		3211 => 
    		array (
    			'codigoIbge' => 3302403,
    			'nome' => 'Macaé',
    			'UF' => 'RJ',
    		),
    		3212 => 
    		array (
    			'codigoIbge' => 3302452,
    			'nome' => 'Macuco',
    			'UF' => 'RJ',
    		),
    		3213 => 
    		array (
    			'codigoIbge' => 3302502,
    			'nome' => 'Magé',
    			'UF' => 'RJ',
    		),
    		3214 => 
    		array (
    			'codigoIbge' => 3302601,
    			'nome' => 'Mangaratiba',
    			'UF' => 'RJ',
    		),
    		3215 => 
    		array (
    			'codigoIbge' => 3302700,
    			'nome' => 'Maricá',
    			'UF' => 'RJ',
    		),
    		3216 => 
    		array (
    			'codigoIbge' => 3302809,
    			'nome' => 'Mendes',
    			'UF' => 'RJ',
    		),
    		3217 => 
    		array (
    			'codigoIbge' => 3302858,
    			'nome' => 'Mesquita',
    			'UF' => 'RJ',
    		),
    		3218 => 
    		array (
    			'codigoIbge' => 3302908,
    			'nome' => 'Miguel Pereira',
    			'UF' => 'RJ',
    		),
    		3219 => 
    		array (
    			'codigoIbge' => 3303005,
    			'nome' => 'Miracema',
    			'UF' => 'RJ',
    		),
    		3220 => 
    		array (
    			'codigoIbge' => 3303104,
    			'nome' => 'Natividade',
    			'UF' => 'RJ',
    		),
    		3221 => 
    		array (
    			'codigoIbge' => 3303203,
    			'nome' => 'Nilópolis',
    			'UF' => 'RJ',
    		),
    		3222 => 
    		array (
    			'codigoIbge' => 3303302,
    			'nome' => 'Niterói',
    			'UF' => 'RJ',
    		),
    		3223 => 
    		array (
    			'codigoIbge' => 3303401,
    			'nome' => 'Nova Friburgo',
    			'UF' => 'RJ',
    		),
    		3224 => 
    		array (
    			'codigoIbge' => 3303500,
    			'nome' => 'Nova Iguaçu',
    			'UF' => 'RJ',
    		),
    		3225 => 
    		array (
    			'codigoIbge' => 3303609,
    			'nome' => 'Paracambi',
    			'UF' => 'RJ',
    		),
    		3226 => 
    		array (
    			'codigoIbge' => 3303708,
    			'nome' => 'Paraíba do Sul',
    			'UF' => 'RJ',
    		),
    		3227 => 
    		array (
    			'codigoIbge' => 3303807,
    			'nome' => 'Paraty',
    			'UF' => 'RJ',
    		),
    		3228 => 
    		array (
    			'codigoIbge' => 3303856,
    			'nome' => 'Paty do Alferes',
    			'UF' => 'RJ',
    		),
    		3229 => 
    		array (
    			'codigoIbge' => 3303906,
    			'nome' => 'Petrópolis',
    			'UF' => 'RJ',
    		),
    		3230 => 
    		array (
    			'codigoIbge' => 3303955,
    			'nome' => 'Pinheiral',
    			'UF' => 'RJ',
    		),
    		3231 => 
    		array (
    			'codigoIbge' => 3304003,
    			'nome' => 'Piraí',
    			'UF' => 'RJ',
    		),
    		3232 => 
    		array (
    			'codigoIbge' => 3304102,
    			'nome' => 'Porciúncula',
    			'UF' => 'RJ',
    		),
    		3233 => 
    		array (
    			'codigoIbge' => 3304110,
    			'nome' => 'Porto Real',
    			'UF' => 'RJ',
    		),
    		3234 => 
    		array (
    			'codigoIbge' => 3304128,
    			'nome' => 'Quatis',
    			'UF' => 'RJ',
    		),
    		3235 => 
    		array (
    			'codigoIbge' => 3304144,
    			'nome' => 'Queimados',
    			'UF' => 'RJ',
    		),
    		3236 => 
    		array (
    			'codigoIbge' => 3304151,
    			'nome' => 'Quissamã',
    			'UF' => 'RJ',
    		),
    		3237 => 
    		array (
    			'codigoIbge' => 3304201,
    			'nome' => 'Resende',
    			'UF' => 'RJ',
    		),
    		3238 => 
    		array (
    			'codigoIbge' => 3304300,
    			'nome' => 'Rio Bonito',
    			'UF' => 'RJ',
    		),
    		3239 => 
    		array (
    			'codigoIbge' => 3304409,
    			'nome' => 'Rio Claro',
    			'UF' => 'RJ',
    		),
    		3240 => 
    		array (
    			'codigoIbge' => 3304508,
    			'nome' => 'Rio das Flores',
    			'UF' => 'RJ',
    		),
    		3241 => 
    		array (
    			'codigoIbge' => 3304524,
    			'nome' => 'Rio das Ostras',
    			'UF' => 'RJ',
    		),
    		3242 => 
    		array (
    			'codigoIbge' => 3304557,
    			'nome' => 'Rio de Janeiro',
    			'UF' => 'RJ',
    		),
    		3243 => 
    		array (
    			'codigoIbge' => 3304607,
    			'nome' => 'Santa Maria Madalena',
    			'UF' => 'RJ',
    		),
    		3244 => 
    		array (
    			'codigoIbge' => 3304706,
    			'nome' => 'Santo Antônio de Pádua',
    			'UF' => 'RJ',
    		),
    		3245 => 
    		array (
    			'codigoIbge' => 3304755,
    			'nome' => 'São Francisco de Itabapoana',
    			'UF' => 'RJ',
    		),
    		3246 => 
    		array (
    			'codigoIbge' => 3304805,
    			'nome' => 'São Fidélis',
    			'UF' => 'RJ',
    		),
    		3247 => 
    		array (
    			'codigoIbge' => 3304904,
    			'nome' => 'São Gonçalo',
    			'UF' => 'RJ',
    		),
    		3248 => 
    		array (
    			'codigoIbge' => 3305000,
    			'nome' => 'São João da Barra',
    			'UF' => 'RJ',
    		),
    		3249 => 
    		array (
    			'codigoIbge' => 3305109,
    			'nome' => 'São João de Meriti',
    			'UF' => 'RJ',
    		),
    		3250 => 
    		array (
    			'codigoIbge' => 3305133,
    			'nome' => 'São José de Ubá',
    			'UF' => 'RJ',
    		),
    		3251 => 
    		array (
    			'codigoIbge' => 3305158,
    			'nome' => 'São José do Vale do Rio Preto',
    			'UF' => 'RJ',
    		),
    		3252 => 
    		array (
    			'codigoIbge' => 3305208,
    			'nome' => 'São Pedro da Aldeia',
    			'UF' => 'RJ',
    		),
    		3253 => 
    		array (
    			'codigoIbge' => 3305307,
    			'nome' => 'São Sebastião do Alto',
    			'UF' => 'RJ',
    		),
    		3254 => 
    		array (
    			'codigoIbge' => 3305406,
    			'nome' => 'Sapucaia',
    			'UF' => 'RJ',
    		),
    		3255 => 
    		array (
    			'codigoIbge' => 3305505,
    			'nome' => 'Saquarema',
    			'UF' => 'RJ',
    		),
    		3256 => 
    		array (
    			'codigoIbge' => 3305554,
    			'nome' => 'Seropédica',
    			'UF' => 'RJ',
    		),
    		3257 => 
    		array (
    			'codigoIbge' => 3305604,
    			'nome' => 'Silva Jardim',
    			'UF' => 'RJ',
    		),
    		3258 => 
    		array (
    			'codigoIbge' => 3305703,
    			'nome' => 'Sumidouro',
    			'UF' => 'RJ',
    		),
    		3259 => 
    		array (
    			'codigoIbge' => 3305752,
    			'nome' => 'Tanguá',
    			'UF' => 'RJ',
    		),
    		3260 => 
    		array (
    			'codigoIbge' => 3305802,
    			'nome' => 'Teresópolis',
    			'UF' => 'RJ',
    		),
    		3261 => 
    		array (
    			'codigoIbge' => 3305901,
    			'nome' => 'Trajano de Moraes',
    			'UF' => 'RJ',
    		),
    		3262 => 
    		array (
    			'codigoIbge' => 3306008,
    			'nome' => 'Três Rios',
    			'UF' => 'RJ',
    		),
    		3263 => 
    		array (
    			'codigoIbge' => 3306107,
    			'nome' => 'Valença',
    			'UF' => 'RJ',
    		),
    		3264 => 
    		array (
    			'codigoIbge' => 3306156,
    			'nome' => 'Varre-Sai',
    			'UF' => 'RJ',
    		),
    		3265 => 
    		array (
    			'codigoIbge' => 3306206,
    			'nome' => 'Vassouras',
    			'UF' => 'RJ',
    		),
    		3266 => 
    		array (
    			'codigoIbge' => 3306305,
    			'nome' => 'Volta Redonda',
    			'UF' => 'RJ',
    		),
    		3267 => 
    		array (
    			'codigoIbge' => 3500105,
    			'nome' => 'Adamantina',
    			'UF' => 'SP',
    		),
    		3268 => 
    		array (
    			'codigoIbge' => 3500204,
    			'nome' => 'Adolfo',
    			'UF' => 'SP',
    		),
    		3269 => 
    		array (
    			'codigoIbge' => 3500303,
    			'nome' => 'Aguaí',
    			'UF' => 'SP',
    		),
    		3270 => 
    		array (
    			'codigoIbge' => 3500402,
    			'nome' => 'Águas da Prata',
    			'UF' => 'SP',
    		),
    		3271 => 
    		array (
    			'codigoIbge' => 3500501,
    			'nome' => 'Águas de Lindóia',
    			'UF' => 'SP',
    		),
    		3272 => 
    		array (
    			'codigoIbge' => 3500550,
    			'nome' => 'Águas de Santa Bárbara',
    			'UF' => 'SP',
    		),
    		3273 => 
    		array (
    			'codigoIbge' => 3500600,
    			'nome' => 'Águas de São Pedro',
    			'UF' => 'SP',
    		),
    		3274 => 
    		array (
    			'codigoIbge' => 3500709,
    			'nome' => 'Agudos',
    			'UF' => 'SP',
    		),
    		3275 => 
    		array (
    			'codigoIbge' => 3500758,
    			'nome' => 'Alambari',
    			'UF' => 'SP',
    		),
    		3276 => 
    		array (
    			'codigoIbge' => 3500808,
    			'nome' => 'Alfredo Marcondes',
    			'UF' => 'SP',
    		),
    		3277 => 
    		array (
    			'codigoIbge' => 3500907,
    			'nome' => 'Altair',
    			'UF' => 'SP',
    		),
    		3278 => 
    		array (
    			'codigoIbge' => 3501004,
    			'nome' => 'Altinópolis',
    			'UF' => 'SP',
    		),
    		3279 => 
    		array (
    			'codigoIbge' => 3501103,
    			'nome' => 'Alto Alegre',
    			'UF' => 'SP',
    		),
    		3280 => 
    		array (
    			'codigoIbge' => 3501152,
    			'nome' => 'Alumínio',
    			'UF' => 'SP',
    		),
    		3281 => 
    		array (
    			'codigoIbge' => 3501202,
    			'nome' => 'Álvares Florence',
    			'UF' => 'SP',
    		),
    		3282 => 
    		array (
    			'codigoIbge' => 3501301,
    			'nome' => 'Álvares Machado',
    			'UF' => 'SP',
    		),
    		3283 => 
    		array (
    			'codigoIbge' => 3501400,
    			'nome' => 'Álvaro de Carvalho',
    			'UF' => 'SP',
    		),
    		3284 => 
    		array (
    			'codigoIbge' => 3501509,
    			'nome' => 'Alvinlândia',
    			'UF' => 'SP',
    		),
    		3285 => 
    		array (
    			'codigoIbge' => 3501608,
    			'nome' => 'Americana',
    			'UF' => 'SP',
    		),
    		3286 => 
    		array (
    			'codigoIbge' => 3501707,
    			'nome' => 'Américo Brasiliense',
    			'UF' => 'SP',
    		),
    		3287 => 
    		array (
    			'codigoIbge' => 3501806,
    			'nome' => 'Américo de Campos',
    			'UF' => 'SP',
    		),
    		3288 => 
    		array (
    			'codigoIbge' => 3501905,
    			'nome' => 'Amparo',
    			'UF' => 'SP',
    		),
    		3289 => 
    		array (
    			'codigoIbge' => 3502002,
    			'nome' => 'Analândia',
    			'UF' => 'SP',
    		),
    		3290 => 
    		array (
    			'codigoIbge' => 3502101,
    			'nome' => 'Andradina',
    			'UF' => 'SP',
    		),
    		3291 => 
    		array (
    			'codigoIbge' => 3502200,
    			'nome' => 'Angatuba',
    			'UF' => 'SP',
    		),
    		3292 => 
    		array (
    			'codigoIbge' => 3502309,
    			'nome' => 'Anhembi',
    			'UF' => 'SP',
    		),
    		3293 => 
    		array (
    			'codigoIbge' => 3502408,
    			'nome' => 'Anhumas',
    			'UF' => 'SP',
    		),
    		3294 => 
    		array (
    			'codigoIbge' => 3502507,
    			'nome' => 'Aparecida',
    			'UF' => 'SP',
    		),
    		3295 => 
    		array (
    			'codigoIbge' => 3502606,
    			'nome' => 'Aparecida d\'Oeste',
    			'UF' => 'SP',
    		),
    		3296 => 
    		array (
    			'codigoIbge' => 3502705,
    			'nome' => 'Apiaí',
    			'UF' => 'SP',
    		),
    		3297 => 
    		array (
    			'codigoIbge' => 3502754,
    			'nome' => 'Araçariguama',
    			'UF' => 'SP',
    		),
    		3298 => 
    		array (
    			'codigoIbge' => 3502804,
    			'nome' => 'Araçatuba',
    			'UF' => 'SP',
    		),
    		3299 => 
    		array (
    			'codigoIbge' => 3502903,
    			'nome' => 'Araçoiaba da Serra',
    			'UF' => 'SP',
    		),
    		3300 => 
    		array (
    			'codigoIbge' => 3503000,
    			'nome' => 'Aramina',
    			'UF' => 'SP',
    		),
    		3301 => 
    		array (
    			'codigoIbge' => 3503109,
    			'nome' => 'Arandu',
    			'UF' => 'SP',
    		),
    		3302 => 
    		array (
    			'codigoIbge' => 3503158,
    			'nome' => 'Arapeí',
    			'UF' => 'SP',
    		),
    		3303 => 
    		array (
    			'codigoIbge' => 3503208,
    			'nome' => 'Araraquara',
    			'UF' => 'SP',
    		),
    		3304 => 
    		array (
    			'codigoIbge' => 3503307,
    			'nome' => 'Araras',
    			'UF' => 'SP',
    		),
    		3305 => 
    		array (
    			'codigoIbge' => 3503356,
    			'nome' => 'Arco-Íris',
    			'UF' => 'SP',
    		),
    		3306 => 
    		array (
    			'codigoIbge' => 3503406,
    			'nome' => 'Arealva',
    			'UF' => 'SP',
    		),
    		3307 => 
    		array (
    			'codigoIbge' => 3503505,
    			'nome' => 'Areias',
    			'UF' => 'SP',
    		),
    		3308 => 
    		array (
    			'codigoIbge' => 3503604,
    			'nome' => 'Areiópolis',
    			'UF' => 'SP',
    		),
    		3309 => 
    		array (
    			'codigoIbge' => 3503703,
    			'nome' => 'Ariranha',
    			'UF' => 'SP',
    		),
    		3310 => 
    		array (
    			'codigoIbge' => 3503802,
    			'nome' => 'Artur Nogueira',
    			'UF' => 'SP',
    		),
    		3311 => 
    		array (
    			'codigoIbge' => 3503901,
    			'nome' => 'Arujá',
    			'UF' => 'SP',
    		),
    		3312 => 
    		array (
    			'codigoIbge' => 3503950,
    			'nome' => 'Aspásia',
    			'UF' => 'SP',
    		),
    		3313 => 
    		array (
    			'codigoIbge' => 3504008,
    			'nome' => 'Assis',
    			'UF' => 'SP',
    		),
    		3314 => 
    		array (
    			'codigoIbge' => 3504107,
    			'nome' => 'Atibaia',
    			'UF' => 'SP',
    		),
    		3315 => 
    		array (
    			'codigoIbge' => 3504206,
    			'nome' => 'Auriflama',
    			'UF' => 'SP',
    		),
    		3316 => 
    		array (
    			'codigoIbge' => 3504305,
    			'nome' => 'Avaí',
    			'UF' => 'SP',
    		),
    		3317 => 
    		array (
    			'codigoIbge' => 3504404,
    			'nome' => 'Avanhandava',
    			'UF' => 'SP',
    		),
    		3318 => 
    		array (
    			'codigoIbge' => 3504503,
    			'nome' => 'Avaré',
    			'UF' => 'SP',
    		),
    		3319 => 
    		array (
    			'codigoIbge' => 3504602,
    			'nome' => 'Bady Bassitt',
    			'UF' => 'SP',
    		),
    		3320 => 
    		array (
    			'codigoIbge' => 3504701,
    			'nome' => 'Balbinos',
    			'UF' => 'SP',
    		),
    		3321 => 
    		array (
    			'codigoIbge' => 3504800,
    			'nome' => 'Bálsamo',
    			'UF' => 'SP',
    		),
    		3322 => 
    		array (
    			'codigoIbge' => 3504909,
    			'nome' => 'Bananal',
    			'UF' => 'SP',
    		),
    		3323 => 
    		array (
    			'codigoIbge' => 3505005,
    			'nome' => 'Barão de Antonina',
    			'UF' => 'SP',
    		),
    		3324 => 
    		array (
    			'codigoIbge' => 3505104,
    			'nome' => 'Barbosa',
    			'UF' => 'SP',
    		),
    		3325 => 
    		array (
    			'codigoIbge' => 3505203,
    			'nome' => 'Bariri',
    			'UF' => 'SP',
    		),
    		3326 => 
    		array (
    			'codigoIbge' => 3505302,
    			'nome' => 'Barra Bonita',
    			'UF' => 'SP',
    		),
    		3327 => 
    		array (
    			'codigoIbge' => 3505351,
    			'nome' => 'Barra do Chapéu',
    			'UF' => 'SP',
    		),
    		3328 => 
    		array (
    			'codigoIbge' => 3505401,
    			'nome' => 'Barra do Turvo',
    			'UF' => 'SP',
    		),
    		3329 => 
    		array (
    			'codigoIbge' => 3505500,
    			'nome' => 'Barretos',
    			'UF' => 'SP',
    		),
    		3330 => 
    		array (
    			'codigoIbge' => 3505609,
    			'nome' => 'Barrinha',
    			'UF' => 'SP',
    		),
    		3331 => 
    		array (
    			'codigoIbge' => 3505708,
    			'nome' => 'Barueri',
    			'UF' => 'SP',
    		),
    		3332 => 
    		array (
    			'codigoIbge' => 3505807,
    			'nome' => 'Bastos',
    			'UF' => 'SP',
    		),
    		3333 => 
    		array (
    			'codigoIbge' => 3505906,
    			'nome' => 'Batatais',
    			'UF' => 'SP',
    		),
    		3334 => 
    		array (
    			'codigoIbge' => 3506003,
    			'nome' => 'Bauru',
    			'UF' => 'SP',
    		),
    		3335 => 
    		array (
    			'codigoIbge' => 3506102,
    			'nome' => 'Bebedouro',
    			'UF' => 'SP',
    		),
    		3336 => 
    		array (
    			'codigoIbge' => 3506201,
    			'nome' => 'Bento de Abreu',
    			'UF' => 'SP',
    		),
    		3337 => 
    		array (
    			'codigoIbge' => 3506300,
    			'nome' => 'Bernardino de Campos',
    			'UF' => 'SP',
    		),
    		3338 => 
    		array (
    			'codigoIbge' => 3506359,
    			'nome' => 'Bertioga',
    			'UF' => 'SP',
    		),
    		3339 => 
    		array (
    			'codigoIbge' => 3506409,
    			'nome' => 'Bilac',
    			'UF' => 'SP',
    		),
    		3340 => 
    		array (
    			'codigoIbge' => 3506508,
    			'nome' => 'Birigui',
    			'UF' => 'SP',
    		),
    		3341 => 
    		array (
    			'codigoIbge' => 3506607,
    			'nome' => 'Biritiba Mirim',
    			'UF' => 'SP',
    		),
    		3342 => 
    		array (
    			'codigoIbge' => 3506706,
    			'nome' => 'Boa Esperança do Sul',
    			'UF' => 'SP',
    		),
    		3343 => 
    		array (
    			'codigoIbge' => 3506805,
    			'nome' => 'Bocaina',
    			'UF' => 'SP',
    		),
    		3344 => 
    		array (
    			'codigoIbge' => 3506904,
    			'nome' => 'Bofete',
    			'UF' => 'SP',
    		),
    		3345 => 
    		array (
    			'codigoIbge' => 3507001,
    			'nome' => 'Boituva',
    			'UF' => 'SP',
    		),
    		3346 => 
    		array (
    			'codigoIbge' => 3507100,
    			'nome' => 'Bom Jesus dos Perdões',
    			'UF' => 'SP',
    		),
    		3347 => 
    		array (
    			'codigoIbge' => 3507159,
    			'nome' => 'Bom Sucesso de Itararé',
    			'UF' => 'SP',
    		),
    		3348 => 
    		array (
    			'codigoIbge' => 3507209,
    			'nome' => 'Borá',
    			'UF' => 'SP',
    		),
    		3349 => 
    		array (
    			'codigoIbge' => 3507308,
    			'nome' => 'Boracéia',
    			'UF' => 'SP',
    		),
    		3350 => 
    		array (
    			'codigoIbge' => 3507407,
    			'nome' => 'Borborema',
    			'UF' => 'SP',
    		),
    		3351 => 
    		array (
    			'codigoIbge' => 3507456,
    			'nome' => 'Borebi',
    			'UF' => 'SP',
    		),
    		3352 => 
    		array (
    			'codigoIbge' => 3507506,
    			'nome' => 'Botucatu',
    			'UF' => 'SP',
    		),
    		3353 => 
    		array (
    			'codigoIbge' => 3507605,
    			'nome' => 'Bragança Paulista',
    			'UF' => 'SP',
    		),
    		3354 => 
    		array (
    			'codigoIbge' => 3507704,
    			'nome' => 'Braúna',
    			'UF' => 'SP',
    		),
    		3355 => 
    		array (
    			'codigoIbge' => 3507753,
    			'nome' => 'Brejo Alegre',
    			'UF' => 'SP',
    		),
    		3356 => 
    		array (
    			'codigoIbge' => 3507803,
    			'nome' => 'Brodowski',
    			'UF' => 'SP',
    		),
    		3357 => 
    		array (
    			'codigoIbge' => 3507902,
    			'nome' => 'Brotas',
    			'UF' => 'SP',
    		),
    		3358 => 
    		array (
    			'codigoIbge' => 3508009,
    			'nome' => 'Buri',
    			'UF' => 'SP',
    		),
    		3359 => 
    		array (
    			'codigoIbge' => 3508108,
    			'nome' => 'Buritama',
    			'UF' => 'SP',
    		),
    		3360 => 
    		array (
    			'codigoIbge' => 3508207,
    			'nome' => 'Buritizal',
    			'UF' => 'SP',
    		),
    		3361 => 
    		array (
    			'codigoIbge' => 3508306,
    			'nome' => 'Cabrália Paulista',
    			'UF' => 'SP',
    		),
    		3362 => 
    		array (
    			'codigoIbge' => 3508405,
    			'nome' => 'Cabreúva',
    			'UF' => 'SP',
    		),
    		3363 => 
    		array (
    			'codigoIbge' => 3508504,
    			'nome' => 'Caçapava',
    			'UF' => 'SP',
    		),
    		3364 => 
    		array (
    			'codigoIbge' => 3508603,
    			'nome' => 'Cachoeira Paulista',
    			'UF' => 'SP',
    		),
    		3365 => 
    		array (
    			'codigoIbge' => 3508702,
    			'nome' => 'Caconde',
    			'UF' => 'SP',
    		),
    		3366 => 
    		array (
    			'codigoIbge' => 3508801,
    			'nome' => 'Cafelândia',
    			'UF' => 'SP',
    		),
    		3367 => 
    		array (
    			'codigoIbge' => 3508900,
    			'nome' => 'Caiabu',
    			'UF' => 'SP',
    		),
    		3368 => 
    		array (
    			'codigoIbge' => 3509007,
    			'nome' => 'Caieiras',
    			'UF' => 'SP',
    		),
    		3369 => 
    		array (
    			'codigoIbge' => 3509106,
    			'nome' => 'Caiuá',
    			'UF' => 'SP',
    		),
    		3370 => 
    		array (
    			'codigoIbge' => 3509205,
    			'nome' => 'Cajamar',
    			'UF' => 'SP',
    		),
    		3371 => 
    		array (
    			'codigoIbge' => 3509254,
    			'nome' => 'Cajati',
    			'UF' => 'SP',
    		),
    		3372 => 
    		array (
    			'codigoIbge' => 3509304,
    			'nome' => 'Cajobi',
    			'UF' => 'SP',
    		),
    		3373 => 
    		array (
    			'codigoIbge' => 3509403,
    			'nome' => 'Cajuru',
    			'UF' => 'SP',
    		),
    		3374 => 
    		array (
    			'codigoIbge' => 3509452,
    			'nome' => 'Campina do Monte Alegre',
    			'UF' => 'SP',
    		),
    		3375 => 
    		array (
    			'codigoIbge' => 3509502,
    			'nome' => 'Campinas',
    			'UF' => 'SP',
    		),
    		3376 => 
    		array (
    			'codigoIbge' => 3509601,
    			'nome' => 'Campo Limpo Paulista',
    			'UF' => 'SP',
    		),
    		3377 => 
    		array (
    			'codigoIbge' => 3509700,
    			'nome' => 'Campos do Jordão',
    			'UF' => 'SP',
    		),
    		3378 => 
    		array (
    			'codigoIbge' => 3509809,
    			'nome' => 'Campos Novos Paulista',
    			'UF' => 'SP',
    		),
    		3379 => 
    		array (
    			'codigoIbge' => 3509908,
    			'nome' => 'Cananéia',
    			'UF' => 'SP',
    		),
    		3380 => 
    		array (
    			'codigoIbge' => 3509957,
    			'nome' => 'Canas',
    			'UF' => 'SP',
    		),
    		3381 => 
    		array (
    			'codigoIbge' => 3510005,
    			'nome' => 'Cândido Mota',
    			'UF' => 'SP',
    		),
    		3382 => 
    		array (
    			'codigoIbge' => 3510104,
    			'nome' => 'Cândido Rodrigues',
    			'UF' => 'SP',
    		),
    		3383 => 
    		array (
    			'codigoIbge' => 3510153,
    			'nome' => 'Canitar',
    			'UF' => 'SP',
    		),
    		3384 => 
    		array (
    			'codigoIbge' => 3510203,
    			'nome' => 'Capão Bonito',
    			'UF' => 'SP',
    		),
    		3385 => 
    		array (
    			'codigoIbge' => 3510302,
    			'nome' => 'Capela do Alto',
    			'UF' => 'SP',
    		),
    		3386 => 
    		array (
    			'codigoIbge' => 3510401,
    			'nome' => 'Capivari',
    			'UF' => 'SP',
    		),
    		3387 => 
    		array (
    			'codigoIbge' => 3510500,
    			'nome' => 'Caraguatatuba',
    			'UF' => 'SP',
    		),
    		3388 => 
    		array (
    			'codigoIbge' => 3510609,
    			'nome' => 'Carapicuíba',
    			'UF' => 'SP',
    		),
    		3389 => 
    		array (
    			'codigoIbge' => 3510708,
    			'nome' => 'Cardoso',
    			'UF' => 'SP',
    		),
    		3390 => 
    		array (
    			'codigoIbge' => 3510807,
    			'nome' => 'Casa Branca',
    			'UF' => 'SP',
    		),
    		3391 => 
    		array (
    			'codigoIbge' => 3510906,
    			'nome' => 'Cássia dos Coqueiros',
    			'UF' => 'SP',
    		),
    		3392 => 
    		array (
    			'codigoIbge' => 3511003,
    			'nome' => 'Castilho',
    			'UF' => 'SP',
    		),
    		3393 => 
    		array (
    			'codigoIbge' => 3511102,
    			'nome' => 'Catanduva',
    			'UF' => 'SP',
    		),
    		3394 => 
    		array (
    			'codigoIbge' => 3511201,
    			'nome' => 'Catiguá',
    			'UF' => 'SP',
    		),
    		3395 => 
    		array (
    			'codigoIbge' => 3511300,
    			'nome' => 'Cedral',
    			'UF' => 'SP',
    		),
    		3396 => 
    		array (
    			'codigoIbge' => 3511409,
    			'nome' => 'Cerqueira César',
    			'UF' => 'SP',
    		),
    		3397 => 
    		array (
    			'codigoIbge' => 3511508,
    			'nome' => 'Cerquilho',
    			'UF' => 'SP',
    		),
    		3398 => 
    		array (
    			'codigoIbge' => 3511607,
    			'nome' => 'Cesário Lange',
    			'UF' => 'SP',
    		),
    		3399 => 
    		array (
    			'codigoIbge' => 3511706,
    			'nome' => 'Charqueada',
    			'UF' => 'SP',
    		),
    		3400 => 
    		array (
    			'codigoIbge' => 3511904,
    			'nome' => 'Clementina',
    			'UF' => 'SP',
    		),
    		3401 => 
    		array (
    			'codigoIbge' => 3512001,
    			'nome' => 'Colina',
    			'UF' => 'SP',
    		),
    		3402 => 
    		array (
    			'codigoIbge' => 3512100,
    			'nome' => 'Colômbia',
    			'UF' => 'SP',
    		),
    		3403 => 
    		array (
    			'codigoIbge' => 3512209,
    			'nome' => 'Conchal',
    			'UF' => 'SP',
    		),
    		3404 => 
    		array (
    			'codigoIbge' => 3512308,
    			'nome' => 'Conchas',
    			'UF' => 'SP',
    		),
    		3405 => 
    		array (
    			'codigoIbge' => 3512407,
    			'nome' => 'Cordeirópolis',
    			'UF' => 'SP',
    		),
    		3406 => 
    		array (
    			'codigoIbge' => 3512506,
    			'nome' => 'Coroados',
    			'UF' => 'SP',
    		),
    		3407 => 
    		array (
    			'codigoIbge' => 3512605,
    			'nome' => 'Coronel Macedo',
    			'UF' => 'SP',
    		),
    		3408 => 
    		array (
    			'codigoIbge' => 3512704,
    			'nome' => 'Corumbataí',
    			'UF' => 'SP',
    		),
    		3409 => 
    		array (
    			'codigoIbge' => 3512803,
    			'nome' => 'Cosmópolis',
    			'UF' => 'SP',
    		),
    		3410 => 
    		array (
    			'codigoIbge' => 3512902,
    			'nome' => 'Cosmorama',
    			'UF' => 'SP',
    		),
    		3411 => 
    		array (
    			'codigoIbge' => 3513009,
    			'nome' => 'Cotia',
    			'UF' => 'SP',
    		),
    		3412 => 
    		array (
    			'codigoIbge' => 3513108,
    			'nome' => 'Cravinhos',
    			'UF' => 'SP',
    		),
    		3413 => 
    		array (
    			'codigoIbge' => 3513207,
    			'nome' => 'Cristais Paulista',
    			'UF' => 'SP',
    		),
    		3414 => 
    		array (
    			'codigoIbge' => 3513306,
    			'nome' => 'Cruzália',
    			'UF' => 'SP',
    		),
    		3415 => 
    		array (
    			'codigoIbge' => 3513405,
    			'nome' => 'Cruzeiro',
    			'UF' => 'SP',
    		),
    		3416 => 
    		array (
    			'codigoIbge' => 3513504,
    			'nome' => 'Cubatão',
    			'UF' => 'SP',
    		),
    		3417 => 
    		array (
    			'codigoIbge' => 3513603,
    			'nome' => 'Cunha',
    			'UF' => 'SP',
    		),
    		3418 => 
    		array (
    			'codigoIbge' => 3513702,
    			'nome' => 'Descalvado',
    			'UF' => 'SP',
    		),
    		3419 => 
    		array (
    			'codigoIbge' => 3513801,
    			'nome' => 'Diadema',
    			'UF' => 'SP',
    		),
    		3420 => 
    		array (
    			'codigoIbge' => 3513850,
    			'nome' => 'Dirce Reis',
    			'UF' => 'SP',
    		),
    		3421 => 
    		array (
    			'codigoIbge' => 3513900,
    			'nome' => 'Divinolândia',
    			'UF' => 'SP',
    		),
    		3422 => 
    		array (
    			'codigoIbge' => 3514007,
    			'nome' => 'Dobrada',
    			'UF' => 'SP',
    		),
    		3423 => 
    		array (
    			'codigoIbge' => 3514106,
    			'nome' => 'Dois Córregos',
    			'UF' => 'SP',
    		),
    		3424 => 
    		array (
    			'codigoIbge' => 3514205,
    			'nome' => 'Dolcinópolis',
    			'UF' => 'SP',
    		),
    		3425 => 
    		array (
    			'codigoIbge' => 3514304,
    			'nome' => 'Dourado',
    			'UF' => 'SP',
    		),
    		3426 => 
    		array (
    			'codigoIbge' => 3514403,
    			'nome' => 'Dracena',
    			'UF' => 'SP',
    		),
    		3427 => 
    		array (
    			'codigoIbge' => 3514502,
    			'nome' => 'Duartina',
    			'UF' => 'SP',
    		),
    		3428 => 
    		array (
    			'codigoIbge' => 3514601,
    			'nome' => 'Dumont',
    			'UF' => 'SP',
    		),
    		3429 => 
    		array (
    			'codigoIbge' => 3514700,
    			'nome' => 'Echaporã',
    			'UF' => 'SP',
    		),
    		3430 => 
    		array (
    			'codigoIbge' => 3514809,
    			'nome' => 'Eldorado',
    			'UF' => 'SP',
    		),
    		3431 => 
    		array (
    			'codigoIbge' => 3514908,
    			'nome' => 'Elias Fausto',
    			'UF' => 'SP',
    		),
    		3432 => 
    		array (
    			'codigoIbge' => 3514924,
    			'nome' => 'Elisiário',
    			'UF' => 'SP',
    		),
    		3433 => 
    		array (
    			'codigoIbge' => 3514957,
    			'nome' => 'Embaúba',
    			'UF' => 'SP',
    		),
    		3434 => 
    		array (
    			'codigoIbge' => 3515004,
    			'nome' => 'Embu das Artes',
    			'UF' => 'SP',
    		),
    		3435 => 
    		array (
    			'codigoIbge' => 3515103,
    			'nome' => 'Embu-Guaçu',
    			'UF' => 'SP',
    		),
    		3436 => 
    		array (
    			'codigoIbge' => 3515129,
    			'nome' => 'Emilianópolis',
    			'UF' => 'SP',
    		),
    		3437 => 
    		array (
    			'codigoIbge' => 3515152,
    			'nome' => 'Engenheiro Coelho',
    			'UF' => 'SP',
    		),
    		3438 => 
    		array (
    			'codigoIbge' => 3515186,
    			'nome' => 'Espírito Santo do Pinhal',
    			'UF' => 'SP',
    		),
    		3439 => 
    		array (
    			'codigoIbge' => 3515194,
    			'nome' => 'Espírito Santo do Turvo',
    			'UF' => 'SP',
    		),
    		3440 => 
    		array (
    			'codigoIbge' => 3515202,
    			'nome' => 'Estrela d\'Oeste',
    			'UF' => 'SP',
    		),
    		3441 => 
    		array (
    			'codigoIbge' => 3515301,
    			'nome' => 'Estrela do Norte',
    			'UF' => 'SP',
    		),
    		3442 => 
    		array (
    			'codigoIbge' => 3515350,
    			'nome' => 'Euclides da Cunha Paulista',
    			'UF' => 'SP',
    		),
    		3443 => 
    		array (
    			'codigoIbge' => 3515400,
    			'nome' => 'Fartura',
    			'UF' => 'SP',
    		),
    		3444 => 
    		array (
    			'codigoIbge' => 3515509,
    			'nome' => 'Fernandópolis',
    			'UF' => 'SP',
    		),
    		3445 => 
    		array (
    			'codigoIbge' => 3515608,
    			'nome' => 'Fernando Prestes',
    			'UF' => 'SP',
    		),
    		3446 => 
    		array (
    			'codigoIbge' => 3515657,
    			'nome' => 'Fernão',
    			'UF' => 'SP',
    		),
    		3447 => 
    		array (
    			'codigoIbge' => 3515707,
    			'nome' => 'Ferraz de Vasconcelos',
    			'UF' => 'SP',
    		),
    		3448 => 
    		array (
    			'codigoIbge' => 3515806,
    			'nome' => 'Flora Rica',
    			'UF' => 'SP',
    		),
    		3449 => 
    		array (
    			'codigoIbge' => 3515905,
    			'nome' => 'Floreal',
    			'UF' => 'SP',
    		),
    		3450 => 
    		array (
    			'codigoIbge' => 3516002,
    			'nome' => 'Flórida Paulista',
    			'UF' => 'SP',
    		),
    		3451 => 
    		array (
    			'codigoIbge' => 3516101,
    			'nome' => 'Florínea',
    			'UF' => 'SP',
    		),
    		3452 => 
    		array (
    			'codigoIbge' => 3516200,
    			'nome' => 'Franca',
    			'UF' => 'SP',
    		),
    		3453 => 
    		array (
    			'codigoIbge' => 3516309,
    			'nome' => 'Francisco Morato',
    			'UF' => 'SP',
    		),
    		3454 => 
    		array (
    			'codigoIbge' => 3516408,
    			'nome' => 'Franco da Rocha',
    			'UF' => 'SP',
    		),
    		3455 => 
    		array (
    			'codigoIbge' => 3516507,
    			'nome' => 'Gabriel Monteiro',
    			'UF' => 'SP',
    		),
    		3456 => 
    		array (
    			'codigoIbge' => 3516606,
    			'nome' => 'Gália',
    			'UF' => 'SP',
    		),
    		3457 => 
    		array (
    			'codigoIbge' => 3516705,
    			'nome' => 'Garça',
    			'UF' => 'SP',
    		),
    		3458 => 
    		array (
    			'codigoIbge' => 3516804,
    			'nome' => 'Gastão Vidigal',
    			'UF' => 'SP',
    		),
    		3459 => 
    		array (
    			'codigoIbge' => 3516853,
    			'nome' => 'Gavião Peixoto',
    			'UF' => 'SP',
    		),
    		3460 => 
    		array (
    			'codigoIbge' => 3516903,
    			'nome' => 'General Salgado',
    			'UF' => 'SP',
    		),
    		3461 => 
    		array (
    			'codigoIbge' => 3517000,
    			'nome' => 'Getulina',
    			'UF' => 'SP',
    		),
    		3462 => 
    		array (
    			'codigoIbge' => 3517109,
    			'nome' => 'Glicério',
    			'UF' => 'SP',
    		),
    		3463 => 
    		array (
    			'codigoIbge' => 3517208,
    			'nome' => 'Guaiçara',
    			'UF' => 'SP',
    		),
    		3464 => 
    		array (
    			'codigoIbge' => 3517307,
    			'nome' => 'Guaimbê',
    			'UF' => 'SP',
    		),
    		3465 => 
    		array (
    			'codigoIbge' => 3517406,
    			'nome' => 'Guaíra',
    			'UF' => 'SP',
    		),
    		3466 => 
    		array (
    			'codigoIbge' => 3517505,
    			'nome' => 'Guapiaçu',
    			'UF' => 'SP',
    		),
    		3467 => 
    		array (
    			'codigoIbge' => 3517604,
    			'nome' => 'Guapiara',
    			'UF' => 'SP',
    		),
    		3468 => 
    		array (
    			'codigoIbge' => 3517703,
    			'nome' => 'Guará',
    			'UF' => 'SP',
    		),
    		3469 => 
    		array (
    			'codigoIbge' => 3517802,
    			'nome' => 'Guaraçaí',
    			'UF' => 'SP',
    		),
    		3470 => 
    		array (
    			'codigoIbge' => 3517901,
    			'nome' => 'Guaraci',
    			'UF' => 'SP',
    		),
    		3471 => 
    		array (
    			'codigoIbge' => 3518008,
    			'nome' => 'Guarani d\'Oeste',
    			'UF' => 'SP',
    		),
    		3472 => 
    		array (
    			'codigoIbge' => 3518107,
    			'nome' => 'Guarantã',
    			'UF' => 'SP',
    		),
    		3473 => 
    		array (
    			'codigoIbge' => 3518206,
    			'nome' => 'Guararapes',
    			'UF' => 'SP',
    		),
    		3474 => 
    		array (
    			'codigoIbge' => 3518305,
    			'nome' => 'Guararema',
    			'UF' => 'SP',
    		),
    		3475 => 
    		array (
    			'codigoIbge' => 3518404,
    			'nome' => 'Guaratinguetá',
    			'UF' => 'SP',
    		),
    		3476 => 
    		array (
    			'codigoIbge' => 3518503,
    			'nome' => 'Guareí',
    			'UF' => 'SP',
    		),
    		3477 => 
    		array (
    			'codigoIbge' => 3518602,
    			'nome' => 'Guariba',
    			'UF' => 'SP',
    		),
    		3478 => 
    		array (
    			'codigoIbge' => 3518701,
    			'nome' => 'Guarujá',
    			'UF' => 'SP',
    		),
    		3479 => 
    		array (
    			'codigoIbge' => 3518800,
    			'nome' => 'Guarulhos',
    			'UF' => 'SP',
    		),
    		3480 => 
    		array (
    			'codigoIbge' => 3518859,
    			'nome' => 'Guatapará',
    			'UF' => 'SP',
    		),
    		3481 => 
    		array (
    			'codigoIbge' => 3518909,
    			'nome' => 'Guzolândia',
    			'UF' => 'SP',
    		),
    		3482 => 
    		array (
    			'codigoIbge' => 3519006,
    			'nome' => 'Herculândia',
    			'UF' => 'SP',
    		),
    		3483 => 
    		array (
    			'codigoIbge' => 3519055,
    			'nome' => 'Holambra',
    			'UF' => 'SP',
    		),
    		3484 => 
    		array (
    			'codigoIbge' => 3519071,
    			'nome' => 'Hortolândia',
    			'UF' => 'SP',
    		),
    		3485 => 
    		array (
    			'codigoIbge' => 3519105,
    			'nome' => 'Iacanga',
    			'UF' => 'SP',
    		),
    		3486 => 
    		array (
    			'codigoIbge' => 3519204,
    			'nome' => 'Iacri',
    			'UF' => 'SP',
    		),
    		3487 => 
    		array (
    			'codigoIbge' => 3519253,
    			'nome' => 'Iaras',
    			'UF' => 'SP',
    		),
    		3488 => 
    		array (
    			'codigoIbge' => 3519303,
    			'nome' => 'Ibaté',
    			'UF' => 'SP',
    		),
    		3489 => 
    		array (
    			'codigoIbge' => 3519402,
    			'nome' => 'Ibirá',
    			'UF' => 'SP',
    		),
    		3490 => 
    		array (
    			'codigoIbge' => 3519501,
    			'nome' => 'Ibirarema',
    			'UF' => 'SP',
    		),
    		3491 => 
    		array (
    			'codigoIbge' => 3519600,
    			'nome' => 'Ibitinga',
    			'UF' => 'SP',
    		),
    		3492 => 
    		array (
    			'codigoIbge' => 3519709,
    			'nome' => 'Ibiúna',
    			'UF' => 'SP',
    		),
    		3493 => 
    		array (
    			'codigoIbge' => 3519808,
    			'nome' => 'Icém',
    			'UF' => 'SP',
    		),
    		3494 => 
    		array (
    			'codigoIbge' => 3519907,
    			'nome' => 'Iepê',
    			'UF' => 'SP',
    		),
    		3495 => 
    		array (
    			'codigoIbge' => 3520004,
    			'nome' => 'Igaraçu do Tietê',
    			'UF' => 'SP',
    		),
    		3496 => 
    		array (
    			'codigoIbge' => 3520103,
    			'nome' => 'Igarapava',
    			'UF' => 'SP',
    		),
    		3497 => 
    		array (
    			'codigoIbge' => 3520202,
    			'nome' => 'Igaratá',
    			'UF' => 'SP',
    		),
    		3498 => 
    		array (
    			'codigoIbge' => 3520301,
    			'nome' => 'Iguape',
    			'UF' => 'SP',
    		),
    		3499 => 
    		array (
    			'codigoIbge' => 3520400,
    			'nome' => 'Ilhabela',
    			'UF' => 'SP',
    		),
    		3500 => 
    		array (
    			'codigoIbge' => 3520426,
    			'nome' => 'Ilha Comprida',
    			'UF' => 'SP',
    		),
    		3501 => 
    		array (
    			'codigoIbge' => 3520442,
    			'nome' => 'Ilha Solteira',
    			'UF' => 'SP',
    		),
    		3502 => 
    		array (
    			'codigoIbge' => 3520509,
    			'nome' => 'Indaiatuba',
    			'UF' => 'SP',
    		),
    		3503 => 
    		array (
    			'codigoIbge' => 3520608,
    			'nome' => 'Indiana',
    			'UF' => 'SP',
    		),
    		3504 => 
    		array (
    			'codigoIbge' => 3520707,
    			'nome' => 'Indiaporã',
    			'UF' => 'SP',
    		),
    		3505 => 
    		array (
    			'codigoIbge' => 3520806,
    			'nome' => 'Inúbia Paulista',
    			'UF' => 'SP',
    		),
    		3506 => 
    		array (
    			'codigoIbge' => 3520905,
    			'nome' => 'Ipaussu',
    			'UF' => 'SP',
    		),
    		3507 => 
    		array (
    			'codigoIbge' => 3521002,
    			'nome' => 'Iperó',
    			'UF' => 'SP',
    		),
    		3508 => 
    		array (
    			'codigoIbge' => 3521101,
    			'nome' => 'Ipeúna',
    			'UF' => 'SP',
    		),
    		3509 => 
    		array (
    			'codigoIbge' => 3521150,
    			'nome' => 'Ipiguá',
    			'UF' => 'SP',
    		),
    		3510 => 
    		array (
    			'codigoIbge' => 3521200,
    			'nome' => 'Iporanga',
    			'UF' => 'SP',
    		),
    		3511 => 
    		array (
    			'codigoIbge' => 3521309,
    			'nome' => 'Ipuã',
    			'UF' => 'SP',
    		),
    		3512 => 
    		array (
    			'codigoIbge' => 3521408,
    			'nome' => 'Iracemápolis',
    			'UF' => 'SP',
    		),
    		3513 => 
    		array (
    			'codigoIbge' => 3521507,
    			'nome' => 'Irapuã',
    			'UF' => 'SP',
    		),
    		3514 => 
    		array (
    			'codigoIbge' => 3521606,
    			'nome' => 'Irapuru',
    			'UF' => 'SP',
    		),
    		3515 => 
    		array (
    			'codigoIbge' => 3521705,
    			'nome' => 'Itaberá',
    			'UF' => 'SP',
    		),
    		3516 => 
    		array (
    			'codigoIbge' => 3521804,
    			'nome' => 'Itaí',
    			'UF' => 'SP',
    		),
    		3517 => 
    		array (
    			'codigoIbge' => 3521903,
    			'nome' => 'Itajobi',
    			'UF' => 'SP',
    		),
    		3518 => 
    		array (
    			'codigoIbge' => 3522000,
    			'nome' => 'Itaju',
    			'UF' => 'SP',
    		),
    		3519 => 
    		array (
    			'codigoIbge' => 3522109,
    			'nome' => 'Itanhaém',
    			'UF' => 'SP',
    		),
    		3520 => 
    		array (
    			'codigoIbge' => 3522158,
    			'nome' => 'Itaoca',
    			'UF' => 'SP',
    		),
    		3521 => 
    		array (
    			'codigoIbge' => 3522208,
    			'nome' => 'Itapecerica da Serra',
    			'UF' => 'SP',
    		),
    		3522 => 
    		array (
    			'codigoIbge' => 3522307,
    			'nome' => 'Itapetininga',
    			'UF' => 'SP',
    		),
    		3523 => 
    		array (
    			'codigoIbge' => 3522406,
    			'nome' => 'Itapeva',
    			'UF' => 'SP',
    		),
    		3524 => 
    		array (
    			'codigoIbge' => 3522505,
    			'nome' => 'Itapevi',
    			'UF' => 'SP',
    		),
    		3525 => 
    		array (
    			'codigoIbge' => 3522604,
    			'nome' => 'Itapira',
    			'UF' => 'SP',
    		),
    		3526 => 
    		array (
    			'codigoIbge' => 3522653,
    			'nome' => 'Itapirapuã Paulista',
    			'UF' => 'SP',
    		),
    		3527 => 
    		array (
    			'codigoIbge' => 3522703,
    			'nome' => 'Itápolis',
    			'UF' => 'SP',
    		),
    		3528 => 
    		array (
    			'codigoIbge' => 3522802,
    			'nome' => 'Itaporanga',
    			'UF' => 'SP',
    		),
    		3529 => 
    		array (
    			'codigoIbge' => 3522901,
    			'nome' => 'Itapuí',
    			'UF' => 'SP',
    		),
    		3530 => 
    		array (
    			'codigoIbge' => 3523008,
    			'nome' => 'Itapura',
    			'UF' => 'SP',
    		),
    		3531 => 
    		array (
    			'codigoIbge' => 3523107,
    			'nome' => 'Itaquaquecetuba',
    			'UF' => 'SP',
    		),
    		3532 => 
    		array (
    			'codigoIbge' => 3523206,
    			'nome' => 'Itararé',
    			'UF' => 'SP',
    		),
    		3533 => 
    		array (
    			'codigoIbge' => 3523305,
    			'nome' => 'Itariri',
    			'UF' => 'SP',
    		),
    		3534 => 
    		array (
    			'codigoIbge' => 3523404,
    			'nome' => 'Itatiba',
    			'UF' => 'SP',
    		),
    		3535 => 
    		array (
    			'codigoIbge' => 3523503,
    			'nome' => 'Itatinga',
    			'UF' => 'SP',
    		),
    		3536 => 
    		array (
    			'codigoIbge' => 3523602,
    			'nome' => 'Itirapina',
    			'UF' => 'SP',
    		),
    		3537 => 
    		array (
    			'codigoIbge' => 3523701,
    			'nome' => 'Itirapuã',
    			'UF' => 'SP',
    		),
    		3538 => 
    		array (
    			'codigoIbge' => 3523800,
    			'nome' => 'Itobi',
    			'UF' => 'SP',
    		),
    		3539 => 
    		array (
    			'codigoIbge' => 3523909,
    			'nome' => 'Itu',
    			'UF' => 'SP',
    		),
    		3540 => 
    		array (
    			'codigoIbge' => 3524006,
    			'nome' => 'Itupeva',
    			'UF' => 'SP',
    		),
    		3541 => 
    		array (
    			'codigoIbge' => 3524105,
    			'nome' => 'Ituverava',
    			'UF' => 'SP',
    		),
    		3542 => 
    		array (
    			'codigoIbge' => 3524204,
    			'nome' => 'Jaborandi',
    			'UF' => 'SP',
    		),
    		3543 => 
    		array (
    			'codigoIbge' => 3524303,
    			'nome' => 'Jaboticabal',
    			'UF' => 'SP',
    		),
    		3544 => 
    		array (
    			'codigoIbge' => 3524402,
    			'nome' => 'Jacareí',
    			'UF' => 'SP',
    		),
    		3545 => 
    		array (
    			'codigoIbge' => 3524501,
    			'nome' => 'Jaci',
    			'UF' => 'SP',
    		),
    		3546 => 
    		array (
    			'codigoIbge' => 3524600,
    			'nome' => 'Jacupiranga',
    			'UF' => 'SP',
    		),
    		3547 => 
    		array (
    			'codigoIbge' => 3524709,
    			'nome' => 'Jaguariúna',
    			'UF' => 'SP',
    		),
    		3548 => 
    		array (
    			'codigoIbge' => 3524808,
    			'nome' => 'Jales',
    			'UF' => 'SP',
    		),
    		3549 => 
    		array (
    			'codigoIbge' => 3524907,
    			'nome' => 'Jambeiro',
    			'UF' => 'SP',
    		),
    		3550 => 
    		array (
    			'codigoIbge' => 3525003,
    			'nome' => 'Jandira',
    			'UF' => 'SP',
    		),
    		3551 => 
    		array (
    			'codigoIbge' => 3525102,
    			'nome' => 'Jardinópolis',
    			'UF' => 'SP',
    		),
    		3552 => 
    		array (
    			'codigoIbge' => 3525201,
    			'nome' => 'Jarinu',
    			'UF' => 'SP',
    		),
    		3553 => 
    		array (
    			'codigoIbge' => 3525300,
    			'nome' => 'Jaú',
    			'UF' => 'SP',
    		),
    		3554 => 
    		array (
    			'codigoIbge' => 3525409,
    			'nome' => 'Jeriquara',
    			'UF' => 'SP',
    		),
    		3555 => 
    		array (
    			'codigoIbge' => 3525508,
    			'nome' => 'Joanópolis',
    			'UF' => 'SP',
    		),
    		3556 => 
    		array (
    			'codigoIbge' => 3525607,
    			'nome' => 'João Ramalho',
    			'UF' => 'SP',
    		),
    		3557 => 
    		array (
    			'codigoIbge' => 3525706,
    			'nome' => 'José Bonifácio',
    			'UF' => 'SP',
    		),
    		3558 => 
    		array (
    			'codigoIbge' => 3525805,
    			'nome' => 'Júlio Mesquita',
    			'UF' => 'SP',
    		),
    		3559 => 
    		array (
    			'codigoIbge' => 3525854,
    			'nome' => 'Jumirim',
    			'UF' => 'SP',
    		),
    		3560 => 
    		array (
    			'codigoIbge' => 3525904,
    			'nome' => 'Jundiaí',
    			'UF' => 'SP',
    		),
    		3561 => 
    		array (
    			'codigoIbge' => 3526001,
    			'nome' => 'Junqueirópolis',
    			'UF' => 'SP',
    		),
    		3562 => 
    		array (
    			'codigoIbge' => 3526100,
    			'nome' => 'Juquiá',
    			'UF' => 'SP',
    		),
    		3563 => 
    		array (
    			'codigoIbge' => 3526209,
    			'nome' => 'Juquitiba',
    			'UF' => 'SP',
    		),
    		3564 => 
    		array (
    			'codigoIbge' => 3526308,
    			'nome' => 'Lagoinha',
    			'UF' => 'SP',
    		),
    		3565 => 
    		array (
    			'codigoIbge' => 3526407,
    			'nome' => 'Laranjal Paulista',
    			'UF' => 'SP',
    		),
    		3566 => 
    		array (
    			'codigoIbge' => 3526506,
    			'nome' => 'Lavínia',
    			'UF' => 'SP',
    		),
    		3567 => 
    		array (
    			'codigoIbge' => 3526605,
    			'nome' => 'Lavrinhas',
    			'UF' => 'SP',
    		),
    		3568 => 
    		array (
    			'codigoIbge' => 3526704,
    			'nome' => 'Leme',
    			'UF' => 'SP',
    		),
    		3569 => 
    		array (
    			'codigoIbge' => 3526803,
    			'nome' => 'Lençóis Paulista',
    			'UF' => 'SP',
    		),
    		3570 => 
    		array (
    			'codigoIbge' => 3526902,
    			'nome' => 'Limeira',
    			'UF' => 'SP',
    		),
    		3571 => 
    		array (
    			'codigoIbge' => 3527009,
    			'nome' => 'Lindóia',
    			'UF' => 'SP',
    		),
    		3572 => 
    		array (
    			'codigoIbge' => 3527108,
    			'nome' => 'Lins',
    			'UF' => 'SP',
    		),
    		3573 => 
    		array (
    			'codigoIbge' => 3527207,
    			'nome' => 'Lorena',
    			'UF' => 'SP',
    		),
    		3574 => 
    		array (
    			'codigoIbge' => 3527256,
    			'nome' => 'Lourdes',
    			'UF' => 'SP',
    		),
    		3575 => 
    		array (
    			'codigoIbge' => 3527306,
    			'nome' => 'Louveira',
    			'UF' => 'SP',
    		),
    		3576 => 
    		array (
    			'codigoIbge' => 3527405,
    			'nome' => 'Lucélia',
    			'UF' => 'SP',
    		),
    		3577 => 
    		array (
    			'codigoIbge' => 3527504,
    			'nome' => 'Lucianópolis',
    			'UF' => 'SP',
    		),
    		3578 => 
    		array (
    			'codigoIbge' => 3527603,
    			'nome' => 'Luís Antônio',
    			'UF' => 'SP',
    		),
    		3579 => 
    		array (
    			'codigoIbge' => 3527702,
    			'nome' => 'Luiziânia',
    			'UF' => 'SP',
    		),
    		3580 => 
    		array (
    			'codigoIbge' => 3527801,
    			'nome' => 'Lupércio',
    			'UF' => 'SP',
    		),
    		3581 => 
    		array (
    			'codigoIbge' => 3527900,
    			'nome' => 'Lutécia',
    			'UF' => 'SP',
    		),
    		3582 => 
    		array (
    			'codigoIbge' => 3528007,
    			'nome' => 'Macatuba',
    			'UF' => 'SP',
    		),
    		3583 => 
    		array (
    			'codigoIbge' => 3528106,
    			'nome' => 'Macaubal',
    			'UF' => 'SP',
    		),
    		3584 => 
    		array (
    			'codigoIbge' => 3528205,
    			'nome' => 'Macedônia',
    			'UF' => 'SP',
    		),
    		3585 => 
    		array (
    			'codigoIbge' => 3528304,
    			'nome' => 'Magda',
    			'UF' => 'SP',
    		),
    		3586 => 
    		array (
    			'codigoIbge' => 3528403,
    			'nome' => 'Mairinque',
    			'UF' => 'SP',
    		),
    		3587 => 
    		array (
    			'codigoIbge' => 3528502,
    			'nome' => 'Mairiporã',
    			'UF' => 'SP',
    		),
    		3588 => 
    		array (
    			'codigoIbge' => 3528601,
    			'nome' => 'Manduri',
    			'UF' => 'SP',
    		),
    		3589 => 
    		array (
    			'codigoIbge' => 3528700,
    			'nome' => 'Marabá Paulista',
    			'UF' => 'SP',
    		),
    		3590 => 
    		array (
    			'codigoIbge' => 3528809,
    			'nome' => 'Maracaí',
    			'UF' => 'SP',
    		),
    		3591 => 
    		array (
    			'codigoIbge' => 3528858,
    			'nome' => 'Marapoama',
    			'UF' => 'SP',
    		),
    		3592 => 
    		array (
    			'codigoIbge' => 3528908,
    			'nome' => 'Mariápolis',
    			'UF' => 'SP',
    		),
    		3593 => 
    		array (
    			'codigoIbge' => 3529005,
    			'nome' => 'Marília',
    			'UF' => 'SP',
    		),
    		3594 => 
    		array (
    			'codigoIbge' => 3529104,
    			'nome' => 'Marinópolis',
    			'UF' => 'SP',
    		),
    		3595 => 
    		array (
    			'codigoIbge' => 3529203,
    			'nome' => 'Martinópolis',
    			'UF' => 'SP',
    		),
    		3596 => 
    		array (
    			'codigoIbge' => 3529302,
    			'nome' => 'Matão',
    			'UF' => 'SP',
    		),
    		3597 => 
    		array (
    			'codigoIbge' => 3529401,
    			'nome' => 'Mauá',
    			'UF' => 'SP',
    		),
    		3598 => 
    		array (
    			'codigoIbge' => 3529500,
    			'nome' => 'Mendonça',
    			'UF' => 'SP',
    		),
    		3599 => 
    		array (
    			'codigoIbge' => 3529609,
    			'nome' => 'Meridiano',
    			'UF' => 'SP',
    		),
    		3600 => 
    		array (
    			'codigoIbge' => 3529658,
    			'nome' => 'Mesópolis',
    			'UF' => 'SP',
    		),
    		3601 => 
    		array (
    			'codigoIbge' => 3529708,
    			'nome' => 'Miguelópolis',
    			'UF' => 'SP',
    		),
    		3602 => 
    		array (
    			'codigoIbge' => 3529807,
    			'nome' => 'Mineiros do Tietê',
    			'UF' => 'SP',
    		),
    		3603 => 
    		array (
    			'codigoIbge' => 3529906,
    			'nome' => 'Miracatu',
    			'UF' => 'SP',
    		),
    		3604 => 
    		array (
    			'codigoIbge' => 3530003,
    			'nome' => 'Mira Estrela',
    			'UF' => 'SP',
    		),
    		3605 => 
    		array (
    			'codigoIbge' => 3530102,
    			'nome' => 'Mirandópolis',
    			'UF' => 'SP',
    		),
    		3606 => 
    		array (
    			'codigoIbge' => 3530201,
    			'nome' => 'Mirante do Paranapanema',
    			'UF' => 'SP',
    		),
    		3607 => 
    		array (
    			'codigoIbge' => 3530300,
    			'nome' => 'Mirassol',
    			'UF' => 'SP',
    		),
    		3608 => 
    		array (
    			'codigoIbge' => 3530409,
    			'nome' => 'Mirassolândia',
    			'UF' => 'SP',
    		),
    		3609 => 
    		array (
    			'codigoIbge' => 3530508,
    			'nome' => 'Mococa',
    			'UF' => 'SP',
    		),
    		3610 => 
    		array (
    			'codigoIbge' => 3530607,
    			'nome' => 'Mogi das Cruzes',
    			'UF' => 'SP',
    		),
    		3611 => 
    		array (
    			'codigoIbge' => 3530706,
    			'nome' => 'Mogi Guaçu',
    			'UF' => 'SP',
    		),
    		3612 => 
    		array (
    			'codigoIbge' => 3530805,
    			'nome' => 'Mogi Mirim',
    			'UF' => 'SP',
    		),
    		3613 => 
    		array (
    			'codigoIbge' => 3530904,
    			'nome' => 'Mombuca',
    			'UF' => 'SP',
    		),
    		3614 => 
    		array (
    			'codigoIbge' => 3531001,
    			'nome' => 'Monções',
    			'UF' => 'SP',
    		),
    		3615 => 
    		array (
    			'codigoIbge' => 3531100,
    			'nome' => 'Mongaguá',
    			'UF' => 'SP',
    		),
    		3616 => 
    		array (
    			'codigoIbge' => 3531209,
    			'nome' => 'Monte Alegre do Sul',
    			'UF' => 'SP',
    		),
    		3617 => 
    		array (
    			'codigoIbge' => 3531308,
    			'nome' => 'Monte Alto',
    			'UF' => 'SP',
    		),
    		3618 => 
    		array (
    			'codigoIbge' => 3531407,
    			'nome' => 'Monte Aprazível',
    			'UF' => 'SP',
    		),
    		3619 => 
    		array (
    			'codigoIbge' => 3531506,
    			'nome' => 'Monte Azul Paulista',
    			'UF' => 'SP',
    		),
    		3620 => 
    		array (
    			'codigoIbge' => 3531605,
    			'nome' => 'Monte Castelo',
    			'UF' => 'SP',
    		),
    		3621 => 
    		array (
    			'codigoIbge' => 3531704,
    			'nome' => 'Monteiro Lobato',
    			'UF' => 'SP',
    		),
    		3622 => 
    		array (
    			'codigoIbge' => 3531803,
    			'nome' => 'Monte Mor',
    			'UF' => 'SP',
    		),
    		3623 => 
    		array (
    			'codigoIbge' => 3531902,
    			'nome' => 'Morro Agudo',
    			'UF' => 'SP',
    		),
    		3624 => 
    		array (
    			'codigoIbge' => 3532009,
    			'nome' => 'Morungaba',
    			'UF' => 'SP',
    		),
    		3625 => 
    		array (
    			'codigoIbge' => 3532058,
    			'nome' => 'Motuca',
    			'UF' => 'SP',
    		),
    		3626 => 
    		array (
    			'codigoIbge' => 3532108,
    			'nome' => 'Murutinga do Sul',
    			'UF' => 'SP',
    		),
    		3627 => 
    		array (
    			'codigoIbge' => 3532157,
    			'nome' => 'Nantes',
    			'UF' => 'SP',
    		),
    		3628 => 
    		array (
    			'codigoIbge' => 3532207,
    			'nome' => 'Narandiba',
    			'UF' => 'SP',
    		),
    		3629 => 
    		array (
    			'codigoIbge' => 3532306,
    			'nome' => 'Natividade da Serra',
    			'UF' => 'SP',
    		),
    		3630 => 
    		array (
    			'codigoIbge' => 3532405,
    			'nome' => 'Nazaré Paulista',
    			'UF' => 'SP',
    		),
    		3631 => 
    		array (
    			'codigoIbge' => 3532504,
    			'nome' => 'Neves Paulista',
    			'UF' => 'SP',
    		),
    		3632 => 
    		array (
    			'codigoIbge' => 3532603,
    			'nome' => 'Nhandeara',
    			'UF' => 'SP',
    		),
    		3633 => 
    		array (
    			'codigoIbge' => 3532702,
    			'nome' => 'Nipoã',
    			'UF' => 'SP',
    		),
    		3634 => 
    		array (
    			'codigoIbge' => 3532801,
    			'nome' => 'Nova Aliança',
    			'UF' => 'SP',
    		),
    		3635 => 
    		array (
    			'codigoIbge' => 3532827,
    			'nome' => 'Nova Campina',
    			'UF' => 'SP',
    		),
    		3636 => 
    		array (
    			'codigoIbge' => 3532843,
    			'nome' => 'Nova Canaã Paulista',
    			'UF' => 'SP',
    		),
    		3637 => 
    		array (
    			'codigoIbge' => 3532868,
    			'nome' => 'Nova Castilho',
    			'UF' => 'SP',
    		),
    		3638 => 
    		array (
    			'codigoIbge' => 3532900,
    			'nome' => 'Nova Europa',
    			'UF' => 'SP',
    		),
    		3639 => 
    		array (
    			'codigoIbge' => 3533007,
    			'nome' => 'Nova Granada',
    			'UF' => 'SP',
    		),
    		3640 => 
    		array (
    			'codigoIbge' => 3533106,
    			'nome' => 'Nova Guataporanga',
    			'UF' => 'SP',
    		),
    		3641 => 
    		array (
    			'codigoIbge' => 3533205,
    			'nome' => 'Nova Independência',
    			'UF' => 'SP',
    		),
    		3642 => 
    		array (
    			'codigoIbge' => 3533254,
    			'nome' => 'Novais',
    			'UF' => 'SP',
    		),
    		3643 => 
    		array (
    			'codigoIbge' => 3533304,
    			'nome' => 'Nova Luzitânia',
    			'UF' => 'SP',
    		),
    		3644 => 
    		array (
    			'codigoIbge' => 3533403,
    			'nome' => 'Nova Odessa',
    			'UF' => 'SP',
    		),
    		3645 => 
    		array (
    			'codigoIbge' => 3533502,
    			'nome' => 'Novo Horizonte',
    			'UF' => 'SP',
    		),
    		3646 => 
    		array (
    			'codigoIbge' => 3533601,
    			'nome' => 'Nuporanga',
    			'UF' => 'SP',
    		),
    		3647 => 
    		array (
    			'codigoIbge' => 3533700,
    			'nome' => 'Ocauçu',
    			'UF' => 'SP',
    		),
    		3648 => 
    		array (
    			'codigoIbge' => 3533809,
    			'nome' => 'Óleo',
    			'UF' => 'SP',
    		),
    		3649 => 
    		array (
    			'codigoIbge' => 3533908,
    			'nome' => 'Olímpia',
    			'UF' => 'SP',
    		),
    		3650 => 
    		array (
    			'codigoIbge' => 3534005,
    			'nome' => 'Onda Verde',
    			'UF' => 'SP',
    		),
    		3651 => 
    		array (
    			'codigoIbge' => 3534104,
    			'nome' => 'Oriente',
    			'UF' => 'SP',
    		),
    		3652 => 
    		array (
    			'codigoIbge' => 3534203,
    			'nome' => 'Orindiúva',
    			'UF' => 'SP',
    		),
    		3653 => 
    		array (
    			'codigoIbge' => 3534302,
    			'nome' => 'Orlândia',
    			'UF' => 'SP',
    		),
    		3654 => 
    		array (
    			'codigoIbge' => 3534401,
    			'nome' => 'Osasco',
    			'UF' => 'SP',
    		),
    		3655 => 
    		array (
    			'codigoIbge' => 3534500,
    			'nome' => 'Oscar Bressane',
    			'UF' => 'SP',
    		),
    		3656 => 
    		array (
    			'codigoIbge' => 3534609,
    			'nome' => 'Osvaldo Cruz',
    			'UF' => 'SP',
    		),
    		3657 => 
    		array (
    			'codigoIbge' => 3534708,
    			'nome' => 'Ourinhos',
    			'UF' => 'SP',
    		),
    		3658 => 
    		array (
    			'codigoIbge' => 3534757,
    			'nome' => 'Ouroeste',
    			'UF' => 'SP',
    		),
    		3659 => 
    		array (
    			'codigoIbge' => 3534807,
    			'nome' => 'Ouro Verde',
    			'UF' => 'SP',
    		),
    		3660 => 
    		array (
    			'codigoIbge' => 3534906,
    			'nome' => 'Pacaembu',
    			'UF' => 'SP',
    		),
    		3661 => 
    		array (
    			'codigoIbge' => 3535002,
    			'nome' => 'Palestina',
    			'UF' => 'SP',
    		),
    		3662 => 
    		array (
    			'codigoIbge' => 3535101,
    			'nome' => 'Palmares Paulista',
    			'UF' => 'SP',
    		),
    		3663 => 
    		array (
    			'codigoIbge' => 3535200,
    			'nome' => 'Palmeira d\'Oeste',
    			'UF' => 'SP',
    		),
    		3664 => 
    		array (
    			'codigoIbge' => 3535309,
    			'nome' => 'Palmital',
    			'UF' => 'SP',
    		),
    		3665 => 
    		array (
    			'codigoIbge' => 3535408,
    			'nome' => 'Panorama',
    			'UF' => 'SP',
    		),
    		3666 => 
    		array (
    			'codigoIbge' => 3535507,
    			'nome' => 'Paraguaçu Paulista',
    			'UF' => 'SP',
    		),
    		3667 => 
    		array (
    			'codigoIbge' => 3535606,
    			'nome' => 'Paraibuna',
    			'UF' => 'SP',
    		),
    		3668 => 
    		array (
    			'codigoIbge' => 3535705,
    			'nome' => 'Paraíso',
    			'UF' => 'SP',
    		),
    		3669 => 
    		array (
    			'codigoIbge' => 3535804,
    			'nome' => 'Paranapanema',
    			'UF' => 'SP',
    		),
    		3670 => 
    		array (
    			'codigoIbge' => 3535903,
    			'nome' => 'Paranapuã',
    			'UF' => 'SP',
    		),
    		3671 => 
    		array (
    			'codigoIbge' => 3536000,
    			'nome' => 'Parapuã',
    			'UF' => 'SP',
    		),
    		3672 => 
    		array (
    			'codigoIbge' => 3536109,
    			'nome' => 'Pardinho',
    			'UF' => 'SP',
    		),
    		3673 => 
    		array (
    			'codigoIbge' => 3536208,
    			'nome' => 'Pariquera-Açu',
    			'UF' => 'SP',
    		),
    		3674 => 
    		array (
    			'codigoIbge' => 3536257,
    			'nome' => 'Parisi',
    			'UF' => 'SP',
    		),
    		3675 => 
    		array (
    			'codigoIbge' => 3536307,
    			'nome' => 'Patrocínio Paulista',
    			'UF' => 'SP',
    		),
    		3676 => 
    		array (
    			'codigoIbge' => 3536406,
    			'nome' => 'Paulicéia',
    			'UF' => 'SP',
    		),
    		3677 => 
    		array (
    			'codigoIbge' => 3536505,
    			'nome' => 'Paulínia',
    			'UF' => 'SP',
    		),
    		3678 => 
    		array (
    			'codigoIbge' => 3536570,
    			'nome' => 'Paulistânia',
    			'UF' => 'SP',
    		),
    		3679 => 
    		array (
    			'codigoIbge' => 3536604,
    			'nome' => 'Paulo de Faria',
    			'UF' => 'SP',
    		),
    		3680 => 
    		array (
    			'codigoIbge' => 3536703,
    			'nome' => 'Pederneiras',
    			'UF' => 'SP',
    		),
    		3681 => 
    		array (
    			'codigoIbge' => 3536802,
    			'nome' => 'Pedra Bela',
    			'UF' => 'SP',
    		),
    		3682 => 
    		array (
    			'codigoIbge' => 3536901,
    			'nome' => 'Pedranópolis',
    			'UF' => 'SP',
    		),
    		3683 => 
    		array (
    			'codigoIbge' => 3537008,
    			'nome' => 'Pedregulho',
    			'UF' => 'SP',
    		),
    		3684 => 
    		array (
    			'codigoIbge' => 3537107,
    			'nome' => 'Pedreira',
    			'UF' => 'SP',
    		),
    		3685 => 
    		array (
    			'codigoIbge' => 3537156,
    			'nome' => 'Pedrinhas Paulista',
    			'UF' => 'SP',
    		),
    		3686 => 
    		array (
    			'codigoIbge' => 3537206,
    			'nome' => 'Pedro de Toledo',
    			'UF' => 'SP',
    		),
    		3687 => 
    		array (
    			'codigoIbge' => 3537305,
    			'nome' => 'Penápolis',
    			'UF' => 'SP',
    		),
    		3688 => 
    		array (
    			'codigoIbge' => 3537404,
    			'nome' => 'Pereira Barreto',
    			'UF' => 'SP',
    		),
    		3689 => 
    		array (
    			'codigoIbge' => 3537503,
    			'nome' => 'Pereiras',
    			'UF' => 'SP',
    		),
    		3690 => 
    		array (
    			'codigoIbge' => 3537602,
    			'nome' => 'Peruíbe',
    			'UF' => 'SP',
    		),
    		3691 => 
    		array (
    			'codigoIbge' => 3537701,
    			'nome' => 'Piacatu',
    			'UF' => 'SP',
    		),
    		3692 => 
    		array (
    			'codigoIbge' => 3537800,
    			'nome' => 'Piedade',
    			'UF' => 'SP',
    		),
    		3693 => 
    		array (
    			'codigoIbge' => 3537909,
    			'nome' => 'Pilar do Sul',
    			'UF' => 'SP',
    		),
    		3694 => 
    		array (
    			'codigoIbge' => 3538006,
    			'nome' => 'Pindamonhangaba',
    			'UF' => 'SP',
    		),
    		3695 => 
    		array (
    			'codigoIbge' => 3538105,
    			'nome' => 'Pindorama',
    			'UF' => 'SP',
    		),
    		3696 => 
    		array (
    			'codigoIbge' => 3538204,
    			'nome' => 'Pinhalzinho',
    			'UF' => 'SP',
    		),
    		3697 => 
    		array (
    			'codigoIbge' => 3538303,
    			'nome' => 'Piquerobi',
    			'UF' => 'SP',
    		),
    		3698 => 
    		array (
    			'codigoIbge' => 3538501,
    			'nome' => 'Piquete',
    			'UF' => 'SP',
    		),
    		3699 => 
    		array (
    			'codigoIbge' => 3538600,
    			'nome' => 'Piracaia',
    			'UF' => 'SP',
    		),
    		3700 => 
    		array (
    			'codigoIbge' => 3538709,
    			'nome' => 'Piracicaba',
    			'UF' => 'SP',
    		),
    		3701 => 
    		array (
    			'codigoIbge' => 3538808,
    			'nome' => 'Piraju',
    			'UF' => 'SP',
    		),
    		3702 => 
    		array (
    			'codigoIbge' => 3538907,
    			'nome' => 'Pirajuí',
    			'UF' => 'SP',
    		),
    		3703 => 
    		array (
    			'codigoIbge' => 3539004,
    			'nome' => 'Pirangi',
    			'UF' => 'SP',
    		),
    		3704 => 
    		array (
    			'codigoIbge' => 3539103,
    			'nome' => 'Pirapora do Bom Jesus',
    			'UF' => 'SP',
    		),
    		3705 => 
    		array (
    			'codigoIbge' => 3539202,
    			'nome' => 'Pirapozinho',
    			'UF' => 'SP',
    		),
    		3706 => 
    		array (
    			'codigoIbge' => 3539301,
    			'nome' => 'Pirassununga',
    			'UF' => 'SP',
    		),
    		3707 => 
    		array (
    			'codigoIbge' => 3539400,
    			'nome' => 'Piratininga',
    			'UF' => 'SP',
    		),
    		3708 => 
    		array (
    			'codigoIbge' => 3539509,
    			'nome' => 'Pitangueiras',
    			'UF' => 'SP',
    		),
    		3709 => 
    		array (
    			'codigoIbge' => 3539608,
    			'nome' => 'Planalto',
    			'UF' => 'SP',
    		),
    		3710 => 
    		array (
    			'codigoIbge' => 3539707,
    			'nome' => 'Platina',
    			'UF' => 'SP',
    		),
    		3711 => 
    		array (
    			'codigoIbge' => 3539806,
    			'nome' => 'Poá',
    			'UF' => 'SP',
    		),
    		3712 => 
    		array (
    			'codigoIbge' => 3539905,
    			'nome' => 'Poloni',
    			'UF' => 'SP',
    		),
    		3713 => 
    		array (
    			'codigoIbge' => 3540002,
    			'nome' => 'Pompéia',
    			'UF' => 'SP',
    		),
    		3714 => 
    		array (
    			'codigoIbge' => 3540101,
    			'nome' => 'Pongaí',
    			'UF' => 'SP',
    		),
    		3715 => 
    		array (
    			'codigoIbge' => 3540200,
    			'nome' => 'Pontal',
    			'UF' => 'SP',
    		),
    		3716 => 
    		array (
    			'codigoIbge' => 3540259,
    			'nome' => 'Pontalinda',
    			'UF' => 'SP',
    		),
    		3717 => 
    		array (
    			'codigoIbge' => 3540309,
    			'nome' => 'Pontes Gestal',
    			'UF' => 'SP',
    		),
    		3718 => 
    		array (
    			'codigoIbge' => 3540408,
    			'nome' => 'Populina',
    			'UF' => 'SP',
    		),
    		3719 => 
    		array (
    			'codigoIbge' => 3540507,
    			'nome' => 'Porangaba',
    			'UF' => 'SP',
    		),
    		3720 => 
    		array (
    			'codigoIbge' => 3540606,
    			'nome' => 'Porto Feliz',
    			'UF' => 'SP',
    		),
    		3721 => 
    		array (
    			'codigoIbge' => 3540705,
    			'nome' => 'Porto Ferreira',
    			'UF' => 'SP',
    		),
    		3722 => 
    		array (
    			'codigoIbge' => 3540754,
    			'nome' => 'Potim',
    			'UF' => 'SP',
    		),
    		3723 => 
    		array (
    			'codigoIbge' => 3540804,
    			'nome' => 'Potirendaba',
    			'UF' => 'SP',
    		),
    		3724 => 
    		array (
    			'codigoIbge' => 3540853,
    			'nome' => 'Pracinha',
    			'UF' => 'SP',
    		),
    		3725 => 
    		array (
    			'codigoIbge' => 3540903,
    			'nome' => 'Pradópolis',
    			'UF' => 'SP',
    		),
    		3726 => 
    		array (
    			'codigoIbge' => 3541000,
    			'nome' => 'Praia Grande',
    			'UF' => 'SP',
    		),
    		3727 => 
    		array (
    			'codigoIbge' => 3541059,
    			'nome' => 'Pratânia',
    			'UF' => 'SP',
    		),
    		3728 => 
    		array (
    			'codigoIbge' => 3541109,
    			'nome' => 'Presidente Alves',
    			'UF' => 'SP',
    		),
    		3729 => 
    		array (
    			'codigoIbge' => 3541208,
    			'nome' => 'Presidente Bernardes',
    			'UF' => 'SP',
    		),
    		3730 => 
    		array (
    			'codigoIbge' => 3541307,
    			'nome' => 'Presidente Epitácio',
    			'UF' => 'SP',
    		),
    		3731 => 
    		array (
    			'codigoIbge' => 3541406,
    			'nome' => 'Presidente Prudente',
    			'UF' => 'SP',
    		),
    		3732 => 
    		array (
    			'codigoIbge' => 3541505,
    			'nome' => 'Presidente Venceslau',
    			'UF' => 'SP',
    		),
    		3733 => 
    		array (
    			'codigoIbge' => 3541604,
    			'nome' => 'Promissão',
    			'UF' => 'SP',
    		),
    		3734 => 
    		array (
    			'codigoIbge' => 3541653,
    			'nome' => 'Quadra',
    			'UF' => 'SP',
    		),
    		3735 => 
    		array (
    			'codigoIbge' => 3541703,
    			'nome' => 'Quatá',
    			'UF' => 'SP',
    		),
    		3736 => 
    		array (
    			'codigoIbge' => 3541802,
    			'nome' => 'Queiroz',
    			'UF' => 'SP',
    		),
    		3737 => 
    		array (
    			'codigoIbge' => 3541901,
    			'nome' => 'Queluz',
    			'UF' => 'SP',
    		),
    		3738 => 
    		array (
    			'codigoIbge' => 3542008,
    			'nome' => 'Quintana',
    			'UF' => 'SP',
    		),
    		3739 => 
    		array (
    			'codigoIbge' => 3542107,
    			'nome' => 'Rafard',
    			'UF' => 'SP',
    		),
    		3740 => 
    		array (
    			'codigoIbge' => 3542206,
    			'nome' => 'Rancharia',
    			'UF' => 'SP',
    		),
    		3741 => 
    		array (
    			'codigoIbge' => 3542305,
    			'nome' => 'Redenção da Serra',
    			'UF' => 'SP',
    		),
    		3742 => 
    		array (
    			'codigoIbge' => 3542404,
    			'nome' => 'Regente Feijó',
    			'UF' => 'SP',
    		),
    		3743 => 
    		array (
    			'codigoIbge' => 3542503,
    			'nome' => 'Reginópolis',
    			'UF' => 'SP',
    		),
    		3744 => 
    		array (
    			'codigoIbge' => 3542602,
    			'nome' => 'Registro',
    			'UF' => 'SP',
    		),
    		3745 => 
    		array (
    			'codigoIbge' => 3542701,
    			'nome' => 'Restinga',
    			'UF' => 'SP',
    		),
    		3746 => 
    		array (
    			'codigoIbge' => 3542800,
    			'nome' => 'Ribeira',
    			'UF' => 'SP',
    		),
    		3747 => 
    		array (
    			'codigoIbge' => 3542909,
    			'nome' => 'Ribeirão Bonito',
    			'UF' => 'SP',
    		),
    		3748 => 
    		array (
    			'codigoIbge' => 3543006,
    			'nome' => 'Ribeirão Branco',
    			'UF' => 'SP',
    		),
    		3749 => 
    		array (
    			'codigoIbge' => 3543105,
    			'nome' => 'Ribeirão Corrente',
    			'UF' => 'SP',
    		),
    		3750 => 
    		array (
    			'codigoIbge' => 3543204,
    			'nome' => 'Ribeirão do Sul',
    			'UF' => 'SP',
    		),
    		3751 => 
    		array (
    			'codigoIbge' => 3543238,
    			'nome' => 'Ribeirão dos Índios',
    			'UF' => 'SP',
    		),
    		3752 => 
    		array (
    			'codigoIbge' => 3543253,
    			'nome' => 'Ribeirão Grande',
    			'UF' => 'SP',
    		),
    		3753 => 
    		array (
    			'codigoIbge' => 3543303,
    			'nome' => 'Ribeirão Pires',
    			'UF' => 'SP',
    		),
    		3754 => 
    		array (
    			'codigoIbge' => 3543402,
    			'nome' => 'Ribeirão Preto',
    			'UF' => 'SP',
    		),
    		3755 => 
    		array (
    			'codigoIbge' => 3543501,
    			'nome' => 'Riversul',
    			'UF' => 'SP',
    		),
    		3756 => 
    		array (
    			'codigoIbge' => 3543600,
    			'nome' => 'Rifaina',
    			'UF' => 'SP',
    		),
    		3757 => 
    		array (
    			'codigoIbge' => 3543709,
    			'nome' => 'Rincão',
    			'UF' => 'SP',
    		),
    		3758 => 
    		array (
    			'codigoIbge' => 3543808,
    			'nome' => 'Rinópolis',
    			'UF' => 'SP',
    		),
    		3759 => 
    		array (
    			'codigoIbge' => 3543907,
    			'nome' => 'Rio Claro',
    			'UF' => 'SP',
    		),
    		3760 => 
    		array (
    			'codigoIbge' => 3544004,
    			'nome' => 'Rio das Pedras',
    			'UF' => 'SP',
    		),
    		3761 => 
    		array (
    			'codigoIbge' => 3544103,
    			'nome' => 'Rio Grande da Serra',
    			'UF' => 'SP',
    		),
    		3762 => 
    		array (
    			'codigoIbge' => 3544202,
    			'nome' => 'Riolândia',
    			'UF' => 'SP',
    		),
    		3763 => 
    		array (
    			'codigoIbge' => 3544251,
    			'nome' => 'Rosana',
    			'UF' => 'SP',
    		),
    		3764 => 
    		array (
    			'codigoIbge' => 3544301,
    			'nome' => 'Roseira',
    			'UF' => 'SP',
    		),
    		3765 => 
    		array (
    			'codigoIbge' => 3544400,
    			'nome' => 'Rubiácea',
    			'UF' => 'SP',
    		),
    		3766 => 
    		array (
    			'codigoIbge' => 3544509,
    			'nome' => 'Rubinéia',
    			'UF' => 'SP',
    		),
    		3767 => 
    		array (
    			'codigoIbge' => 3544608,
    			'nome' => 'Sabino',
    			'UF' => 'SP',
    		),
    		3768 => 
    		array (
    			'codigoIbge' => 3544707,
    			'nome' => 'Sagres',
    			'UF' => 'SP',
    		),
    		3769 => 
    		array (
    			'codigoIbge' => 3544806,
    			'nome' => 'Sales',
    			'UF' => 'SP',
    		),
    		3770 => 
    		array (
    			'codigoIbge' => 3544905,
    			'nome' => 'Sales Oliveira',
    			'UF' => 'SP',
    		),
    		3771 => 
    		array (
    			'codigoIbge' => 3545001,
    			'nome' => 'Salesópolis',
    			'UF' => 'SP',
    		),
    		3772 => 
    		array (
    			'codigoIbge' => 3545100,
    			'nome' => 'Salmourão',
    			'UF' => 'SP',
    		),
    		3773 => 
    		array (
    			'codigoIbge' => 3545159,
    			'nome' => 'Saltinho',
    			'UF' => 'SP',
    		),
    		3774 => 
    		array (
    			'codigoIbge' => 3545209,
    			'nome' => 'Salto',
    			'UF' => 'SP',
    		),
    		3775 => 
    		array (
    			'codigoIbge' => 3545308,
    			'nome' => 'Salto de Pirapora',
    			'UF' => 'SP',
    		),
    		3776 => 
    		array (
    			'codigoIbge' => 3545407,
    			'nome' => 'Salto Grande',
    			'UF' => 'SP',
    		),
    		3777 => 
    		array (
    			'codigoIbge' => 3545506,
    			'nome' => 'Sandovalina',
    			'UF' => 'SP',
    		),
    		3778 => 
    		array (
    			'codigoIbge' => 3545605,
    			'nome' => 'Santa Adélia',
    			'UF' => 'SP',
    		),
    		3779 => 
    		array (
    			'codigoIbge' => 3545704,
    			'nome' => 'Santa Albertina',
    			'UF' => 'SP',
    		),
    		3780 => 
    		array (
    			'codigoIbge' => 3545803,
    			'nome' => 'Santa Bárbara d\'Oeste',
    			'UF' => 'SP',
    		),
    		3781 => 
    		array (
    			'codigoIbge' => 3546009,
    			'nome' => 'Santa Branca',
    			'UF' => 'SP',
    		),
    		3782 => 
    		array (
    			'codigoIbge' => 3546108,
    			'nome' => 'Santa Clara d\'Oeste',
    			'UF' => 'SP',
    		),
    		3783 => 
    		array (
    			'codigoIbge' => 3546207,
    			'nome' => 'Santa Cruz da Conceição',
    			'UF' => 'SP',
    		),
    		3784 => 
    		array (
    			'codigoIbge' => 3546256,
    			'nome' => 'Santa Cruz da Esperança',
    			'UF' => 'SP',
    		),
    		3785 => 
    		array (
    			'codigoIbge' => 3546306,
    			'nome' => 'Santa Cruz das Palmeiras',
    			'UF' => 'SP',
    		),
    		3786 => 
    		array (
    			'codigoIbge' => 3546405,
    			'nome' => 'Santa Cruz do Rio Pardo',
    			'UF' => 'SP',
    		),
    		3787 => 
    		array (
    			'codigoIbge' => 3546504,
    			'nome' => 'Santa Ernestina',
    			'UF' => 'SP',
    		),
    		3788 => 
    		array (
    			'codigoIbge' => 3546603,
    			'nome' => 'Santa Fé do Sul',
    			'UF' => 'SP',
    		),
    		3789 => 
    		array (
    			'codigoIbge' => 3546702,
    			'nome' => 'Santa Gertrudes',
    			'UF' => 'SP',
    		),
    		3790 => 
    		array (
    			'codigoIbge' => 3546801,
    			'nome' => 'Santa Isabel',
    			'UF' => 'SP',
    		),
    		3791 => 
    		array (
    			'codigoIbge' => 3546900,
    			'nome' => 'Santa Lúcia',
    			'UF' => 'SP',
    		),
    		3792 => 
    		array (
    			'codigoIbge' => 3547007,
    			'nome' => 'Santa Maria da Serra',
    			'UF' => 'SP',
    		),
    		3793 => 
    		array (
    			'codigoIbge' => 3547106,
    			'nome' => 'Santa Mercedes',
    			'UF' => 'SP',
    		),
    		3794 => 
    		array (
    			'codigoIbge' => 3547205,
    			'nome' => 'Santana da Ponte Pensa',
    			'UF' => 'SP',
    		),
    		3795 => 
    		array (
    			'codigoIbge' => 3547304,
    			'nome' => 'Santana de Parnaíba',
    			'UF' => 'SP',
    		),
    		3796 => 
    		array (
    			'codigoIbge' => 3547403,
    			'nome' => 'Santa Rita d\'Oeste',
    			'UF' => 'SP',
    		),
    		3797 => 
    		array (
    			'codigoIbge' => 3547502,
    			'nome' => 'Santa Rita do Passa Quatro',
    			'UF' => 'SP',
    		),
    		3798 => 
    		array (
    			'codigoIbge' => 3547601,
    			'nome' => 'Santa Rosa de Viterbo',
    			'UF' => 'SP',
    		),
    		3799 => 
    		array (
    			'codigoIbge' => 3547650,
    			'nome' => 'Santa Salete',
    			'UF' => 'SP',
    		),
    		3800 => 
    		array (
    			'codigoIbge' => 3547700,
    			'nome' => 'Santo Anastácio',
    			'UF' => 'SP',
    		),
    		3801 => 
    		array (
    			'codigoIbge' => 3547809,
    			'nome' => 'Santo André',
    			'UF' => 'SP',
    		),
    		3802 => 
    		array (
    			'codigoIbge' => 3547908,
    			'nome' => 'Santo Antônio da Alegria',
    			'UF' => 'SP',
    		),
    		3803 => 
    		array (
    			'codigoIbge' => 3548005,
    			'nome' => 'Santo Antônio de Posse',
    			'UF' => 'SP',
    		),
    		3804 => 
    		array (
    			'codigoIbge' => 3548054,
    			'nome' => 'Santo Antônio do Aracanguá',
    			'UF' => 'SP',
    		),
    		3805 => 
    		array (
    			'codigoIbge' => 3548104,
    			'nome' => 'Santo Antônio do Jardim',
    			'UF' => 'SP',
    		),
    		3806 => 
    		array (
    			'codigoIbge' => 3548203,
    			'nome' => 'Santo Antônio do Pinhal',
    			'UF' => 'SP',
    		),
    		3807 => 
    		array (
    			'codigoIbge' => 3548302,
    			'nome' => 'Santo Expedito',
    			'UF' => 'SP',
    		),
    		3808 => 
    		array (
    			'codigoIbge' => 3548401,
    			'nome' => 'Santópolis do Aguapeí',
    			'UF' => 'SP',
    		),
    		3809 => 
    		array (
    			'codigoIbge' => 3548500,
    			'nome' => 'Santos',
    			'UF' => 'SP',
    		),
    		3810 => 
    		array (
    			'codigoIbge' => 3548609,
    			'nome' => 'São Bento do Sapucaí',
    			'UF' => 'SP',
    		),
    		3811 => 
    		array (
    			'codigoIbge' => 3548708,
    			'nome' => 'São Bernardo do Campo',
    			'UF' => 'SP',
    		),
    		3812 => 
    		array (
    			'codigoIbge' => 3548807,
    			'nome' => 'São Caetano do Sul',
    			'UF' => 'SP',
    		),
    		3813 => 
    		array (
    			'codigoIbge' => 3548906,
    			'nome' => 'São Carlos',
    			'UF' => 'SP',
    		),
    		3814 => 
    		array (
    			'codigoIbge' => 3549003,
    			'nome' => 'São Francisco',
    			'UF' => 'SP',
    		),
    		3815 => 
    		array (
    			'codigoIbge' => 3549102,
    			'nome' => 'São João da Boa Vista',
    			'UF' => 'SP',
    		),
    		3816 => 
    		array (
    			'codigoIbge' => 3549201,
    			'nome' => 'São João das Duas Pontes',
    			'UF' => 'SP',
    		),
    		3817 => 
    		array (
    			'codigoIbge' => 3549250,
    			'nome' => 'São João de Iracema',
    			'UF' => 'SP',
    		),
    		3818 => 
    		array (
    			'codigoIbge' => 3549300,
    			'nome' => 'São João do Pau d\'Alho',
    			'UF' => 'SP',
    		),
    		3819 => 
    		array (
    			'codigoIbge' => 3549409,
    			'nome' => 'São Joaquim da Barra',
    			'UF' => 'SP',
    		),
    		3820 => 
    		array (
    			'codigoIbge' => 3549508,
    			'nome' => 'São José da Bela Vista',
    			'UF' => 'SP',
    		),
    		3821 => 
    		array (
    			'codigoIbge' => 3549607,
    			'nome' => 'São José do Barreiro',
    			'UF' => 'SP',
    		),
    		3822 => 
    		array (
    			'codigoIbge' => 3549706,
    			'nome' => 'São José do Rio Pardo',
    			'UF' => 'SP',
    		),
    		3823 => 
    		array (
    			'codigoIbge' => 3549805,
    			'nome' => 'São José do Rio Preto',
    			'UF' => 'SP',
    		),
    		3824 => 
    		array (
    			'codigoIbge' => 3549904,
    			'nome' => 'São José dos Campos',
    			'UF' => 'SP',
    		),
    		3825 => 
    		array (
    			'codigoIbge' => 3549953,
    			'nome' => 'São Lourenço da Serra',
    			'UF' => 'SP',
    		),
    		3826 => 
    		array (
    			'codigoIbge' => 3550001,
    			'nome' => 'São Luiz do Paraitinga',
    			'UF' => 'SP',
    		),
    		3827 => 
    		array (
    			'codigoIbge' => 3550100,
    			'nome' => 'São Manuel',
    			'UF' => 'SP',
    		),
    		3828 => 
    		array (
    			'codigoIbge' => 3550209,
    			'nome' => 'São Miguel Arcanjo',
    			'UF' => 'SP',
    		),
    		3829 => 
    		array (
    			'codigoIbge' => 3550308,
    			'nome' => 'São Paulo',
    			'UF' => 'SP',
    		),
    		3830 => 
    		array (
    			'codigoIbge' => 3550407,
    			'nome' => 'São Pedro',
    			'UF' => 'SP',
    		),
    		3831 => 
    		array (
    			'codigoIbge' => 3550506,
    			'nome' => 'São Pedro do Turvo',
    			'UF' => 'SP',
    		),
    		3832 => 
    		array (
    			'codigoIbge' => 3550605,
    			'nome' => 'São Roque',
    			'UF' => 'SP',
    		),
    		3833 => 
    		array (
    			'codigoIbge' => 3550704,
    			'nome' => 'São Sebastião',
    			'UF' => 'SP',
    		),
    		3834 => 
    		array (
    			'codigoIbge' => 3550803,
    			'nome' => 'São Sebastião da Grama',
    			'UF' => 'SP',
    		),
    		3835 => 
    		array (
    			'codigoIbge' => 3550902,
    			'nome' => 'São Simão',
    			'UF' => 'SP',
    		),
    		3836 => 
    		array (
    			'codigoIbge' => 3551009,
    			'nome' => 'São Vicente',
    			'UF' => 'SP',
    		),
    		3837 => 
    		array (
    			'codigoIbge' => 3551108,
    			'nome' => 'Sarapuí',
    			'UF' => 'SP',
    		),
    		3838 => 
    		array (
    			'codigoIbge' => 3551207,
    			'nome' => 'Sarutaiá',
    			'UF' => 'SP',
    		),
    		3839 => 
    		array (
    			'codigoIbge' => 3551306,
    			'nome' => 'Sebastianópolis do Sul',
    			'UF' => 'SP',
    		),
    		3840 => 
    		array (
    			'codigoIbge' => 3551405,
    			'nome' => 'Serra Azul',
    			'UF' => 'SP',
    		),
    		3841 => 
    		array (
    			'codigoIbge' => 3551504,
    			'nome' => 'Serrana',
    			'UF' => 'SP',
    		),
    		3842 => 
    		array (
    			'codigoIbge' => 3551603,
    			'nome' => 'Serra Negra',
    			'UF' => 'SP',
    		),
    		3843 => 
    		array (
    			'codigoIbge' => 3551702,
    			'nome' => 'Sertãozinho',
    			'UF' => 'SP',
    		),
    		3844 => 
    		array (
    			'codigoIbge' => 3551801,
    			'nome' => 'Sete Barras',
    			'UF' => 'SP',
    		),
    		3845 => 
    		array (
    			'codigoIbge' => 3551900,
    			'nome' => 'Severínia',
    			'UF' => 'SP',
    		),
    		3846 => 
    		array (
    			'codigoIbge' => 3552007,
    			'nome' => 'Silveiras',
    			'UF' => 'SP',
    		),
    		3847 => 
    		array (
    			'codigoIbge' => 3552106,
    			'nome' => 'Socorro',
    			'UF' => 'SP',
    		),
    		3848 => 
    		array (
    			'codigoIbge' => 3552205,
    			'nome' => 'Sorocaba',
    			'UF' => 'SP',
    		),
    		3849 => 
    		array (
    			'codigoIbge' => 3552304,
    			'nome' => 'Sud Mennucci',
    			'UF' => 'SP',
    		),
    		3850 => 
    		array (
    			'codigoIbge' => 3552403,
    			'nome' => 'Sumaré',
    			'UF' => 'SP',
    		),
    		3851 => 
    		array (
    			'codigoIbge' => 3552502,
    			'nome' => 'Suzano',
    			'UF' => 'SP',
    		),
    		3852 => 
    		array (
    			'codigoIbge' => 3552551,
    			'nome' => 'Suzanápolis',
    			'UF' => 'SP',
    		),
    		3853 => 
    		array (
    			'codigoIbge' => 3552601,
    			'nome' => 'Tabapuã',
    			'UF' => 'SP',
    		),
    		3854 => 
    		array (
    			'codigoIbge' => 3552700,
    			'nome' => 'Tabatinga',
    			'UF' => 'SP',
    		),
    		3855 => 
    		array (
    			'codigoIbge' => 3552809,
    			'nome' => 'Taboão da Serra',
    			'UF' => 'SP',
    		),
    		3856 => 
    		array (
    			'codigoIbge' => 3552908,
    			'nome' => 'Taciba',
    			'UF' => 'SP',
    		),
    		3857 => 
    		array (
    			'codigoIbge' => 3553005,
    			'nome' => 'Taguaí',
    			'UF' => 'SP',
    		),
    		3858 => 
    		array (
    			'codigoIbge' => 3553104,
    			'nome' => 'Taiaçu',
    			'UF' => 'SP',
    		),
    		3859 => 
    		array (
    			'codigoIbge' => 3553203,
    			'nome' => 'Taiúva',
    			'UF' => 'SP',
    		),
    		3860 => 
    		array (
    			'codigoIbge' => 3553302,
    			'nome' => 'Tambaú',
    			'UF' => 'SP',
    		),
    		3861 => 
    		array (
    			'codigoIbge' => 3553401,
    			'nome' => 'Tanabi',
    			'UF' => 'SP',
    		),
    		3862 => 
    		array (
    			'codigoIbge' => 3553500,
    			'nome' => 'Tapiraí',
    			'UF' => 'SP',
    		),
    		3863 => 
    		array (
    			'codigoIbge' => 3553609,
    			'nome' => 'Tapiratiba',
    			'UF' => 'SP',
    		),
    		3864 => 
    		array (
    			'codigoIbge' => 3553658,
    			'nome' => 'Taquaral',
    			'UF' => 'SP',
    		),
    		3865 => 
    		array (
    			'codigoIbge' => 3553708,
    			'nome' => 'Taquaritinga',
    			'UF' => 'SP',
    		),
    		3866 => 
    		array (
    			'codigoIbge' => 3553807,
    			'nome' => 'Taquarituba',
    			'UF' => 'SP',
    		),
    		3867 => 
    		array (
    			'codigoIbge' => 3553856,
    			'nome' => 'Taquarivaí',
    			'UF' => 'SP',
    		),
    		3868 => 
    		array (
    			'codigoIbge' => 3553906,
    			'nome' => 'Tarabai',
    			'UF' => 'SP',
    		),
    		3869 => 
    		array (
    			'codigoIbge' => 3553955,
    			'nome' => 'Tarumã',
    			'UF' => 'SP',
    		),
    		3870 => 
    		array (
    			'codigoIbge' => 3554003,
    			'nome' => 'Tatuí',
    			'UF' => 'SP',
    		),
    		3871 => 
    		array (
    			'codigoIbge' => 3554102,
    			'nome' => 'Taubaté',
    			'UF' => 'SP',
    		),
    		3872 => 
    		array (
    			'codigoIbge' => 3554201,
    			'nome' => 'Tejupá',
    			'UF' => 'SP',
    		),
    		3873 => 
    		array (
    			'codigoIbge' => 3554300,
    			'nome' => 'Teodoro Sampaio',
    			'UF' => 'SP',
    		),
    		3874 => 
    		array (
    			'codigoIbge' => 3554409,
    			'nome' => 'Terra Roxa',
    			'UF' => 'SP',
    		),
    		3875 => 
    		array (
    			'codigoIbge' => 3554508,
    			'nome' => 'Tietê',
    			'UF' => 'SP',
    		),
    		3876 => 
    		array (
    			'codigoIbge' => 3554607,
    			'nome' => 'Timburi',
    			'UF' => 'SP',
    		),
    		3877 => 
    		array (
    			'codigoIbge' => 3554656,
    			'nome' => 'Torre de Pedra',
    			'UF' => 'SP',
    		),
    		3878 => 
    		array (
    			'codigoIbge' => 3554706,
    			'nome' => 'Torrinha',
    			'UF' => 'SP',
    		),
    		3879 => 
    		array (
    			'codigoIbge' => 3554755,
    			'nome' => 'Trabiju',
    			'UF' => 'SP',
    		),
    		3880 => 
    		array (
    			'codigoIbge' => 3554805,
    			'nome' => 'Tremembé',
    			'UF' => 'SP',
    		),
    		3881 => 
    		array (
    			'codigoIbge' => 3554904,
    			'nome' => 'Três Fronteiras',
    			'UF' => 'SP',
    		),
    		3882 => 
    		array (
    			'codigoIbge' => 3554953,
    			'nome' => 'Tuiuti',
    			'UF' => 'SP',
    		),
    		3883 => 
    		array (
    			'codigoIbge' => 3555000,
    			'nome' => 'Tupã',
    			'UF' => 'SP',
    		),
    		3884 => 
    		array (
    			'codigoIbge' => 3555109,
    			'nome' => 'Tupi Paulista',
    			'UF' => 'SP',
    		),
    		3885 => 
    		array (
    			'codigoIbge' => 3555208,
    			'nome' => 'Turiúba',
    			'UF' => 'SP',
    		),
    		3886 => 
    		array (
    			'codigoIbge' => 3555307,
    			'nome' => 'Turmalina',
    			'UF' => 'SP',
    		),
    		3887 => 
    		array (
    			'codigoIbge' => 3555356,
    			'nome' => 'Ubarana',
    			'UF' => 'SP',
    		),
    		3888 => 
    		array (
    			'codigoIbge' => 3555406,
    			'nome' => 'Ubatuba',
    			'UF' => 'SP',
    		),
    		3889 => 
    		array (
    			'codigoIbge' => 3555505,
    			'nome' => 'Ubirajara',
    			'UF' => 'SP',
    		),
    		3890 => 
    		array (
    			'codigoIbge' => 3555604,
    			'nome' => 'Uchoa',
    			'UF' => 'SP',
    		),
    		3891 => 
    		array (
    			'codigoIbge' => 3555703,
    			'nome' => 'União Paulista',
    			'UF' => 'SP',
    		),
    		3892 => 
    		array (
    			'codigoIbge' => 3555802,
    			'nome' => 'Urânia',
    			'UF' => 'SP',
    		),
    		3893 => 
    		array (
    			'codigoIbge' => 3555901,
    			'nome' => 'Uru',
    			'UF' => 'SP',
    		),
    		3894 => 
    		array (
    			'codigoIbge' => 3556008,
    			'nome' => 'Urupês',
    			'UF' => 'SP',
    		),
    		3895 => 
    		array (
    			'codigoIbge' => 3556107,
    			'nome' => 'Valentim Gentil',
    			'UF' => 'SP',
    		),
    		3896 => 
    		array (
    			'codigoIbge' => 3556206,
    			'nome' => 'Valinhos',
    			'UF' => 'SP',
    		),
    		3897 => 
    		array (
    			'codigoIbge' => 3556305,
    			'nome' => 'Valparaíso',
    			'UF' => 'SP',
    		),
    		3898 => 
    		array (
    			'codigoIbge' => 3556354,
    			'nome' => 'Vargem',
    			'UF' => 'SP',
    		),
    		3899 => 
    		array (
    			'codigoIbge' => 3556404,
    			'nome' => 'Vargem Grande do Sul',
    			'UF' => 'SP',
    		),
    		3900 => 
    		array (
    			'codigoIbge' => 3556453,
    			'nome' => 'Vargem Grande Paulista',
    			'UF' => 'SP',
    		),
    		3901 => 
    		array (
    			'codigoIbge' => 3556503,
    			'nome' => 'Várzea Paulista',
    			'UF' => 'SP',
    		),
    		3902 => 
    		array (
    			'codigoIbge' => 3556602,
    			'nome' => 'Vera Cruz',
    			'UF' => 'SP',
    		),
    		3903 => 
    		array (
    			'codigoIbge' => 3556701,
    			'nome' => 'Vinhedo',
    			'UF' => 'SP',
    		),
    		3904 => 
    		array (
    			'codigoIbge' => 3556800,
    			'nome' => 'Viradouro',
    			'UF' => 'SP',
    		),
    		3905 => 
    		array (
    			'codigoIbge' => 3556909,
    			'nome' => 'Vista Alegre do Alto',
    			'UF' => 'SP',
    		),
    		3906 => 
    		array (
    			'codigoIbge' => 3556958,
    			'nome' => 'Vitória Brasil',
    			'UF' => 'SP',
    		),
    		3907 => 
    		array (
    			'codigoIbge' => 3557006,
    			'nome' => 'Votorantim',
    			'UF' => 'SP',
    		),
    		3908 => 
    		array (
    			'codigoIbge' => 3557105,
    			'nome' => 'Votuporanga',
    			'UF' => 'SP',
    		),
    		3909 => 
    		array (
    			'codigoIbge' => 3557154,
    			'nome' => 'Zacarias',
    			'UF' => 'SP',
    		),
    		3910 => 
    		array (
    			'codigoIbge' => 3557204,
    			'nome' => 'Chavantes',
    			'UF' => 'SP',
    		),
    		3911 => 
    		array (
    			'codigoIbge' => 3557303,
    			'nome' => 'Estiva Gerbi',
    			'UF' => 'SP',
    		),
    		3912 => 
    		array (
    			'codigoIbge' => 4100103,
    			'nome' => 'Abatiá',
    			'UF' => 'PR',
    		),
    		3913 => 
    		array (
    			'codigoIbge' => 4100202,
    			'nome' => 'Adrianópolis',
    			'UF' => 'PR',
    		),
    		3914 => 
    		array (
    			'codigoIbge' => 4100301,
    			'nome' => 'Agudos do Sul',
    			'UF' => 'PR',
    		),
    		3915 => 
    		array (
    			'codigoIbge' => 4100400,
    			'nome' => 'Almirante Tamandaré',
    			'UF' => 'PR',
    		),
    		3916 => 
    		array (
    			'codigoIbge' => 4100459,
    			'nome' => 'Altamira do Paraná',
    			'UF' => 'PR',
    		),
    		3917 => 
    		array (
    			'codigoIbge' => 4100509,
    			'nome' => 'Altônia',
    			'UF' => 'PR',
    		),
    		3918 => 
    		array (
    			'codigoIbge' => 4100608,
    			'nome' => 'Alto Paraná',
    			'UF' => 'PR',
    		),
    		3919 => 
    		array (
    			'codigoIbge' => 4100707,
    			'nome' => 'Alto Piquiri',
    			'UF' => 'PR',
    		),
    		3920 => 
    		array (
    			'codigoIbge' => 4100806,
    			'nome' => 'Alvorada do Sul',
    			'UF' => 'PR',
    		),
    		3921 => 
    		array (
    			'codigoIbge' => 4100905,
    			'nome' => 'Amaporã',
    			'UF' => 'PR',
    		),
    		3922 => 
    		array (
    			'codigoIbge' => 4101002,
    			'nome' => 'Ampére',
    			'UF' => 'PR',
    		),
    		3923 => 
    		array (
    			'codigoIbge' => 4101051,
    			'nome' => 'Anahy',
    			'UF' => 'PR',
    		),
    		3924 => 
    		array (
    			'codigoIbge' => 4101101,
    			'nome' => 'Andirá',
    			'UF' => 'PR',
    		),
    		3925 => 
    		array (
    			'codigoIbge' => 4101150,
    			'nome' => 'Ângulo',
    			'UF' => 'PR',
    		),
    		3926 => 
    		array (
    			'codigoIbge' => 4101200,
    			'nome' => 'Antonina',
    			'UF' => 'PR',
    		),
    		3927 => 
    		array (
    			'codigoIbge' => 4101309,
    			'nome' => 'Antônio Olinto',
    			'UF' => 'PR',
    		),
    		3928 => 
    		array (
    			'codigoIbge' => 4101408,
    			'nome' => 'Apucarana',
    			'UF' => 'PR',
    		),
    		3929 => 
    		array (
    			'codigoIbge' => 4101507,
    			'nome' => 'Arapongas',
    			'UF' => 'PR',
    		),
    		3930 => 
    		array (
    			'codigoIbge' => 4101606,
    			'nome' => 'Arapoti',
    			'UF' => 'PR',
    		),
    		3931 => 
    		array (
    			'codigoIbge' => 4101655,
    			'nome' => 'Arapuã',
    			'UF' => 'PR',
    		),
    		3932 => 
    		array (
    			'codigoIbge' => 4101705,
    			'nome' => 'Araruna',
    			'UF' => 'PR',
    		),
    		3933 => 
    		array (
    			'codigoIbge' => 4101804,
    			'nome' => 'Araucária',
    			'UF' => 'PR',
    		),
    		3934 => 
    		array (
    			'codigoIbge' => 4101853,
    			'nome' => 'Ariranha do Ivaí',
    			'UF' => 'PR',
    		),
    		3935 => 
    		array (
    			'codigoIbge' => 4101903,
    			'nome' => 'Assaí',
    			'UF' => 'PR',
    		),
    		3936 => 
    		array (
    			'codigoIbge' => 4102000,
    			'nome' => 'Assis Chateaubriand',
    			'UF' => 'PR',
    		),
    		3937 => 
    		array (
    			'codigoIbge' => 4102109,
    			'nome' => 'Astorga',
    			'UF' => 'PR',
    		),
    		3938 => 
    		array (
    			'codigoIbge' => 4102208,
    			'nome' => 'Atalaia',
    			'UF' => 'PR',
    		),
    		3939 => 
    		array (
    			'codigoIbge' => 4102307,
    			'nome' => 'Balsa Nova',
    			'UF' => 'PR',
    		),
    		3940 => 
    		array (
    			'codigoIbge' => 4102406,
    			'nome' => 'Bandeirantes',
    			'UF' => 'PR',
    		),
    		3941 => 
    		array (
    			'codigoIbge' => 4102505,
    			'nome' => 'Barbosa Ferraz',
    			'UF' => 'PR',
    		),
    		3942 => 
    		array (
    			'codigoIbge' => 4102604,
    			'nome' => 'Barracão',
    			'UF' => 'PR',
    		),
    		3943 => 
    		array (
    			'codigoIbge' => 4102703,
    			'nome' => 'Barra do Jacaré',
    			'UF' => 'PR',
    		),
    		3944 => 
    		array (
    			'codigoIbge' => 4102752,
    			'nome' => 'Bela Vista da Caroba',
    			'UF' => 'PR',
    		),
    		3945 => 
    		array (
    			'codigoIbge' => 4102802,
    			'nome' => 'Bela Vista do Paraíso',
    			'UF' => 'PR',
    		),
    		3946 => 
    		array (
    			'codigoIbge' => 4102901,
    			'nome' => 'Bituruna',
    			'UF' => 'PR',
    		),
    		3947 => 
    		array (
    			'codigoIbge' => 4103008,
    			'nome' => 'Boa Esperança',
    			'UF' => 'PR',
    		),
    		3948 => 
    		array (
    			'codigoIbge' => 4103024,
    			'nome' => 'Boa Esperança do Iguaçu',
    			'UF' => 'PR',
    		),
    		3949 => 
    		array (
    			'codigoIbge' => 4103040,
    			'nome' => 'Boa Ventura de São Roque',
    			'UF' => 'PR',
    		),
    		3950 => 
    		array (
    			'codigoIbge' => 4103057,
    			'nome' => 'Boa Vista da Aparecida',
    			'UF' => 'PR',
    		),
    		3951 => 
    		array (
    			'codigoIbge' => 4103107,
    			'nome' => 'Bocaiúva do Sul',
    			'UF' => 'PR',
    		),
    		3952 => 
    		array (
    			'codigoIbge' => 4103156,
    			'nome' => 'Bom Jesus do Sul',
    			'UF' => 'PR',
    		),
    		3953 => 
    		array (
    			'codigoIbge' => 4103206,
    			'nome' => 'Bom Sucesso',
    			'UF' => 'PR',
    		),
    		3954 => 
    		array (
    			'codigoIbge' => 4103222,
    			'nome' => 'Bom Sucesso do Sul',
    			'UF' => 'PR',
    		),
    		3955 => 
    		array (
    			'codigoIbge' => 4103305,
    			'nome' => 'Borrazópolis',
    			'UF' => 'PR',
    		),
    		3956 => 
    		array (
    			'codigoIbge' => 4103354,
    			'nome' => 'Braganey',
    			'UF' => 'PR',
    		),
    		3957 => 
    		array (
    			'codigoIbge' => 4103370,
    			'nome' => 'Brasilândia do Sul',
    			'UF' => 'PR',
    		),
    		3958 => 
    		array (
    			'codigoIbge' => 4103404,
    			'nome' => 'Cafeara',
    			'UF' => 'PR',
    		),
    		3959 => 
    		array (
    			'codigoIbge' => 4103453,
    			'nome' => 'Cafelândia',
    			'UF' => 'PR',
    		),
    		3960 => 
    		array (
    			'codigoIbge' => 4103479,
    			'nome' => 'Cafezal do Sul',
    			'UF' => 'PR',
    		),
    		3961 => 
    		array (
    			'codigoIbge' => 4103503,
    			'nome' => 'Califórnia',
    			'UF' => 'PR',
    		),
    		3962 => 
    		array (
    			'codigoIbge' => 4103602,
    			'nome' => 'Cambará',
    			'UF' => 'PR',
    		),
    		3963 => 
    		array (
    			'codigoIbge' => 4103701,
    			'nome' => 'Cambé',
    			'UF' => 'PR',
    		),
    		3964 => 
    		array (
    			'codigoIbge' => 4103800,
    			'nome' => 'Cambira',
    			'UF' => 'PR',
    		),
    		3965 => 
    		array (
    			'codigoIbge' => 4103909,
    			'nome' => 'Campina da Lagoa',
    			'UF' => 'PR',
    		),
    		3966 => 
    		array (
    			'codigoIbge' => 4103958,
    			'nome' => 'Campina do Simão',
    			'UF' => 'PR',
    		),
    		3967 => 
    		array (
    			'codigoIbge' => 4104006,
    			'nome' => 'Campina Grande do Sul',
    			'UF' => 'PR',
    		),
    		3968 => 
    		array (
    			'codigoIbge' => 4104055,
    			'nome' => 'Campo Bonito',
    			'UF' => 'PR',
    		),
    		3969 => 
    		array (
    			'codigoIbge' => 4104105,
    			'nome' => 'Campo do Tenente',
    			'UF' => 'PR',
    		),
    		3970 => 
    		array (
    			'codigoIbge' => 4104204,
    			'nome' => 'Campo Largo',
    			'UF' => 'PR',
    		),
    		3971 => 
    		array (
    			'codigoIbge' => 4104253,
    			'nome' => 'Campo Magro',
    			'UF' => 'PR',
    		),
    		3972 => 
    		array (
    			'codigoIbge' => 4104303,
    			'nome' => 'Campo Mourão',
    			'UF' => 'PR',
    		),
    		3973 => 
    		array (
    			'codigoIbge' => 4104402,
    			'nome' => 'Cândido de Abreu',
    			'UF' => 'PR',
    		),
    		3974 => 
    		array (
    			'codigoIbge' => 4104428,
    			'nome' => 'Candói',
    			'UF' => 'PR',
    		),
    		3975 => 
    		array (
    			'codigoIbge' => 4104451,
    			'nome' => 'Cantagalo',
    			'UF' => 'PR',
    		),
    		3976 => 
    		array (
    			'codigoIbge' => 4104501,
    			'nome' => 'Capanema',
    			'UF' => 'PR',
    		),
    		3977 => 
    		array (
    			'codigoIbge' => 4104600,
    			'nome' => 'Capitão Leônidas Marques',
    			'UF' => 'PR',
    		),
    		3978 => 
    		array (
    			'codigoIbge' => 4104659,
    			'nome' => 'Carambeí',
    			'UF' => 'PR',
    		),
    		3979 => 
    		array (
    			'codigoIbge' => 4104709,
    			'nome' => 'Carlópolis',
    			'UF' => 'PR',
    		),
    		3980 => 
    		array (
    			'codigoIbge' => 4104808,
    			'nome' => 'Cascavel',
    			'UF' => 'PR',
    		),
    		3981 => 
    		array (
    			'codigoIbge' => 4104907,
    			'nome' => 'Castro',
    			'UF' => 'PR',
    		),
    		3982 => 
    		array (
    			'codigoIbge' => 4105003,
    			'nome' => 'Catanduvas',
    			'UF' => 'PR',
    		),
    		3983 => 
    		array (
    			'codigoIbge' => 4105102,
    			'nome' => 'Centenário do Sul',
    			'UF' => 'PR',
    		),
    		3984 => 
    		array (
    			'codigoIbge' => 4105201,
    			'nome' => 'Cerro Azul',
    			'UF' => 'PR',
    		),
    		3985 => 
    		array (
    			'codigoIbge' => 4105300,
    			'nome' => 'Céu Azul',
    			'UF' => 'PR',
    		),
    		3986 => 
    		array (
    			'codigoIbge' => 4105409,
    			'nome' => 'Chopinzinho',
    			'UF' => 'PR',
    		),
    		3987 => 
    		array (
    			'codigoIbge' => 4105508,
    			'nome' => 'Cianorte',
    			'UF' => 'PR',
    		),
    		3988 => 
    		array (
    			'codigoIbge' => 4105607,
    			'nome' => 'Cidade Gaúcha',
    			'UF' => 'PR',
    		),
    		3989 => 
    		array (
    			'codigoIbge' => 4105706,
    			'nome' => 'Clevelândia',
    			'UF' => 'PR',
    		),
    		3990 => 
    		array (
    			'codigoIbge' => 4105805,
    			'nome' => 'Colombo',
    			'UF' => 'PR',
    		),
    		3991 => 
    		array (
    			'codigoIbge' => 4105904,
    			'nome' => 'Colorado',
    			'UF' => 'PR',
    		),
    		3992 => 
    		array (
    			'codigoIbge' => 4106001,
    			'nome' => 'Congonhinhas',
    			'UF' => 'PR',
    		),
    		3993 => 
    		array (
    			'codigoIbge' => 4106100,
    			'nome' => 'Conselheiro Mairinck',
    			'UF' => 'PR',
    		),
    		3994 => 
    		array (
    			'codigoIbge' => 4106209,
    			'nome' => 'Contenda',
    			'UF' => 'PR',
    		),
    		3995 => 
    		array (
    			'codigoIbge' => 4106308,
    			'nome' => 'Corbélia',
    			'UF' => 'PR',
    		),
    		3996 => 
    		array (
    			'codigoIbge' => 4106407,
    			'nome' => 'Cornélio Procópio',
    			'UF' => 'PR',
    		),
    		3997 => 
    		array (
    			'codigoIbge' => 4106456,
    			'nome' => 'Coronel Domingos Soares',
    			'UF' => 'PR',
    		),
    		3998 => 
    		array (
    			'codigoIbge' => 4106506,
    			'nome' => 'Coronel Vivida',
    			'UF' => 'PR',
    		),
    		3999 => 
    		array (
    			'codigoIbge' => 4106555,
    			'nome' => 'Corumbataí do Sul',
    			'UF' => 'PR',
    		),
    		4000 => 
    		array (
    			'codigoIbge' => 4106571,
    			'nome' => 'Cruzeiro do Iguaçu',
    			'UF' => 'PR',
    		),
    		4001 => 
    		array (
    			'codigoIbge' => 4106605,
    			'nome' => 'Cruzeiro do Oeste',
    			'UF' => 'PR',
    		),
    		4002 => 
    		array (
    			'codigoIbge' => 4106704,
    			'nome' => 'Cruzeiro do Sul',
    			'UF' => 'PR',
    		),
    		4003 => 
    		array (
    			'codigoIbge' => 4106803,
    			'nome' => 'Cruz Machado',
    			'UF' => 'PR',
    		),
    		4004 => 
    		array (
    			'codigoIbge' => 4106852,
    			'nome' => 'Cruzmaltina',
    			'UF' => 'PR',
    		),
    		4005 => 
    		array (
    			'codigoIbge' => 4106902,
    			'nome' => 'Curitiba',
    			'UF' => 'PR',
    		),
    		4006 => 
    		array (
    			'codigoIbge' => 4107009,
    			'nome' => 'Curiúva',
    			'UF' => 'PR',
    		),
    		4007 => 
    		array (
    			'codigoIbge' => 4107108,
    			'nome' => 'Diamante do Norte',
    			'UF' => 'PR',
    		),
    		4008 => 
    		array (
    			'codigoIbge' => 4107124,
    			'nome' => 'Diamante do Sul',
    			'UF' => 'PR',
    		),
    		4009 => 
    		array (
    			'codigoIbge' => 4107157,
    			'nome' => 'Diamante D\'Oeste',
    			'UF' => 'PR',
    		),
    		4010 => 
    		array (
    			'codigoIbge' => 4107207,
    			'nome' => 'Dois Vizinhos',
    			'UF' => 'PR',
    		),
    		4011 => 
    		array (
    			'codigoIbge' => 4107256,
    			'nome' => 'Douradina',
    			'UF' => 'PR',
    		),
    		4012 => 
    		array (
    			'codigoIbge' => 4107306,
    			'nome' => 'Doutor Camargo',
    			'UF' => 'PR',
    		),
    		4013 => 
    		array (
    			'codigoIbge' => 4107405,
    			'nome' => 'Enéas Marques',
    			'UF' => 'PR',
    		),
    		4014 => 
    		array (
    			'codigoIbge' => 4107504,
    			'nome' => 'Engenheiro Beltrão',
    			'UF' => 'PR',
    		),
    		4015 => 
    		array (
    			'codigoIbge' => 4107520,
    			'nome' => 'Esperança Nova',
    			'UF' => 'PR',
    		),
    		4016 => 
    		array (
    			'codigoIbge' => 4107538,
    			'nome' => 'Entre Rios do Oeste',
    			'UF' => 'PR',
    		),
    		4017 => 
    		array (
    			'codigoIbge' => 4107546,
    			'nome' => 'Espigão Alto do Iguaçu',
    			'UF' => 'PR',
    		),
    		4018 => 
    		array (
    			'codigoIbge' => 4107553,
    			'nome' => 'Farol',
    			'UF' => 'PR',
    		),
    		4019 => 
    		array (
    			'codigoIbge' => 4107603,
    			'nome' => 'Faxinal',
    			'UF' => 'PR',
    		),
    		4020 => 
    		array (
    			'codigoIbge' => 4107652,
    			'nome' => 'Fazenda Rio Grande',
    			'UF' => 'PR',
    		),
    		4021 => 
    		array (
    			'codigoIbge' => 4107702,
    			'nome' => 'Fênix',
    			'UF' => 'PR',
    		),
    		4022 => 
    		array (
    			'codigoIbge' => 4107736,
    			'nome' => 'Fernandes Pinheiro',
    			'UF' => 'PR',
    		),
    		4023 => 
    		array (
    			'codigoIbge' => 4107751,
    			'nome' => 'Figueira',
    			'UF' => 'PR',
    		),
    		4024 => 
    		array (
    			'codigoIbge' => 4107801,
    			'nome' => 'Floraí',
    			'UF' => 'PR',
    		),
    		4025 => 
    		array (
    			'codigoIbge' => 4107850,
    			'nome' => 'Flor da Serra do Sul',
    			'UF' => 'PR',
    		),
    		4026 => 
    		array (
    			'codigoIbge' => 4107900,
    			'nome' => 'Floresta',
    			'UF' => 'PR',
    		),
    		4027 => 
    		array (
    			'codigoIbge' => 4108007,
    			'nome' => 'Florestópolis',
    			'UF' => 'PR',
    		),
    		4028 => 
    		array (
    			'codigoIbge' => 4108106,
    			'nome' => 'Flórida',
    			'UF' => 'PR',
    		),
    		4029 => 
    		array (
    			'codigoIbge' => 4108205,
    			'nome' => 'Formosa do Oeste',
    			'UF' => 'PR',
    		),
    		4030 => 
    		array (
    			'codigoIbge' => 4108304,
    			'nome' => 'Foz do Iguaçu',
    			'UF' => 'PR',
    		),
    		4031 => 
    		array (
    			'codigoIbge' => 4108320,
    			'nome' => 'Francisco Alves',
    			'UF' => 'PR',
    		),
    		4032 => 
    		array (
    			'codigoIbge' => 4108403,
    			'nome' => 'Francisco Beltrão',
    			'UF' => 'PR',
    		),
    		4033 => 
    		array (
    			'codigoIbge' => 4108452,
    			'nome' => 'Foz do Jordão',
    			'UF' => 'PR',
    		),
    		4034 => 
    		array (
    			'codigoIbge' => 4108502,
    			'nome' => 'General Carneiro',
    			'UF' => 'PR',
    		),
    		4035 => 
    		array (
    			'codigoIbge' => 4108551,
    			'nome' => 'Godoy Moreira',
    			'UF' => 'PR',
    		),
    		4036 => 
    		array (
    			'codigoIbge' => 4108601,
    			'nome' => 'Goioerê',
    			'UF' => 'PR',
    		),
    		4037 => 
    		array (
    			'codigoIbge' => 4108650,
    			'nome' => 'Goioxim',
    			'UF' => 'PR',
    		),
    		4038 => 
    		array (
    			'codigoIbge' => 4108700,
    			'nome' => 'Grandes Rios',
    			'UF' => 'PR',
    		),
    		4039 => 
    		array (
    			'codigoIbge' => 4108809,
    			'nome' => 'Guaíra',
    			'UF' => 'PR',
    		),
    		4040 => 
    		array (
    			'codigoIbge' => 4108908,
    			'nome' => 'Guairaçá',
    			'UF' => 'PR',
    		),
    		4041 => 
    		array (
    			'codigoIbge' => 4108957,
    			'nome' => 'Guamiranga',
    			'UF' => 'PR',
    		),
    		4042 => 
    		array (
    			'codigoIbge' => 4109005,
    			'nome' => 'Guapirama',
    			'UF' => 'PR',
    		),
    		4043 => 
    		array (
    			'codigoIbge' => 4109104,
    			'nome' => 'Guaporema',
    			'UF' => 'PR',
    		),
    		4044 => 
    		array (
    			'codigoIbge' => 4109203,
    			'nome' => 'Guaraci',
    			'UF' => 'PR',
    		),
    		4045 => 
    		array (
    			'codigoIbge' => 4109302,
    			'nome' => 'Guaraniaçu',
    			'UF' => 'PR',
    		),
    		4046 => 
    		array (
    			'codigoIbge' => 4109401,
    			'nome' => 'Guarapuava',
    			'UF' => 'PR',
    		),
    		4047 => 
    		array (
    			'codigoIbge' => 4109500,
    			'nome' => 'Guaraqueçaba',
    			'UF' => 'PR',
    		),
    		4048 => 
    		array (
    			'codigoIbge' => 4109609,
    			'nome' => 'Guaratuba',
    			'UF' => 'PR',
    		),
    		4049 => 
    		array (
    			'codigoIbge' => 4109658,
    			'nome' => 'Honório Serpa',
    			'UF' => 'PR',
    		),
    		4050 => 
    		array (
    			'codigoIbge' => 4109708,
    			'nome' => 'Ibaiti',
    			'UF' => 'PR',
    		),
    		4051 => 
    		array (
    			'codigoIbge' => 4109757,
    			'nome' => 'Ibema',
    			'UF' => 'PR',
    		),
    		4052 => 
    		array (
    			'codigoIbge' => 4109807,
    			'nome' => 'Ibiporã',
    			'UF' => 'PR',
    		),
    		4053 => 
    		array (
    			'codigoIbge' => 4109906,
    			'nome' => 'Icaraíma',
    			'UF' => 'PR',
    		),
    		4054 => 
    		array (
    			'codigoIbge' => 4110003,
    			'nome' => 'Iguaraçu',
    			'UF' => 'PR',
    		),
    		4055 => 
    		array (
    			'codigoIbge' => 4110052,
    			'nome' => 'Iguatu',
    			'UF' => 'PR',
    		),
    		4056 => 
    		array (
    			'codigoIbge' => 4110078,
    			'nome' => 'Imbaú',
    			'UF' => 'PR',
    		),
    		4057 => 
    		array (
    			'codigoIbge' => 4110102,
    			'nome' => 'Imbituva',
    			'UF' => 'PR',
    		),
    		4058 => 
    		array (
    			'codigoIbge' => 4110201,
    			'nome' => 'Inácio Martins',
    			'UF' => 'PR',
    		),
    		4059 => 
    		array (
    			'codigoIbge' => 4110300,
    			'nome' => 'Inajá',
    			'UF' => 'PR',
    		),
    		4060 => 
    		array (
    			'codigoIbge' => 4110409,
    			'nome' => 'Indianópolis',
    			'UF' => 'PR',
    		),
    		4061 => 
    		array (
    			'codigoIbge' => 4110508,
    			'nome' => 'Ipiranga',
    			'UF' => 'PR',
    		),
    		4062 => 
    		array (
    			'codigoIbge' => 4110607,
    			'nome' => 'Iporã',
    			'UF' => 'PR',
    		),
    		4063 => 
    		array (
    			'codigoIbge' => 4110656,
    			'nome' => 'Iracema do Oeste',
    			'UF' => 'PR',
    		),
    		4064 => 
    		array (
    			'codigoIbge' => 4110706,
    			'nome' => 'Irati',
    			'UF' => 'PR',
    		),
    		4065 => 
    		array (
    			'codigoIbge' => 4110805,
    			'nome' => 'Iretama',
    			'UF' => 'PR',
    		),
    		4066 => 
    		array (
    			'codigoIbge' => 4110904,
    			'nome' => 'Itaguajé',
    			'UF' => 'PR',
    		),
    		4067 => 
    		array (
    			'codigoIbge' => 4110953,
    			'nome' => 'Itaipulândia',
    			'UF' => 'PR',
    		),
    		4068 => 
    		array (
    			'codigoIbge' => 4111001,
    			'nome' => 'Itambaracá',
    			'UF' => 'PR',
    		),
    		4069 => 
    		array (
    			'codigoIbge' => 4111100,
    			'nome' => 'Itambé',
    			'UF' => 'PR',
    		),
    		4070 => 
    		array (
    			'codigoIbge' => 4111209,
    			'nome' => 'Itapejara d\'Oeste',
    			'UF' => 'PR',
    		),
    		4071 => 
    		array (
    			'codigoIbge' => 4111258,
    			'nome' => 'Itaperuçu',
    			'UF' => 'PR',
    		),
    		4072 => 
    		array (
    			'codigoIbge' => 4111308,
    			'nome' => 'Itaúna do Sul',
    			'UF' => 'PR',
    		),
    		4073 => 
    		array (
    			'codigoIbge' => 4111407,
    			'nome' => 'Ivaí',
    			'UF' => 'PR',
    		),
    		4074 => 
    		array (
    			'codigoIbge' => 4111506,
    			'nome' => 'Ivaiporã',
    			'UF' => 'PR',
    		),
    		4075 => 
    		array (
    			'codigoIbge' => 4111555,
    			'nome' => 'Ivaté',
    			'UF' => 'PR',
    		),
    		4076 => 
    		array (
    			'codigoIbge' => 4111605,
    			'nome' => 'Ivatuba',
    			'UF' => 'PR',
    		),
    		4077 => 
    		array (
    			'codigoIbge' => 4111704,
    			'nome' => 'Jaboti',
    			'UF' => 'PR',
    		),
    		4078 => 
    		array (
    			'codigoIbge' => 4111803,
    			'nome' => 'Jacarezinho',
    			'UF' => 'PR',
    		),
    		4079 => 
    		array (
    			'codigoIbge' => 4111902,
    			'nome' => 'Jaguapitã',
    			'UF' => 'PR',
    		),
    		4080 => 
    		array (
    			'codigoIbge' => 4112009,
    			'nome' => 'Jaguariaíva',
    			'UF' => 'PR',
    		),
    		4081 => 
    		array (
    			'codigoIbge' => 4112108,
    			'nome' => 'Jandaia do Sul',
    			'UF' => 'PR',
    		),
    		4082 => 
    		array (
    			'codigoIbge' => 4112207,
    			'nome' => 'Janiópolis',
    			'UF' => 'PR',
    		),
    		4083 => 
    		array (
    			'codigoIbge' => 4112306,
    			'nome' => 'Japira',
    			'UF' => 'PR',
    		),
    		4084 => 
    		array (
    			'codigoIbge' => 4112405,
    			'nome' => 'Japurá',
    			'UF' => 'PR',
    		),
    		4085 => 
    		array (
    			'codigoIbge' => 4112504,
    			'nome' => 'Jardim Alegre',
    			'UF' => 'PR',
    		),
    		4086 => 
    		array (
    			'codigoIbge' => 4112603,
    			'nome' => 'Jardim Olinda',
    			'UF' => 'PR',
    		),
    		4087 => 
    		array (
    			'codigoIbge' => 4112702,
    			'nome' => 'Jataizinho',
    			'UF' => 'PR',
    		),
    		4088 => 
    		array (
    			'codigoIbge' => 4112751,
    			'nome' => 'Jesuítas',
    			'UF' => 'PR',
    		),
    		4089 => 
    		array (
    			'codigoIbge' => 4112801,
    			'nome' => 'Joaquim Távora',
    			'UF' => 'PR',
    		),
    		4090 => 
    		array (
    			'codigoIbge' => 4112900,
    			'nome' => 'Jundiaí do Sul',
    			'UF' => 'PR',
    		),
    		4091 => 
    		array (
    			'codigoIbge' => 4112959,
    			'nome' => 'Juranda',
    			'UF' => 'PR',
    		),
    		4092 => 
    		array (
    			'codigoIbge' => 4113007,
    			'nome' => 'Jussara',
    			'UF' => 'PR',
    		),
    		4093 => 
    		array (
    			'codigoIbge' => 4113106,
    			'nome' => 'Kaloré',
    			'UF' => 'PR',
    		),
    		4094 => 
    		array (
    			'codigoIbge' => 4113205,
    			'nome' => 'Lapa',
    			'UF' => 'PR',
    		),
    		4095 => 
    		array (
    			'codigoIbge' => 4113254,
    			'nome' => 'Laranjal',
    			'UF' => 'PR',
    		),
    		4096 => 
    		array (
    			'codigoIbge' => 4113304,
    			'nome' => 'Laranjeiras do Sul',
    			'UF' => 'PR',
    		),
    		4097 => 
    		array (
    			'codigoIbge' => 4113403,
    			'nome' => 'Leópolis',
    			'UF' => 'PR',
    		),
    		4098 => 
    		array (
    			'codigoIbge' => 4113429,
    			'nome' => 'Lidianópolis',
    			'UF' => 'PR',
    		),
    		4099 => 
    		array (
    			'codigoIbge' => 4113452,
    			'nome' => 'Lindoeste',
    			'UF' => 'PR',
    		),
    		4100 => 
    		array (
    			'codigoIbge' => 4113502,
    			'nome' => 'Loanda',
    			'UF' => 'PR',
    		),
    		4101 => 
    		array (
    			'codigoIbge' => 4113601,
    			'nome' => 'Lobato',
    			'UF' => 'PR',
    		),
    		4102 => 
    		array (
    			'codigoIbge' => 4113700,
    			'nome' => 'Londrina',
    			'UF' => 'PR',
    		),
    		4103 => 
    		array (
    			'codigoIbge' => 4113734,
    			'nome' => 'Luiziana',
    			'UF' => 'PR',
    		),
    		4104 => 
    		array (
    			'codigoIbge' => 4113759,
    			'nome' => 'Lunardelli',
    			'UF' => 'PR',
    		),
    		4105 => 
    		array (
    			'codigoIbge' => 4113809,
    			'nome' => 'Lupionópolis',
    			'UF' => 'PR',
    		),
    		4106 => 
    		array (
    			'codigoIbge' => 4113908,
    			'nome' => 'Mallet',
    			'UF' => 'PR',
    		),
    		4107 => 
    		array (
    			'codigoIbge' => 4114005,
    			'nome' => 'Mamborê',
    			'UF' => 'PR',
    		),
    		4108 => 
    		array (
    			'codigoIbge' => 4114104,
    			'nome' => 'Mandaguaçu',
    			'UF' => 'PR',
    		),
    		4109 => 
    		array (
    			'codigoIbge' => 4114203,
    			'nome' => 'Mandaguari',
    			'UF' => 'PR',
    		),
    		4110 => 
    		array (
    			'codigoIbge' => 4114302,
    			'nome' => 'Mandirituba',
    			'UF' => 'PR',
    		),
    		4111 => 
    		array (
    			'codigoIbge' => 4114351,
    			'nome' => 'Manfrinópolis',
    			'UF' => 'PR',
    		),
    		4112 => 
    		array (
    			'codigoIbge' => 4114401,
    			'nome' => 'Mangueirinha',
    			'UF' => 'PR',
    		),
    		4113 => 
    		array (
    			'codigoIbge' => 4114500,
    			'nome' => 'Manoel Ribas',
    			'UF' => 'PR',
    		),
    		4114 => 
    		array (
    			'codigoIbge' => 4114609,
    			'nome' => 'Marechal Cândido Rondon',
    			'UF' => 'PR',
    		),
    		4115 => 
    		array (
    			'codigoIbge' => 4114708,
    			'nome' => 'Maria Helena',
    			'UF' => 'PR',
    		),
    		4116 => 
    		array (
    			'codigoIbge' => 4114807,
    			'nome' => 'Marialva',
    			'UF' => 'PR',
    		),
    		4117 => 
    		array (
    			'codigoIbge' => 4114906,
    			'nome' => 'Marilândia do Sul',
    			'UF' => 'PR',
    		),
    		4118 => 
    		array (
    			'codigoIbge' => 4115002,
    			'nome' => 'Marilena',
    			'UF' => 'PR',
    		),
    		4119 => 
    		array (
    			'codigoIbge' => 4115101,
    			'nome' => 'Mariluz',
    			'UF' => 'PR',
    		),
    		4120 => 
    		array (
    			'codigoIbge' => 4115200,
    			'nome' => 'Maringá',
    			'UF' => 'PR',
    		),
    		4121 => 
    		array (
    			'codigoIbge' => 4115309,
    			'nome' => 'Mariópolis',
    			'UF' => 'PR',
    		),
    		4122 => 
    		array (
    			'codigoIbge' => 4115358,
    			'nome' => 'Maripá',
    			'UF' => 'PR',
    		),
    		4123 => 
    		array (
    			'codigoIbge' => 4115408,
    			'nome' => 'Marmeleiro',
    			'UF' => 'PR',
    		),
    		4124 => 
    		array (
    			'codigoIbge' => 4115457,
    			'nome' => 'Marquinho',
    			'UF' => 'PR',
    		),
    		4125 => 
    		array (
    			'codigoIbge' => 4115507,
    			'nome' => 'Marumbi',
    			'UF' => 'PR',
    		),
    		4126 => 
    		array (
    			'codigoIbge' => 4115606,
    			'nome' => 'Matelândia',
    			'UF' => 'PR',
    		),
    		4127 => 
    		array (
    			'codigoIbge' => 4115705,
    			'nome' => 'Matinhos',
    			'UF' => 'PR',
    		),
    		4128 => 
    		array (
    			'codigoIbge' => 4115739,
    			'nome' => 'Mato Rico',
    			'UF' => 'PR',
    		),
    		4129 => 
    		array (
    			'codigoIbge' => 4115754,
    			'nome' => 'Mauá da Serra',
    			'UF' => 'PR',
    		),
    		4130 => 
    		array (
    			'codigoIbge' => 4115804,
    			'nome' => 'Medianeira',
    			'UF' => 'PR',
    		),
    		4131 => 
    		array (
    			'codigoIbge' => 4115853,
    			'nome' => 'Mercedes',
    			'UF' => 'PR',
    		),
    		4132 => 
    		array (
    			'codigoIbge' => 4115903,
    			'nome' => 'Mirador',
    			'UF' => 'PR',
    		),
    		4133 => 
    		array (
    			'codigoIbge' => 4116000,
    			'nome' => 'Miraselva',
    			'UF' => 'PR',
    		),
    		4134 => 
    		array (
    			'codigoIbge' => 4116059,
    			'nome' => 'Missal',
    			'UF' => 'PR',
    		),
    		4135 => 
    		array (
    			'codigoIbge' => 4116109,
    			'nome' => 'Moreira Sales',
    			'UF' => 'PR',
    		),
    		4136 => 
    		array (
    			'codigoIbge' => 4116208,
    			'nome' => 'Morretes',
    			'UF' => 'PR',
    		),
    		4137 => 
    		array (
    			'codigoIbge' => 4116307,
    			'nome' => 'Munhoz de Melo',
    			'UF' => 'PR',
    		),
    		4138 => 
    		array (
    			'codigoIbge' => 4116406,
    			'nome' => 'Nossa Senhora das Graças',
    			'UF' => 'PR',
    		),
    		4139 => 
    		array (
    			'codigoIbge' => 4116505,
    			'nome' => 'Nova Aliança do Ivaí',
    			'UF' => 'PR',
    		),
    		4140 => 
    		array (
    			'codigoIbge' => 4116604,
    			'nome' => 'Nova América da Colina',
    			'UF' => 'PR',
    		),
    		4141 => 
    		array (
    			'codigoIbge' => 4116703,
    			'nome' => 'Nova Aurora',
    			'UF' => 'PR',
    		),
    		4142 => 
    		array (
    			'codigoIbge' => 4116802,
    			'nome' => 'Nova Cantu',
    			'UF' => 'PR',
    		),
    		4143 => 
    		array (
    			'codigoIbge' => 4116901,
    			'nome' => 'Nova Esperança',
    			'UF' => 'PR',
    		),
    		4144 => 
    		array (
    			'codigoIbge' => 4116950,
    			'nome' => 'Nova Esperança do Sudoeste',
    			'UF' => 'PR',
    		),
    		4145 => 
    		array (
    			'codigoIbge' => 4117008,
    			'nome' => 'Nova Fátima',
    			'UF' => 'PR',
    		),
    		4146 => 
    		array (
    			'codigoIbge' => 4117057,
    			'nome' => 'Nova Laranjeiras',
    			'UF' => 'PR',
    		),
    		4147 => 
    		array (
    			'codigoIbge' => 4117107,
    			'nome' => 'Nova Londrina',
    			'UF' => 'PR',
    		),
    		4148 => 
    		array (
    			'codigoIbge' => 4117206,
    			'nome' => 'Nova Olímpia',
    			'UF' => 'PR',
    		),
    		4149 => 
    		array (
    			'codigoIbge' => 4117214,
    			'nome' => 'Nova Santa Bárbara',
    			'UF' => 'PR',
    		),
    		4150 => 
    		array (
    			'codigoIbge' => 4117222,
    			'nome' => 'Nova Santa Rosa',
    			'UF' => 'PR',
    		),
    		4151 => 
    		array (
    			'codigoIbge' => 4117255,
    			'nome' => 'Nova Prata do Iguaçu',
    			'UF' => 'PR',
    		),
    		4152 => 
    		array (
    			'codigoIbge' => 4117271,
    			'nome' => 'Nova Tebas',
    			'UF' => 'PR',
    		),
    		4153 => 
    		array (
    			'codigoIbge' => 4117297,
    			'nome' => 'Novo Itacolomi',
    			'UF' => 'PR',
    		),
    		4154 => 
    		array (
    			'codigoIbge' => 4117305,
    			'nome' => 'Ortigueira',
    			'UF' => 'PR',
    		),
    		4155 => 
    		array (
    			'codigoIbge' => 4117404,
    			'nome' => 'Ourizona',
    			'UF' => 'PR',
    		),
    		4156 => 
    		array (
    			'codigoIbge' => 4117453,
    			'nome' => 'Ouro Verde do Oeste',
    			'UF' => 'PR',
    		),
    		4157 => 
    		array (
    			'codigoIbge' => 4117503,
    			'nome' => 'Paiçandu',
    			'UF' => 'PR',
    		),
    		4158 => 
    		array (
    			'codigoIbge' => 4117602,
    			'nome' => 'Palmas',
    			'UF' => 'PR',
    		),
    		4159 => 
    		array (
    			'codigoIbge' => 4117701,
    			'nome' => 'Palmeira',
    			'UF' => 'PR',
    		),
    		4160 => 
    		array (
    			'codigoIbge' => 4117800,
    			'nome' => 'Palmital',
    			'UF' => 'PR',
    		),
    		4161 => 
    		array (
    			'codigoIbge' => 4117909,
    			'nome' => 'Palotina',
    			'UF' => 'PR',
    		),
    		4162 => 
    		array (
    			'codigoIbge' => 4118006,
    			'nome' => 'Paraíso do Norte',
    			'UF' => 'PR',
    		),
    		4163 => 
    		array (
    			'codigoIbge' => 4118105,
    			'nome' => 'Paranacity',
    			'UF' => 'PR',
    		),
    		4164 => 
    		array (
    			'codigoIbge' => 4118204,
    			'nome' => 'Paranaguá',
    			'UF' => 'PR',
    		),
    		4165 => 
    		array (
    			'codigoIbge' => 4118303,
    			'nome' => 'Paranapoema',
    			'UF' => 'PR',
    		),
    		4166 => 
    		array (
    			'codigoIbge' => 4118402,
    			'nome' => 'Paranavaí',
    			'UF' => 'PR',
    		),
    		4167 => 
    		array (
    			'codigoIbge' => 4118451,
    			'nome' => 'Pato Bragado',
    			'UF' => 'PR',
    		),
    		4168 => 
    		array (
    			'codigoIbge' => 4118501,
    			'nome' => 'Pato Branco',
    			'UF' => 'PR',
    		),
    		4169 => 
    		array (
    			'codigoIbge' => 4118600,
    			'nome' => 'Paula Freitas',
    			'UF' => 'PR',
    		),
    		4170 => 
    		array (
    			'codigoIbge' => 4118709,
    			'nome' => 'Paulo Frontin',
    			'UF' => 'PR',
    		),
    		4171 => 
    		array (
    			'codigoIbge' => 4118808,
    			'nome' => 'Peabiru',
    			'UF' => 'PR',
    		),
    		4172 => 
    		array (
    			'codigoIbge' => 4118857,
    			'nome' => 'Perobal',
    			'UF' => 'PR',
    		),
    		4173 => 
    		array (
    			'codigoIbge' => 4118907,
    			'nome' => 'Pérola',
    			'UF' => 'PR',
    		),
    		4174 => 
    		array (
    			'codigoIbge' => 4119004,
    			'nome' => 'Pérola d\'Oeste',
    			'UF' => 'PR',
    		),
    		4175 => 
    		array (
    			'codigoIbge' => 4119103,
    			'nome' => 'Piên',
    			'UF' => 'PR',
    		),
    		4176 => 
    		array (
    			'codigoIbge' => 4119152,
    			'nome' => 'Pinhais',
    			'UF' => 'PR',
    		),
    		4177 => 
    		array (
    			'codigoIbge' => 4119202,
    			'nome' => 'Pinhalão',
    			'UF' => 'PR',
    		),
    		4178 => 
    		array (
    			'codigoIbge' => 4119251,
    			'nome' => 'Pinhal de São Bento',
    			'UF' => 'PR',
    		),
    		4179 => 
    		array (
    			'codigoIbge' => 4119301,
    			'nome' => 'Pinhão',
    			'UF' => 'PR',
    		),
    		4180 => 
    		array (
    			'codigoIbge' => 4119400,
    			'nome' => 'Piraí do Sul',
    			'UF' => 'PR',
    		),
    		4181 => 
    		array (
    			'codigoIbge' => 4119509,
    			'nome' => 'Piraquara',
    			'UF' => 'PR',
    		),
    		4182 => 
    		array (
    			'codigoIbge' => 4119608,
    			'nome' => 'Pitanga',
    			'UF' => 'PR',
    		),
    		4183 => 
    		array (
    			'codigoIbge' => 4119657,
    			'nome' => 'Pitangueiras',
    			'UF' => 'PR',
    		),
    		4184 => 
    		array (
    			'codigoIbge' => 4119707,
    			'nome' => 'Planaltina do Paraná',
    			'UF' => 'PR',
    		),
    		4185 => 
    		array (
    			'codigoIbge' => 4119806,
    			'nome' => 'Planalto',
    			'UF' => 'PR',
    		),
    		4186 => 
    		array (
    			'codigoIbge' => 4119905,
    			'nome' => 'Ponta Grossa',
    			'UF' => 'PR',
    		),
    		4187 => 
    		array (
    			'codigoIbge' => 4119954,
    			'nome' => 'Pontal do Paraná',
    			'UF' => 'PR',
    		),
    		4188 => 
    		array (
    			'codigoIbge' => 4120002,
    			'nome' => 'Porecatu',
    			'UF' => 'PR',
    		),
    		4189 => 
    		array (
    			'codigoIbge' => 4120101,
    			'nome' => 'Porto Amazonas',
    			'UF' => 'PR',
    		),
    		4190 => 
    		array (
    			'codigoIbge' => 4120150,
    			'nome' => 'Porto Barreiro',
    			'UF' => 'PR',
    		),
    		4191 => 
    		array (
    			'codigoIbge' => 4120200,
    			'nome' => 'Porto Rico',
    			'UF' => 'PR',
    		),
    		4192 => 
    		array (
    			'codigoIbge' => 4120309,
    			'nome' => 'Porto Vitória',
    			'UF' => 'PR',
    		),
    		4193 => 
    		array (
    			'codigoIbge' => 4120333,
    			'nome' => 'Prado Ferreira',
    			'UF' => 'PR',
    		),
    		4194 => 
    		array (
    			'codigoIbge' => 4120358,
    			'nome' => 'Pranchita',
    			'UF' => 'PR',
    		),
    		4195 => 
    		array (
    			'codigoIbge' => 4120408,
    			'nome' => 'Presidente Castelo Branco',
    			'UF' => 'PR',
    		),
    		4196 => 
    		array (
    			'codigoIbge' => 4120507,
    			'nome' => 'Primeiro de Maio',
    			'UF' => 'PR',
    		),
    		4197 => 
    		array (
    			'codigoIbge' => 4120606,
    			'nome' => 'Prudentópolis',
    			'UF' => 'PR',
    		),
    		4198 => 
    		array (
    			'codigoIbge' => 4120655,
    			'nome' => 'Quarto Centenário',
    			'UF' => 'PR',
    		),
    		4199 => 
    		array (
    			'codigoIbge' => 4120705,
    			'nome' => 'Quatiguá',
    			'UF' => 'PR',
    		),
    		4200 => 
    		array (
    			'codigoIbge' => 4120804,
    			'nome' => 'Quatro Barras',
    			'UF' => 'PR',
    		),
    		4201 => 
    		array (
    			'codigoIbge' => 4120853,
    			'nome' => 'Quatro Pontes',
    			'UF' => 'PR',
    		),
    		4202 => 
    		array (
    			'codigoIbge' => 4120903,
    			'nome' => 'Quedas do Iguaçu',
    			'UF' => 'PR',
    		),
    		4203 => 
    		array (
    			'codigoIbge' => 4121000,
    			'nome' => 'Querência do Norte',
    			'UF' => 'PR',
    		),
    		4204 => 
    		array (
    			'codigoIbge' => 4121109,
    			'nome' => 'Quinta do Sol',
    			'UF' => 'PR',
    		),
    		4205 => 
    		array (
    			'codigoIbge' => 4121208,
    			'nome' => 'Quitandinha',
    			'UF' => 'PR',
    		),
    		4206 => 
    		array (
    			'codigoIbge' => 4121257,
    			'nome' => 'Ramilândia',
    			'UF' => 'PR',
    		),
    		4207 => 
    		array (
    			'codigoIbge' => 4121307,
    			'nome' => 'Rancho Alegre',
    			'UF' => 'PR',
    		),
    		4208 => 
    		array (
    			'codigoIbge' => 4121356,
    			'nome' => 'Rancho Alegre D\'Oeste',
    			'UF' => 'PR',
    		),
    		4209 => 
    		array (
    			'codigoIbge' => 4121406,
    			'nome' => 'Realeza',
    			'UF' => 'PR',
    		),
    		4210 => 
    		array (
    			'codigoIbge' => 4121505,
    			'nome' => 'Rebouças',
    			'UF' => 'PR',
    		),
    		4211 => 
    		array (
    			'codigoIbge' => 4121604,
    			'nome' => 'Renascença',
    			'UF' => 'PR',
    		),
    		4212 => 
    		array (
    			'codigoIbge' => 4121703,
    			'nome' => 'Reserva',
    			'UF' => 'PR',
    		),
    		4213 => 
    		array (
    			'codigoIbge' => 4121752,
    			'nome' => 'Reserva do Iguaçu',
    			'UF' => 'PR',
    		),
    		4214 => 
    		array (
    			'codigoIbge' => 4121802,
    			'nome' => 'Ribeirão Claro',
    			'UF' => 'PR',
    		),
    		4215 => 
    		array (
    			'codigoIbge' => 4121901,
    			'nome' => 'Ribeirão do Pinhal',
    			'UF' => 'PR',
    		),
    		4216 => 
    		array (
    			'codigoIbge' => 4122008,
    			'nome' => 'Rio Azul',
    			'UF' => 'PR',
    		),
    		4217 => 
    		array (
    			'codigoIbge' => 4122107,
    			'nome' => 'Rio Bom',
    			'UF' => 'PR',
    		),
    		4218 => 
    		array (
    			'codigoIbge' => 4122156,
    			'nome' => 'Rio Bonito do Iguaçu',
    			'UF' => 'PR',
    		),
    		4219 => 
    		array (
    			'codigoIbge' => 4122172,
    			'nome' => 'Rio Branco do Ivaí',
    			'UF' => 'PR',
    		),
    		4220 => 
    		array (
    			'codigoIbge' => 4122206,
    			'nome' => 'Rio Branco do Sul',
    			'UF' => 'PR',
    		),
    		4221 => 
    		array (
    			'codigoIbge' => 4122305,
    			'nome' => 'Rio Negro',
    			'UF' => 'PR',
    		),
    		4222 => 
    		array (
    			'codigoIbge' => 4122404,
    			'nome' => 'Rolândia',
    			'UF' => 'PR',
    		),
    		4223 => 
    		array (
    			'codigoIbge' => 4122503,
    			'nome' => 'Roncador',
    			'UF' => 'PR',
    		),
    		4224 => 
    		array (
    			'codigoIbge' => 4122602,
    			'nome' => 'Rondon',
    			'UF' => 'PR',
    		),
    		4225 => 
    		array (
    			'codigoIbge' => 4122651,
    			'nome' => 'Rosário do Ivaí',
    			'UF' => 'PR',
    		),
    		4226 => 
    		array (
    			'codigoIbge' => 4122701,
    			'nome' => 'Sabáudia',
    			'UF' => 'PR',
    		),
    		4227 => 
    		array (
    			'codigoIbge' => 4122800,
    			'nome' => 'Salgado Filho',
    			'UF' => 'PR',
    		),
    		4228 => 
    		array (
    			'codigoIbge' => 4122909,
    			'nome' => 'Salto do Itararé',
    			'UF' => 'PR',
    		),
    		4229 => 
    		array (
    			'codigoIbge' => 4123006,
    			'nome' => 'Salto do Lontra',
    			'UF' => 'PR',
    		),
    		4230 => 
    		array (
    			'codigoIbge' => 4123105,
    			'nome' => 'Santa Amélia',
    			'UF' => 'PR',
    		),
    		4231 => 
    		array (
    			'codigoIbge' => 4123204,
    			'nome' => 'Santa Cecília do Pavão',
    			'UF' => 'PR',
    		),
    		4232 => 
    		array (
    			'codigoIbge' => 4123303,
    			'nome' => 'Santa Cruz de Monte Castelo',
    			'UF' => 'PR',
    		),
    		4233 => 
    		array (
    			'codigoIbge' => 4123402,
    			'nome' => 'Santa Fé',
    			'UF' => 'PR',
    		),
    		4234 => 
    		array (
    			'codigoIbge' => 4123501,
    			'nome' => 'Santa Helena',
    			'UF' => 'PR',
    		),
    		4235 => 
    		array (
    			'codigoIbge' => 4123600,
    			'nome' => 'Santa Inês',
    			'UF' => 'PR',
    		),
    		4236 => 
    		array (
    			'codigoIbge' => 4123709,
    			'nome' => 'Santa Isabel do Ivaí',
    			'UF' => 'PR',
    		),
    		4237 => 
    		array (
    			'codigoIbge' => 4123808,
    			'nome' => 'Santa Izabel do Oeste',
    			'UF' => 'PR',
    		),
    		4238 => 
    		array (
    			'codigoIbge' => 4123824,
    			'nome' => 'Santa Lúcia',
    			'UF' => 'PR',
    		),
    		4239 => 
    		array (
    			'codigoIbge' => 4123857,
    			'nome' => 'Santa Maria do Oeste',
    			'UF' => 'PR',
    		),
    		4240 => 
    		array (
    			'codigoIbge' => 4123907,
    			'nome' => 'Santa Mariana',
    			'UF' => 'PR',
    		),
    		4241 => 
    		array (
    			'codigoIbge' => 4123956,
    			'nome' => 'Santa Mônica',
    			'UF' => 'PR',
    		),
    		4242 => 
    		array (
    			'codigoIbge' => 4124004,
    			'nome' => 'Santana do Itararé',
    			'UF' => 'PR',
    		),
    		4243 => 
    		array (
    			'codigoIbge' => 4124020,
    			'nome' => 'Santa Tereza do Oeste',
    			'UF' => 'PR',
    		),
    		4244 => 
    		array (
    			'codigoIbge' => 4124053,
    			'nome' => 'Santa Terezinha de Itaipu',
    			'UF' => 'PR',
    		),
    		4245 => 
    		array (
    			'codigoIbge' => 4124103,
    			'nome' => 'Santo Antônio da Platina',
    			'UF' => 'PR',
    		),
    		4246 => 
    		array (
    			'codigoIbge' => 4124202,
    			'nome' => 'Santo Antônio do Caiuá',
    			'UF' => 'PR',
    		),
    		4247 => 
    		array (
    			'codigoIbge' => 4124301,
    			'nome' => 'Santo Antônio do Paraíso',
    			'UF' => 'PR',
    		),
    		4248 => 
    		array (
    			'codigoIbge' => 4124400,
    			'nome' => 'Santo Antônio do Sudoeste',
    			'UF' => 'PR',
    		),
    		4249 => 
    		array (
    			'codigoIbge' => 4124509,
    			'nome' => 'Santo Inácio',
    			'UF' => 'PR',
    		),
    		4250 => 
    		array (
    			'codigoIbge' => 4124608,
    			'nome' => 'São Carlos do Ivaí',
    			'UF' => 'PR',
    		),
    		4251 => 
    		array (
    			'codigoIbge' => 4124707,
    			'nome' => 'São Jerônimo da Serra',
    			'UF' => 'PR',
    		),
    		4252 => 
    		array (
    			'codigoIbge' => 4124806,
    			'nome' => 'São João',
    			'UF' => 'PR',
    		),
    		4253 => 
    		array (
    			'codigoIbge' => 4124905,
    			'nome' => 'São João do Caiuá',
    			'UF' => 'PR',
    		),
    		4254 => 
    		array (
    			'codigoIbge' => 4125001,
    			'nome' => 'São João do Ivaí',
    			'UF' => 'PR',
    		),
    		4255 => 
    		array (
    			'codigoIbge' => 4125100,
    			'nome' => 'São João do Triunfo',
    			'UF' => 'PR',
    		),
    		4256 => 
    		array (
    			'codigoIbge' => 4125209,
    			'nome' => 'São Jorge d\'Oeste',
    			'UF' => 'PR',
    		),
    		4257 => 
    		array (
    			'codigoIbge' => 4125308,
    			'nome' => 'São Jorge do Ivaí',
    			'UF' => 'PR',
    		),
    		4258 => 
    		array (
    			'codigoIbge' => 4125357,
    			'nome' => 'São Jorge do Patrocínio',
    			'UF' => 'PR',
    		),
    		4259 => 
    		array (
    			'codigoIbge' => 4125407,
    			'nome' => 'São José da Boa Vista',
    			'UF' => 'PR',
    		),
    		4260 => 
    		array (
    			'codigoIbge' => 4125456,
    			'nome' => 'São José das Palmeiras',
    			'UF' => 'PR',
    		),
    		4261 => 
    		array (
    			'codigoIbge' => 4125506,
    			'nome' => 'São José dos Pinhais',
    			'UF' => 'PR',
    		),
    		4262 => 
    		array (
    			'codigoIbge' => 4125555,
    			'nome' => 'São Manoel do Paraná',
    			'UF' => 'PR',
    		),
    		4263 => 
    		array (
    			'codigoIbge' => 4125605,
    			'nome' => 'São Mateus do Sul',
    			'UF' => 'PR',
    		),
    		4264 => 
    		array (
    			'codigoIbge' => 4125704,
    			'nome' => 'São Miguel do Iguaçu',
    			'UF' => 'PR',
    		),
    		4265 => 
    		array (
    			'codigoIbge' => 4125753,
    			'nome' => 'São Pedro do Iguaçu',
    			'UF' => 'PR',
    		),
    		4266 => 
    		array (
    			'codigoIbge' => 4125803,
    			'nome' => 'São Pedro do Ivaí',
    			'UF' => 'PR',
    		),
    		4267 => 
    		array (
    			'codigoIbge' => 4125902,
    			'nome' => 'São Pedro do Paraná',
    			'UF' => 'PR',
    		),
    		4268 => 
    		array (
    			'codigoIbge' => 4126009,
    			'nome' => 'São Sebastião da Amoreira',
    			'UF' => 'PR',
    		),
    		4269 => 
    		array (
    			'codigoIbge' => 4126108,
    			'nome' => 'São Tomé',
    			'UF' => 'PR',
    		),
    		4270 => 
    		array (
    			'codigoIbge' => 4126207,
    			'nome' => 'Sapopema',
    			'UF' => 'PR',
    		),
    		4271 => 
    		array (
    			'codigoIbge' => 4126256,
    			'nome' => 'Sarandi',
    			'UF' => 'PR',
    		),
    		4272 => 
    		array (
    			'codigoIbge' => 4126272,
    			'nome' => 'Saudade do Iguaçu',
    			'UF' => 'PR',
    		),
    		4273 => 
    		array (
    			'codigoIbge' => 4126306,
    			'nome' => 'Sengés',
    			'UF' => 'PR',
    		),
    		4274 => 
    		array (
    			'codigoIbge' => 4126355,
    			'nome' => 'Serranópolis do Iguaçu',
    			'UF' => 'PR',
    		),
    		4275 => 
    		array (
    			'codigoIbge' => 4126405,
    			'nome' => 'Sertaneja',
    			'UF' => 'PR',
    		),
    		4276 => 
    		array (
    			'codigoIbge' => 4126504,
    			'nome' => 'Sertanópolis',
    			'UF' => 'PR',
    		),
    		4277 => 
    		array (
    			'codigoIbge' => 4126603,
    			'nome' => 'Siqueira Campos',
    			'UF' => 'PR',
    		),
    		4278 => 
    		array (
    			'codigoIbge' => 4126652,
    			'nome' => 'Sulina',
    			'UF' => 'PR',
    		),
    		4279 => 
    		array (
    			'codigoIbge' => 4126678,
    			'nome' => 'Tamarana',
    			'UF' => 'PR',
    		),
    		4280 => 
    		array (
    			'codigoIbge' => 4126702,
    			'nome' => 'Tamboara',
    			'UF' => 'PR',
    		),
    		4281 => 
    		array (
    			'codigoIbge' => 4126801,
    			'nome' => 'Tapejara',
    			'UF' => 'PR',
    		),
    		4282 => 
    		array (
    			'codigoIbge' => 4126900,
    			'nome' => 'Tapira',
    			'UF' => 'PR',
    		),
    		4283 => 
    		array (
    			'codigoIbge' => 4127007,
    			'nome' => 'Teixeira Soares',
    			'UF' => 'PR',
    		),
    		4284 => 
    		array (
    			'codigoIbge' => 4127106,
    			'nome' => 'Telêmaco Borba',
    			'UF' => 'PR',
    		),
    		4285 => 
    		array (
    			'codigoIbge' => 4127205,
    			'nome' => 'Terra Boa',
    			'UF' => 'PR',
    		),
    		4286 => 
    		array (
    			'codigoIbge' => 4127304,
    			'nome' => 'Terra Rica',
    			'UF' => 'PR',
    		),
    		4287 => 
    		array (
    			'codigoIbge' => 4127403,
    			'nome' => 'Terra Roxa',
    			'UF' => 'PR',
    		),
    		4288 => 
    		array (
    			'codigoIbge' => 4127502,
    			'nome' => 'Tibagi',
    			'UF' => 'PR',
    		),
    		4289 => 
    		array (
    			'codigoIbge' => 4127601,
    			'nome' => 'Tijucas do Sul',
    			'UF' => 'PR',
    		),
    		4290 => 
    		array (
    			'codigoIbge' => 4127700,
    			'nome' => 'Toledo',
    			'UF' => 'PR',
    		),
    		4291 => 
    		array (
    			'codigoIbge' => 4127809,
    			'nome' => 'Tomazina',
    			'UF' => 'PR',
    		),
    		4292 => 
    		array (
    			'codigoIbge' => 4127858,
    			'nome' => 'Três Barras do Paraná',
    			'UF' => 'PR',
    		),
    		4293 => 
    		array (
    			'codigoIbge' => 4127882,
    			'nome' => 'Tunas do Paraná',
    			'UF' => 'PR',
    		),
    		4294 => 
    		array (
    			'codigoIbge' => 4127908,
    			'nome' => 'Tuneiras do Oeste',
    			'UF' => 'PR',
    		),
    		4295 => 
    		array (
    			'codigoIbge' => 4127957,
    			'nome' => 'Tupãssi',
    			'UF' => 'PR',
    		),
    		4296 => 
    		array (
    			'codigoIbge' => 4127965,
    			'nome' => 'Turvo',
    			'UF' => 'PR',
    		),
    		4297 => 
    		array (
    			'codigoIbge' => 4128005,
    			'nome' => 'Ubiratã',
    			'UF' => 'PR',
    		),
    		4298 => 
    		array (
    			'codigoIbge' => 4128104,
    			'nome' => 'Umuarama',
    			'UF' => 'PR',
    		),
    		4299 => 
    		array (
    			'codigoIbge' => 4128203,
    			'nome' => 'União da Vitória',
    			'UF' => 'PR',
    		),
    		4300 => 
    		array (
    			'codigoIbge' => 4128302,
    			'nome' => 'Uniflor',
    			'UF' => 'PR',
    		),
    		4301 => 
    		array (
    			'codigoIbge' => 4128401,
    			'nome' => 'Uraí',
    			'UF' => 'PR',
    		),
    		4302 => 
    		array (
    			'codigoIbge' => 4128500,
    			'nome' => 'Wenceslau Braz',
    			'UF' => 'PR',
    		),
    		4303 => 
    		array (
    			'codigoIbge' => 4128534,
    			'nome' => 'Ventania',
    			'UF' => 'PR',
    		),
    		4304 => 
    		array (
    			'codigoIbge' => 4128559,
    			'nome' => 'Vera Cruz do Oeste',
    			'UF' => 'PR',
    		),
    		4305 => 
    		array (
    			'codigoIbge' => 4128609,
    			'nome' => 'Verê',
    			'UF' => 'PR',
    		),
    		4306 => 
    		array (
    			'codigoIbge' => 4128625,
    			'nome' => 'Alto Paraíso',
    			'UF' => 'PR',
    		),
    		4307 => 
    		array (
    			'codigoIbge' => 4128633,
    			'nome' => 'Doutor Ulysses',
    			'UF' => 'PR',
    		),
    		4308 => 
    		array (
    			'codigoIbge' => 4128658,
    			'nome' => 'Virmond',
    			'UF' => 'PR',
    		),
    		4309 => 
    		array (
    			'codigoIbge' => 4128708,
    			'nome' => 'Vitorino',
    			'UF' => 'PR',
    		),
    		4310 => 
    		array (
    			'codigoIbge' => 4128807,
    			'nome' => 'Xambrê',
    			'UF' => 'PR',
    		),
    		4311 => 
    		array (
    			'codigoIbge' => 4200051,
    			'nome' => 'Abdon Batista',
    			'UF' => 'SC',
    		),
    		4312 => 
    		array (
    			'codigoIbge' => 4200101,
    			'nome' => 'Abelardo Luz',
    			'UF' => 'SC',
    		),
    		4313 => 
    		array (
    			'codigoIbge' => 4200200,
    			'nome' => 'Agrolândia',
    			'UF' => 'SC',
    		),
    		4314 => 
    		array (
    			'codigoIbge' => 4200309,
    			'nome' => 'Agronômica',
    			'UF' => 'SC',
    		),
    		4315 => 
    		array (
    			'codigoIbge' => 4200408,
    			'nome' => 'Água Doce',
    			'UF' => 'SC',
    		),
    		4316 => 
    		array (
    			'codigoIbge' => 4200507,
    			'nome' => 'Águas de Chapecó',
    			'UF' => 'SC',
    		),
    		4317 => 
    		array (
    			'codigoIbge' => 4200556,
    			'nome' => 'Águas Frias',
    			'UF' => 'SC',
    		),
    		4318 => 
    		array (
    			'codigoIbge' => 4200606,
    			'nome' => 'Águas Mornas',
    			'UF' => 'SC',
    		),
    		4319 => 
    		array (
    			'codigoIbge' => 4200705,
    			'nome' => 'Alfredo Wagner',
    			'UF' => 'SC',
    		),
    		4320 => 
    		array (
    			'codigoIbge' => 4200754,
    			'nome' => 'Alto Bela Vista',
    			'UF' => 'SC',
    		),
    		4321 => 
    		array (
    			'codigoIbge' => 4200804,
    			'nome' => 'Anchieta',
    			'UF' => 'SC',
    		),
    		4322 => 
    		array (
    			'codigoIbge' => 4200903,
    			'nome' => 'Angelina',
    			'UF' => 'SC',
    		),
    		4323 => 
    		array (
    			'codigoIbge' => 4201000,
    			'nome' => 'Anita Garibaldi',
    			'UF' => 'SC',
    		),
    		4324 => 
    		array (
    			'codigoIbge' => 4201109,
    			'nome' => 'Anitápolis',
    			'UF' => 'SC',
    		),
    		4325 => 
    		array (
    			'codigoIbge' => 4201208,
    			'nome' => 'Antônio Carlos',
    			'UF' => 'SC',
    		),
    		4326 => 
    		array (
    			'codigoIbge' => 4201257,
    			'nome' => 'Apiúna',
    			'UF' => 'SC',
    		),
    		4327 => 
    		array (
    			'codigoIbge' => 4201273,
    			'nome' => 'Arabutã',
    			'UF' => 'SC',
    		),
    		4328 => 
    		array (
    			'codigoIbge' => 4201307,
    			'nome' => 'Araquari',
    			'UF' => 'SC',
    		),
    		4329 => 
    		array (
    			'codigoIbge' => 4201406,
    			'nome' => 'Araranguá',
    			'UF' => 'SC',
    		),
    		4330 => 
    		array (
    			'codigoIbge' => 4201505,
    			'nome' => 'Armazém',
    			'UF' => 'SC',
    		),
    		4331 => 
    		array (
    			'codigoIbge' => 4201604,
    			'nome' => 'Arroio Trinta',
    			'UF' => 'SC',
    		),
    		4332 => 
    		array (
    			'codigoIbge' => 4201653,
    			'nome' => 'Arvoredo',
    			'UF' => 'SC',
    		),
    		4333 => 
    		array (
    			'codigoIbge' => 4201703,
    			'nome' => 'Ascurra',
    			'UF' => 'SC',
    		),
    		4334 => 
    		array (
    			'codigoIbge' => 4201802,
    			'nome' => 'Atalanta',
    			'UF' => 'SC',
    		),
    		4335 => 
    		array (
    			'codigoIbge' => 4201901,
    			'nome' => 'Aurora',
    			'UF' => 'SC',
    		),
    		4336 => 
    		array (
    			'codigoIbge' => 4201950,
    			'nome' => 'Balneário Arroio do Silva',
    			'UF' => 'SC',
    		),
    		4337 => 
    		array (
    			'codigoIbge' => 4202008,
    			'nome' => 'Balneário Camboriú',
    			'UF' => 'SC',
    		),
    		4338 => 
    		array (
    			'codigoIbge' => 4202057,
    			'nome' => 'Balneário Barra do Sul',
    			'UF' => 'SC',
    		),
    		4339 => 
    		array (
    			'codigoIbge' => 4202073,
    			'nome' => 'Balneário Gaivota',
    			'UF' => 'SC',
    		),
    		4340 => 
    		array (
    			'codigoIbge' => 4202081,
    			'nome' => 'Bandeirante',
    			'UF' => 'SC',
    		),
    		4341 => 
    		array (
    			'codigoIbge' => 4202099,
    			'nome' => 'Barra Bonita',
    			'UF' => 'SC',
    		),
    		4342 => 
    		array (
    			'codigoIbge' => 4202107,
    			'nome' => 'Barra Velha',
    			'UF' => 'SC',
    		),
    		4343 => 
    		array (
    			'codigoIbge' => 4202131,
    			'nome' => 'Bela Vista do Toldo',
    			'UF' => 'SC',
    		),
    		4344 => 
    		array (
    			'codigoIbge' => 4202156,
    			'nome' => 'Belmonte',
    			'UF' => 'SC',
    		),
    		4345 => 
    		array (
    			'codigoIbge' => 4202206,
    			'nome' => 'Benedito Novo',
    			'UF' => 'SC',
    		),
    		4346 => 
    		array (
    			'codigoIbge' => 4202305,
    			'nome' => 'Biguaçu',
    			'UF' => 'SC',
    		),
    		4347 => 
    		array (
    			'codigoIbge' => 4202404,
    			'nome' => 'Blumenau',
    			'UF' => 'SC',
    		),
    		4348 => 
    		array (
    			'codigoIbge' => 4202438,
    			'nome' => 'Bocaina do Sul',
    			'UF' => 'SC',
    		),
    		4349 => 
    		array (
    			'codigoIbge' => 4202453,
    			'nome' => 'Bombinhas',
    			'UF' => 'SC',
    		),
    		4350 => 
    		array (
    			'codigoIbge' => 4202503,
    			'nome' => 'Bom Jardim da Serra',
    			'UF' => 'SC',
    		),
    		4351 => 
    		array (
    			'codigoIbge' => 4202537,
    			'nome' => 'Bom Jesus',
    			'UF' => 'SC',
    		),
    		4352 => 
    		array (
    			'codigoIbge' => 4202578,
    			'nome' => 'Bom Jesus do Oeste',
    			'UF' => 'SC',
    		),
    		4353 => 
    		array (
    			'codigoIbge' => 4202602,
    			'nome' => 'Bom Retiro',
    			'UF' => 'SC',
    		),
    		4354 => 
    		array (
    			'codigoIbge' => 4202701,
    			'nome' => 'Botuverá',
    			'UF' => 'SC',
    		),
    		4355 => 
    		array (
    			'codigoIbge' => 4202800,
    			'nome' => 'Braço do Norte',
    			'UF' => 'SC',
    		),
    		4356 => 
    		array (
    			'codigoIbge' => 4202859,
    			'nome' => 'Braço do Trombudo',
    			'UF' => 'SC',
    		),
    		4357 => 
    		array (
    			'codigoIbge' => 4202875,
    			'nome' => 'Brunópolis',
    			'UF' => 'SC',
    		),
    		4358 => 
    		array (
    			'codigoIbge' => 4202909,
    			'nome' => 'Brusque',
    			'UF' => 'SC',
    		),
    		4359 => 
    		array (
    			'codigoIbge' => 4203006,
    			'nome' => 'Caçador',
    			'UF' => 'SC',
    		),
    		4360 => 
    		array (
    			'codigoIbge' => 4203105,
    			'nome' => 'Caibi',
    			'UF' => 'SC',
    		),
    		4361 => 
    		array (
    			'codigoIbge' => 4203154,
    			'nome' => 'Calmon',
    			'UF' => 'SC',
    		),
    		4362 => 
    		array (
    			'codigoIbge' => 4203204,
    			'nome' => 'Camboriú',
    			'UF' => 'SC',
    		),
    		4363 => 
    		array (
    			'codigoIbge' => 4203253,
    			'nome' => 'Capão Alto',
    			'UF' => 'SC',
    		),
    		4364 => 
    		array (
    			'codigoIbge' => 4203303,
    			'nome' => 'Campo Alegre',
    			'UF' => 'SC',
    		),
    		4365 => 
    		array (
    			'codigoIbge' => 4203402,
    			'nome' => 'Campo Belo do Sul',
    			'UF' => 'SC',
    		),
    		4366 => 
    		array (
    			'codigoIbge' => 4203501,
    			'nome' => 'Campo Erê',
    			'UF' => 'SC',
    		),
    		4367 => 
    		array (
    			'codigoIbge' => 4203600,
    			'nome' => 'Campos Novos',
    			'UF' => 'SC',
    		),
    		4368 => 
    		array (
    			'codigoIbge' => 4203709,
    			'nome' => 'Canelinha',
    			'UF' => 'SC',
    		),
    		4369 => 
    		array (
    			'codigoIbge' => 4203808,
    			'nome' => 'Canoinhas',
    			'UF' => 'SC',
    		),
    		4370 => 
    		array (
    			'codigoIbge' => 4203907,
    			'nome' => 'Capinzal',
    			'UF' => 'SC',
    		),
    		4371 => 
    		array (
    			'codigoIbge' => 4203956,
    			'nome' => 'Capivari de Baixo',
    			'UF' => 'SC',
    		),
    		4372 => 
    		array (
    			'codigoIbge' => 4204004,
    			'nome' => 'Catanduvas',
    			'UF' => 'SC',
    		),
    		4373 => 
    		array (
    			'codigoIbge' => 4204103,
    			'nome' => 'Caxambu do Sul',
    			'UF' => 'SC',
    		),
    		4374 => 
    		array (
    			'codigoIbge' => 4204152,
    			'nome' => 'Celso Ramos',
    			'UF' => 'SC',
    		),
    		4375 => 
    		array (
    			'codigoIbge' => 4204178,
    			'nome' => 'Cerro Negro',
    			'UF' => 'SC',
    		),
    		4376 => 
    		array (
    			'codigoIbge' => 4204194,
    			'nome' => 'Chapadão do Lageado',
    			'UF' => 'SC',
    		),
    		4377 => 
    		array (
    			'codigoIbge' => 4204202,
    			'nome' => 'Chapecó',
    			'UF' => 'SC',
    		),
    		4378 => 
    		array (
    			'codigoIbge' => 4204251,
    			'nome' => 'Cocal do Sul',
    			'UF' => 'SC',
    		),
    		4379 => 
    		array (
    			'codigoIbge' => 4204301,
    			'nome' => 'Concórdia',
    			'UF' => 'SC',
    		),
    		4380 => 
    		array (
    			'codigoIbge' => 4204350,
    			'nome' => 'Cordilheira Alta',
    			'UF' => 'SC',
    		),
    		4381 => 
    		array (
    			'codigoIbge' => 4204400,
    			'nome' => 'Coronel Freitas',
    			'UF' => 'SC',
    		),
    		4382 => 
    		array (
    			'codigoIbge' => 4204459,
    			'nome' => 'Coronel Martins',
    			'UF' => 'SC',
    		),
    		4383 => 
    		array (
    			'codigoIbge' => 4204509,
    			'nome' => 'Corupá',
    			'UF' => 'SC',
    		),
    		4384 => 
    		array (
    			'codigoIbge' => 4204558,
    			'nome' => 'Correia Pinto',
    			'UF' => 'SC',
    		),
    		4385 => 
    		array (
    			'codigoIbge' => 4204608,
    			'nome' => 'Criciúma',
    			'UF' => 'SC',
    		),
    		4386 => 
    		array (
    			'codigoIbge' => 4204707,
    			'nome' => 'Cunha Porã',
    			'UF' => 'SC',
    		),
    		4387 => 
    		array (
    			'codigoIbge' => 4204756,
    			'nome' => 'Cunhataí',
    			'UF' => 'SC',
    		),
    		4388 => 
    		array (
    			'codigoIbge' => 4204806,
    			'nome' => 'Curitibanos',
    			'UF' => 'SC',
    		),
    		4389 => 
    		array (
    			'codigoIbge' => 4204905,
    			'nome' => 'Descanso',
    			'UF' => 'SC',
    		),
    		4390 => 
    		array (
    			'codigoIbge' => 4205001,
    			'nome' => 'Dionísio Cerqueira',
    			'UF' => 'SC',
    		),
    		4391 => 
    		array (
    			'codigoIbge' => 4205100,
    			'nome' => 'Dona Emma',
    			'UF' => 'SC',
    		),
    		4392 => 
    		array (
    			'codigoIbge' => 4205159,
    			'nome' => 'Doutor Pedrinho',
    			'UF' => 'SC',
    		),
    		4393 => 
    		array (
    			'codigoIbge' => 4205175,
    			'nome' => 'Entre Rios',
    			'UF' => 'SC',
    		),
    		4394 => 
    		array (
    			'codigoIbge' => 4205191,
    			'nome' => 'Ermo',
    			'UF' => 'SC',
    		),
    		4395 => 
    		array (
    			'codigoIbge' => 4205209,
    			'nome' => 'Erval Velho',
    			'UF' => 'SC',
    		),
    		4396 => 
    		array (
    			'codigoIbge' => 4205308,
    			'nome' => 'Faxinal dos Guedes',
    			'UF' => 'SC',
    		),
    		4397 => 
    		array (
    			'codigoIbge' => 4205357,
    			'nome' => 'Flor do Sertão',
    			'UF' => 'SC',
    		),
    		4398 => 
    		array (
    			'codigoIbge' => 4205407,
    			'nome' => 'Florianópolis',
    			'UF' => 'SC',
    		),
    		4399 => 
    		array (
    			'codigoIbge' => 4205431,
    			'nome' => 'Formosa do Sul',
    			'UF' => 'SC',
    		),
    		4400 => 
    		array (
    			'codigoIbge' => 4205456,
    			'nome' => 'Forquilhinha',
    			'UF' => 'SC',
    		),
    		4401 => 
    		array (
    			'codigoIbge' => 4205506,
    			'nome' => 'Fraiburgo',
    			'UF' => 'SC',
    		),
    		4402 => 
    		array (
    			'codigoIbge' => 4205555,
    			'nome' => 'Frei Rogério',
    			'UF' => 'SC',
    		),
    		4403 => 
    		array (
    			'codigoIbge' => 4205605,
    			'nome' => 'Galvão',
    			'UF' => 'SC',
    		),
    		4404 => 
    		array (
    			'codigoIbge' => 4205704,
    			'nome' => 'Garopaba',
    			'UF' => 'SC',
    		),
    		4405 => 
    		array (
    			'codigoIbge' => 4205803,
    			'nome' => 'Garuva',
    			'UF' => 'SC',
    		),
    		4406 => 
    		array (
    			'codigoIbge' => 4205902,
    			'nome' => 'Gaspar',
    			'UF' => 'SC',
    		),
    		4407 => 
    		array (
    			'codigoIbge' => 4206009,
    			'nome' => 'Governador Celso Ramos',
    			'UF' => 'SC',
    		),
    		4408 => 
    		array (
    			'codigoIbge' => 4206108,
    			'nome' => 'Grão Pará',
    			'UF' => 'SC',
    		),
    		4409 => 
    		array (
    			'codigoIbge' => 4206207,
    			'nome' => 'Gravatal',
    			'UF' => 'SC',
    		),
    		4410 => 
    		array (
    			'codigoIbge' => 4206306,
    			'nome' => 'Guabiruba',
    			'UF' => 'SC',
    		),
    		4411 => 
    		array (
    			'codigoIbge' => 4206405,
    			'nome' => 'Guaraciaba',
    			'UF' => 'SC',
    		),
    		4412 => 
    		array (
    			'codigoIbge' => 4206504,
    			'nome' => 'Guaramirim',
    			'UF' => 'SC',
    		),
    		4413 => 
    		array (
    			'codigoIbge' => 4206603,
    			'nome' => 'Guarujá do Sul',
    			'UF' => 'SC',
    		),
    		4414 => 
    		array (
    			'codigoIbge' => 4206652,
    			'nome' => 'Guatambú',
    			'UF' => 'SC',
    		),
    		4415 => 
    		array (
    			'codigoIbge' => 4206702,
    			'nome' => 'Herval d\'Oeste',
    			'UF' => 'SC',
    		),
    		4416 => 
    		array (
    			'codigoIbge' => 4206751,
    			'nome' => 'Ibiam',
    			'UF' => 'SC',
    		),
    		4417 => 
    		array (
    			'codigoIbge' => 4206801,
    			'nome' => 'Ibicaré',
    			'UF' => 'SC',
    		),
    		4418 => 
    		array (
    			'codigoIbge' => 4206900,
    			'nome' => 'Ibirama',
    			'UF' => 'SC',
    		),
    		4419 => 
    		array (
    			'codigoIbge' => 4207007,
    			'nome' => 'Içara',
    			'UF' => 'SC',
    		),
    		4420 => 
    		array (
    			'codigoIbge' => 4207106,
    			'nome' => 'Ilhota',
    			'UF' => 'SC',
    		),
    		4421 => 
    		array (
    			'codigoIbge' => 4207205,
    			'nome' => 'Imaruí',
    			'UF' => 'SC',
    		),
    		4422 => 
    		array (
    			'codigoIbge' => 4207304,
    			'nome' => 'Imbituba',
    			'UF' => 'SC',
    		),
    		4423 => 
    		array (
    			'codigoIbge' => 4207403,
    			'nome' => 'Imbuia',
    			'UF' => 'SC',
    		),
    		4424 => 
    		array (
    			'codigoIbge' => 4207502,
    			'nome' => 'Indaial',
    			'UF' => 'SC',
    		),
    		4425 => 
    		array (
    			'codigoIbge' => 4207577,
    			'nome' => 'Iomerê',
    			'UF' => 'SC',
    		),
    		4426 => 
    		array (
    			'codigoIbge' => 4207601,
    			'nome' => 'Ipira',
    			'UF' => 'SC',
    		),
    		4427 => 
    		array (
    			'codigoIbge' => 4207650,
    			'nome' => 'Iporã do Oeste',
    			'UF' => 'SC',
    		),
    		4428 => 
    		array (
    			'codigoIbge' => 4207684,
    			'nome' => 'Ipuaçu',
    			'UF' => 'SC',
    		),
    		4429 => 
    		array (
    			'codigoIbge' => 4207700,
    			'nome' => 'Ipumirim',
    			'UF' => 'SC',
    		),
    		4430 => 
    		array (
    			'codigoIbge' => 4207759,
    			'nome' => 'Iraceminha',
    			'UF' => 'SC',
    		),
    		4431 => 
    		array (
    			'codigoIbge' => 4207809,
    			'nome' => 'Irani',
    			'UF' => 'SC',
    		),
    		4432 => 
    		array (
    			'codigoIbge' => 4207858,
    			'nome' => 'Irati',
    			'UF' => 'SC',
    		),
    		4433 => 
    		array (
    			'codigoIbge' => 4207908,
    			'nome' => 'Irineópolis',
    			'UF' => 'SC',
    		),
    		4434 => 
    		array (
    			'codigoIbge' => 4208005,
    			'nome' => 'Itá',
    			'UF' => 'SC',
    		),
    		4435 => 
    		array (
    			'codigoIbge' => 4208104,
    			'nome' => 'Itaiópolis',
    			'UF' => 'SC',
    		),
    		4436 => 
    		array (
    			'codigoIbge' => 4208203,
    			'nome' => 'Itajaí',
    			'UF' => 'SC',
    		),
    		4437 => 
    		array (
    			'codigoIbge' => 4208302,
    			'nome' => 'Itapema',
    			'UF' => 'SC',
    		),
    		4438 => 
    		array (
    			'codigoIbge' => 4208401,
    			'nome' => 'Itapiranga',
    			'UF' => 'SC',
    		),
    		4439 => 
    		array (
    			'codigoIbge' => 4208450,
    			'nome' => 'Itapoá',
    			'UF' => 'SC',
    		),
    		4440 => 
    		array (
    			'codigoIbge' => 4208500,
    			'nome' => 'Ituporanga',
    			'UF' => 'SC',
    		),
    		4441 => 
    		array (
    			'codigoIbge' => 4208609,
    			'nome' => 'Jaborá',
    			'UF' => 'SC',
    		),
    		4442 => 
    		array (
    			'codigoIbge' => 4208708,
    			'nome' => 'Jacinto Machado',
    			'UF' => 'SC',
    		),
    		4443 => 
    		array (
    			'codigoIbge' => 4208807,
    			'nome' => 'Jaguaruna',
    			'UF' => 'SC',
    		),
    		4444 => 
    		array (
    			'codigoIbge' => 4208906,
    			'nome' => 'Jaraguá do Sul',
    			'UF' => 'SC',
    		),
    		4445 => 
    		array (
    			'codigoIbge' => 4208955,
    			'nome' => 'Jardinópolis',
    			'UF' => 'SC',
    		),
    		4446 => 
    		array (
    			'codigoIbge' => 4209003,
    			'nome' => 'Joaçaba',
    			'UF' => 'SC',
    		),
    		4447 => 
    		array (
    			'codigoIbge' => 4209102,
    			'nome' => 'Joinville',
    			'UF' => 'SC',
    		),
    		4448 => 
    		array (
    			'codigoIbge' => 4209151,
    			'nome' => 'José Boiteux',
    			'UF' => 'SC',
    		),
    		4449 => 
    		array (
    			'codigoIbge' => 4209177,
    			'nome' => 'Jupiá',
    			'UF' => 'SC',
    		),
    		4450 => 
    		array (
    			'codigoIbge' => 4209201,
    			'nome' => 'Lacerdópolis',
    			'UF' => 'SC',
    		),
    		4451 => 
    		array (
    			'codigoIbge' => 4209300,
    			'nome' => 'Lages',
    			'UF' => 'SC',
    		),
    		4452 => 
    		array (
    			'codigoIbge' => 4209409,
    			'nome' => 'Laguna',
    			'UF' => 'SC',
    		),
    		4453 => 
    		array (
    			'codigoIbge' => 4209458,
    			'nome' => 'Lajeado Grande',
    			'UF' => 'SC',
    		),
    		4454 => 
    		array (
    			'codigoIbge' => 4209508,
    			'nome' => 'Laurentino',
    			'UF' => 'SC',
    		),
    		4455 => 
    		array (
    			'codigoIbge' => 4209607,
    			'nome' => 'Lauro Müller',
    			'UF' => 'SC',
    		),
    		4456 => 
    		array (
    			'codigoIbge' => 4209706,
    			'nome' => 'Lebon Régis',
    			'UF' => 'SC',
    		),
    		4457 => 
    		array (
    			'codigoIbge' => 4209805,
    			'nome' => 'Leoberto Leal',
    			'UF' => 'SC',
    		),
    		4458 => 
    		array (
    			'codigoIbge' => 4209854,
    			'nome' => 'Lindóia do Sul',
    			'UF' => 'SC',
    		),
    		4459 => 
    		array (
    			'codigoIbge' => 4209904,
    			'nome' => 'Lontras',
    			'UF' => 'SC',
    		),
    		4460 => 
    		array (
    			'codigoIbge' => 4210001,
    			'nome' => 'Luiz Alves',
    			'UF' => 'SC',
    		),
    		4461 => 
    		array (
    			'codigoIbge' => 4210035,
    			'nome' => 'Luzerna',
    			'UF' => 'SC',
    		),
    		4462 => 
    		array (
    			'codigoIbge' => 4210050,
    			'nome' => 'Macieira',
    			'UF' => 'SC',
    		),
    		4463 => 
    		array (
    			'codigoIbge' => 4210100,
    			'nome' => 'Mafra',
    			'UF' => 'SC',
    		),
    		4464 => 
    		array (
    			'codigoIbge' => 4210209,
    			'nome' => 'Major Gercino',
    			'UF' => 'SC',
    		),
    		4465 => 
    		array (
    			'codigoIbge' => 4210308,
    			'nome' => 'Major Vieira',
    			'UF' => 'SC',
    		),
    		4466 => 
    		array (
    			'codigoIbge' => 4210407,
    			'nome' => 'Maracajá',
    			'UF' => 'SC',
    		),
    		4467 => 
    		array (
    			'codigoIbge' => 4210506,
    			'nome' => 'Maravilha',
    			'UF' => 'SC',
    		),
    		4468 => 
    		array (
    			'codigoIbge' => 4210555,
    			'nome' => 'Marema',
    			'UF' => 'SC',
    		),
    		4469 => 
    		array (
    			'codigoIbge' => 4210605,
    			'nome' => 'Massaranduba',
    			'UF' => 'SC',
    		),
    		4470 => 
    		array (
    			'codigoIbge' => 4210704,
    			'nome' => 'Matos Costa',
    			'UF' => 'SC',
    		),
    		4471 => 
    		array (
    			'codigoIbge' => 4210803,
    			'nome' => 'Meleiro',
    			'UF' => 'SC',
    		),
    		4472 => 
    		array (
    			'codigoIbge' => 4210852,
    			'nome' => 'Mirim Doce',
    			'UF' => 'SC',
    		),
    		4473 => 
    		array (
    			'codigoIbge' => 4210902,
    			'nome' => 'Modelo',
    			'UF' => 'SC',
    		),
    		4474 => 
    		array (
    			'codigoIbge' => 4211009,
    			'nome' => 'Mondaí',
    			'UF' => 'SC',
    		),
    		4475 => 
    		array (
    			'codigoIbge' => 4211058,
    			'nome' => 'Monte Carlo',
    			'UF' => 'SC',
    		),
    		4476 => 
    		array (
    			'codigoIbge' => 4211108,
    			'nome' => 'Monte Castelo',
    			'UF' => 'SC',
    		),
    		4477 => 
    		array (
    			'codigoIbge' => 4211207,
    			'nome' => 'Morro da Fumaça',
    			'UF' => 'SC',
    		),
    		4478 => 
    		array (
    			'codigoIbge' => 4211256,
    			'nome' => 'Morro Grande',
    			'UF' => 'SC',
    		),
    		4479 => 
    		array (
    			'codigoIbge' => 4211306,
    			'nome' => 'Navegantes',
    			'UF' => 'SC',
    		),
    		4480 => 
    		array (
    			'codigoIbge' => 4211405,
    			'nome' => 'Nova Erechim',
    			'UF' => 'SC',
    		),
    		4481 => 
    		array (
    			'codigoIbge' => 4211454,
    			'nome' => 'Nova Itaberaba',
    			'UF' => 'SC',
    		),
    		4482 => 
    		array (
    			'codigoIbge' => 4211504,
    			'nome' => 'Nova Trento',
    			'UF' => 'SC',
    		),
    		4483 => 
    		array (
    			'codigoIbge' => 4211603,
    			'nome' => 'Nova Veneza',
    			'UF' => 'SC',
    		),
    		4484 => 
    		array (
    			'codigoIbge' => 4211652,
    			'nome' => 'Novo Horizonte',
    			'UF' => 'SC',
    		),
    		4485 => 
    		array (
    			'codigoIbge' => 4211702,
    			'nome' => 'Orleans',
    			'UF' => 'SC',
    		),
    		4486 => 
    		array (
    			'codigoIbge' => 4211751,
    			'nome' => 'Otacílio Costa',
    			'UF' => 'SC',
    		),
    		4487 => 
    		array (
    			'codigoIbge' => 4211801,
    			'nome' => 'Ouro',
    			'UF' => 'SC',
    		),
    		4488 => 
    		array (
    			'codigoIbge' => 4211850,
    			'nome' => 'Ouro Verde',
    			'UF' => 'SC',
    		),
    		4489 => 
    		array (
    			'codigoIbge' => 4211876,
    			'nome' => 'Paial',
    			'UF' => 'SC',
    		),
    		4490 => 
    		array (
    			'codigoIbge' => 4211892,
    			'nome' => 'Painel',
    			'UF' => 'SC',
    		),
    		4491 => 
    		array (
    			'codigoIbge' => 4211900,
    			'nome' => 'Palhoça',
    			'UF' => 'SC',
    		),
    		4492 => 
    		array (
    			'codigoIbge' => 4212007,
    			'nome' => 'Palma Sola',
    			'UF' => 'SC',
    		),
    		4493 => 
    		array (
    			'codigoIbge' => 4212056,
    			'nome' => 'Palmeira',
    			'UF' => 'SC',
    		),
    		4494 => 
    		array (
    			'codigoIbge' => 4212106,
    			'nome' => 'Palmitos',
    			'UF' => 'SC',
    		),
    		4495 => 
    		array (
    			'codigoIbge' => 4212205,
    			'nome' => 'Papanduva',
    			'UF' => 'SC',
    		),
    		4496 => 
    		array (
    			'codigoIbge' => 4212239,
    			'nome' => 'Paraíso',
    			'UF' => 'SC',
    		),
    		4497 => 
    		array (
    			'codigoIbge' => 4212254,
    			'nome' => 'Passo de Torres',
    			'UF' => 'SC',
    		),
    		4498 => 
    		array (
    			'codigoIbge' => 4212270,
    			'nome' => 'Passos Maia',
    			'UF' => 'SC',
    		),
    		4499 => 
    		array (
    			'codigoIbge' => 4212304,
    			'nome' => 'Paulo Lopes',
    			'UF' => 'SC',
    		),
    		4500 => 
    		array (
    			'codigoIbge' => 4212403,
    			'nome' => 'Pedras Grandes',
    			'UF' => 'SC',
    		),
    		4501 => 
    		array (
    			'codigoIbge' => 4212502,
    			'nome' => 'Penha',
    			'UF' => 'SC',
    		),
    		4502 => 
    		array (
    			'codigoIbge' => 4212601,
    			'nome' => 'Peritiba',
    			'UF' => 'SC',
    		),
    		4503 => 
    		array (
    			'codigoIbge' => 4212650,
    			'nome' => 'Pescaria Brava',
    			'UF' => 'SC',
    		),
    		4504 => 
    		array (
    			'codigoIbge' => 4212700,
    			'nome' => 'Petrolândia',
    			'UF' => 'SC',
    		),
    		4505 => 
    		array (
    			'codigoIbge' => 4212809,
    			'nome' => 'Balneário Piçarras',
    			'UF' => 'SC',
    		),
    		4506 => 
    		array (
    			'codigoIbge' => 4212908,
    			'nome' => 'Pinhalzinho',
    			'UF' => 'SC',
    		),
    		4507 => 
    		array (
    			'codigoIbge' => 4213005,
    			'nome' => 'Pinheiro Preto',
    			'UF' => 'SC',
    		),
    		4508 => 
    		array (
    			'codigoIbge' => 4213104,
    			'nome' => 'Piratuba',
    			'UF' => 'SC',
    		),
    		4509 => 
    		array (
    			'codigoIbge' => 4213153,
    			'nome' => 'Planalto Alegre',
    			'UF' => 'SC',
    		),
    		4510 => 
    		array (
    			'codigoIbge' => 4213203,
    			'nome' => 'Pomerode',
    			'UF' => 'SC',
    		),
    		4511 => 
    		array (
    			'codigoIbge' => 4213302,
    			'nome' => 'Ponte Alta',
    			'UF' => 'SC',
    		),
    		4512 => 
    		array (
    			'codigoIbge' => 4213351,
    			'nome' => 'Ponte Alta do Norte',
    			'UF' => 'SC',
    		),
    		4513 => 
    		array (
    			'codigoIbge' => 4213401,
    			'nome' => 'Ponte Serrada',
    			'UF' => 'SC',
    		),
    		4514 => 
    		array (
    			'codigoIbge' => 4213500,
    			'nome' => 'Porto Belo',
    			'UF' => 'SC',
    		),
    		4515 => 
    		array (
    			'codigoIbge' => 4213609,
    			'nome' => 'Porto União',
    			'UF' => 'SC',
    		),
    		4516 => 
    		array (
    			'codigoIbge' => 4213708,
    			'nome' => 'Pouso Redondo',
    			'UF' => 'SC',
    		),
    		4517 => 
    		array (
    			'codigoIbge' => 4213807,
    			'nome' => 'Praia Grande',
    			'UF' => 'SC',
    		),
    		4518 => 
    		array (
    			'codigoIbge' => 4213906,
    			'nome' => 'Presidente Castello Branco',
    			'UF' => 'SC',
    		),
    		4519 => 
    		array (
    			'codigoIbge' => 4214003,
    			'nome' => 'Presidente Getúlio',
    			'UF' => 'SC',
    		),
    		4520 => 
    		array (
    			'codigoIbge' => 4214102,
    			'nome' => 'Presidente Nereu',
    			'UF' => 'SC',
    		),
    		4521 => 
    		array (
    			'codigoIbge' => 4214151,
    			'nome' => 'Princesa',
    			'UF' => 'SC',
    		),
    		4522 => 
    		array (
    			'codigoIbge' => 4214201,
    			'nome' => 'Quilombo',
    			'UF' => 'SC',
    		),
    		4523 => 
    		array (
    			'codigoIbge' => 4214300,
    			'nome' => 'Rancho Queimado',
    			'UF' => 'SC',
    		),
    		4524 => 
    		array (
    			'codigoIbge' => 4214409,
    			'nome' => 'Rio das Antas',
    			'UF' => 'SC',
    		),
    		4525 => 
    		array (
    			'codigoIbge' => 4214508,
    			'nome' => 'Rio do Campo',
    			'UF' => 'SC',
    		),
    		4526 => 
    		array (
    			'codigoIbge' => 4214607,
    			'nome' => 'Rio do Oeste',
    			'UF' => 'SC',
    		),
    		4527 => 
    		array (
    			'codigoIbge' => 4214706,
    			'nome' => 'Rio dos Cedros',
    			'UF' => 'SC',
    		),
    		4528 => 
    		array (
    			'codigoIbge' => 4214805,
    			'nome' => 'Rio do Sul',
    			'UF' => 'SC',
    		),
    		4529 => 
    		array (
    			'codigoIbge' => 4214904,
    			'nome' => 'Rio Fortuna',
    			'UF' => 'SC',
    		),
    		4530 => 
    		array (
    			'codigoIbge' => 4215000,
    			'nome' => 'Rio Negrinho',
    			'UF' => 'SC',
    		),
    		4531 => 
    		array (
    			'codigoIbge' => 4215059,
    			'nome' => 'Rio Rufino',
    			'UF' => 'SC',
    		),
    		4532 => 
    		array (
    			'codigoIbge' => 4215075,
    			'nome' => 'Riqueza',
    			'UF' => 'SC',
    		),
    		4533 => 
    		array (
    			'codigoIbge' => 4215109,
    			'nome' => 'Rodeio',
    			'UF' => 'SC',
    		),
    		4534 => 
    		array (
    			'codigoIbge' => 4215208,
    			'nome' => 'Romelândia',
    			'UF' => 'SC',
    		),
    		4535 => 
    		array (
    			'codigoIbge' => 4215307,
    			'nome' => 'Salete',
    			'UF' => 'SC',
    		),
    		4536 => 
    		array (
    			'codigoIbge' => 4215356,
    			'nome' => 'Saltinho',
    			'UF' => 'SC',
    		),
    		4537 => 
    		array (
    			'codigoIbge' => 4215406,
    			'nome' => 'Salto Veloso',
    			'UF' => 'SC',
    		),
    		4538 => 
    		array (
    			'codigoIbge' => 4215455,
    			'nome' => 'Sangão',
    			'UF' => 'SC',
    		),
    		4539 => 
    		array (
    			'codigoIbge' => 4215505,
    			'nome' => 'Santa Cecília',
    			'UF' => 'SC',
    		),
    		4540 => 
    		array (
    			'codigoIbge' => 4215554,
    			'nome' => 'Santa Helena',
    			'UF' => 'SC',
    		),
    		4541 => 
    		array (
    			'codigoIbge' => 4215604,
    			'nome' => 'Santa Rosa de Lima',
    			'UF' => 'SC',
    		),
    		4542 => 
    		array (
    			'codigoIbge' => 4215653,
    			'nome' => 'Santa Rosa do Sul',
    			'UF' => 'SC',
    		),
    		4543 => 
    		array (
    			'codigoIbge' => 4215679,
    			'nome' => 'Santa Terezinha',
    			'UF' => 'SC',
    		),
    		4544 => 
    		array (
    			'codigoIbge' => 4215687,
    			'nome' => 'Santa Terezinha do Progresso',
    			'UF' => 'SC',
    		),
    		4545 => 
    		array (
    			'codigoIbge' => 4215695,
    			'nome' => 'Santiago do Sul',
    			'UF' => 'SC',
    		),
    		4546 => 
    		array (
    			'codigoIbge' => 4215703,
    			'nome' => 'Santo Amaro da Imperatriz',
    			'UF' => 'SC',
    		),
    		4547 => 
    		array (
    			'codigoIbge' => 4215752,
    			'nome' => 'São Bernardino',
    			'UF' => 'SC',
    		),
    		4548 => 
    		array (
    			'codigoIbge' => 4215802,
    			'nome' => 'São Bento do Sul',
    			'UF' => 'SC',
    		),
    		4549 => 
    		array (
    			'codigoIbge' => 4215901,
    			'nome' => 'São Bonifácio',
    			'UF' => 'SC',
    		),
    		4550 => 
    		array (
    			'codigoIbge' => 4216008,
    			'nome' => 'São Carlos',
    			'UF' => 'SC',
    		),
    		4551 => 
    		array (
    			'codigoIbge' => 4216057,
    			'nome' => 'São Cristóvão do Sul',
    			'UF' => 'SC',
    		),
    		4552 => 
    		array (
    			'codigoIbge' => 4216107,
    			'nome' => 'São Domingos',
    			'UF' => 'SC',
    		),
    		4553 => 
    		array (
    			'codigoIbge' => 4216206,
    			'nome' => 'São Francisco do Sul',
    			'UF' => 'SC',
    		),
    		4554 => 
    		array (
    			'codigoIbge' => 4216255,
    			'nome' => 'São João do Oeste',
    			'UF' => 'SC',
    		),
    		4555 => 
    		array (
    			'codigoIbge' => 4216305,
    			'nome' => 'São João Batista',
    			'UF' => 'SC',
    		),
    		4556 => 
    		array (
    			'codigoIbge' => 4216354,
    			'nome' => 'São João do Itaperiú',
    			'UF' => 'SC',
    		),
    		4557 => 
    		array (
    			'codigoIbge' => 4216404,
    			'nome' => 'São João do Sul',
    			'UF' => 'SC',
    		),
    		4558 => 
    		array (
    			'codigoIbge' => 4216503,
    			'nome' => 'São Joaquim',
    			'UF' => 'SC',
    		),
    		4559 => 
    		array (
    			'codigoIbge' => 4216602,
    			'nome' => 'São José',
    			'UF' => 'SC',
    		),
    		4560 => 
    		array (
    			'codigoIbge' => 4216701,
    			'nome' => 'São José do Cedro',
    			'UF' => 'SC',
    		),
    		4561 => 
    		array (
    			'codigoIbge' => 4216800,
    			'nome' => 'São José do Cerrito',
    			'UF' => 'SC',
    		),
    		4562 => 
    		array (
    			'codigoIbge' => 4216909,
    			'nome' => 'São Lourenço do Oeste',
    			'UF' => 'SC',
    		),
    		4563 => 
    		array (
    			'codigoIbge' => 4217006,
    			'nome' => 'São Ludgero',
    			'UF' => 'SC',
    		),
    		4564 => 
    		array (
    			'codigoIbge' => 4217105,
    			'nome' => 'São Martinho',
    			'UF' => 'SC',
    		),
    		4565 => 
    		array (
    			'codigoIbge' => 4217154,
    			'nome' => 'São Miguel da Boa Vista',
    			'UF' => 'SC',
    		),
    		4566 => 
    		array (
    			'codigoIbge' => 4217204,
    			'nome' => 'São Miguel do Oeste',
    			'UF' => 'SC',
    		),
    		4567 => 
    		array (
    			'codigoIbge' => 4217253,
    			'nome' => 'São Pedro de Alcântara',
    			'UF' => 'SC',
    		),
    		4568 => 
    		array (
    			'codigoIbge' => 4217303,
    			'nome' => 'Saudades',
    			'UF' => 'SC',
    		),
    		4569 => 
    		array (
    			'codigoIbge' => 4217402,
    			'nome' => 'Schroeder',
    			'UF' => 'SC',
    		),
    		4570 => 
    		array (
    			'codigoIbge' => 4217501,
    			'nome' => 'Seara',
    			'UF' => 'SC',
    		),
    		4571 => 
    		array (
    			'codigoIbge' => 4217550,
    			'nome' => 'Serra Alta',
    			'UF' => 'SC',
    		),
    		4572 => 
    		array (
    			'codigoIbge' => 4217600,
    			'nome' => 'Siderópolis',
    			'UF' => 'SC',
    		),
    		4573 => 
    		array (
    			'codigoIbge' => 4217709,
    			'nome' => 'Sombrio',
    			'UF' => 'SC',
    		),
    		4574 => 
    		array (
    			'codigoIbge' => 4217758,
    			'nome' => 'Sul Brasil',
    			'UF' => 'SC',
    		),
    		4575 => 
    		array (
    			'codigoIbge' => 4217808,
    			'nome' => 'Taió',
    			'UF' => 'SC',
    		),
    		4576 => 
    		array (
    			'codigoIbge' => 4217907,
    			'nome' => 'Tangará',
    			'UF' => 'SC',
    		),
    		4577 => 
    		array (
    			'codigoIbge' => 4217956,
    			'nome' => 'Tigrinhos',
    			'UF' => 'SC',
    		),
    		4578 => 
    		array (
    			'codigoIbge' => 4218004,
    			'nome' => 'Tijucas',
    			'UF' => 'SC',
    		),
    		4579 => 
    		array (
    			'codigoIbge' => 4218103,
    			'nome' => 'Timbé do Sul',
    			'UF' => 'SC',
    		),
    		4580 => 
    		array (
    			'codigoIbge' => 4218202,
    			'nome' => 'Timbó',
    			'UF' => 'SC',
    		),
    		4581 => 
    		array (
    			'codigoIbge' => 4218251,
    			'nome' => 'Timbó Grande',
    			'UF' => 'SC',
    		),
    		4582 => 
    		array (
    			'codigoIbge' => 4218301,
    			'nome' => 'Três Barras',
    			'UF' => 'SC',
    		),
    		4583 => 
    		array (
    			'codigoIbge' => 4218350,
    			'nome' => 'Treviso',
    			'UF' => 'SC',
    		),
    		4584 => 
    		array (
    			'codigoIbge' => 4218400,
    			'nome' => 'Treze de Maio',
    			'UF' => 'SC',
    		),
    		4585 => 
    		array (
    			'codigoIbge' => 4218509,
    			'nome' => 'Treze Tílias',
    			'UF' => 'SC',
    		),
    		4586 => 
    		array (
    			'codigoIbge' => 4218608,
    			'nome' => 'Trombudo Central',
    			'UF' => 'SC',
    		),
    		4587 => 
    		array (
    			'codigoIbge' => 4218707,
    			'nome' => 'Tubarão',
    			'UF' => 'SC',
    		),
    		4588 => 
    		array (
    			'codigoIbge' => 4218756,
    			'nome' => 'Tunápolis',
    			'UF' => 'SC',
    		),
    		4589 => 
    		array (
    			'codigoIbge' => 4218806,
    			'nome' => 'Turvo',
    			'UF' => 'SC',
    		),
    		4590 => 
    		array (
    			'codigoIbge' => 4218855,
    			'nome' => 'União do Oeste',
    			'UF' => 'SC',
    		),
    		4591 => 
    		array (
    			'codigoIbge' => 4218905,
    			'nome' => 'Urubici',
    			'UF' => 'SC',
    		),
    		4592 => 
    		array (
    			'codigoIbge' => 4218954,
    			'nome' => 'Urupema',
    			'UF' => 'SC',
    		),
    		4593 => 
    		array (
    			'codigoIbge' => 4219002,
    			'nome' => 'Urussanga',
    			'UF' => 'SC',
    		),
    		4594 => 
    		array (
    			'codigoIbge' => 4219101,
    			'nome' => 'Vargeão',
    			'UF' => 'SC',
    		),
    		4595 => 
    		array (
    			'codigoIbge' => 4219150,
    			'nome' => 'Vargem',
    			'UF' => 'SC',
    		),
    		4596 => 
    		array (
    			'codigoIbge' => 4219176,
    			'nome' => 'Vargem Bonita',
    			'UF' => 'SC',
    		),
    		4597 => 
    		array (
    			'codigoIbge' => 4219200,
    			'nome' => 'Vidal Ramos',
    			'UF' => 'SC',
    		),
    		4598 => 
    		array (
    			'codigoIbge' => 4219309,
    			'nome' => 'Videira',
    			'UF' => 'SC',
    		),
    		4599 => 
    		array (
    			'codigoIbge' => 4219358,
    			'nome' => 'Vitor Meireles',
    			'UF' => 'SC',
    		),
    		4600 => 
    		array (
    			'codigoIbge' => 4219408,
    			'nome' => 'Witmarsum',
    			'UF' => 'SC',
    		),
    		4601 => 
    		array (
    			'codigoIbge' => 4219507,
    			'nome' => 'Xanxerê',
    			'UF' => 'SC',
    		),
    		4602 => 
    		array (
    			'codigoIbge' => 4219606,
    			'nome' => 'Xavantina',
    			'UF' => 'SC',
    		),
    		4603 => 
    		array (
    			'codigoIbge' => 4219705,
    			'nome' => 'Xaxim',
    			'UF' => 'SC',
    		),
    		4604 => 
    		array (
    			'codigoIbge' => 4219853,
    			'nome' => 'Zortéa',
    			'UF' => 'SC',
    		),
    		4605 => 
    		array (
    			'codigoIbge' => 4220000,
    			'nome' => 'Balneário Rincão',
    			'UF' => 'SC',
    		),
    		4606 => 
    		array (
    			'codigoIbge' => 4300034,
    			'nome' => 'Aceguá',
    			'UF' => 'RS',
    		),
    		4607 => 
    		array (
    			'codigoIbge' => 4300059,
    			'nome' => 'Água Santa',
    			'UF' => 'RS',
    		),
    		4608 => 
    		array (
    			'codigoIbge' => 4300109,
    			'nome' => 'Agudo',
    			'UF' => 'RS',
    		),
    		4609 => 
    		array (
    			'codigoIbge' => 4300208,
    			'nome' => 'Ajuricaba',
    			'UF' => 'RS',
    		),
    		4610 => 
    		array (
    			'codigoIbge' => 4300307,
    			'nome' => 'Alecrim',
    			'UF' => 'RS',
    		),
    		4611 => 
    		array (
    			'codigoIbge' => 4300406,
    			'nome' => 'Alegrete',
    			'UF' => 'RS',
    		),
    		4612 => 
    		array (
    			'codigoIbge' => 4300455,
    			'nome' => 'Alegria',
    			'UF' => 'RS',
    		),
    		4613 => 
    		array (
    			'codigoIbge' => 4300471,
    			'nome' => 'Almirante Tamandaré do Sul',
    			'UF' => 'RS',
    		),
    		4614 => 
    		array (
    			'codigoIbge' => 4300505,
    			'nome' => 'Alpestre',
    			'UF' => 'RS',
    		),
    		4615 => 
    		array (
    			'codigoIbge' => 4300554,
    			'nome' => 'Alto Alegre',
    			'UF' => 'RS',
    		),
    		4616 => 
    		array (
    			'codigoIbge' => 4300570,
    			'nome' => 'Alto Feliz',
    			'UF' => 'RS',
    		),
    		4617 => 
    		array (
    			'codigoIbge' => 4300604,
    			'nome' => 'Alvorada',
    			'UF' => 'RS',
    		),
    		4618 => 
    		array (
    			'codigoIbge' => 4300638,
    			'nome' => 'Amaral Ferrador',
    			'UF' => 'RS',
    		),
    		4619 => 
    		array (
    			'codigoIbge' => 4300646,
    			'nome' => 'Ametista do Sul',
    			'UF' => 'RS',
    		),
    		4620 => 
    		array (
    			'codigoIbge' => 4300661,
    			'nome' => 'André da Rocha',
    			'UF' => 'RS',
    		),
    		4621 => 
    		array (
    			'codigoIbge' => 4300703,
    			'nome' => 'Anta Gorda',
    			'UF' => 'RS',
    		),
    		4622 => 
    		array (
    			'codigoIbge' => 4300802,
    			'nome' => 'Antônio Prado',
    			'UF' => 'RS',
    		),
    		4623 => 
    		array (
    			'codigoIbge' => 4300851,
    			'nome' => 'Arambaré',
    			'UF' => 'RS',
    		),
    		4624 => 
    		array (
    			'codigoIbge' => 4300877,
    			'nome' => 'Araricá',
    			'UF' => 'RS',
    		),
    		4625 => 
    		array (
    			'codigoIbge' => 4300901,
    			'nome' => 'Aratiba',
    			'UF' => 'RS',
    		),
    		4626 => 
    		array (
    			'codigoIbge' => 4301008,
    			'nome' => 'Arroio do Meio',
    			'UF' => 'RS',
    		),
    		4627 => 
    		array (
    			'codigoIbge' => 4301057,
    			'nome' => 'Arroio do Sal',
    			'UF' => 'RS',
    		),
    		4628 => 
    		array (
    			'codigoIbge' => 4301073,
    			'nome' => 'Arroio do Padre',
    			'UF' => 'RS',
    		),
    		4629 => 
    		array (
    			'codigoIbge' => 4301107,
    			'nome' => 'Arroio dos Ratos',
    			'UF' => 'RS',
    		),
    		4630 => 
    		array (
    			'codigoIbge' => 4301206,
    			'nome' => 'Arroio do Tigre',
    			'UF' => 'RS',
    		),
    		4631 => 
    		array (
    			'codigoIbge' => 4301305,
    			'nome' => 'Arroio Grande',
    			'UF' => 'RS',
    		),
    		4632 => 
    		array (
    			'codigoIbge' => 4301404,
    			'nome' => 'Arvorezinha',
    			'UF' => 'RS',
    		),
    		4633 => 
    		array (
    			'codigoIbge' => 4301503,
    			'nome' => 'Augusto Pestana',
    			'UF' => 'RS',
    		),
    		4634 => 
    		array (
    			'codigoIbge' => 4301552,
    			'nome' => 'Áurea',
    			'UF' => 'RS',
    		),
    		4635 => 
    		array (
    			'codigoIbge' => 4301602,
    			'nome' => 'Bagé',
    			'UF' => 'RS',
    		),
    		4636 => 
    		array (
    			'codigoIbge' => 4301636,
    			'nome' => 'Balneário Pinhal',
    			'UF' => 'RS',
    		),
    		4637 => 
    		array (
    			'codigoIbge' => 4301651,
    			'nome' => 'Barão',
    			'UF' => 'RS',
    		),
    		4638 => 
    		array (
    			'codigoIbge' => 4301701,
    			'nome' => 'Barão de Cotegipe',
    			'UF' => 'RS',
    		),
    		4639 => 
    		array (
    			'codigoIbge' => 4301750,
    			'nome' => 'Barão do Triunfo',
    			'UF' => 'RS',
    		),
    		4640 => 
    		array (
    			'codigoIbge' => 4301800,
    			'nome' => 'Barracão',
    			'UF' => 'RS',
    		),
    		4641 => 
    		array (
    			'codigoIbge' => 4301859,
    			'nome' => 'Barra do Guarita',
    			'UF' => 'RS',
    		),
    		4642 => 
    		array (
    			'codigoIbge' => 4301875,
    			'nome' => 'Barra do Quaraí',
    			'UF' => 'RS',
    		),
    		4643 => 
    		array (
    			'codigoIbge' => 4301909,
    			'nome' => 'Barra do Ribeiro',
    			'UF' => 'RS',
    		),
    		4644 => 
    		array (
    			'codigoIbge' => 4301925,
    			'nome' => 'Barra do Rio Azul',
    			'UF' => 'RS',
    		),
    		4645 => 
    		array (
    			'codigoIbge' => 4301958,
    			'nome' => 'Barra Funda',
    			'UF' => 'RS',
    		),
    		4646 => 
    		array (
    			'codigoIbge' => 4302006,
    			'nome' => 'Barros Cassal',
    			'UF' => 'RS',
    		),
    		4647 => 
    		array (
    			'codigoIbge' => 4302055,
    			'nome' => 'Benjamin Constant do Sul',
    			'UF' => 'RS',
    		),
    		4648 => 
    		array (
    			'codigoIbge' => 4302105,
    			'nome' => 'Bento Gonçalves',
    			'UF' => 'RS',
    		),
    		4649 => 
    		array (
    			'codigoIbge' => 4302154,
    			'nome' => 'Boa Vista das Missões',
    			'UF' => 'RS',
    		),
    		4650 => 
    		array (
    			'codigoIbge' => 4302204,
    			'nome' => 'Boa Vista do Buricá',
    			'UF' => 'RS',
    		),
    		4651 => 
    		array (
    			'codigoIbge' => 4302220,
    			'nome' => 'Boa Vista do Cadeado',
    			'UF' => 'RS',
    		),
    		4652 => 
    		array (
    			'codigoIbge' => 4302238,
    			'nome' => 'Boa Vista do Incra',
    			'UF' => 'RS',
    		),
    		4653 => 
    		array (
    			'codigoIbge' => 4302253,
    			'nome' => 'Boa Vista do Sul',
    			'UF' => 'RS',
    		),
    		4654 => 
    		array (
    			'codigoIbge' => 4302303,
    			'nome' => 'Bom Jesus',
    			'UF' => 'RS',
    		),
    		4655 => 
    		array (
    			'codigoIbge' => 4302352,
    			'nome' => 'Bom Princípio',
    			'UF' => 'RS',
    		),
    		4656 => 
    		array (
    			'codigoIbge' => 4302378,
    			'nome' => 'Bom Progresso',
    			'UF' => 'RS',
    		),
    		4657 => 
    		array (
    			'codigoIbge' => 4302402,
    			'nome' => 'Bom Retiro do Sul',
    			'UF' => 'RS',
    		),
    		4658 => 
    		array (
    			'codigoIbge' => 4302451,
    			'nome' => 'Boqueirão do Leão',
    			'UF' => 'RS',
    		),
    		4659 => 
    		array (
    			'codigoIbge' => 4302501,
    			'nome' => 'Bossoroca',
    			'UF' => 'RS',
    		),
    		4660 => 
    		array (
    			'codigoIbge' => 4302584,
    			'nome' => 'Bozano',
    			'UF' => 'RS',
    		),
    		4661 => 
    		array (
    			'codigoIbge' => 4302600,
    			'nome' => 'Braga',
    			'UF' => 'RS',
    		),
    		4662 => 
    		array (
    			'codigoIbge' => 4302659,
    			'nome' => 'Brochier',
    			'UF' => 'RS',
    		),
    		4663 => 
    		array (
    			'codigoIbge' => 4302709,
    			'nome' => 'Butiá',
    			'UF' => 'RS',
    		),
    		4664 => 
    		array (
    			'codigoIbge' => 4302808,
    			'nome' => 'Caçapava do Sul',
    			'UF' => 'RS',
    		),
    		4665 => 
    		array (
    			'codigoIbge' => 4302907,
    			'nome' => 'Cacequi',
    			'UF' => 'RS',
    		),
    		4666 => 
    		array (
    			'codigoIbge' => 4303004,
    			'nome' => 'Cachoeira do Sul',
    			'UF' => 'RS',
    		),
    		4667 => 
    		array (
    			'codigoIbge' => 4303103,
    			'nome' => 'Cachoeirinha',
    			'UF' => 'RS',
    		),
    		4668 => 
    		array (
    			'codigoIbge' => 4303202,
    			'nome' => 'Cacique Doble',
    			'UF' => 'RS',
    		),
    		4669 => 
    		array (
    			'codigoIbge' => 4303301,
    			'nome' => 'Caibaté',
    			'UF' => 'RS',
    		),
    		4670 => 
    		array (
    			'codigoIbge' => 4303400,
    			'nome' => 'Caiçara',
    			'UF' => 'RS',
    		),
    		4671 => 
    		array (
    			'codigoIbge' => 4303509,
    			'nome' => 'Camaquã',
    			'UF' => 'RS',
    		),
    		4672 => 
    		array (
    			'codigoIbge' => 4303558,
    			'nome' => 'Camargo',
    			'UF' => 'RS',
    		),
    		4673 => 
    		array (
    			'codigoIbge' => 4303608,
    			'nome' => 'Cambará do Sul',
    			'UF' => 'RS',
    		),
    		4674 => 
    		array (
    			'codigoIbge' => 4303673,
    			'nome' => 'Campestre da Serra',
    			'UF' => 'RS',
    		),
    		4675 => 
    		array (
    			'codigoIbge' => 4303707,
    			'nome' => 'Campina das Missões',
    			'UF' => 'RS',
    		),
    		4676 => 
    		array (
    			'codigoIbge' => 4303806,
    			'nome' => 'Campinas do Sul',
    			'UF' => 'RS',
    		),
    		4677 => 
    		array (
    			'codigoIbge' => 4303905,
    			'nome' => 'Campo Bom',
    			'UF' => 'RS',
    		),
    		4678 => 
    		array (
    			'codigoIbge' => 4304002,
    			'nome' => 'Campo Novo',
    			'UF' => 'RS',
    		),
    		4679 => 
    		array (
    			'codigoIbge' => 4304101,
    			'nome' => 'Campos Borges',
    			'UF' => 'RS',
    		),
    		4680 => 
    		array (
    			'codigoIbge' => 4304200,
    			'nome' => 'Candelária',
    			'UF' => 'RS',
    		),
    		4681 => 
    		array (
    			'codigoIbge' => 4304309,
    			'nome' => 'Cândido Godói',
    			'UF' => 'RS',
    		),
    		4682 => 
    		array (
    			'codigoIbge' => 4304358,
    			'nome' => 'Candiota',
    			'UF' => 'RS',
    		),
    		4683 => 
    		array (
    			'codigoIbge' => 4304408,
    			'nome' => 'Canela',
    			'UF' => 'RS',
    		),
    		4684 => 
    		array (
    			'codigoIbge' => 4304507,
    			'nome' => 'Canguçu',
    			'UF' => 'RS',
    		),
    		4685 => 
    		array (
    			'codigoIbge' => 4304606,
    			'nome' => 'Canoas',
    			'UF' => 'RS',
    		),
    		4686 => 
    		array (
    			'codigoIbge' => 4304614,
    			'nome' => 'Canudos do Vale',
    			'UF' => 'RS',
    		),
    		4687 => 
    		array (
    			'codigoIbge' => 4304622,
    			'nome' => 'Capão Bonito do Sul',
    			'UF' => 'RS',
    		),
    		4688 => 
    		array (
    			'codigoIbge' => 4304630,
    			'nome' => 'Capão da Canoa',
    			'UF' => 'RS',
    		),
    		4689 => 
    		array (
    			'codigoIbge' => 4304655,
    			'nome' => 'Capão do Cipó',
    			'UF' => 'RS',
    		),
    		4690 => 
    		array (
    			'codigoIbge' => 4304663,
    			'nome' => 'Capão do Leão',
    			'UF' => 'RS',
    		),
    		4691 => 
    		array (
    			'codigoIbge' => 4304671,
    			'nome' => 'Capivari do Sul',
    			'UF' => 'RS',
    		),
    		4692 => 
    		array (
    			'codigoIbge' => 4304689,
    			'nome' => 'Capela de Santana',
    			'UF' => 'RS',
    		),
    		4693 => 
    		array (
    			'codigoIbge' => 4304697,
    			'nome' => 'Capitão',
    			'UF' => 'RS',
    		),
    		4694 => 
    		array (
    			'codigoIbge' => 4304705,
    			'nome' => 'Carazinho',
    			'UF' => 'RS',
    		),
    		4695 => 
    		array (
    			'codigoIbge' => 4304713,
    			'nome' => 'Caraá',
    			'UF' => 'RS',
    		),
    		4696 => 
    		array (
    			'codigoIbge' => 4304804,
    			'nome' => 'Carlos Barbosa',
    			'UF' => 'RS',
    		),
    		4697 => 
    		array (
    			'codigoIbge' => 4304853,
    			'nome' => 'Carlos Gomes',
    			'UF' => 'RS',
    		),
    		4698 => 
    		array (
    			'codigoIbge' => 4304903,
    			'nome' => 'Casca',
    			'UF' => 'RS',
    		),
    		4699 => 
    		array (
    			'codigoIbge' => 4304952,
    			'nome' => 'Caseiros',
    			'UF' => 'RS',
    		),
    		4700 => 
    		array (
    			'codigoIbge' => 4305009,
    			'nome' => 'Catuípe',
    			'UF' => 'RS',
    		),
    		4701 => 
    		array (
    			'codigoIbge' => 4305108,
    			'nome' => 'Caxias do Sul',
    			'UF' => 'RS',
    		),
    		4702 => 
    		array (
    			'codigoIbge' => 4305116,
    			'nome' => 'Centenário',
    			'UF' => 'RS',
    		),
    		4703 => 
    		array (
    			'codigoIbge' => 4305124,
    			'nome' => 'Cerrito',
    			'UF' => 'RS',
    		),
    		4704 => 
    		array (
    			'codigoIbge' => 4305132,
    			'nome' => 'Cerro Branco',
    			'UF' => 'RS',
    		),
    		4705 => 
    		array (
    			'codigoIbge' => 4305157,
    			'nome' => 'Cerro Grande',
    			'UF' => 'RS',
    		),
    		4706 => 
    		array (
    			'codigoIbge' => 4305173,
    			'nome' => 'Cerro Grande do Sul',
    			'UF' => 'RS',
    		),
    		4707 => 
    		array (
    			'codigoIbge' => 4305207,
    			'nome' => 'Cerro Largo',
    			'UF' => 'RS',
    		),
    		4708 => 
    		array (
    			'codigoIbge' => 4305306,
    			'nome' => 'Chapada',
    			'UF' => 'RS',
    		),
    		4709 => 
    		array (
    			'codigoIbge' => 4305355,
    			'nome' => 'Charqueadas',
    			'UF' => 'RS',
    		),
    		4710 => 
    		array (
    			'codigoIbge' => 4305371,
    			'nome' => 'Charrua',
    			'UF' => 'RS',
    		),
    		4711 => 
    		array (
    			'codigoIbge' => 4305405,
    			'nome' => 'Chiapetta',
    			'UF' => 'RS',
    		),
    		4712 => 
    		array (
    			'codigoIbge' => 4305439,
    			'nome' => 'Chuí',
    			'UF' => 'RS',
    		),
    		4713 => 
    		array (
    			'codigoIbge' => 4305447,
    			'nome' => 'Chuvisca',
    			'UF' => 'RS',
    		),
    		4714 => 
    		array (
    			'codigoIbge' => 4305454,
    			'nome' => 'Cidreira',
    			'UF' => 'RS',
    		),
    		4715 => 
    		array (
    			'codigoIbge' => 4305504,
    			'nome' => 'Ciríaco',
    			'UF' => 'RS',
    		),
    		4716 => 
    		array (
    			'codigoIbge' => 4305587,
    			'nome' => 'Colinas',
    			'UF' => 'RS',
    		),
    		4717 => 
    		array (
    			'codigoIbge' => 4305603,
    			'nome' => 'Colorado',
    			'UF' => 'RS',
    		),
    		4718 => 
    		array (
    			'codigoIbge' => 4305702,
    			'nome' => 'Condor',
    			'UF' => 'RS',
    		),
    		4719 => 
    		array (
    			'codigoIbge' => 4305801,
    			'nome' => 'Constantina',
    			'UF' => 'RS',
    		),
    		4720 => 
    		array (
    			'codigoIbge' => 4305835,
    			'nome' => 'Coqueiro Baixo',
    			'UF' => 'RS',
    		),
    		4721 => 
    		array (
    			'codigoIbge' => 4305850,
    			'nome' => 'Coqueiros do Sul',
    			'UF' => 'RS',
    		),
    		4722 => 
    		array (
    			'codigoIbge' => 4305871,
    			'nome' => 'Coronel Barros',
    			'UF' => 'RS',
    		),
    		4723 => 
    		array (
    			'codigoIbge' => 4305900,
    			'nome' => 'Coronel Bicaco',
    			'UF' => 'RS',
    		),
    		4724 => 
    		array (
    			'codigoIbge' => 4305934,
    			'nome' => 'Coronel Pilar',
    			'UF' => 'RS',
    		),
    		4725 => 
    		array (
    			'codigoIbge' => 4305959,
    			'nome' => 'Cotiporã',
    			'UF' => 'RS',
    		),
    		4726 => 
    		array (
    			'codigoIbge' => 4305975,
    			'nome' => 'Coxilha',
    			'UF' => 'RS',
    		),
    		4727 => 
    		array (
    			'codigoIbge' => 4306007,
    			'nome' => 'Crissiumal',
    			'UF' => 'RS',
    		),
    		4728 => 
    		array (
    			'codigoIbge' => 4306056,
    			'nome' => 'Cristal',
    			'UF' => 'RS',
    		),
    		4729 => 
    		array (
    			'codigoIbge' => 4306072,
    			'nome' => 'Cristal do Sul',
    			'UF' => 'RS',
    		),
    		4730 => 
    		array (
    			'codigoIbge' => 4306106,
    			'nome' => 'Cruz Alta',
    			'UF' => 'RS',
    		),
    		4731 => 
    		array (
    			'codigoIbge' => 4306130,
    			'nome' => 'Cruzaltense',
    			'UF' => 'RS',
    		),
    		4732 => 
    		array (
    			'codigoIbge' => 4306205,
    			'nome' => 'Cruzeiro do Sul',
    			'UF' => 'RS',
    		),
    		4733 => 
    		array (
    			'codigoIbge' => 4306304,
    			'nome' => 'David Canabarro',
    			'UF' => 'RS',
    		),
    		4734 => 
    		array (
    			'codigoIbge' => 4306320,
    			'nome' => 'Derrubadas',
    			'UF' => 'RS',
    		),
    		4735 => 
    		array (
    			'codigoIbge' => 4306353,
    			'nome' => 'Dezesseis de Novembro',
    			'UF' => 'RS',
    		),
    		4736 => 
    		array (
    			'codigoIbge' => 4306379,
    			'nome' => 'Dilermando de Aguiar',
    			'UF' => 'RS',
    		),
    		4737 => 
    		array (
    			'codigoIbge' => 4306403,
    			'nome' => 'Dois Irmãos',
    			'UF' => 'RS',
    		),
    		4738 => 
    		array (
    			'codigoIbge' => 4306429,
    			'nome' => 'Dois Irmãos das Missões',
    			'UF' => 'RS',
    		),
    		4739 => 
    		array (
    			'codigoIbge' => 4306452,
    			'nome' => 'Dois Lajeados',
    			'UF' => 'RS',
    		),
    		4740 => 
    		array (
    			'codigoIbge' => 4306502,
    			'nome' => 'Dom Feliciano',
    			'UF' => 'RS',
    		),
    		4741 => 
    		array (
    			'codigoIbge' => 4306551,
    			'nome' => 'Dom Pedro de Alcântara',
    			'UF' => 'RS',
    		),
    		4742 => 
    		array (
    			'codigoIbge' => 4306601,
    			'nome' => 'Dom Pedrito',
    			'UF' => 'RS',
    		),
    		4743 => 
    		array (
    			'codigoIbge' => 4306700,
    			'nome' => 'Dona Francisca',
    			'UF' => 'RS',
    		),
    		4744 => 
    		array (
    			'codigoIbge' => 4306734,
    			'nome' => 'Doutor Maurício Cardoso',
    			'UF' => 'RS',
    		),
    		4745 => 
    		array (
    			'codigoIbge' => 4306759,
    			'nome' => 'Doutor Ricardo',
    			'UF' => 'RS',
    		),
    		4746 => 
    		array (
    			'codigoIbge' => 4306767,
    			'nome' => 'Eldorado do Sul',
    			'UF' => 'RS',
    		),
    		4747 => 
    		array (
    			'codigoIbge' => 4306809,
    			'nome' => 'Encantado',
    			'UF' => 'RS',
    		),
    		4748 => 
    		array (
    			'codigoIbge' => 4306908,
    			'nome' => 'Encruzilhada do Sul',
    			'UF' => 'RS',
    		),
    		4749 => 
    		array (
    			'codigoIbge' => 4306924,
    			'nome' => 'Engenho Velho',
    			'UF' => 'RS',
    		),
    		4750 => 
    		array (
    			'codigoIbge' => 4306932,
    			'nome' => 'Entre-Ijuís',
    			'UF' => 'RS',
    		),
    		4751 => 
    		array (
    			'codigoIbge' => 4306957,
    			'nome' => 'Entre Rios do Sul',
    			'UF' => 'RS',
    		),
    		4752 => 
    		array (
    			'codigoIbge' => 4306973,
    			'nome' => 'Erebango',
    			'UF' => 'RS',
    		),
    		4753 => 
    		array (
    			'codigoIbge' => 4307005,
    			'nome' => 'Erechim',
    			'UF' => 'RS',
    		),
    		4754 => 
    		array (
    			'codigoIbge' => 4307054,
    			'nome' => 'Ernestina',
    			'UF' => 'RS',
    		),
    		4755 => 
    		array (
    			'codigoIbge' => 4307104,
    			'nome' => 'Herval',
    			'UF' => 'RS',
    		),
    		4756 => 
    		array (
    			'codigoIbge' => 4307203,
    			'nome' => 'Erval Grande',
    			'UF' => 'RS',
    		),
    		4757 => 
    		array (
    			'codigoIbge' => 4307302,
    			'nome' => 'Erval Seco',
    			'UF' => 'RS',
    		),
    		4758 => 
    		array (
    			'codigoIbge' => 4307401,
    			'nome' => 'Esmeralda',
    			'UF' => 'RS',
    		),
    		4759 => 
    		array (
    			'codigoIbge' => 4307450,
    			'nome' => 'Esperança do Sul',
    			'UF' => 'RS',
    		),
    		4760 => 
    		array (
    			'codigoIbge' => 4307500,
    			'nome' => 'Espumoso',
    			'UF' => 'RS',
    		),
    		4761 => 
    		array (
    			'codigoIbge' => 4307559,
    			'nome' => 'Estação',
    			'UF' => 'RS',
    		),
    		4762 => 
    		array (
    			'codigoIbge' => 4307609,
    			'nome' => 'Estância Velha',
    			'UF' => 'RS',
    		),
    		4763 => 
    		array (
    			'codigoIbge' => 4307708,
    			'nome' => 'Esteio',
    			'UF' => 'RS',
    		),
    		4764 => 
    		array (
    			'codigoIbge' => 4307807,
    			'nome' => 'Estrela',
    			'UF' => 'RS',
    		),
    		4765 => 
    		array (
    			'codigoIbge' => 4307815,
    			'nome' => 'Estrela Velha',
    			'UF' => 'RS',
    		),
    		4766 => 
    		array (
    			'codigoIbge' => 4307831,
    			'nome' => 'Eugênio de Castro',
    			'UF' => 'RS',
    		),
    		4767 => 
    		array (
    			'codigoIbge' => 4307864,
    			'nome' => 'Fagundes Varela',
    			'UF' => 'RS',
    		),
    		4768 => 
    		array (
    			'codigoIbge' => 4307906,
    			'nome' => 'Farroupilha',
    			'UF' => 'RS',
    		),
    		4769 => 
    		array (
    			'codigoIbge' => 4308003,
    			'nome' => 'Faxinal do Soturno',
    			'UF' => 'RS',
    		),
    		4770 => 
    		array (
    			'codigoIbge' => 4308052,
    			'nome' => 'Faxinalzinho',
    			'UF' => 'RS',
    		),
    		4771 => 
    		array (
    			'codigoIbge' => 4308078,
    			'nome' => 'Fazenda Vilanova',
    			'UF' => 'RS',
    		),
    		4772 => 
    		array (
    			'codigoIbge' => 4308102,
    			'nome' => 'Feliz',
    			'UF' => 'RS',
    		),
    		4773 => 
    		array (
    			'codigoIbge' => 4308201,
    			'nome' => 'Flores da Cunha',
    			'UF' => 'RS',
    		),
    		4774 => 
    		array (
    			'codigoIbge' => 4308250,
    			'nome' => 'Floriano Peixoto',
    			'UF' => 'RS',
    		),
    		4775 => 
    		array (
    			'codigoIbge' => 4308300,
    			'nome' => 'Fontoura Xavier',
    			'UF' => 'RS',
    		),
    		4776 => 
    		array (
    			'codigoIbge' => 4308409,
    			'nome' => 'Formigueiro',
    			'UF' => 'RS',
    		),
    		4777 => 
    		array (
    			'codigoIbge' => 4308433,
    			'nome' => 'Forquetinha',
    			'UF' => 'RS',
    		),
    		4778 => 
    		array (
    			'codigoIbge' => 4308458,
    			'nome' => 'Fortaleza dos Valos',
    			'UF' => 'RS',
    		),
    		4779 => 
    		array (
    			'codigoIbge' => 4308508,
    			'nome' => 'Frederico Westphalen',
    			'UF' => 'RS',
    		),
    		4780 => 
    		array (
    			'codigoIbge' => 4308607,
    			'nome' => 'Garibaldi',
    			'UF' => 'RS',
    		),
    		4781 => 
    		array (
    			'codigoIbge' => 4308656,
    			'nome' => 'Garruchos',
    			'UF' => 'RS',
    		),
    		4782 => 
    		array (
    			'codigoIbge' => 4308706,
    			'nome' => 'Gaurama',
    			'UF' => 'RS',
    		),
    		4783 => 
    		array (
    			'codigoIbge' => 4308805,
    			'nome' => 'General Câmara',
    			'UF' => 'RS',
    		),
    		4784 => 
    		array (
    			'codigoIbge' => 4308854,
    			'nome' => 'Gentil',
    			'UF' => 'RS',
    		),
    		4785 => 
    		array (
    			'codigoIbge' => 4308904,
    			'nome' => 'Getúlio Vargas',
    			'UF' => 'RS',
    		),
    		4786 => 
    		array (
    			'codigoIbge' => 4309001,
    			'nome' => 'Giruá',
    			'UF' => 'RS',
    		),
    		4787 => 
    		array (
    			'codigoIbge' => 4309050,
    			'nome' => 'Glorinha',
    			'UF' => 'RS',
    		),
    		4788 => 
    		array (
    			'codigoIbge' => 4309100,
    			'nome' => 'Gramado',
    			'UF' => 'RS',
    		),
    		4789 => 
    		array (
    			'codigoIbge' => 4309126,
    			'nome' => 'Gramado dos Loureiros',
    			'UF' => 'RS',
    		),
    		4790 => 
    		array (
    			'codigoIbge' => 4309159,
    			'nome' => 'Gramado Xavier',
    			'UF' => 'RS',
    		),
    		4791 => 
    		array (
    			'codigoIbge' => 4309209,
    			'nome' => 'Gravataí',
    			'UF' => 'RS',
    		),
    		4792 => 
    		array (
    			'codigoIbge' => 4309258,
    			'nome' => 'Guabiju',
    			'UF' => 'RS',
    		),
    		4793 => 
    		array (
    			'codigoIbge' => 4309308,
    			'nome' => 'Guaíba',
    			'UF' => 'RS',
    		),
    		4794 => 
    		array (
    			'codigoIbge' => 4309407,
    			'nome' => 'Guaporé',
    			'UF' => 'RS',
    		),
    		4795 => 
    		array (
    			'codigoIbge' => 4309506,
    			'nome' => 'Guarani das Missões',
    			'UF' => 'RS',
    		),
    		4796 => 
    		array (
    			'codigoIbge' => 4309555,
    			'nome' => 'Harmonia',
    			'UF' => 'RS',
    		),
    		4797 => 
    		array (
    			'codigoIbge' => 4309571,
    			'nome' => 'Herveiras',
    			'UF' => 'RS',
    		),
    		4798 => 
    		array (
    			'codigoIbge' => 4309605,
    			'nome' => 'Horizontina',
    			'UF' => 'RS',
    		),
    		4799 => 
    		array (
    			'codigoIbge' => 4309654,
    			'nome' => 'Hulha Negra',
    			'UF' => 'RS',
    		),
    		4800 => 
    		array (
    			'codigoIbge' => 4309704,
    			'nome' => 'Humaitá',
    			'UF' => 'RS',
    		),
    		4801 => 
    		array (
    			'codigoIbge' => 4309753,
    			'nome' => 'Ibarama',
    			'UF' => 'RS',
    		),
    		4802 => 
    		array (
    			'codigoIbge' => 4309803,
    			'nome' => 'Ibiaçá',
    			'UF' => 'RS',
    		),
    		4803 => 
    		array (
    			'codigoIbge' => 4309902,
    			'nome' => 'Ibiraiaras',
    			'UF' => 'RS',
    		),
    		4804 => 
    		array (
    			'codigoIbge' => 4309951,
    			'nome' => 'Ibirapuitã',
    			'UF' => 'RS',
    		),
    		4805 => 
    		array (
    			'codigoIbge' => 4310009,
    			'nome' => 'Ibirubá',
    			'UF' => 'RS',
    		),
    		4806 => 
    		array (
    			'codigoIbge' => 4310108,
    			'nome' => 'Igrejinha',
    			'UF' => 'RS',
    		),
    		4807 => 
    		array (
    			'codigoIbge' => 4310207,
    			'nome' => 'Ijuí',
    			'UF' => 'RS',
    		),
    		4808 => 
    		array (
    			'codigoIbge' => 4310306,
    			'nome' => 'Ilópolis',
    			'UF' => 'RS',
    		),
    		4809 => 
    		array (
    			'codigoIbge' => 4310330,
    			'nome' => 'Imbé',
    			'UF' => 'RS',
    		),
    		4810 => 
    		array (
    			'codigoIbge' => 4310363,
    			'nome' => 'Imigrante',
    			'UF' => 'RS',
    		),
    		4811 => 
    		array (
    			'codigoIbge' => 4310405,
    			'nome' => 'Independência',
    			'UF' => 'RS',
    		),
    		4812 => 
    		array (
    			'codigoIbge' => 4310413,
    			'nome' => 'Inhacorá',
    			'UF' => 'RS',
    		),
    		4813 => 
    		array (
    			'codigoIbge' => 4310439,
    			'nome' => 'Ipê',
    			'UF' => 'RS',
    		),
    		4814 => 
    		array (
    			'codigoIbge' => 4310462,
    			'nome' => 'Ipiranga do Sul',
    			'UF' => 'RS',
    		),
    		4815 => 
    		array (
    			'codigoIbge' => 4310504,
    			'nome' => 'Iraí',
    			'UF' => 'RS',
    		),
    		4816 => 
    		array (
    			'codigoIbge' => 4310538,
    			'nome' => 'Itaara',
    			'UF' => 'RS',
    		),
    		4817 => 
    		array (
    			'codigoIbge' => 4310553,
    			'nome' => 'Itacurubi',
    			'UF' => 'RS',
    		),
    		4818 => 
    		array (
    			'codigoIbge' => 4310579,
    			'nome' => 'Itapuca',
    			'UF' => 'RS',
    		),
    		4819 => 
    		array (
    			'codigoIbge' => 4310603,
    			'nome' => 'Itaqui',
    			'UF' => 'RS',
    		),
    		4820 => 
    		array (
    			'codigoIbge' => 4310652,
    			'nome' => 'Itati',
    			'UF' => 'RS',
    		),
    		4821 => 
    		array (
    			'codigoIbge' => 4310702,
    			'nome' => 'Itatiba do Sul',
    			'UF' => 'RS',
    		),
    		4822 => 
    		array (
    			'codigoIbge' => 4310751,
    			'nome' => 'Ivorá',
    			'UF' => 'RS',
    		),
    		4823 => 
    		array (
    			'codigoIbge' => 4310801,
    			'nome' => 'Ivoti',
    			'UF' => 'RS',
    		),
    		4824 => 
    		array (
    			'codigoIbge' => 4310850,
    			'nome' => 'Jaboticaba',
    			'UF' => 'RS',
    		),
    		4825 => 
    		array (
    			'codigoIbge' => 4310876,
    			'nome' => 'Jacuizinho',
    			'UF' => 'RS',
    		),
    		4826 => 
    		array (
    			'codigoIbge' => 4310900,
    			'nome' => 'Jacutinga',
    			'UF' => 'RS',
    		),
    		4827 => 
    		array (
    			'codigoIbge' => 4311007,
    			'nome' => 'Jaguarão',
    			'UF' => 'RS',
    		),
    		4828 => 
    		array (
    			'codigoIbge' => 4311106,
    			'nome' => 'Jaguari',
    			'UF' => 'RS',
    		),
    		4829 => 
    		array (
    			'codigoIbge' => 4311122,
    			'nome' => 'Jaquirana',
    			'UF' => 'RS',
    		),
    		4830 => 
    		array (
    			'codigoIbge' => 4311130,
    			'nome' => 'Jari',
    			'UF' => 'RS',
    		),
    		4831 => 
    		array (
    			'codigoIbge' => 4311155,
    			'nome' => 'Jóia',
    			'UF' => 'RS',
    		),
    		4832 => 
    		array (
    			'codigoIbge' => 4311205,
    			'nome' => 'Júlio de Castilhos',
    			'UF' => 'RS',
    		),
    		4833 => 
    		array (
    			'codigoIbge' => 4311239,
    			'nome' => 'Lagoa Bonita do Sul',
    			'UF' => 'RS',
    		),
    		4834 => 
    		array (
    			'codigoIbge' => 4311254,
    			'nome' => 'Lagoão',
    			'UF' => 'RS',
    		),
    		4835 => 
    		array (
    			'codigoIbge' => 4311270,
    			'nome' => 'Lagoa dos Três Cantos',
    			'UF' => 'RS',
    		),
    		4836 => 
    		array (
    			'codigoIbge' => 4311304,
    			'nome' => 'Lagoa Vermelha',
    			'UF' => 'RS',
    		),
    		4837 => 
    		array (
    			'codigoIbge' => 4311403,
    			'nome' => 'Lajeado',
    			'UF' => 'RS',
    		),
    		4838 => 
    		array (
    			'codigoIbge' => 4311429,
    			'nome' => 'Lajeado do Bugre',
    			'UF' => 'RS',
    		),
    		4839 => 
    		array (
    			'codigoIbge' => 4311502,
    			'nome' => 'Lavras do Sul',
    			'UF' => 'RS',
    		),
    		4840 => 
    		array (
    			'codigoIbge' => 4311601,
    			'nome' => 'Liberato Salzano',
    			'UF' => 'RS',
    		),
    		4841 => 
    		array (
    			'codigoIbge' => 4311627,
    			'nome' => 'Lindolfo Collor',
    			'UF' => 'RS',
    		),
    		4842 => 
    		array (
    			'codigoIbge' => 4311643,
    			'nome' => 'Linha Nova',
    			'UF' => 'RS',
    		),
    		4843 => 
    		array (
    			'codigoIbge' => 4311700,
    			'nome' => 'Machadinho',
    			'UF' => 'RS',
    		),
    		4844 => 
    		array (
    			'codigoIbge' => 4311718,
    			'nome' => 'Maçambará',
    			'UF' => 'RS',
    		),
    		4845 => 
    		array (
    			'codigoIbge' => 4311734,
    			'nome' => 'Mampituba',
    			'UF' => 'RS',
    		),
    		4846 => 
    		array (
    			'codigoIbge' => 4311759,
    			'nome' => 'Manoel Viana',
    			'UF' => 'RS',
    		),
    		4847 => 
    		array (
    			'codigoIbge' => 4311775,
    			'nome' => 'Maquiné',
    			'UF' => 'RS',
    		),
    		4848 => 
    		array (
    			'codigoIbge' => 4311791,
    			'nome' => 'Maratá',
    			'UF' => 'RS',
    		),
    		4849 => 
    		array (
    			'codigoIbge' => 4311809,
    			'nome' => 'Marau',
    			'UF' => 'RS',
    		),
    		4850 => 
    		array (
    			'codigoIbge' => 4311908,
    			'nome' => 'Marcelino Ramos',
    			'UF' => 'RS',
    		),
    		4851 => 
    		array (
    			'codigoIbge' => 4311981,
    			'nome' => 'Mariana Pimentel',
    			'UF' => 'RS',
    		),
    		4852 => 
    		array (
    			'codigoIbge' => 4312005,
    			'nome' => 'Mariano Moro',
    			'UF' => 'RS',
    		),
    		4853 => 
    		array (
    			'codigoIbge' => 4312054,
    			'nome' => 'Marques de Souza',
    			'UF' => 'RS',
    		),
    		4854 => 
    		array (
    			'codigoIbge' => 4312104,
    			'nome' => 'Mata',
    			'UF' => 'RS',
    		),
    		4855 => 
    		array (
    			'codigoIbge' => 4312138,
    			'nome' => 'Mato Castelhano',
    			'UF' => 'RS',
    		),
    		4856 => 
    		array (
    			'codigoIbge' => 4312153,
    			'nome' => 'Mato Leitão',
    			'UF' => 'RS',
    		),
    		4857 => 
    		array (
    			'codigoIbge' => 4312179,
    			'nome' => 'Mato Queimado',
    			'UF' => 'RS',
    		),
    		4858 => 
    		array (
    			'codigoIbge' => 4312203,
    			'nome' => 'Maximiliano de Almeida',
    			'UF' => 'RS',
    		),
    		4859 => 
    		array (
    			'codigoIbge' => 4312252,
    			'nome' => 'Minas do Leão',
    			'UF' => 'RS',
    		),
    		4860 => 
    		array (
    			'codigoIbge' => 4312302,
    			'nome' => 'Miraguaí',
    			'UF' => 'RS',
    		),
    		4861 => 
    		array (
    			'codigoIbge' => 4312351,
    			'nome' => 'Montauri',
    			'UF' => 'RS',
    		),
    		4862 => 
    		array (
    			'codigoIbge' => 4312377,
    			'nome' => 'Monte Alegre dos Campos',
    			'UF' => 'RS',
    		),
    		4863 => 
    		array (
    			'codigoIbge' => 4312385,
    			'nome' => 'Monte Belo do Sul',
    			'UF' => 'RS',
    		),
    		4864 => 
    		array (
    			'codigoIbge' => 4312401,
    			'nome' => 'Montenegro',
    			'UF' => 'RS',
    		),
    		4865 => 
    		array (
    			'codigoIbge' => 4312427,
    			'nome' => 'Mormaço',
    			'UF' => 'RS',
    		),
    		4866 => 
    		array (
    			'codigoIbge' => 4312443,
    			'nome' => 'Morrinhos do Sul',
    			'UF' => 'RS',
    		),
    		4867 => 
    		array (
    			'codigoIbge' => 4312450,
    			'nome' => 'Morro Redondo',
    			'UF' => 'RS',
    		),
    		4868 => 
    		array (
    			'codigoIbge' => 4312476,
    			'nome' => 'Morro Reuter',
    			'UF' => 'RS',
    		),
    		4869 => 
    		array (
    			'codigoIbge' => 4312500,
    			'nome' => 'Mostardas',
    			'UF' => 'RS',
    		),
    		4870 => 
    		array (
    			'codigoIbge' => 4312609,
    			'nome' => 'Muçum',
    			'UF' => 'RS',
    		),
    		4871 => 
    		array (
    			'codigoIbge' => 4312617,
    			'nome' => 'Muitos Capões',
    			'UF' => 'RS',
    		),
    		4872 => 
    		array (
    			'codigoIbge' => 4312625,
    			'nome' => 'Muliterno',
    			'UF' => 'RS',
    		),
    		4873 => 
    		array (
    			'codigoIbge' => 4312658,
    			'nome' => 'Não-Me-Toque',
    			'UF' => 'RS',
    		),
    		4874 => 
    		array (
    			'codigoIbge' => 4312674,
    			'nome' => 'Nicolau Vergueiro',
    			'UF' => 'RS',
    		),
    		4875 => 
    		array (
    			'codigoIbge' => 4312708,
    			'nome' => 'Nonoai',
    			'UF' => 'RS',
    		),
    		4876 => 
    		array (
    			'codigoIbge' => 4312757,
    			'nome' => 'Nova Alvorada',
    			'UF' => 'RS',
    		),
    		4877 => 
    		array (
    			'codigoIbge' => 4312807,
    			'nome' => 'Nova Araçá',
    			'UF' => 'RS',
    		),
    		4878 => 
    		array (
    			'codigoIbge' => 4312906,
    			'nome' => 'Nova Bassano',
    			'UF' => 'RS',
    		),
    		4879 => 
    		array (
    			'codigoIbge' => 4312955,
    			'nome' => 'Nova Boa Vista',
    			'UF' => 'RS',
    		),
    		4880 => 
    		array (
    			'codigoIbge' => 4313003,
    			'nome' => 'Nova Bréscia',
    			'UF' => 'RS',
    		),
    		4881 => 
    		array (
    			'codigoIbge' => 4313011,
    			'nome' => 'Nova Candelária',
    			'UF' => 'RS',
    		),
    		4882 => 
    		array (
    			'codigoIbge' => 4313037,
    			'nome' => 'Nova Esperança do Sul',
    			'UF' => 'RS',
    		),
    		4883 => 
    		array (
    			'codigoIbge' => 4313060,
    			'nome' => 'Nova Hartz',
    			'UF' => 'RS',
    		),
    		4884 => 
    		array (
    			'codigoIbge' => 4313086,
    			'nome' => 'Nova Pádua',
    			'UF' => 'RS',
    		),
    		4885 => 
    		array (
    			'codigoIbge' => 4313102,
    			'nome' => 'Nova Palma',
    			'UF' => 'RS',
    		),
    		4886 => 
    		array (
    			'codigoIbge' => 4313201,
    			'nome' => 'Nova Petrópolis',
    			'UF' => 'RS',
    		),
    		4887 => 
    		array (
    			'codigoIbge' => 4313300,
    			'nome' => 'Nova Prata',
    			'UF' => 'RS',
    		),
    		4888 => 
    		array (
    			'codigoIbge' => 4313334,
    			'nome' => 'Nova Ramada',
    			'UF' => 'RS',
    		),
    		4889 => 
    		array (
    			'codigoIbge' => 4313359,
    			'nome' => 'Nova Roma do Sul',
    			'UF' => 'RS',
    		),
    		4890 => 
    		array (
    			'codigoIbge' => 4313375,
    			'nome' => 'Nova Santa Rita',
    			'UF' => 'RS',
    		),
    		4891 => 
    		array (
    			'codigoIbge' => 4313391,
    			'nome' => 'Novo Cabrais',
    			'UF' => 'RS',
    		),
    		4892 => 
    		array (
    			'codigoIbge' => 4313409,
    			'nome' => 'Novo Hamburgo',
    			'UF' => 'RS',
    		),
    		4893 => 
    		array (
    			'codigoIbge' => 4313425,
    			'nome' => 'Novo Machado',
    			'UF' => 'RS',
    		),
    		4894 => 
    		array (
    			'codigoIbge' => 4313441,
    			'nome' => 'Novo Tiradentes',
    			'UF' => 'RS',
    		),
    		4895 => 
    		array (
    			'codigoIbge' => 4313466,
    			'nome' => 'Novo Xingu',
    			'UF' => 'RS',
    		),
    		4896 => 
    		array (
    			'codigoIbge' => 4313490,
    			'nome' => 'Novo Barreiro',
    			'UF' => 'RS',
    		),
    		4897 => 
    		array (
    			'codigoIbge' => 4313508,
    			'nome' => 'Osório',
    			'UF' => 'RS',
    		),
    		4898 => 
    		array (
    			'codigoIbge' => 4313607,
    			'nome' => 'Paim Filho',
    			'UF' => 'RS',
    		),
    		4899 => 
    		array (
    			'codigoIbge' => 4313656,
    			'nome' => 'Palmares do Sul',
    			'UF' => 'RS',
    		),
    		4900 => 
    		array (
    			'codigoIbge' => 4313706,
    			'nome' => 'Palmeira das Missões',
    			'UF' => 'RS',
    		),
    		4901 => 
    		array (
    			'codigoIbge' => 4313805,
    			'nome' => 'Palmitinho',
    			'UF' => 'RS',
    		),
    		4902 => 
    		array (
    			'codigoIbge' => 4313904,
    			'nome' => 'Panambi',
    			'UF' => 'RS',
    		),
    		4903 => 
    		array (
    			'codigoIbge' => 4313953,
    			'nome' => 'Pantano Grande',
    			'UF' => 'RS',
    		),
    		4904 => 
    		array (
    			'codigoIbge' => 4314001,
    			'nome' => 'Paraí',
    			'UF' => 'RS',
    		),
    		4905 => 
    		array (
    			'codigoIbge' => 4314027,
    			'nome' => 'Paraíso do Sul',
    			'UF' => 'RS',
    		),
    		4906 => 
    		array (
    			'codigoIbge' => 4314035,
    			'nome' => 'Pareci Novo',
    			'UF' => 'RS',
    		),
    		4907 => 
    		array (
    			'codigoIbge' => 4314050,
    			'nome' => 'Parobé',
    			'UF' => 'RS',
    		),
    		4908 => 
    		array (
    			'codigoIbge' => 4314068,
    			'nome' => 'Passa Sete',
    			'UF' => 'RS',
    		),
    		4909 => 
    		array (
    			'codigoIbge' => 4314076,
    			'nome' => 'Passo do Sobrado',
    			'UF' => 'RS',
    		),
    		4910 => 
    		array (
    			'codigoIbge' => 4314100,
    			'nome' => 'Passo Fundo',
    			'UF' => 'RS',
    		),
    		4911 => 
    		array (
    			'codigoIbge' => 4314134,
    			'nome' => 'Paulo Bento',
    			'UF' => 'RS',
    		),
    		4912 => 
    		array (
    			'codigoIbge' => 4314159,
    			'nome' => 'Paverama',
    			'UF' => 'RS',
    		),
    		4913 => 
    		array (
    			'codigoIbge' => 4314175,
    			'nome' => 'Pedras Altas',
    			'UF' => 'RS',
    		),
    		4914 => 
    		array (
    			'codigoIbge' => 4314209,
    			'nome' => 'Pedro Osório',
    			'UF' => 'RS',
    		),
    		4915 => 
    		array (
    			'codigoIbge' => 4314308,
    			'nome' => 'Pejuçara',
    			'UF' => 'RS',
    		),
    		4916 => 
    		array (
    			'codigoIbge' => 4314407,
    			'nome' => 'Pelotas',
    			'UF' => 'RS',
    		),
    		4917 => 
    		array (
    			'codigoIbge' => 4314423,
    			'nome' => 'Picada Café',
    			'UF' => 'RS',
    		),
    		4918 => 
    		array (
    			'codigoIbge' => 4314456,
    			'nome' => 'Pinhal',
    			'UF' => 'RS',
    		),
    		4919 => 
    		array (
    			'codigoIbge' => 4314464,
    			'nome' => 'Pinhal da Serra',
    			'UF' => 'RS',
    		),
    		4920 => 
    		array (
    			'codigoIbge' => 4314472,
    			'nome' => 'Pinhal Grande',
    			'UF' => 'RS',
    		),
    		4921 => 
    		array (
    			'codigoIbge' => 4314498,
    			'nome' => 'Pinheirinho do Vale',
    			'UF' => 'RS',
    		),
    		4922 => 
    		array (
    			'codigoIbge' => 4314506,
    			'nome' => 'Pinheiro Machado',
    			'UF' => 'RS',
    		),
    		4923 => 
    		array (
    			'codigoIbge' => 4314548,
    			'nome' => 'Pinto Bandeira',
    			'UF' => 'RS',
    		),
    		4924 => 
    		array (
    			'codigoIbge' => 4314555,
    			'nome' => 'Pirapó',
    			'UF' => 'RS',
    		),
    		4925 => 
    		array (
    			'codigoIbge' => 4314605,
    			'nome' => 'Piratini',
    			'UF' => 'RS',
    		),
    		4926 => 
    		array (
    			'codigoIbge' => 4314704,
    			'nome' => 'Planalto',
    			'UF' => 'RS',
    		),
    		4927 => 
    		array (
    			'codigoIbge' => 4314753,
    			'nome' => 'Poço das Antas',
    			'UF' => 'RS',
    		),
    		4928 => 
    		array (
    			'codigoIbge' => 4314779,
    			'nome' => 'Pontão',
    			'UF' => 'RS',
    		),
    		4929 => 
    		array (
    			'codigoIbge' => 4314787,
    			'nome' => 'Ponte Preta',
    			'UF' => 'RS',
    		),
    		4930 => 
    		array (
    			'codigoIbge' => 4314803,
    			'nome' => 'Portão',
    			'UF' => 'RS',
    		),
    		4931 => 
    		array (
    			'codigoIbge' => 4314902,
    			'nome' => 'Porto Alegre',
    			'UF' => 'RS',
    		),
    		4932 => 
    		array (
    			'codigoIbge' => 4315008,
    			'nome' => 'Porto Lucena',
    			'UF' => 'RS',
    		),
    		4933 => 
    		array (
    			'codigoIbge' => 4315057,
    			'nome' => 'Porto Mauá',
    			'UF' => 'RS',
    		),
    		4934 => 
    		array (
    			'codigoIbge' => 4315073,
    			'nome' => 'Porto Vera Cruz',
    			'UF' => 'RS',
    		),
    		4935 => 
    		array (
    			'codigoIbge' => 4315107,
    			'nome' => 'Porto Xavier',
    			'UF' => 'RS',
    		),
    		4936 => 
    		array (
    			'codigoIbge' => 4315131,
    			'nome' => 'Pouso Novo',
    			'UF' => 'RS',
    		),
    		4937 => 
    		array (
    			'codigoIbge' => 4315149,
    			'nome' => 'Presidente Lucena',
    			'UF' => 'RS',
    		),
    		4938 => 
    		array (
    			'codigoIbge' => 4315156,
    			'nome' => 'Progresso',
    			'UF' => 'RS',
    		),
    		4939 => 
    		array (
    			'codigoIbge' => 4315172,
    			'nome' => 'Protásio Alves',
    			'UF' => 'RS',
    		),
    		4940 => 
    		array (
    			'codigoIbge' => 4315206,
    			'nome' => 'Putinga',
    			'UF' => 'RS',
    		),
    		4941 => 
    		array (
    			'codigoIbge' => 4315305,
    			'nome' => 'Quaraí',
    			'UF' => 'RS',
    		),
    		4942 => 
    		array (
    			'codigoIbge' => 4315313,
    			'nome' => 'Quatro Irmãos',
    			'UF' => 'RS',
    		),
    		4943 => 
    		array (
    			'codigoIbge' => 4315321,
    			'nome' => 'Quevedos',
    			'UF' => 'RS',
    		),
    		4944 => 
    		array (
    			'codigoIbge' => 4315354,
    			'nome' => 'Quinze de Novembro',
    			'UF' => 'RS',
    		),
    		4945 => 
    		array (
    			'codigoIbge' => 4315404,
    			'nome' => 'Redentora',
    			'UF' => 'RS',
    		),
    		4946 => 
    		array (
    			'codigoIbge' => 4315453,
    			'nome' => 'Relvado',
    			'UF' => 'RS',
    		),
    		4947 => 
    		array (
    			'codigoIbge' => 4315503,
    			'nome' => 'Restinga Sêca',
    			'UF' => 'RS',
    		),
    		4948 => 
    		array (
    			'codigoIbge' => 4315552,
    			'nome' => 'Rio dos Índios',
    			'UF' => 'RS',
    		),
    		4949 => 
    		array (
    			'codigoIbge' => 4315602,
    			'nome' => 'Rio Grande',
    			'UF' => 'RS',
    		),
    		4950 => 
    		array (
    			'codigoIbge' => 4315701,
    			'nome' => 'Rio Pardo',
    			'UF' => 'RS',
    		),
    		4951 => 
    		array (
    			'codigoIbge' => 4315750,
    			'nome' => 'Riozinho',
    			'UF' => 'RS',
    		),
    		4952 => 
    		array (
    			'codigoIbge' => 4315800,
    			'nome' => 'Roca Sales',
    			'UF' => 'RS',
    		),
    		4953 => 
    		array (
    			'codigoIbge' => 4315909,
    			'nome' => 'Rodeio Bonito',
    			'UF' => 'RS',
    		),
    		4954 => 
    		array (
    			'codigoIbge' => 4315958,
    			'nome' => 'Rolador',
    			'UF' => 'RS',
    		),
    		4955 => 
    		array (
    			'codigoIbge' => 4316006,
    			'nome' => 'Rolante',
    			'UF' => 'RS',
    		),
    		4956 => 
    		array (
    			'codigoIbge' => 4316105,
    			'nome' => 'Ronda Alta',
    			'UF' => 'RS',
    		),
    		4957 => 
    		array (
    			'codigoIbge' => 4316204,
    			'nome' => 'Rondinha',
    			'UF' => 'RS',
    		),
    		4958 => 
    		array (
    			'codigoIbge' => 4316303,
    			'nome' => 'Roque Gonzales',
    			'UF' => 'RS',
    		),
    		4959 => 
    		array (
    			'codigoIbge' => 4316402,
    			'nome' => 'Rosário do Sul',
    			'UF' => 'RS',
    		),
    		4960 => 
    		array (
    			'codigoIbge' => 4316428,
    			'nome' => 'Sagrada Família',
    			'UF' => 'RS',
    		),
    		4961 => 
    		array (
    			'codigoIbge' => 4316436,
    			'nome' => 'Saldanha Marinho',
    			'UF' => 'RS',
    		),
    		4962 => 
    		array (
    			'codigoIbge' => 4316451,
    			'nome' => 'Salto do Jacuí',
    			'UF' => 'RS',
    		),
    		4963 => 
    		array (
    			'codigoIbge' => 4316477,
    			'nome' => 'Salvador das Missões',
    			'UF' => 'RS',
    		),
    		4964 => 
    		array (
    			'codigoIbge' => 4316501,
    			'nome' => 'Salvador do Sul',
    			'UF' => 'RS',
    		),
    		4965 => 
    		array (
    			'codigoIbge' => 4316600,
    			'nome' => 'Sananduva',
    			'UF' => 'RS',
    		),
    		4966 => 
    		array (
    			'codigoIbge' => 4316709,
    			'nome' => 'Santa Bárbara do Sul',
    			'UF' => 'RS',
    		),
    		4967 => 
    		array (
    			'codigoIbge' => 4316733,
    			'nome' => 'Santa Cecília do Sul',
    			'UF' => 'RS',
    		),
    		4968 => 
    		array (
    			'codigoIbge' => 4316758,
    			'nome' => 'Santa Clara do Sul',
    			'UF' => 'RS',
    		),
    		4969 => 
    		array (
    			'codigoIbge' => 4316808,
    			'nome' => 'Santa Cruz do Sul',
    			'UF' => 'RS',
    		),
    		4970 => 
    		array (
    			'codigoIbge' => 4316907,
    			'nome' => 'Santa Maria',
    			'UF' => 'RS',
    		),
    		4971 => 
    		array (
    			'codigoIbge' => 4316956,
    			'nome' => 'Santa Maria do Herval',
    			'UF' => 'RS',
    		),
    		4972 => 
    		array (
    			'codigoIbge' => 4316972,
    			'nome' => 'Santa Margarida do Sul',
    			'UF' => 'RS',
    		),
    		4973 => 
    		array (
    			'codigoIbge' => 4317004,
    			'nome' => 'Santana da Boa Vista',
    			'UF' => 'RS',
    		),
    		4974 => 
    		array (
    			'codigoIbge' => 4317103,
    			'nome' => 'Sant\'Ana do Livramento',
    			'UF' => 'RS',
    		),
    		4975 => 
    		array (
    			'codigoIbge' => 4317202,
    			'nome' => 'Santa Rosa',
    			'UF' => 'RS',
    		),
    		4976 => 
    		array (
    			'codigoIbge' => 4317251,
    			'nome' => 'Santa Tereza',
    			'UF' => 'RS',
    		),
    		4977 => 
    		array (
    			'codigoIbge' => 4317301,
    			'nome' => 'Santa Vitória do Palmar',
    			'UF' => 'RS',
    		),
    		4978 => 
    		array (
    			'codigoIbge' => 4317400,
    			'nome' => 'Santiago',
    			'UF' => 'RS',
    		),
    		4979 => 
    		array (
    			'codigoIbge' => 4317509,
    			'nome' => 'Santo Ângelo',
    			'UF' => 'RS',
    		),
    		4980 => 
    		array (
    			'codigoIbge' => 4317558,
    			'nome' => 'Santo Antônio do Palma',
    			'UF' => 'RS',
    		),
    		4981 => 
    		array (
    			'codigoIbge' => 4317608,
    			'nome' => 'Santo Antônio da Patrulha',
    			'UF' => 'RS',
    		),
    		4982 => 
    		array (
    			'codigoIbge' => 4317707,
    			'nome' => 'Santo Antônio das Missões',
    			'UF' => 'RS',
    		),
    		4983 => 
    		array (
    			'codigoIbge' => 4317756,
    			'nome' => 'Santo Antônio do Planalto',
    			'UF' => 'RS',
    		),
    		4984 => 
    		array (
    			'codigoIbge' => 4317806,
    			'nome' => 'Santo Augusto',
    			'UF' => 'RS',
    		),
    		4985 => 
    		array (
    			'codigoIbge' => 4317905,
    			'nome' => 'Santo Cristo',
    			'UF' => 'RS',
    		),
    		4986 => 
    		array (
    			'codigoIbge' => 4317954,
    			'nome' => 'Santo Expedito do Sul',
    			'UF' => 'RS',
    		),
    		4987 => 
    		array (
    			'codigoIbge' => 4318002,
    			'nome' => 'São Borja',
    			'UF' => 'RS',
    		),
    		4988 => 
    		array (
    			'codigoIbge' => 4318051,
    			'nome' => 'São Domingos do Sul',
    			'UF' => 'RS',
    		),
    		4989 => 
    		array (
    			'codigoIbge' => 4318101,
    			'nome' => 'São Francisco de Assis',
    			'UF' => 'RS',
    		),
    		4990 => 
    		array (
    			'codigoIbge' => 4318200,
    			'nome' => 'São Francisco de Paula',
    			'UF' => 'RS',
    		),
    		4991 => 
    		array (
    			'codigoIbge' => 4318309,
    			'nome' => 'São Gabriel',
    			'UF' => 'RS',
    		),
    		4992 => 
    		array (
    			'codigoIbge' => 4318408,
    			'nome' => 'São Jerônimo',
    			'UF' => 'RS',
    		),
    		4993 => 
    		array (
    			'codigoIbge' => 4318424,
    			'nome' => 'São João da Urtiga',
    			'UF' => 'RS',
    		),
    		4994 => 
    		array (
    			'codigoIbge' => 4318432,
    			'nome' => 'São João do Polêsine',
    			'UF' => 'RS',
    		),
    		4995 => 
    		array (
    			'codigoIbge' => 4318440,
    			'nome' => 'São Jorge',
    			'UF' => 'RS',
    		),
    		4996 => 
    		array (
    			'codigoIbge' => 4318457,
    			'nome' => 'São José das Missões',
    			'UF' => 'RS',
    		),
    		4997 => 
    		array (
    			'codigoIbge' => 4318465,
    			'nome' => 'São José do Herval',
    			'UF' => 'RS',
    		),
    		4998 => 
    		array (
    			'codigoIbge' => 4318481,
    			'nome' => 'São José do Hortêncio',
    			'UF' => 'RS',
    		),
    		4999 => 
    		array (
    			'codigoIbge' => 4318499,
    			'nome' => 'São José do Inhacorá',
    			'UF' => 'RS',
    		),
    		5000 => 
    		array (
    			'codigoIbge' => 4318507,
    			'nome' => 'São José do Norte',
    			'UF' => 'RS',
    		),
    		5001 => 
    		array (
    			'codigoIbge' => 4318606,
    			'nome' => 'São José do Ouro',
    			'UF' => 'RS',
    		),
    		5002 => 
    		array (
    			'codigoIbge' => 4318614,
    			'nome' => 'São José do Sul',
    			'UF' => 'RS',
    		),
    		5003 => 
    		array (
    			'codigoIbge' => 4318622,
    			'nome' => 'São José dos Ausentes',
    			'UF' => 'RS',
    		),
    		5004 => 
    		array (
    			'codigoIbge' => 4318705,
    			'nome' => 'São Leopoldo',
    			'UF' => 'RS',
    		),
    		5005 => 
    		array (
    			'codigoIbge' => 4318804,
    			'nome' => 'São Lourenço do Sul',
    			'UF' => 'RS',
    		),
    		5006 => 
    		array (
    			'codigoIbge' => 4318903,
    			'nome' => 'São Luiz Gonzaga',
    			'UF' => 'RS',
    		),
    		5007 => 
    		array (
    			'codigoIbge' => 4319000,
    			'nome' => 'São Marcos',
    			'UF' => 'RS',
    		),
    		5008 => 
    		array (
    			'codigoIbge' => 4319109,
    			'nome' => 'São Martinho',
    			'UF' => 'RS',
    		),
    		5009 => 
    		array (
    			'codigoIbge' => 4319125,
    			'nome' => 'São Martinho da Serra',
    			'UF' => 'RS',
    		),
    		5010 => 
    		array (
    			'codigoIbge' => 4319158,
    			'nome' => 'São Miguel das Missões',
    			'UF' => 'RS',
    		),
    		5011 => 
    		array (
    			'codigoIbge' => 4319208,
    			'nome' => 'São Nicolau',
    			'UF' => 'RS',
    		),
    		5012 => 
    		array (
    			'codigoIbge' => 4319307,
    			'nome' => 'São Paulo das Missões',
    			'UF' => 'RS',
    		),
    		5013 => 
    		array (
    			'codigoIbge' => 4319356,
    			'nome' => 'São Pedro da Serra',
    			'UF' => 'RS',
    		),
    		5014 => 
    		array (
    			'codigoIbge' => 4319364,
    			'nome' => 'São Pedro das Missões',
    			'UF' => 'RS',
    		),
    		5015 => 
    		array (
    			'codigoIbge' => 4319372,
    			'nome' => 'São Pedro do Butiá',
    			'UF' => 'RS',
    		),
    		5016 => 
    		array (
    			'codigoIbge' => 4319406,
    			'nome' => 'São Pedro do Sul',
    			'UF' => 'RS',
    		),
    		5017 => 
    		array (
    			'codigoIbge' => 4319505,
    			'nome' => 'São Sebastião do Caí',
    			'UF' => 'RS',
    		),
    		5018 => 
    		array (
    			'codigoIbge' => 4319604,
    			'nome' => 'São Sepé',
    			'UF' => 'RS',
    		),
    		5019 => 
    		array (
    			'codigoIbge' => 4319703,
    			'nome' => 'São Valentim',
    			'UF' => 'RS',
    		),
    		5020 => 
    		array (
    			'codigoIbge' => 4319711,
    			'nome' => 'São Valentim do Sul',
    			'UF' => 'RS',
    		),
    		5021 => 
    		array (
    			'codigoIbge' => 4319737,
    			'nome' => 'São Valério do Sul',
    			'UF' => 'RS',
    		),
    		5022 => 
    		array (
    			'codigoIbge' => 4319752,
    			'nome' => 'São Vendelino',
    			'UF' => 'RS',
    		),
    		5023 => 
    		array (
    			'codigoIbge' => 4319802,
    			'nome' => 'São Vicente do Sul',
    			'UF' => 'RS',
    		),
    		5024 => 
    		array (
    			'codigoIbge' => 4319901,
    			'nome' => 'Sapiranga',
    			'UF' => 'RS',
    		),
    		5025 => 
    		array (
    			'codigoIbge' => 4320008,
    			'nome' => 'Sapucaia do Sul',
    			'UF' => 'RS',
    		),
    		5026 => 
    		array (
    			'codigoIbge' => 4320107,
    			'nome' => 'Sarandi',
    			'UF' => 'RS',
    		),
    		5027 => 
    		array (
    			'codigoIbge' => 4320206,
    			'nome' => 'Seberi',
    			'UF' => 'RS',
    		),
    		5028 => 
    		array (
    			'codigoIbge' => 4320230,
    			'nome' => 'Sede Nova',
    			'UF' => 'RS',
    		),
    		5029 => 
    		array (
    			'codigoIbge' => 4320263,
    			'nome' => 'Segredo',
    			'UF' => 'RS',
    		),
    		5030 => 
    		array (
    			'codigoIbge' => 4320305,
    			'nome' => 'Selbach',
    			'UF' => 'RS',
    		),
    		5031 => 
    		array (
    			'codigoIbge' => 4320321,
    			'nome' => 'Senador Salgado Filho',
    			'UF' => 'RS',
    		),
    		5032 => 
    		array (
    			'codigoIbge' => 4320354,
    			'nome' => 'Sentinela do Sul',
    			'UF' => 'RS',
    		),
    		5033 => 
    		array (
    			'codigoIbge' => 4320404,
    			'nome' => 'Serafina Corrêa',
    			'UF' => 'RS',
    		),
    		5034 => 
    		array (
    			'codigoIbge' => 4320453,
    			'nome' => 'Sério',
    			'UF' => 'RS',
    		),
    		5035 => 
    		array (
    			'codigoIbge' => 4320503,
    			'nome' => 'Sertão',
    			'UF' => 'RS',
    		),
    		5036 => 
    		array (
    			'codigoIbge' => 4320552,
    			'nome' => 'Sertão Santana',
    			'UF' => 'RS',
    		),
    		5037 => 
    		array (
    			'codigoIbge' => 4320578,
    			'nome' => 'Sete de Setembro',
    			'UF' => 'RS',
    		),
    		5038 => 
    		array (
    			'codigoIbge' => 4320602,
    			'nome' => 'Severiano de Almeida',
    			'UF' => 'RS',
    		),
    		5039 => 
    		array (
    			'codigoIbge' => 4320651,
    			'nome' => 'Silveira Martins',
    			'UF' => 'RS',
    		),
    		5040 => 
    		array (
    			'codigoIbge' => 4320677,
    			'nome' => 'Sinimbu',
    			'UF' => 'RS',
    		),
    		5041 => 
    		array (
    			'codigoIbge' => 4320701,
    			'nome' => 'Sobradinho',
    			'UF' => 'RS',
    		),
    		5042 => 
    		array (
    			'codigoIbge' => 4320800,
    			'nome' => 'Soledade',
    			'UF' => 'RS',
    		),
    		5043 => 
    		array (
    			'codigoIbge' => 4320859,
    			'nome' => 'Tabaí',
    			'UF' => 'RS',
    		),
    		5044 => 
    		array (
    			'codigoIbge' => 4320909,
    			'nome' => 'Tapejara',
    			'UF' => 'RS',
    		),
    		5045 => 
    		array (
    			'codigoIbge' => 4321006,
    			'nome' => 'Tapera',
    			'UF' => 'RS',
    		),
    		5046 => 
    		array (
    			'codigoIbge' => 4321105,
    			'nome' => 'Tapes',
    			'UF' => 'RS',
    		),
    		5047 => 
    		array (
    			'codigoIbge' => 4321204,
    			'nome' => 'Taquara',
    			'UF' => 'RS',
    		),
    		5048 => 
    		array (
    			'codigoIbge' => 4321303,
    			'nome' => 'Taquari',
    			'UF' => 'RS',
    		),
    		5049 => 
    		array (
    			'codigoIbge' => 4321329,
    			'nome' => 'Taquaruçu do Sul',
    			'UF' => 'RS',
    		),
    		5050 => 
    		array (
    			'codigoIbge' => 4321352,
    			'nome' => 'Tavares',
    			'UF' => 'RS',
    		),
    		5051 => 
    		array (
    			'codigoIbge' => 4321402,
    			'nome' => 'Tenente Portela',
    			'UF' => 'RS',
    		),
    		5052 => 
    		array (
    			'codigoIbge' => 4321436,
    			'nome' => 'Terra de Areia',
    			'UF' => 'RS',
    		),
    		5053 => 
    		array (
    			'codigoIbge' => 4321451,
    			'nome' => 'Teutônia',
    			'UF' => 'RS',
    		),
    		5054 => 
    		array (
    			'codigoIbge' => 4321469,
    			'nome' => 'Tio Hugo',
    			'UF' => 'RS',
    		),
    		5055 => 
    		array (
    			'codigoIbge' => 4321477,
    			'nome' => 'Tiradentes do Sul',
    			'UF' => 'RS',
    		),
    		5056 => 
    		array (
    			'codigoIbge' => 4321493,
    			'nome' => 'Toropi',
    			'UF' => 'RS',
    		),
    		5057 => 
    		array (
    			'codigoIbge' => 4321501,
    			'nome' => 'Torres',
    			'UF' => 'RS',
    		),
    		5058 => 
    		array (
    			'codigoIbge' => 4321600,
    			'nome' => 'Tramandaí',
    			'UF' => 'RS',
    		),
    		5059 => 
    		array (
    			'codigoIbge' => 4321626,
    			'nome' => 'Travesseiro',
    			'UF' => 'RS',
    		),
    		5060 => 
    		array (
    			'codigoIbge' => 4321634,
    			'nome' => 'Três Arroios',
    			'UF' => 'RS',
    		),
    		5061 => 
    		array (
    			'codigoIbge' => 4321667,
    			'nome' => 'Três Cachoeiras',
    			'UF' => 'RS',
    		),
    		5062 => 
    		array (
    			'codigoIbge' => 4321709,
    			'nome' => 'Três Coroas',
    			'UF' => 'RS',
    		),
    		5063 => 
    		array (
    			'codigoIbge' => 4321808,
    			'nome' => 'Três de Maio',
    			'UF' => 'RS',
    		),
    		5064 => 
    		array (
    			'codigoIbge' => 4321832,
    			'nome' => 'Três Forquilhas',
    			'UF' => 'RS',
    		),
    		5065 => 
    		array (
    			'codigoIbge' => 4321857,
    			'nome' => 'Três Palmeiras',
    			'UF' => 'RS',
    		),
    		5066 => 
    		array (
    			'codigoIbge' => 4321907,
    			'nome' => 'Três Passos',
    			'UF' => 'RS',
    		),
    		5067 => 
    		array (
    			'codigoIbge' => 4321956,
    			'nome' => 'Trindade do Sul',
    			'UF' => 'RS',
    		),
    		5068 => 
    		array (
    			'codigoIbge' => 4322004,
    			'nome' => 'Triunfo',
    			'UF' => 'RS',
    		),
    		5069 => 
    		array (
    			'codigoIbge' => 4322103,
    			'nome' => 'Tucunduva',
    			'UF' => 'RS',
    		),
    		5070 => 
    		array (
    			'codigoIbge' => 4322152,
    			'nome' => 'Tunas',
    			'UF' => 'RS',
    		),
    		5071 => 
    		array (
    			'codigoIbge' => 4322186,
    			'nome' => 'Tupanci do Sul',
    			'UF' => 'RS',
    		),
    		5072 => 
    		array (
    			'codigoIbge' => 4322202,
    			'nome' => 'Tupanciretã',
    			'UF' => 'RS',
    		),
    		5073 => 
    		array (
    			'codigoIbge' => 4322251,
    			'nome' => 'Tupandi',
    			'UF' => 'RS',
    		),
    		5074 => 
    		array (
    			'codigoIbge' => 4322301,
    			'nome' => 'Tuparendi',
    			'UF' => 'RS',
    		),
    		5075 => 
    		array (
    			'codigoIbge' => 4322327,
    			'nome' => 'Turuçu',
    			'UF' => 'RS',
    		),
    		5076 => 
    		array (
    			'codigoIbge' => 4322343,
    			'nome' => 'Ubiretama',
    			'UF' => 'RS',
    		),
    		5077 => 
    		array (
    			'codigoIbge' => 4322350,
    			'nome' => 'União da Serra',
    			'UF' => 'RS',
    		),
    		5078 => 
    		array (
    			'codigoIbge' => 4322376,
    			'nome' => 'Unistalda',
    			'UF' => 'RS',
    		),
    		5079 => 
    		array (
    			'codigoIbge' => 4322400,
    			'nome' => 'Uruguaiana',
    			'UF' => 'RS',
    		),
    		5080 => 
    		array (
    			'codigoIbge' => 4322509,
    			'nome' => 'Vacaria',
    			'UF' => 'RS',
    		),
    		5081 => 
    		array (
    			'codigoIbge' => 4322525,
    			'nome' => 'Vale Verde',
    			'UF' => 'RS',
    		),
    		5082 => 
    		array (
    			'codigoIbge' => 4322533,
    			'nome' => 'Vale do Sol',
    			'UF' => 'RS',
    		),
    		5083 => 
    		array (
    			'codigoIbge' => 4322541,
    			'nome' => 'Vale Real',
    			'UF' => 'RS',
    		),
    		5084 => 
    		array (
    			'codigoIbge' => 4322558,
    			'nome' => 'Vanini',
    			'UF' => 'RS',
    		),
    		5085 => 
    		array (
    			'codigoIbge' => 4322608,
    			'nome' => 'Venâncio Aires',
    			'UF' => 'RS',
    		),
    		5086 => 
    		array (
    			'codigoIbge' => 4322707,
    			'nome' => 'Vera Cruz',
    			'UF' => 'RS',
    		),
    		5087 => 
    		array (
    			'codigoIbge' => 4322806,
    			'nome' => 'Veranópolis',
    			'UF' => 'RS',
    		),
    		5088 => 
    		array (
    			'codigoIbge' => 4322855,
    			'nome' => 'Vespasiano Corrêa',
    			'UF' => 'RS',
    		),
    		5089 => 
    		array (
    			'codigoIbge' => 4322905,
    			'nome' => 'Viadutos',
    			'UF' => 'RS',
    		),
    		5090 => 
    		array (
    			'codigoIbge' => 4323002,
    			'nome' => 'Viamão',
    			'UF' => 'RS',
    		),
    		5091 => 
    		array (
    			'codigoIbge' => 4323101,
    			'nome' => 'Vicente Dutra',
    			'UF' => 'RS',
    		),
    		5092 => 
    		array (
    			'codigoIbge' => 4323200,
    			'nome' => 'Victor Graeff',
    			'UF' => 'RS',
    		),
    		5093 => 
    		array (
    			'codigoIbge' => 4323309,
    			'nome' => 'Vila Flores',
    			'UF' => 'RS',
    		),
    		5094 => 
    		array (
    			'codigoIbge' => 4323358,
    			'nome' => 'Vila Lângaro',
    			'UF' => 'RS',
    		),
    		5095 => 
    		array (
    			'codigoIbge' => 4323408,
    			'nome' => 'Vila Maria',
    			'UF' => 'RS',
    		),
    		5096 => 
    		array (
    			'codigoIbge' => 4323457,
    			'nome' => 'Vila Nova do Sul',
    			'UF' => 'RS',
    		),
    		5097 => 
    		array (
    			'codigoIbge' => 4323507,
    			'nome' => 'Vista Alegre',
    			'UF' => 'RS',
    		),
    		5098 => 
    		array (
    			'codigoIbge' => 4323606,
    			'nome' => 'Vista Alegre do Prata',
    			'UF' => 'RS',
    		),
    		5099 => 
    		array (
    			'codigoIbge' => 4323705,
    			'nome' => 'Vista Gaúcha',
    			'UF' => 'RS',
    		),
    		5100 => 
    		array (
    			'codigoIbge' => 4323754,
    			'nome' => 'Vitória das Missões',
    			'UF' => 'RS',
    		),
    		5101 => 
    		array (
    			'codigoIbge' => 4323770,
    			'nome' => 'Westfália',
    			'UF' => 'RS',
    		),
    		5102 => 
    		array (
    			'codigoIbge' => 4323804,
    			'nome' => 'Xangri-lá',
    			'UF' => 'RS',
    		),
    		5103 => 
    		array (
    			'codigoIbge' => 5000203,
    			'nome' => 'Água Clara',
    			'UF' => 'MS',
    		),
    		5104 => 
    		array (
    			'codigoIbge' => 5000252,
    			'nome' => 'Alcinópolis',
    			'UF' => 'MS',
    		),
    		5105 => 
    		array (
    			'codigoIbge' => 5000609,
    			'nome' => 'Amambai',
    			'UF' => 'MS',
    		),
    		5106 => 
    		array (
    			'codigoIbge' => 5000708,
    			'nome' => 'Anastácio',
    			'UF' => 'MS',
    		),
    		5107 => 
    		array (
    			'codigoIbge' => 5000807,
    			'nome' => 'Anaurilândia',
    			'UF' => 'MS',
    		),
    		5108 => 
    		array (
    			'codigoIbge' => 5000856,
    			'nome' => 'Angélica',
    			'UF' => 'MS',
    		),
    		5109 => 
    		array (
    			'codigoIbge' => 5000906,
    			'nome' => 'Antônio João',
    			'UF' => 'MS',
    		),
    		5110 => 
    		array (
    			'codigoIbge' => 5001003,
    			'nome' => 'Aparecida do Taboado',
    			'UF' => 'MS',
    		),
    		5111 => 
    		array (
    			'codigoIbge' => 5001102,
    			'nome' => 'Aquidauana',
    			'UF' => 'MS',
    		),
    		5112 => 
    		array (
    			'codigoIbge' => 5001243,
    			'nome' => 'Aral Moreira',
    			'UF' => 'MS',
    		),
    		5113 => 
    		array (
    			'codigoIbge' => 5001508,
    			'nome' => 'Bandeirantes',
    			'UF' => 'MS',
    		),
    		5114 => 
    		array (
    			'codigoIbge' => 5001904,
    			'nome' => 'Bataguassu',
    			'UF' => 'MS',
    		),
    		5115 => 
    		array (
    			'codigoIbge' => 5002001,
    			'nome' => 'Batayporã',
    			'UF' => 'MS',
    		),
    		5116 => 
    		array (
    			'codigoIbge' => 5002100,
    			'nome' => 'Bela Vista',
    			'UF' => 'MS',
    		),
    		5117 => 
    		array (
    			'codigoIbge' => 5002159,
    			'nome' => 'Bodoquena',
    			'UF' => 'MS',
    		),
    		5118 => 
    		array (
    			'codigoIbge' => 5002209,
    			'nome' => 'Bonito',
    			'UF' => 'MS',
    		),
    		5119 => 
    		array (
    			'codigoIbge' => 5002308,
    			'nome' => 'Brasilândia',
    			'UF' => 'MS',
    		),
    		5120 => 
    		array (
    			'codigoIbge' => 5002407,
    			'nome' => 'Caarapó',
    			'UF' => 'MS',
    		),
    		5121 => 
    		array (
    			'codigoIbge' => 5002605,
    			'nome' => 'Camapuã',
    			'UF' => 'MS',
    		),
    		5122 => 
    		array (
    			'codigoIbge' => 5002704,
    			'nome' => 'Campo Grande',
    			'UF' => 'MS',
    		),
    		5123 => 
    		array (
    			'codigoIbge' => 5002803,
    			'nome' => 'Caracol',
    			'UF' => 'MS',
    		),
    		5124 => 
    		array (
    			'codigoIbge' => 5002902,
    			'nome' => 'Cassilândia',
    			'UF' => 'MS',
    		),
    		5125 => 
    		array (
    			'codigoIbge' => 5002951,
    			'nome' => 'Chapadão do Sul',
    			'UF' => 'MS',
    		),
    		5126 => 
    		array (
    			'codigoIbge' => 5003108,
    			'nome' => 'Corguinho',
    			'UF' => 'MS',
    		),
    		5127 => 
    		array (
    			'codigoIbge' => 5003157,
    			'nome' => 'Coronel Sapucaia',
    			'UF' => 'MS',
    		),
    		5128 => 
    		array (
    			'codigoIbge' => 5003207,
    			'nome' => 'Corumbá',
    			'UF' => 'MS',
    		),
    		5129 => 
    		array (
    			'codigoIbge' => 5003256,
    			'nome' => 'Costa Rica',
    			'UF' => 'MS',
    		),
    		5130 => 
    		array (
    			'codigoIbge' => 5003306,
    			'nome' => 'Coxim',
    			'UF' => 'MS',
    		),
    		5131 => 
    		array (
    			'codigoIbge' => 5003454,
    			'nome' => 'Deodápolis',
    			'UF' => 'MS',
    		),
    		5132 => 
    		array (
    			'codigoIbge' => 5003488,
    			'nome' => 'Dois Irmãos do Buriti',
    			'UF' => 'MS',
    		),
    		5133 => 
    		array (
    			'codigoIbge' => 5003504,
    			'nome' => 'Douradina',
    			'UF' => 'MS',
    		),
    		5134 => 
    		array (
    			'codigoIbge' => 5003702,
    			'nome' => 'Dourados',
    			'UF' => 'MS',
    		),
    		5135 => 
    		array (
    			'codigoIbge' => 5003751,
    			'nome' => 'Eldorado',
    			'UF' => 'MS',
    		),
    		5136 => 
    		array (
    			'codigoIbge' => 5003801,
    			'nome' => 'Fátima do Sul',
    			'UF' => 'MS',
    		),
    		5137 => 
    		array (
    			'codigoIbge' => 5003900,
    			'nome' => 'Figueirão',
    			'UF' => 'MS',
    		),
    		5138 => 
    		array (
    			'codigoIbge' => 5004007,
    			'nome' => 'Glória de Dourados',
    			'UF' => 'MS',
    		),
    		5139 => 
    		array (
    			'codigoIbge' => 5004106,
    			'nome' => 'Guia Lopes da Laguna',
    			'UF' => 'MS',
    		),
    		5140 => 
    		array (
    			'codigoIbge' => 5004304,
    			'nome' => 'Iguatemi',
    			'UF' => 'MS',
    		),
    		5141 => 
    		array (
    			'codigoIbge' => 5004403,
    			'nome' => 'Inocência',
    			'UF' => 'MS',
    		),
    		5142 => 
    		array (
    			'codigoIbge' => 5004502,
    			'nome' => 'Itaporã',
    			'UF' => 'MS',
    		),
    		5143 => 
    		array (
    			'codigoIbge' => 5004601,
    			'nome' => 'Itaquiraí',
    			'UF' => 'MS',
    		),
    		5144 => 
    		array (
    			'codigoIbge' => 5004700,
    			'nome' => 'Ivinhema',
    			'UF' => 'MS',
    		),
    		5145 => 
    		array (
    			'codigoIbge' => 5004809,
    			'nome' => 'Japorã',
    			'UF' => 'MS',
    		),
    		5146 => 
    		array (
    			'codigoIbge' => 5004908,
    			'nome' => 'Jaraguari',
    			'UF' => 'MS',
    		),
    		5147 => 
    		array (
    			'codigoIbge' => 5005004,
    			'nome' => 'Jardim',
    			'UF' => 'MS',
    		),
    		5148 => 
    		array (
    			'codigoIbge' => 5005103,
    			'nome' => 'Jateí',
    			'UF' => 'MS',
    		),
    		5149 => 
    		array (
    			'codigoIbge' => 5005152,
    			'nome' => 'Juti',
    			'UF' => 'MS',
    		),
    		5150 => 
    		array (
    			'codigoIbge' => 5005202,
    			'nome' => 'Ladário',
    			'UF' => 'MS',
    		),
    		5151 => 
    		array (
    			'codigoIbge' => 5005251,
    			'nome' => 'Laguna Carapã',
    			'UF' => 'MS',
    		),
    		5152 => 
    		array (
    			'codigoIbge' => 5005400,
    			'nome' => 'Maracaju',
    			'UF' => 'MS',
    		),
    		5153 => 
    		array (
    			'codigoIbge' => 5005608,
    			'nome' => 'Miranda',
    			'UF' => 'MS',
    		),
    		5154 => 
    		array (
    			'codigoIbge' => 5005681,
    			'nome' => 'Mundo Novo',
    			'UF' => 'MS',
    		),
    		5155 => 
    		array (
    			'codigoIbge' => 5005707,
    			'nome' => 'Naviraí',
    			'UF' => 'MS',
    		),
    		5156 => 
    		array (
    			'codigoIbge' => 5005806,
    			'nome' => 'Nioaque',
    			'UF' => 'MS',
    		),
    		5157 => 
    		array (
    			'codigoIbge' => 5006002,
    			'nome' => 'Nova Alvorada do Sul',
    			'UF' => 'MS',
    		),
    		5158 => 
    		array (
    			'codigoIbge' => 5006200,
    			'nome' => 'Nova Andradina',
    			'UF' => 'MS',
    		),
    		5159 => 
    		array (
    			'codigoIbge' => 5006259,
    			'nome' => 'Novo Horizonte do Sul',
    			'UF' => 'MS',
    		),
    		5160 => 
    		array (
    			'codigoIbge' => 5006275,
    			'nome' => 'Paraíso das Águas',
    			'UF' => 'MS',
    		),
    		5161 => 
    		array (
    			'codigoIbge' => 5006309,
    			'nome' => 'Paranaíba',
    			'UF' => 'MS',
    		),
    		5162 => 
    		array (
    			'codigoIbge' => 5006358,
    			'nome' => 'Paranhos',
    			'UF' => 'MS',
    		),
    		5163 => 
    		array (
    			'codigoIbge' => 5006408,
    			'nome' => 'Pedro Gomes',
    			'UF' => 'MS',
    		),
    		5164 => 
    		array (
    			'codigoIbge' => 5006606,
    			'nome' => 'Ponta Porã',
    			'UF' => 'MS',
    		),
    		5165 => 
    		array (
    			'codigoIbge' => 5006903,
    			'nome' => 'Porto Murtinho',
    			'UF' => 'MS',
    		),
    		5166 => 
    		array (
    			'codigoIbge' => 5007109,
    			'nome' => 'Ribas do Rio Pardo',
    			'UF' => 'MS',
    		),
    		5167 => 
    		array (
    			'codigoIbge' => 5007208,
    			'nome' => 'Rio Brilhante',
    			'UF' => 'MS',
    		),
    		5168 => 
    		array (
    			'codigoIbge' => 5007307,
    			'nome' => 'Rio Negro',
    			'UF' => 'MS',
    		),
    		5169 => 
    		array (
    			'codigoIbge' => 5007406,
    			'nome' => 'Rio Verde de Mato Grosso',
    			'UF' => 'MS',
    		),
    		5170 => 
    		array (
    			'codigoIbge' => 5007505,
    			'nome' => 'Rochedo',
    			'UF' => 'MS',
    		),
    		5171 => 
    		array (
    			'codigoIbge' => 5007554,
    			'nome' => 'Santa Rita do Pardo',
    			'UF' => 'MS',
    		),
    		5172 => 
    		array (
    			'codigoIbge' => 5007695,
    			'nome' => 'São Gabriel do Oeste',
    			'UF' => 'MS',
    		),
    		5173 => 
    		array (
    			'codigoIbge' => 5007703,
    			'nome' => 'Sete Quedas',
    			'UF' => 'MS',
    		),
    		5174 => 
    		array (
    			'codigoIbge' => 5007802,
    			'nome' => 'Selvíria',
    			'UF' => 'MS',
    		),
    		5175 => 
    		array (
    			'codigoIbge' => 5007901,
    			'nome' => 'Sidrolândia',
    			'UF' => 'MS',
    		),
    		5176 => 
    		array (
    			'codigoIbge' => 5007935,
    			'nome' => 'Sonora',
    			'UF' => 'MS',
    		),
    		5177 => 
    		array (
    			'codigoIbge' => 5007950,
    			'nome' => 'Tacuru',
    			'UF' => 'MS',
    		),
    		5178 => 
    		array (
    			'codigoIbge' => 5007976,
    			'nome' => 'Taquarussu',
    			'UF' => 'MS',
    		),
    		5179 => 
    		array (
    			'codigoIbge' => 5008008,
    			'nome' => 'Terenos',
    			'UF' => 'MS',
    		),
    		5180 => 
    		array (
    			'codigoIbge' => 5008305,
    			'nome' => 'Três Lagoas',
    			'UF' => 'MS',
    		),
    		5181 => 
    		array (
    			'codigoIbge' => 5008404,
    			'nome' => 'Vicentina',
    			'UF' => 'MS',
    		),
    		5182 => 
    		array (
    			'codigoIbge' => 5100102,
    			'nome' => 'Acorizal',
    			'UF' => 'MT',
    		),
    		5183 => 
    		array (
    			'codigoIbge' => 5100201,
    			'nome' => 'Água Boa',
    			'UF' => 'MT',
    		),
    		5184 => 
    		array (
    			'codigoIbge' => 5100250,
    			'nome' => 'Alta Floresta',
    			'UF' => 'MT',
    		),
    		5185 => 
    		array (
    			'codigoIbge' => 5100300,
    			'nome' => 'Alto Araguaia',
    			'UF' => 'MT',
    		),
    		5186 => 
    		array (
    			'codigoIbge' => 5100359,
    			'nome' => 'Alto Boa Vista',
    			'UF' => 'MT',
    		),
    		5187 => 
    		array (
    			'codigoIbge' => 5100409,
    			'nome' => 'Alto Garças',
    			'UF' => 'MT',
    		),
    		5188 => 
    		array (
    			'codigoIbge' => 5100508,
    			'nome' => 'Alto Paraguai',
    			'UF' => 'MT',
    		),
    		5189 => 
    		array (
    			'codigoIbge' => 5100607,
    			'nome' => 'Alto Taquari',
    			'UF' => 'MT',
    		),
    		5190 => 
    		array (
    			'codigoIbge' => 5100805,
    			'nome' => 'Apiacás',
    			'UF' => 'MT',
    		),
    		5191 => 
    		array (
    			'codigoIbge' => 5101001,
    			'nome' => 'Araguaiana',
    			'UF' => 'MT',
    		),
    		5192 => 
    		array (
    			'codigoIbge' => 5101209,
    			'nome' => 'Araguainha',
    			'UF' => 'MT',
    		),
    		5193 => 
    		array (
    			'codigoIbge' => 5101258,
    			'nome' => 'Araputanga',
    			'UF' => 'MT',
    		),
    		5194 => 
    		array (
    			'codigoIbge' => 5101308,
    			'nome' => 'Arenápolis',
    			'UF' => 'MT',
    		),
    		5195 => 
    		array (
    			'codigoIbge' => 5101407,
    			'nome' => 'Aripuanã',
    			'UF' => 'MT',
    		),
    		5196 => 
    		array (
    			'codigoIbge' => 5101605,
    			'nome' => 'Barão de Melgaço',
    			'UF' => 'MT',
    		),
    		5197 => 
    		array (
    			'codigoIbge' => 5101704,
    			'nome' => 'Barra do Bugres',
    			'UF' => 'MT',
    		),
    		5198 => 
    		array (
    			'codigoIbge' => 5101803,
    			'nome' => 'Barra do Garças',
    			'UF' => 'MT',
    		),
    		5199 => 
    		array (
    			'codigoIbge' => 5101852,
    			'nome' => 'Bom Jesus do Araguaia',
    			'UF' => 'MT',
    		),
    		5200 => 
    		array (
    			'codigoIbge' => 5101902,
    			'nome' => 'Brasnorte',
    			'UF' => 'MT',
    		),
    		5201 => 
    		array (
    			'codigoIbge' => 5102504,
    			'nome' => 'Cáceres',
    			'UF' => 'MT',
    		),
    		5202 => 
    		array (
    			'codigoIbge' => 5102603,
    			'nome' => 'Campinápolis',
    			'UF' => 'MT',
    		),
    		5203 => 
    		array (
    			'codigoIbge' => 5102637,
    			'nome' => 'Campo Novo do Parecis',
    			'UF' => 'MT',
    		),
    		5204 => 
    		array (
    			'codigoIbge' => 5102678,
    			'nome' => 'Campo Verde',
    			'UF' => 'MT',
    		),
    		5205 => 
    		array (
    			'codigoIbge' => 5102686,
    			'nome' => 'Campos de Júlio',
    			'UF' => 'MT',
    		),
    		5206 => 
    		array (
    			'codigoIbge' => 5102694,
    			'nome' => 'Canabrava do Norte',
    			'UF' => 'MT',
    		),
    		5207 => 
    		array (
    			'codigoIbge' => 5102702,
    			'nome' => 'Canarana',
    			'UF' => 'MT',
    		),
    		5208 => 
    		array (
    			'codigoIbge' => 5102793,
    			'nome' => 'Carlinda',
    			'UF' => 'MT',
    		),
    		5209 => 
    		array (
    			'codigoIbge' => 5102850,
    			'nome' => 'Castanheira',
    			'UF' => 'MT',
    		),
    		5210 => 
    		array (
    			'codigoIbge' => 5103007,
    			'nome' => 'Chapada dos Guimarães',
    			'UF' => 'MT',
    		),
    		5211 => 
    		array (
    			'codigoIbge' => 5103056,
    			'nome' => 'Cláudia',
    			'UF' => 'MT',
    		),
    		5212 => 
    		array (
    			'codigoIbge' => 5103106,
    			'nome' => 'Cocalinho',
    			'UF' => 'MT',
    		),
    		5213 => 
    		array (
    			'codigoIbge' => 5103205,
    			'nome' => 'Colíder',
    			'UF' => 'MT',
    		),
    		5214 => 
    		array (
    			'codigoIbge' => 5103254,
    			'nome' => 'Colniza',
    			'UF' => 'MT',
    		),
    		5215 => 
    		array (
    			'codigoIbge' => 5103304,
    			'nome' => 'Comodoro',
    			'UF' => 'MT',
    		),
    		5216 => 
    		array (
    			'codigoIbge' => 5103353,
    			'nome' => 'Confresa',
    			'UF' => 'MT',
    		),
    		5217 => 
    		array (
    			'codigoIbge' => 5103361,
    			'nome' => 'Conquista D\'Oeste',
    			'UF' => 'MT',
    		),
    		5218 => 
    		array (
    			'codigoIbge' => 5103379,
    			'nome' => 'Cotriguaçu',
    			'UF' => 'MT',
    		),
    		5219 => 
    		array (
    			'codigoIbge' => 5103403,
    			'nome' => 'Cuiabá',
    			'UF' => 'MT',
    		),
    		5220 => 
    		array (
    			'codigoIbge' => 5103437,
    			'nome' => 'Curvelândia',
    			'UF' => 'MT',
    		),
    		5221 => 
    		array (
    			'codigoIbge' => 5103452,
    			'nome' => 'Denise',
    			'UF' => 'MT',
    		),
    		5222 => 
    		array (
    			'codigoIbge' => 5103502,
    			'nome' => 'Diamantino',
    			'UF' => 'MT',
    		),
    		5223 => 
    		array (
    			'codigoIbge' => 5103601,
    			'nome' => 'Dom Aquino',
    			'UF' => 'MT',
    		),
    		5224 => 
    		array (
    			'codigoIbge' => 5103700,
    			'nome' => 'Feliz Natal',
    			'UF' => 'MT',
    		),
    		5225 => 
    		array (
    			'codigoIbge' => 5103809,
    			'nome' => 'Figueirópolis D\'Oeste',
    			'UF' => 'MT',
    		),
    		5226 => 
    		array (
    			'codigoIbge' => 5103858,
    			'nome' => 'Gaúcha do Norte',
    			'UF' => 'MT',
    		),
    		5227 => 
    		array (
    			'codigoIbge' => 5103908,
    			'nome' => 'General Carneiro',
    			'UF' => 'MT',
    		),
    		5228 => 
    		array (
    			'codigoIbge' => 5103957,
    			'nome' => 'Glória D\'Oeste',
    			'UF' => 'MT',
    		),
    		5229 => 
    		array (
    			'codigoIbge' => 5104104,
    			'nome' => 'Guarantã do Norte',
    			'UF' => 'MT',
    		),
    		5230 => 
    		array (
    			'codigoIbge' => 5104203,
    			'nome' => 'Guiratinga',
    			'UF' => 'MT',
    		),
    		5231 => 
    		array (
    			'codigoIbge' => 5104500,
    			'nome' => 'Indiavaí',
    			'UF' => 'MT',
    		),
    		5232 => 
    		array (
    			'codigoIbge' => 5104526,
    			'nome' => 'Ipiranga do Norte',
    			'UF' => 'MT',
    		),
    		5233 => 
    		array (
    			'codigoIbge' => 5104542,
    			'nome' => 'Itanhangá',
    			'UF' => 'MT',
    		),
    		5234 => 
    		array (
    			'codigoIbge' => 5104559,
    			'nome' => 'Itaúba',
    			'UF' => 'MT',
    		),
    		5235 => 
    		array (
    			'codigoIbge' => 5104609,
    			'nome' => 'Itiquira',
    			'UF' => 'MT',
    		),
    		5236 => 
    		array (
    			'codigoIbge' => 5104807,
    			'nome' => 'Jaciara',
    			'UF' => 'MT',
    		),
    		5237 => 
    		array (
    			'codigoIbge' => 5104906,
    			'nome' => 'Jangada',
    			'UF' => 'MT',
    		),
    		5238 => 
    		array (
    			'codigoIbge' => 5105002,
    			'nome' => 'Jauru',
    			'UF' => 'MT',
    		),
    		5239 => 
    		array (
    			'codigoIbge' => 5105101,
    			'nome' => 'Juara',
    			'UF' => 'MT',
    		),
    		5240 => 
    		array (
    			'codigoIbge' => 5105150,
    			'nome' => 'Juína',
    			'UF' => 'MT',
    		),
    		5241 => 
    		array (
    			'codigoIbge' => 5105176,
    			'nome' => 'Juruena',
    			'UF' => 'MT',
    		),
    		5242 => 
    		array (
    			'codigoIbge' => 5105200,
    			'nome' => 'Juscimeira',
    			'UF' => 'MT',
    		),
    		5243 => 
    		array (
    			'codigoIbge' => 5105234,
    			'nome' => 'Lambari D\'Oeste',
    			'UF' => 'MT',
    		),
    		5244 => 
    		array (
    			'codigoIbge' => 5105259,
    			'nome' => 'Lucas do Rio Verde',
    			'UF' => 'MT',
    		),
    		5245 => 
    		array (
    			'codigoIbge' => 5105309,
    			'nome' => 'Luciara',
    			'UF' => 'MT',
    		),
    		5246 => 
    		array (
    			'codigoIbge' => 5105507,
    			'nome' => 'Vila Bela da Santíssima Trindade',
    			'UF' => 'MT',
    		),
    		5247 => 
    		array (
    			'codigoIbge' => 5105580,
    			'nome' => 'Marcelândia',
    			'UF' => 'MT',
    		),
    		5248 => 
    		array (
    			'codigoIbge' => 5105606,
    			'nome' => 'Matupá',
    			'UF' => 'MT',
    		),
    		5249 => 
    		array (
    			'codigoIbge' => 5105622,
    			'nome' => 'Mirassol d\'Oeste',
    			'UF' => 'MT',
    		),
    		5250 => 
    		array (
    			'codigoIbge' => 5105903,
    			'nome' => 'Nobres',
    			'UF' => 'MT',
    		),
    		5251 => 
    		array (
    			'codigoIbge' => 5106000,
    			'nome' => 'Nortelândia',
    			'UF' => 'MT',
    		),
    		5252 => 
    		array (
    			'codigoIbge' => 5106109,
    			'nome' => 'Nossa Senhora do Livramento',
    			'UF' => 'MT',
    		),
    		5253 => 
    		array (
    			'codigoIbge' => 5106158,
    			'nome' => 'Nova Bandeirantes',
    			'UF' => 'MT',
    		),
    		5254 => 
    		array (
    			'codigoIbge' => 5106174,
    			'nome' => 'Nova Nazaré',
    			'UF' => 'MT',
    		),
    		5255 => 
    		array (
    			'codigoIbge' => 5106182,
    			'nome' => 'Nova Lacerda',
    			'UF' => 'MT',
    		),
    		5256 => 
    		array (
    			'codigoIbge' => 5106190,
    			'nome' => 'Nova Santa Helena',
    			'UF' => 'MT',
    		),
    		5257 => 
    		array (
    			'codigoIbge' => 5106208,
    			'nome' => 'Nova Brasilândia',
    			'UF' => 'MT',
    		),
    		5258 => 
    		array (
    			'codigoIbge' => 5106216,
    			'nome' => 'Nova Canaã do Norte',
    			'UF' => 'MT',
    		),
    		5259 => 
    		array (
    			'codigoIbge' => 5106224,
    			'nome' => 'Nova Mutum',
    			'UF' => 'MT',
    		),
    		5260 => 
    		array (
    			'codigoIbge' => 5106232,
    			'nome' => 'Nova Olímpia',
    			'UF' => 'MT',
    		),
    		5261 => 
    		array (
    			'codigoIbge' => 5106240,
    			'nome' => 'Nova Ubiratã',
    			'UF' => 'MT',
    		),
    		5262 => 
    		array (
    			'codigoIbge' => 5106257,
    			'nome' => 'Nova Xavantina',
    			'UF' => 'MT',
    		),
    		5263 => 
    		array (
    			'codigoIbge' => 5106265,
    			'nome' => 'Novo Mundo',
    			'UF' => 'MT',
    		),
    		5264 => 
    		array (
    			'codigoIbge' => 5106273,
    			'nome' => 'Novo Horizonte do Norte',
    			'UF' => 'MT',
    		),
    		5265 => 
    		array (
    			'codigoIbge' => 5106281,
    			'nome' => 'Novo São Joaquim',
    			'UF' => 'MT',
    		),
    		5266 => 
    		array (
    			'codigoIbge' => 5106299,
    			'nome' => 'Paranaíta',
    			'UF' => 'MT',
    		),
    		5267 => 
    		array (
    			'codigoIbge' => 5106307,
    			'nome' => 'Paranatinga',
    			'UF' => 'MT',
    		),
    		5268 => 
    		array (
    			'codigoIbge' => 5106315,
    			'nome' => 'Novo Santo Antônio',
    			'UF' => 'MT',
    		),
    		5269 => 
    		array (
    			'codigoIbge' => 5106372,
    			'nome' => 'Pedra Preta',
    			'UF' => 'MT',
    		),
    		5270 => 
    		array (
    			'codigoIbge' => 5106422,
    			'nome' => 'Peixoto de Azevedo',
    			'UF' => 'MT',
    		),
    		5271 => 
    		array (
    			'codigoIbge' => 5106455,
    			'nome' => 'Planalto da Serra',
    			'UF' => 'MT',
    		),
    		5272 => 
    		array (
    			'codigoIbge' => 5106505,
    			'nome' => 'Poconé',
    			'UF' => 'MT',
    		),
    		5273 => 
    		array (
    			'codigoIbge' => 5106653,
    			'nome' => 'Pontal do Araguaia',
    			'UF' => 'MT',
    		),
    		5274 => 
    		array (
    			'codigoIbge' => 5106703,
    			'nome' => 'Ponte Branca',
    			'UF' => 'MT',
    		),
    		5275 => 
    		array (
    			'codigoIbge' => 5106752,
    			'nome' => 'Pontes e Lacerda',
    			'UF' => 'MT',
    		),
    		5276 => 
    		array (
    			'codigoIbge' => 5106778,
    			'nome' => 'Porto Alegre do Norte',
    			'UF' => 'MT',
    		),
    		5277 => 
    		array (
    			'codigoIbge' => 5106802,
    			'nome' => 'Porto dos Gaúchos',
    			'UF' => 'MT',
    		),
    		5278 => 
    		array (
    			'codigoIbge' => 5106828,
    			'nome' => 'Porto Esperidião',
    			'UF' => 'MT',
    		),
    		5279 => 
    		array (
    			'codigoIbge' => 5106851,
    			'nome' => 'Porto Estrela',
    			'UF' => 'MT',
    		),
    		5280 => 
    		array (
    			'codigoIbge' => 5107008,
    			'nome' => 'Poxoréu',
    			'UF' => 'MT',
    		),
    		5281 => 
    		array (
    			'codigoIbge' => 5107040,
    			'nome' => 'Primavera do Leste',
    			'UF' => 'MT',
    		),
    		5282 => 
    		array (
    			'codigoIbge' => 5107065,
    			'nome' => 'Querência',
    			'UF' => 'MT',
    		),
    		5283 => 
    		array (
    			'codigoIbge' => 5107107,
    			'nome' => 'São José dos Quatro Marcos',
    			'UF' => 'MT',
    		),
    		5284 => 
    		array (
    			'codigoIbge' => 5107156,
    			'nome' => 'Reserva do Cabaçal',
    			'UF' => 'MT',
    		),
    		5285 => 
    		array (
    			'codigoIbge' => 5107180,
    			'nome' => 'Ribeirão Cascalheira',
    			'UF' => 'MT',
    		),
    		5286 => 
    		array (
    			'codigoIbge' => 5107198,
    			'nome' => 'Ribeirãozinho',
    			'UF' => 'MT',
    		),
    		5287 => 
    		array (
    			'codigoIbge' => 5107206,
    			'nome' => 'Rio Branco',
    			'UF' => 'MT',
    		),
    		5288 => 
    		array (
    			'codigoIbge' => 5107248,
    			'nome' => 'Santa Carmem',
    			'UF' => 'MT',
    		),
    		5289 => 
    		array (
    			'codigoIbge' => 5107263,
    			'nome' => 'Santo Afonso',
    			'UF' => 'MT',
    		),
    		5290 => 
    		array (
    			'codigoIbge' => 5107297,
    			'nome' => 'São José do Povo',
    			'UF' => 'MT',
    		),
    		5291 => 
    		array (
    			'codigoIbge' => 5107305,
    			'nome' => 'São José do Rio Claro',
    			'UF' => 'MT',
    		),
    		5292 => 
    		array (
    			'codigoIbge' => 5107354,
    			'nome' => 'São José do Xingu',
    			'UF' => 'MT',
    		),
    		5293 => 
    		array (
    			'codigoIbge' => 5107404,
    			'nome' => 'São Pedro da Cipa',
    			'UF' => 'MT',
    		),
    		5294 => 
    		array (
    			'codigoIbge' => 5107578,
    			'nome' => 'Rondolândia',
    			'UF' => 'MT',
    		),
    		5295 => 
    		array (
    			'codigoIbge' => 5107602,
    			'nome' => 'Rondonópolis',
    			'UF' => 'MT',
    		),
    		5296 => 
    		array (
    			'codigoIbge' => 5107701,
    			'nome' => 'Rosário Oeste',
    			'UF' => 'MT',
    		),
    		5297 => 
    		array (
    			'codigoIbge' => 5107743,
    			'nome' => 'Santa Cruz do Xingu',
    			'UF' => 'MT',
    		),
    		5298 => 
    		array (
    			'codigoIbge' => 5107750,
    			'nome' => 'Salto do Céu',
    			'UF' => 'MT',
    		),
    		5299 => 
    		array (
    			'codigoIbge' => 5107768,
    			'nome' => 'Santa Rita do Trivelato',
    			'UF' => 'MT',
    		),
    		5300 => 
    		array (
    			'codigoIbge' => 5107776,
    			'nome' => 'Santa Terezinha',
    			'UF' => 'MT',
    		),
    		5301 => 
    		array (
    			'codigoIbge' => 5107792,
    			'nome' => 'Santo Antônio do Leste',
    			'UF' => 'MT',
    		),
    		5302 => 
    		array (
    			'codigoIbge' => 5107800,
    			'nome' => 'Santo Antônio do Leverger',
    			'UF' => 'MT',
    		),
    		5303 => 
    		array (
    			'codigoIbge' => 5107859,
    			'nome' => 'São Félix do Araguaia',
    			'UF' => 'MT',
    		),
    		5304 => 
    		array (
    			'codigoIbge' => 5107875,
    			'nome' => 'Sapezal',
    			'UF' => 'MT',
    		),
    		5305 => 
    		array (
    			'codigoIbge' => 5107883,
    			'nome' => 'Serra Nova Dourada',
    			'UF' => 'MT',
    		),
    		5306 => 
    		array (
    			'codigoIbge' => 5107909,
    			'nome' => 'Sinop',
    			'UF' => 'MT',
    		),
    		5307 => 
    		array (
    			'codigoIbge' => 5107925,
    			'nome' => 'Sorriso',
    			'UF' => 'MT',
    		),
    		5308 => 
    		array (
    			'codigoIbge' => 5107941,
    			'nome' => 'Tabaporã',
    			'UF' => 'MT',
    		),
    		5309 => 
    		array (
    			'codigoIbge' => 5107958,
    			'nome' => 'Tangará da Serra',
    			'UF' => 'MT',
    		),
    		5310 => 
    		array (
    			'codigoIbge' => 5108006,
    			'nome' => 'Tapurah',
    			'UF' => 'MT',
    		),
    		5311 => 
    		array (
    			'codigoIbge' => 5108055,
    			'nome' => 'Terra Nova do Norte',
    			'UF' => 'MT',
    		),
    		5312 => 
    		array (
    			'codigoIbge' => 5108105,
    			'nome' => 'Tesouro',
    			'UF' => 'MT',
    		),
    		5313 => 
    		array (
    			'codigoIbge' => 5108204,
    			'nome' => 'Torixoréu',
    			'UF' => 'MT',
    		),
    		5314 => 
    		array (
    			'codigoIbge' => 5108303,
    			'nome' => 'União do Sul',
    			'UF' => 'MT',
    		),
    		5315 => 
    		array (
    			'codigoIbge' => 5108352,
    			'nome' => 'Vale de São Domingos',
    			'UF' => 'MT',
    		),
    		5316 => 
    		array (
    			'codigoIbge' => 5108402,
    			'nome' => 'Várzea Grande',
    			'UF' => 'MT',
    		),
    		5317 => 
    		array (
    			'codigoIbge' => 5108501,
    			'nome' => 'Vera',
    			'UF' => 'MT',
    		),
    		5318 => 
    		array (
    			'codigoIbge' => 5108600,
    			'nome' => 'Vila Rica',
    			'UF' => 'MT',
    		),
    		5319 => 
    		array (
    			'codigoIbge' => 5108808,
    			'nome' => 'Nova Guarita',
    			'UF' => 'MT',
    		),
    		5320 => 
    		array (
    			'codigoIbge' => 5108857,
    			'nome' => 'Nova Marilândia',
    			'UF' => 'MT',
    		),
    		5321 => 
    		array (
    			'codigoIbge' => 5108907,
    			'nome' => 'Nova Maringá',
    			'UF' => 'MT',
    		),
    		5322 => 
    		array (
    			'codigoIbge' => 5108956,
    			'nome' => 'Nova Monte Verde',
    			'UF' => 'MT',
    		),
    		5323 => 
    		array (
    			'codigoIbge' => 5200050,
    			'nome' => 'Abadia de Goiás',
    			'UF' => 'GO',
    		),
    		5324 => 
    		array (
    			'codigoIbge' => 5200100,
    			'nome' => 'Abadiânia',
    			'UF' => 'GO',
    		),
    		5325 => 
    		array (
    			'codigoIbge' => 5200134,
    			'nome' => 'Acreúna',
    			'UF' => 'GO',
    		),
    		5326 => 
    		array (
    			'codigoIbge' => 5200159,
    			'nome' => 'Adelândia',
    			'UF' => 'GO',
    		),
    		5327 => 
    		array (
    			'codigoIbge' => 5200175,
    			'nome' => 'Água Fria de Goiás',
    			'UF' => 'GO',
    		),
    		5328 => 
    		array (
    			'codigoIbge' => 5200209,
    			'nome' => 'Água Limpa',
    			'UF' => 'GO',
    		),
    		5329 => 
    		array (
    			'codigoIbge' => 5200258,
    			'nome' => 'Águas Lindas de Goiás',
    			'UF' => 'GO',
    		),
    		5330 => 
    		array (
    			'codigoIbge' => 5200308,
    			'nome' => 'Alexânia',
    			'UF' => 'GO',
    		),
    		5331 => 
    		array (
    			'codigoIbge' => 5200506,
    			'nome' => 'Aloândia',
    			'UF' => 'GO',
    		),
    		5332 => 
    		array (
    			'codigoIbge' => 5200555,
    			'nome' => 'Alto Horizonte',
    			'UF' => 'GO',
    		),
    		5333 => 
    		array (
    			'codigoIbge' => 5200605,
    			'nome' => 'Alto Paraíso de Goiás',
    			'UF' => 'GO',
    		),
    		5334 => 
    		array (
    			'codigoIbge' => 5200803,
    			'nome' => 'Alvorada do Norte',
    			'UF' => 'GO',
    		),
    		5335 => 
    		array (
    			'codigoIbge' => 5200829,
    			'nome' => 'Amaralina',
    			'UF' => 'GO',
    		),
    		5336 => 
    		array (
    			'codigoIbge' => 5200852,
    			'nome' => 'Americano do Brasil',
    			'UF' => 'GO',
    		),
    		5337 => 
    		array (
    			'codigoIbge' => 5200902,
    			'nome' => 'Amorinópolis',
    			'UF' => 'GO',
    		),
    		5338 => 
    		array (
    			'codigoIbge' => 5201108,
    			'nome' => 'Anápolis',
    			'UF' => 'GO',
    		),
    		5339 => 
    		array (
    			'codigoIbge' => 5201207,
    			'nome' => 'Anhanguera',
    			'UF' => 'GO',
    		),
    		5340 => 
    		array (
    			'codigoIbge' => 5201306,
    			'nome' => 'Anicuns',
    			'UF' => 'GO',
    		),
    		5341 => 
    		array (
    			'codigoIbge' => 5201405,
    			'nome' => 'Aparecida de Goiânia',
    			'UF' => 'GO',
    		),
    		5342 => 
    		array (
    			'codigoIbge' => 5201454,
    			'nome' => 'Aparecida do Rio Doce',
    			'UF' => 'GO',
    		),
    		5343 => 
    		array (
    			'codigoIbge' => 5201504,
    			'nome' => 'Aporé',
    			'UF' => 'GO',
    		),
    		5344 => 
    		array (
    			'codigoIbge' => 5201603,
    			'nome' => 'Araçu',
    			'UF' => 'GO',
    		),
    		5345 => 
    		array (
    			'codigoIbge' => 5201702,
    			'nome' => 'Aragarças',
    			'UF' => 'GO',
    		),
    		5346 => 
    		array (
    			'codigoIbge' => 5201801,
    			'nome' => 'Aragoiânia',
    			'UF' => 'GO',
    		),
    		5347 => 
    		array (
    			'codigoIbge' => 5202155,
    			'nome' => 'Araguapaz',
    			'UF' => 'GO',
    		),
    		5348 => 
    		array (
    			'codigoIbge' => 5202353,
    			'nome' => 'Arenópolis',
    			'UF' => 'GO',
    		),
    		5349 => 
    		array (
    			'codigoIbge' => 5202502,
    			'nome' => 'Aruanã',
    			'UF' => 'GO',
    		),
    		5350 => 
    		array (
    			'codigoIbge' => 5202601,
    			'nome' => 'Aurilândia',
    			'UF' => 'GO',
    		),
    		5351 => 
    		array (
    			'codigoIbge' => 5202809,
    			'nome' => 'Avelinópolis',
    			'UF' => 'GO',
    		),
    		5352 => 
    		array (
    			'codigoIbge' => 5203104,
    			'nome' => 'Baliza',
    			'UF' => 'GO',
    		),
    		5353 => 
    		array (
    			'codigoIbge' => 5203203,
    			'nome' => 'Barro Alto',
    			'UF' => 'GO',
    		),
    		5354 => 
    		array (
    			'codigoIbge' => 5203302,
    			'nome' => 'Bela Vista de Goiás',
    			'UF' => 'GO',
    		),
    		5355 => 
    		array (
    			'codigoIbge' => 5203401,
    			'nome' => 'Bom Jardim de Goiás',
    			'UF' => 'GO',
    		),
    		5356 => 
    		array (
    			'codigoIbge' => 5203500,
    			'nome' => 'Bom Jesus de Goiás',
    			'UF' => 'GO',
    		),
    		5357 => 
    		array (
    			'codigoIbge' => 5203559,
    			'nome' => 'Bonfinópolis',
    			'UF' => 'GO',
    		),
    		5358 => 
    		array (
    			'codigoIbge' => 5203575,
    			'nome' => 'Bonópolis',
    			'UF' => 'GO',
    		),
    		5359 => 
    		array (
    			'codigoIbge' => 5203609,
    			'nome' => 'Brazabrantes',
    			'UF' => 'GO',
    		),
    		5360 => 
    		array (
    			'codigoIbge' => 5203807,
    			'nome' => 'Britânia',
    			'UF' => 'GO',
    		),
    		5361 => 
    		array (
    			'codigoIbge' => 5203906,
    			'nome' => 'Buriti Alegre',
    			'UF' => 'GO',
    		),
    		5362 => 
    		array (
    			'codigoIbge' => 5203939,
    			'nome' => 'Buriti de Goiás',
    			'UF' => 'GO',
    		),
    		5363 => 
    		array (
    			'codigoIbge' => 5203962,
    			'nome' => 'Buritinópolis',
    			'UF' => 'GO',
    		),
    		5364 => 
    		array (
    			'codigoIbge' => 5204003,
    			'nome' => 'Cabeceiras',
    			'UF' => 'GO',
    		),
    		5365 => 
    		array (
    			'codigoIbge' => 5204102,
    			'nome' => 'Cachoeira Alta',
    			'UF' => 'GO',
    		),
    		5366 => 
    		array (
    			'codigoIbge' => 5204201,
    			'nome' => 'Cachoeira de Goiás',
    			'UF' => 'GO',
    		),
    		5367 => 
    		array (
    			'codigoIbge' => 5204250,
    			'nome' => 'Cachoeira Dourada',
    			'UF' => 'GO',
    		),
    		5368 => 
    		array (
    			'codigoIbge' => 5204300,
    			'nome' => 'Caçu',
    			'UF' => 'GO',
    		),
    		5369 => 
    		array (
    			'codigoIbge' => 5204409,
    			'nome' => 'Caiapônia',
    			'UF' => 'GO',
    		),
    		5370 => 
    		array (
    			'codigoIbge' => 5204508,
    			'nome' => 'Caldas Novas',
    			'UF' => 'GO',
    		),
    		5371 => 
    		array (
    			'codigoIbge' => 5204557,
    			'nome' => 'Caldazinha',
    			'UF' => 'GO',
    		),
    		5372 => 
    		array (
    			'codigoIbge' => 5204607,
    			'nome' => 'Campestre de Goiás',
    			'UF' => 'GO',
    		),
    		5373 => 
    		array (
    			'codigoIbge' => 5204656,
    			'nome' => 'Campinaçu',
    			'UF' => 'GO',
    		),
    		5374 => 
    		array (
    			'codigoIbge' => 5204706,
    			'nome' => 'Campinorte',
    			'UF' => 'GO',
    		),
    		5375 => 
    		array (
    			'codigoIbge' => 5204805,
    			'nome' => 'Campo Alegre de Goiás',
    			'UF' => 'GO',
    		),
    		5376 => 
    		array (
    			'codigoIbge' => 5204854,
    			'nome' => 'Campo Limpo de Goiás',
    			'UF' => 'GO',
    		),
    		5377 => 
    		array (
    			'codigoIbge' => 5204904,
    			'nome' => 'Campos Belos',
    			'UF' => 'GO',
    		),
    		5378 => 
    		array (
    			'codigoIbge' => 5204953,
    			'nome' => 'Campos Verdes',
    			'UF' => 'GO',
    		),
    		5379 => 
    		array (
    			'codigoIbge' => 5205000,
    			'nome' => 'Carmo do Rio Verde',
    			'UF' => 'GO',
    		),
    		5380 => 
    		array (
    			'codigoIbge' => 5205059,
    			'nome' => 'Castelândia',
    			'UF' => 'GO',
    		),
    		5381 => 
    		array (
    			'codigoIbge' => 5205109,
    			'nome' => 'Catalão',
    			'UF' => 'GO',
    		),
    		5382 => 
    		array (
    			'codigoIbge' => 5205208,
    			'nome' => 'Caturaí',
    			'UF' => 'GO',
    		),
    		5383 => 
    		array (
    			'codigoIbge' => 5205307,
    			'nome' => 'Cavalcante',
    			'UF' => 'GO',
    		),
    		5384 => 
    		array (
    			'codigoIbge' => 5205406,
    			'nome' => 'Ceres',
    			'UF' => 'GO',
    		),
    		5385 => 
    		array (
    			'codigoIbge' => 5205455,
    			'nome' => 'Cezarina',
    			'UF' => 'GO',
    		),
    		5386 => 
    		array (
    			'codigoIbge' => 5205471,
    			'nome' => 'Chapadão do Céu',
    			'UF' => 'GO',
    		),
    		5387 => 
    		array (
    			'codigoIbge' => 5205497,
    			'nome' => 'Cidade Ocidental',
    			'UF' => 'GO',
    		),
    		5388 => 
    		array (
    			'codigoIbge' => 5205513,
    			'nome' => 'Cocalzinho de Goiás',
    			'UF' => 'GO',
    		),
    		5389 => 
    		array (
    			'codigoIbge' => 5205521,
    			'nome' => 'Colinas do Sul',
    			'UF' => 'GO',
    		),
    		5390 => 
    		array (
    			'codigoIbge' => 5205703,
    			'nome' => 'Córrego do Ouro',
    			'UF' => 'GO',
    		),
    		5391 => 
    		array (
    			'codigoIbge' => 5205802,
    			'nome' => 'Corumbá de Goiás',
    			'UF' => 'GO',
    		),
    		5392 => 
    		array (
    			'codigoIbge' => 5205901,
    			'nome' => 'Corumbaíba',
    			'UF' => 'GO',
    		),
    		5393 => 
    		array (
    			'codigoIbge' => 5206206,
    			'nome' => 'Cristalina',
    			'UF' => 'GO',
    		),
    		5394 => 
    		array (
    			'codigoIbge' => 5206305,
    			'nome' => 'Cristianópolis',
    			'UF' => 'GO',
    		),
    		5395 => 
    		array (
    			'codigoIbge' => 5206404,
    			'nome' => 'Crixás',
    			'UF' => 'GO',
    		),
    		5396 => 
    		array (
    			'codigoIbge' => 5206503,
    			'nome' => 'Cromínia',
    			'UF' => 'GO',
    		),
    		5397 => 
    		array (
    			'codigoIbge' => 5206602,
    			'nome' => 'Cumari',
    			'UF' => 'GO',
    		),
    		5398 => 
    		array (
    			'codigoIbge' => 5206701,
    			'nome' => 'Damianópolis',
    			'UF' => 'GO',
    		),
    		5399 => 
    		array (
    			'codigoIbge' => 5206800,
    			'nome' => 'Damolândia',
    			'UF' => 'GO',
    		),
    		5400 => 
    		array (
    			'codigoIbge' => 5206909,
    			'nome' => 'Davinópolis',
    			'UF' => 'GO',
    		),
    		5401 => 
    		array (
    			'codigoIbge' => 5207105,
    			'nome' => 'Diorama',
    			'UF' => 'GO',
    		),
    		5402 => 
    		array (
    			'codigoIbge' => 5207253,
    			'nome' => 'Doverlândia',
    			'UF' => 'GO',
    		),
    		5403 => 
    		array (
    			'codigoIbge' => 5207352,
    			'nome' => 'Edealina',
    			'UF' => 'GO',
    		),
    		5404 => 
    		array (
    			'codigoIbge' => 5207402,
    			'nome' => 'Edéia',
    			'UF' => 'GO',
    		),
    		5405 => 
    		array (
    			'codigoIbge' => 5207501,
    			'nome' => 'Estrela do Norte',
    			'UF' => 'GO',
    		),
    		5406 => 
    		array (
    			'codigoIbge' => 5207535,
    			'nome' => 'Faina',
    			'UF' => 'GO',
    		),
    		5407 => 
    		array (
    			'codigoIbge' => 5207600,
    			'nome' => 'Fazenda Nova',
    			'UF' => 'GO',
    		),
    		5408 => 
    		array (
    			'codigoIbge' => 5207808,
    			'nome' => 'Firminópolis',
    			'UF' => 'GO',
    		),
    		5409 => 
    		array (
    			'codigoIbge' => 5207907,
    			'nome' => 'Flores de Goiás',
    			'UF' => 'GO',
    		),
    		5410 => 
    		array (
    			'codigoIbge' => 5208004,
    			'nome' => 'Formosa',
    			'UF' => 'GO',
    		),
    		5411 => 
    		array (
    			'codigoIbge' => 5208103,
    			'nome' => 'Formoso',
    			'UF' => 'GO',
    		),
    		5412 => 
    		array (
    			'codigoIbge' => 5208152,
    			'nome' => 'Gameleira de Goiás',
    			'UF' => 'GO',
    		),
    		5413 => 
    		array (
    			'codigoIbge' => 5208301,
    			'nome' => 'Divinópolis de Goiás',
    			'UF' => 'GO',
    		),
    		5414 => 
    		array (
    			'codigoIbge' => 5208400,
    			'nome' => 'Goianápolis',
    			'UF' => 'GO',
    		),
    		5415 => 
    		array (
    			'codigoIbge' => 5208509,
    			'nome' => 'Goiandira',
    			'UF' => 'GO',
    		),
    		5416 => 
    		array (
    			'codigoIbge' => 5208608,
    			'nome' => 'Goianésia',
    			'UF' => 'GO',
    		),
    		5417 => 
    		array (
    			'codigoIbge' => 5208707,
    			'nome' => 'Goiânia',
    			'UF' => 'GO',
    		),
    		5418 => 
    		array (
    			'codigoIbge' => 5208806,
    			'nome' => 'Goianira',
    			'UF' => 'GO',
    		),
    		5419 => 
    		array (
    			'codigoIbge' => 5208905,
    			'nome' => 'Goiás',
    			'UF' => 'GO',
    		),
    		5420 => 
    		array (
    			'codigoIbge' => 5209101,
    			'nome' => 'Goiatuba',
    			'UF' => 'GO',
    		),
    		5421 => 
    		array (
    			'codigoIbge' => 5209150,
    			'nome' => 'Gouvelândia',
    			'UF' => 'GO',
    		),
    		5422 => 
    		array (
    			'codigoIbge' => 5209200,
    			'nome' => 'Guapó',
    			'UF' => 'GO',
    		),
    		5423 => 
    		array (
    			'codigoIbge' => 5209291,
    			'nome' => 'Guaraíta',
    			'UF' => 'GO',
    		),
    		5424 => 
    		array (
    			'codigoIbge' => 5209408,
    			'nome' => 'Guarani de Goiás',
    			'UF' => 'GO',
    		),
    		5425 => 
    		array (
    			'codigoIbge' => 5209457,
    			'nome' => 'Guarinos',
    			'UF' => 'GO',
    		),
    		5426 => 
    		array (
    			'codigoIbge' => 5209606,
    			'nome' => 'Heitoraí',
    			'UF' => 'GO',
    		),
    		5427 => 
    		array (
    			'codigoIbge' => 5209705,
    			'nome' => 'Hidrolândia',
    			'UF' => 'GO',
    		),
    		5428 => 
    		array (
    			'codigoIbge' => 5209804,
    			'nome' => 'Hidrolina',
    			'UF' => 'GO',
    		),
    		5429 => 
    		array (
    			'codigoIbge' => 5209903,
    			'nome' => 'Iaciara',
    			'UF' => 'GO',
    		),
    		5430 => 
    		array (
    			'codigoIbge' => 5209937,
    			'nome' => 'Inaciolândia',
    			'UF' => 'GO',
    		),
    		5431 => 
    		array (
    			'codigoIbge' => 5209952,
    			'nome' => 'Indiara',
    			'UF' => 'GO',
    		),
    		5432 => 
    		array (
    			'codigoIbge' => 5210000,
    			'nome' => 'Inhumas',
    			'UF' => 'GO',
    		),
    		5433 => 
    		array (
    			'codigoIbge' => 5210109,
    			'nome' => 'Ipameri',
    			'UF' => 'GO',
    		),
    		5434 => 
    		array (
    			'codigoIbge' => 5210158,
    			'nome' => 'Ipiranga de Goiás',
    			'UF' => 'GO',
    		),
    		5435 => 
    		array (
    			'codigoIbge' => 5210208,
    			'nome' => 'Iporá',
    			'UF' => 'GO',
    		),
    		5436 => 
    		array (
    			'codigoIbge' => 5210307,
    			'nome' => 'Israelândia',
    			'UF' => 'GO',
    		),
    		5437 => 
    		array (
    			'codigoIbge' => 5210406,
    			'nome' => 'Itaberaí',
    			'UF' => 'GO',
    		),
    		5438 => 
    		array (
    			'codigoIbge' => 5210562,
    			'nome' => 'Itaguari',
    			'UF' => 'GO',
    		),
    		5439 => 
    		array (
    			'codigoIbge' => 5210604,
    			'nome' => 'Itaguaru',
    			'UF' => 'GO',
    		),
    		5440 => 
    		array (
    			'codigoIbge' => 5210802,
    			'nome' => 'Itajá',
    			'UF' => 'GO',
    		),
    		5441 => 
    		array (
    			'codigoIbge' => 5210901,
    			'nome' => 'Itapaci',
    			'UF' => 'GO',
    		),
    		5442 => 
    		array (
    			'codigoIbge' => 5211008,
    			'nome' => 'Itapirapuã',
    			'UF' => 'GO',
    		),
    		5443 => 
    		array (
    			'codigoIbge' => 5211206,
    			'nome' => 'Itapuranga',
    			'UF' => 'GO',
    		),
    		5444 => 
    		array (
    			'codigoIbge' => 5211305,
    			'nome' => 'Itarumã',
    			'UF' => 'GO',
    		),
    		5445 => 
    		array (
    			'codigoIbge' => 5211404,
    			'nome' => 'Itauçu',
    			'UF' => 'GO',
    		),
    		5446 => 
    		array (
    			'codigoIbge' => 5211503,
    			'nome' => 'Itumbiara',
    			'UF' => 'GO',
    		),
    		5447 => 
    		array (
    			'codigoIbge' => 5211602,
    			'nome' => 'Ivolândia',
    			'UF' => 'GO',
    		),
    		5448 => 
    		array (
    			'codigoIbge' => 5211701,
    			'nome' => 'Jandaia',
    			'UF' => 'GO',
    		),
    		5449 => 
    		array (
    			'codigoIbge' => 5211800,
    			'nome' => 'Jaraguá',
    			'UF' => 'GO',
    		),
    		5450 => 
    		array (
    			'codigoIbge' => 5211909,
    			'nome' => 'Jataí',
    			'UF' => 'GO',
    		),
    		5451 => 
    		array (
    			'codigoIbge' => 5212006,
    			'nome' => 'Jaupaci',
    			'UF' => 'GO',
    		),
    		5452 => 
    		array (
    			'codigoIbge' => 5212055,
    			'nome' => 'Jesúpolis',
    			'UF' => 'GO',
    		),
    		5453 => 
    		array (
    			'codigoIbge' => 5212105,
    			'nome' => 'Joviânia',
    			'UF' => 'GO',
    		),
    		5454 => 
    		array (
    			'codigoIbge' => 5212204,
    			'nome' => 'Jussara',
    			'UF' => 'GO',
    		),
    		5455 => 
    		array (
    			'codigoIbge' => 5212253,
    			'nome' => 'Lagoa Santa',
    			'UF' => 'GO',
    		),
    		5456 => 
    		array (
    			'codigoIbge' => 5212303,
    			'nome' => 'Leopoldo de Bulhões',
    			'UF' => 'GO',
    		),
    		5457 => 
    		array (
    			'codigoIbge' => 5212501,
    			'nome' => 'Luziânia',
    			'UF' => 'GO',
    		),
    		5458 => 
    		array (
    			'codigoIbge' => 5212600,
    			'nome' => 'Mairipotaba',
    			'UF' => 'GO',
    		),
    		5459 => 
    		array (
    			'codigoIbge' => 5212709,
    			'nome' => 'Mambaí',
    			'UF' => 'GO',
    		),
    		5460 => 
    		array (
    			'codigoIbge' => 5212808,
    			'nome' => 'Mara Rosa',
    			'UF' => 'GO',
    		),
    		5461 => 
    		array (
    			'codigoIbge' => 5212907,
    			'nome' => 'Marzagão',
    			'UF' => 'GO',
    		),
    		5462 => 
    		array (
    			'codigoIbge' => 5212956,
    			'nome' => 'Matrinchã',
    			'UF' => 'GO',
    		),
    		5463 => 
    		array (
    			'codigoIbge' => 5213004,
    			'nome' => 'Maurilândia',
    			'UF' => 'GO',
    		),
    		5464 => 
    		array (
    			'codigoIbge' => 5213053,
    			'nome' => 'Mimoso de Goiás',
    			'UF' => 'GO',
    		),
    		5465 => 
    		array (
    			'codigoIbge' => 5213087,
    			'nome' => 'Minaçu',
    			'UF' => 'GO',
    		),
    		5466 => 
    		array (
    			'codigoIbge' => 5213103,
    			'nome' => 'Mineiros',
    			'UF' => 'GO',
    		),
    		5467 => 
    		array (
    			'codigoIbge' => 5213400,
    			'nome' => 'Moiporá',
    			'UF' => 'GO',
    		),
    		5468 => 
    		array (
    			'codigoIbge' => 5213509,
    			'nome' => 'Monte Alegre de Goiás',
    			'UF' => 'GO',
    		),
    		5469 => 
    		array (
    			'codigoIbge' => 5213707,
    			'nome' => 'Montes Claros de Goiás',
    			'UF' => 'GO',
    		),
    		5470 => 
    		array (
    			'codigoIbge' => 5213756,
    			'nome' => 'Montividiu',
    			'UF' => 'GO',
    		),
    		5471 => 
    		array (
    			'codigoIbge' => 5213772,
    			'nome' => 'Montividiu do Norte',
    			'UF' => 'GO',
    		),
    		5472 => 
    		array (
    			'codigoIbge' => 5213806,
    			'nome' => 'Morrinhos',
    			'UF' => 'GO',
    		),
    		5473 => 
    		array (
    			'codigoIbge' => 5213855,
    			'nome' => 'Morro Agudo de Goiás',
    			'UF' => 'GO',
    		),
    		5474 => 
    		array (
    			'codigoIbge' => 5213905,
    			'nome' => 'Mossâmedes',
    			'UF' => 'GO',
    		),
    		5475 => 
    		array (
    			'codigoIbge' => 5214002,
    			'nome' => 'Mozarlândia',
    			'UF' => 'GO',
    		),
    		5476 => 
    		array (
    			'codigoIbge' => 5214051,
    			'nome' => 'Mundo Novo',
    			'UF' => 'GO',
    		),
    		5477 => 
    		array (
    			'codigoIbge' => 5214101,
    			'nome' => 'Mutunópolis',
    			'UF' => 'GO',
    		),
    		5478 => 
    		array (
    			'codigoIbge' => 5214408,
    			'nome' => 'Nazário',
    			'UF' => 'GO',
    		),
    		5479 => 
    		array (
    			'codigoIbge' => 5214507,
    			'nome' => 'Nerópolis',
    			'UF' => 'GO',
    		),
    		5480 => 
    		array (
    			'codigoIbge' => 5214606,
    			'nome' => 'Niquelândia',
    			'UF' => 'GO',
    		),
    		5481 => 
    		array (
    			'codigoIbge' => 5214705,
    			'nome' => 'Nova América',
    			'UF' => 'GO',
    		),
    		5482 => 
    		array (
    			'codigoIbge' => 5214804,
    			'nome' => 'Nova Aurora',
    			'UF' => 'GO',
    		),
    		5483 => 
    		array (
    			'codigoIbge' => 5214838,
    			'nome' => 'Nova Crixás',
    			'UF' => 'GO',
    		),
    		5484 => 
    		array (
    			'codigoIbge' => 5214861,
    			'nome' => 'Nova Glória',
    			'UF' => 'GO',
    		),
    		5485 => 
    		array (
    			'codigoIbge' => 5214879,
    			'nome' => 'Nova Iguaçu de Goiás',
    			'UF' => 'GO',
    		),
    		5486 => 
    		array (
    			'codigoIbge' => 5214903,
    			'nome' => 'Nova Roma',
    			'UF' => 'GO',
    		),
    		5487 => 
    		array (
    			'codigoIbge' => 5215009,
    			'nome' => 'Nova Veneza',
    			'UF' => 'GO',
    		),
    		5488 => 
    		array (
    			'codigoIbge' => 5215207,
    			'nome' => 'Novo Brasil',
    			'UF' => 'GO',
    		),
    		5489 => 
    		array (
    			'codigoIbge' => 5215231,
    			'nome' => 'Novo Gama',
    			'UF' => 'GO',
    		),
    		5490 => 
    		array (
    			'codigoIbge' => 5215256,
    			'nome' => 'Novo Planalto',
    			'UF' => 'GO',
    		),
    		5491 => 
    		array (
    			'codigoIbge' => 5215306,
    			'nome' => 'Orizona',
    			'UF' => 'GO',
    		),
    		5492 => 
    		array (
    			'codigoIbge' => 5215405,
    			'nome' => 'Ouro Verde de Goiás',
    			'UF' => 'GO',
    		),
    		5493 => 
    		array (
    			'codigoIbge' => 5215504,
    			'nome' => 'Ouvidor',
    			'UF' => 'GO',
    		),
    		5494 => 
    		array (
    			'codigoIbge' => 5215603,
    			'nome' => 'Padre Bernardo',
    			'UF' => 'GO',
    		),
    		5495 => 
    		array (
    			'codigoIbge' => 5215652,
    			'nome' => 'Palestina de Goiás',
    			'UF' => 'GO',
    		),
    		5496 => 
    		array (
    			'codigoIbge' => 5215702,
    			'nome' => 'Palmeiras de Goiás',
    			'UF' => 'GO',
    		),
    		5497 => 
    		array (
    			'codigoIbge' => 5215801,
    			'nome' => 'Palmelo',
    			'UF' => 'GO',
    		),
    		5498 => 
    		array (
    			'codigoIbge' => 5215900,
    			'nome' => 'Palminópolis',
    			'UF' => 'GO',
    		),
    		5499 => 
    		array (
    			'codigoIbge' => 5216007,
    			'nome' => 'Panamá',
    			'UF' => 'GO',
    		),
    		5500 => 
    		array (
    			'codigoIbge' => 5216304,
    			'nome' => 'Paranaiguara',
    			'UF' => 'GO',
    		),
    		5501 => 
    		array (
    			'codigoIbge' => 5216403,
    			'nome' => 'Paraúna',
    			'UF' => 'GO',
    		),
    		5502 => 
    		array (
    			'codigoIbge' => 5216452,
    			'nome' => 'Perolândia',
    			'UF' => 'GO',
    		),
    		5503 => 
    		array (
    			'codigoIbge' => 5216809,
    			'nome' => 'Petrolina de Goiás',
    			'UF' => 'GO',
    		),
    		5504 => 
    		array (
    			'codigoIbge' => 5216908,
    			'nome' => 'Pilar de Goiás',
    			'UF' => 'GO',
    		),
    		5505 => 
    		array (
    			'codigoIbge' => 5217104,
    			'nome' => 'Piracanjuba',
    			'UF' => 'GO',
    		),
    		5506 => 
    		array (
    			'codigoIbge' => 5217203,
    			'nome' => 'Piranhas',
    			'UF' => 'GO',
    		),
    		5507 => 
    		array (
    			'codigoIbge' => 5217302,
    			'nome' => 'Pirenópolis',
    			'UF' => 'GO',
    		),
    		5508 => 
    		array (
    			'codigoIbge' => 5217401,
    			'nome' => 'Pires do Rio',
    			'UF' => 'GO',
    		),
    		5509 => 
    		array (
    			'codigoIbge' => 5217609,
    			'nome' => 'Planaltina',
    			'UF' => 'GO',
    		),
    		5510 => 
    		array (
    			'codigoIbge' => 5217708,
    			'nome' => 'Pontalina',
    			'UF' => 'GO',
    		),
    		5511 => 
    		array (
    			'codigoIbge' => 5218003,
    			'nome' => 'Porangatu',
    			'UF' => 'GO',
    		),
    		5512 => 
    		array (
    			'codigoIbge' => 5218052,
    			'nome' => 'Porteirão',
    			'UF' => 'GO',
    		),
    		5513 => 
    		array (
    			'codigoIbge' => 5218102,
    			'nome' => 'Portelândia',
    			'UF' => 'GO',
    		),
    		5514 => 
    		array (
    			'codigoIbge' => 5218300,
    			'nome' => 'Posse',
    			'UF' => 'GO',
    		),
    		5515 => 
    		array (
    			'codigoIbge' => 5218391,
    			'nome' => 'Professor Jamil',
    			'UF' => 'GO',
    		),
    		5516 => 
    		array (
    			'codigoIbge' => 5218508,
    			'nome' => 'Quirinópolis',
    			'UF' => 'GO',
    		),
    		5517 => 
    		array (
    			'codigoIbge' => 5218607,
    			'nome' => 'Rialma',
    			'UF' => 'GO',
    		),
    		5518 => 
    		array (
    			'codigoIbge' => 5218706,
    			'nome' => 'Rianápolis',
    			'UF' => 'GO',
    		),
    		5519 => 
    		array (
    			'codigoIbge' => 5218789,
    			'nome' => 'Rio Quente',
    			'UF' => 'GO',
    		),
    		5520 => 
    		array (
    			'codigoIbge' => 5218805,
    			'nome' => 'Rio Verde',
    			'UF' => 'GO',
    		),
    		5521 => 
    		array (
    			'codigoIbge' => 5218904,
    			'nome' => 'Rubiataba',
    			'UF' => 'GO',
    		),
    		5522 => 
    		array (
    			'codigoIbge' => 5219001,
    			'nome' => 'Sanclerlândia',
    			'UF' => 'GO',
    		),
    		5523 => 
    		array (
    			'codigoIbge' => 5219100,
    			'nome' => 'Santa Bárbara de Goiás',
    			'UF' => 'GO',
    		),
    		5524 => 
    		array (
    			'codigoIbge' => 5219209,
    			'nome' => 'Santa Cruz de Goiás',
    			'UF' => 'GO',
    		),
    		5525 => 
    		array (
    			'codigoIbge' => 5219258,
    			'nome' => 'Santa Fé de Goiás',
    			'UF' => 'GO',
    		),
    		5526 => 
    		array (
    			'codigoIbge' => 5219308,
    			'nome' => 'Santa Helena de Goiás',
    			'UF' => 'GO',
    		),
    		5527 => 
    		array (
    			'codigoIbge' => 5219357,
    			'nome' => 'Santa Isabel',
    			'UF' => 'GO',
    		),
    		5528 => 
    		array (
    			'codigoIbge' => 5219407,
    			'nome' => 'Santa Rita do Araguaia',
    			'UF' => 'GO',
    		),
    		5529 => 
    		array (
    			'codigoIbge' => 5219456,
    			'nome' => 'Santa Rita do Novo Destino',
    			'UF' => 'GO',
    		),
    		5530 => 
    		array (
    			'codigoIbge' => 5219506,
    			'nome' => 'Santa Rosa de Goiás',
    			'UF' => 'GO',
    		),
    		5531 => 
    		array (
    			'codigoIbge' => 5219605,
    			'nome' => 'Santa Tereza de Goiás',
    			'UF' => 'GO',
    		),
    		5532 => 
    		array (
    			'codigoIbge' => 5219704,
    			'nome' => 'Santa Terezinha de Goiás',
    			'UF' => 'GO',
    		),
    		5533 => 
    		array (
    			'codigoIbge' => 5219712,
    			'nome' => 'Santo Antônio da Barra',
    			'UF' => 'GO',
    		),
    		5534 => 
    		array (
    			'codigoIbge' => 5219738,
    			'nome' => 'Santo Antônio de Goiás',
    			'UF' => 'GO',
    		),
    		5535 => 
    		array (
    			'codigoIbge' => 5219753,
    			'nome' => 'Santo Antônio do Descoberto',
    			'UF' => 'GO',
    		),
    		5536 => 
    		array (
    			'codigoIbge' => 5219803,
    			'nome' => 'São Domingos',
    			'UF' => 'GO',
    		),
    		5537 => 
    		array (
    			'codigoIbge' => 5219902,
    			'nome' => 'São Francisco de Goiás',
    			'UF' => 'GO',
    		),
    		5538 => 
    		array (
    			'codigoIbge' => 5220009,
    			'nome' => 'São João d\'Aliança',
    			'UF' => 'GO',
    		),
    		5539 => 
    		array (
    			'codigoIbge' => 5220058,
    			'nome' => 'São João da Paraúna',
    			'UF' => 'GO',
    		),
    		5540 => 
    		array (
    			'codigoIbge' => 5220108,
    			'nome' => 'São Luís de Montes Belos',
    			'UF' => 'GO',
    		),
    		5541 => 
    		array (
    			'codigoIbge' => 5220157,
    			'nome' => 'São Luiz do Norte',
    			'UF' => 'GO',
    		),
    		5542 => 
    		array (
    			'codigoIbge' => 5220207,
    			'nome' => 'São Miguel do Araguaia',
    			'UF' => 'GO',
    		),
    		5543 => 
    		array (
    			'codigoIbge' => 5220264,
    			'nome' => 'São Miguel do Passa Quatro',
    			'UF' => 'GO',
    		),
    		5544 => 
    		array (
    			'codigoIbge' => 5220280,
    			'nome' => 'São Patrício',
    			'UF' => 'GO',
    		),
    		5545 => 
    		array (
    			'codigoIbge' => 5220405,
    			'nome' => 'São Simão',
    			'UF' => 'GO',
    		),
    		5546 => 
    		array (
    			'codigoIbge' => 5220454,
    			'nome' => 'Senador Canedo',
    			'UF' => 'GO',
    		),
    		5547 => 
    		array (
    			'codigoIbge' => 5220504,
    			'nome' => 'Serranópolis',
    			'UF' => 'GO',
    		),
    		5548 => 
    		array (
    			'codigoIbge' => 5220603,
    			'nome' => 'Silvânia',
    			'UF' => 'GO',
    		),
    		5549 => 
    		array (
    			'codigoIbge' => 5220686,
    			'nome' => 'Simolândia',
    			'UF' => 'GO',
    		),
    		5550 => 
    		array (
    			'codigoIbge' => 5220702,
    			'nome' => 'Sítio d\'Abadia',
    			'UF' => 'GO',
    		),
    		5551 => 
    		array (
    			'codigoIbge' => 5221007,
    			'nome' => 'Taquaral de Goiás',
    			'UF' => 'GO',
    		),
    		5552 => 
    		array (
    			'codigoIbge' => 5221080,
    			'nome' => 'Teresina de Goiás',
    			'UF' => 'GO',
    		),
    		5553 => 
    		array (
    			'codigoIbge' => 5221197,
    			'nome' => 'Terezópolis de Goiás',
    			'UF' => 'GO',
    		),
    		5554 => 
    		array (
    			'codigoIbge' => 5221304,
    			'nome' => 'Três Ranchos',
    			'UF' => 'GO',
    		),
    		5555 => 
    		array (
    			'codigoIbge' => 5221403,
    			'nome' => 'Trindade',
    			'UF' => 'GO',
    		),
    		5556 => 
    		array (
    			'codigoIbge' => 5221452,
    			'nome' => 'Trombas',
    			'UF' => 'GO',
    		),
    		5557 => 
    		array (
    			'codigoIbge' => 5221502,
    			'nome' => 'Turvânia',
    			'UF' => 'GO',
    		),
    		5558 => 
    		array (
    			'codigoIbge' => 5221551,
    			'nome' => 'Turvelândia',
    			'UF' => 'GO',
    		),
    		5559 => 
    		array (
    			'codigoIbge' => 5221577,
    			'nome' => 'Uirapuru',
    			'UF' => 'GO',
    		),
    		5560 => 
    		array (
    			'codigoIbge' => 5221601,
    			'nome' => 'Uruaçu',
    			'UF' => 'GO',
    		),
    		5561 => 
    		array (
    			'codigoIbge' => 5221700,
    			'nome' => 'Uruana',
    			'UF' => 'GO',
    		),
    		5562 => 
    		array (
    			'codigoIbge' => 5221809,
    			'nome' => 'Urutaí',
    			'UF' => 'GO',
    		),
    		5563 => 
    		array (
    			'codigoIbge' => 5221858,
    			'nome' => 'Valparaíso de Goiás',
    			'UF' => 'GO',
    		),
    		5564 => 
    		array (
    			'codigoIbge' => 5221908,
    			'nome' => 'Varjão',
    			'UF' => 'GO',
    		),
    		5565 => 
    		array (
    			'codigoIbge' => 5222005,
    			'nome' => 'Vianópolis',
    			'UF' => 'GO',
    		),
    		5566 => 
    		array (
    			'codigoIbge' => 5222054,
    			'nome' => 'Vicentinópolis',
    			'UF' => 'GO',
    		),
    		5567 => 
    		array (
    			'codigoIbge' => 5222203,
    			'nome' => 'Vila Boa',
    			'UF' => 'GO',
    		),
    		5568 => 
    		array (
    			'codigoIbge' => 5222302,
    			'nome' => 'Vila Propício',
    			'UF' => 'GO',
    		),
    		5569 => 
    		array (
    			'codigoIbge' => 5300108,
    			'nome' => 'Brasília',
    			'UF' => 'DF',
    		),
    	);

		foreach($cidades as $cidade)
		{
			$estado = Estado::getByUf($cidade['UF'])->first();
			
			$city 	= Cidade::where('nome', $cidade['nome'])
			->where('estado_id', $estado->id)
			->first();
			
			if(!empty($city))
			{
				$city->codigoIbge = $cidade['codigoIbge'];
				$city->save();
			}
		}
	}
}