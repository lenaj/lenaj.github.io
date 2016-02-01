<?php

define( 'ISO', 'AF,AX,AL,DZ,AS,AD,AO,AI,AQ,AG,AR,AM,AW,AU,AT,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BT,BO,BQ,
				BA,BW,BV,BR,IO,BN,BG,BF,BI,KH,CM,CA,CV,KY,CF,TD,CL,CN,CX,CC,CO,KM,CG,CD,CK,CR,CI,HR,
				CU,CW,CY,CZ,DK,DJ,DM,DO,EC,EG,SV,GQ,ER,EE,ET,FK,FO,FJ,FI,FR,GF,PF,TF,GA,GM,GE,DE,GH,
				GI,GR,GL,GD,GP,GU,GT,GG,GN,GW,GY,HT,HM,VA,HN,HK,HU,IS,IN,ID,IR,IQ,IE,IM,IL,IT,JM,JP,
				JE,JO,KZ,KE,KI,KP,KR,KW,KG,LA,LV,LB,LS,LR,LY,LI,LT,LU,MO,MK,MG,MW,MY,MV,ML,MT,MH,MQ,
				MR,MU,YT,MX,FM,MD,MC,MN,ME,MS,MA,MZ,MM,NA,NR,NP,NL,NC,NZ,NI,NE,NG,NU,NF,MP,NO,OM,PK,
				PW,PS,PA,PG,PY,PE,PH,PN,PL,PT,PR,QA,RE,RO,RU,RW,BL,SH,KN,LC,MF,PM,VC,WS,SM,ST,SA,SN,
				RS,SC,SL,SG,SX,SK,SI,SB,SO,ZA,GS,SS,ES,LK,SD,SR,SJ,SZ,SE,CH,SY,TW,TJ,TZ,TH,TL,TG,TK,
				TO,TT,TN,TR,TM,TC,TV,UG,UA,AE,GB,US,UM,UY,UZ,VU,VE,VN,VG,VI,WF,EH,YE,ZM,ZW' );


function Country2Iso ( $country ) {
	
	$dict = array(
		'Afghanistan'=>'AF',
		'Albania'=>'AL',
		'Algeria'=>'DZ',
		'American Samoa'=>'AS',
		'Andorra'=>'AD',
		'Angola'=>'AO',
		'Anguilla'=>'AI',
		'Antarctica'=>'AQ',
		'Antigua And Barbuda'=>'AG',
		'Argentina'=>'AR',
		'Armenia'=>'AM',
		'Aruba'=>'AW',
		'Australia'=>'AU',
		'Austria'=>'AT',
		'Azerbaijan'=>'AZ',
		'Bahamas'=>'BS',
		'Bahrain'=>'BH',
		'Bangladesh'=>'BD',
		'Barbados'=>'BB',
		'Belarus'=>'BY',
		'Belgium'=>'BE',
		'Belize'=>'BZ',
		'Benin'=>'BJ',
		'Bermuda'=>'BM',
		'Bhutan'=>'BT',
		'Bolivia'=>'BO',
		'Bosnia And Herzegovina'=>'BA',
		'Botswana'=>'BW',
		'Bouvet Island'=>'BV',
		'Brazil'=>'BR',
		'British Indian Ocean Territory'=>'IO',
		'Brunei'=>'BN',
		'Bulgaria'=>'BG',
		'Burkina Faso'=>'BF',
		'Burundi'=>'BI',
		'Cambodia'=>'KH',
		'Cameroon'=>'CM',
		'Canada'=>'CA',
		'Cape Verde'=>'CV',
		'Cayman Islands'=>'KY',
		'Central African Republic'=>'CF',
		'Chad'=>'TD',
		'Chile'=>'CL',
		'China'=>'CN',
		'Christmas Island'=>'CX',
		'Cocos (Keeling) Islands'=>'CC',
		'Columbia'=>'CO',
		'Comoros'=>'KM',
		'Congo'=>'CG',
		'Cook Islands'=>'CK',
		'Costa Rica'=>'CR',
		'Cote D\'Ivorie (Ivory Coast)'=>'CI',
		'Croatia (Hrvatska)'=>'HR',
		'Cuba'=>'CU',
		'Cyprus'=>'CY',
		'Czech Republic'=>'CZ',
		'Democratic Republic Of Congo (Zaire)'=>'CD',
		'Denmark'=>'DK',
		'Djibouti'=>'DJ',
		'Dominica'=>'DM',
		'Dominican Republic'=>'DO',
		'East Timor'=>'TP',
		'Ecuador'=>'EC',
		'Egypt'=>'EG',
		'El Salvador'=>'SV',
		'Equatorial Guinea'=>'GQ',
		'Eritrea'=>'ER',
		'Estonia'=>'EE',
		'Ethiopia'=>'ET',
		'Falkland Islands (Malvinas)'=>'FK',
		'Faroe Islands'=>'FO',
		'Fiji'=>'FJ',
		'Finland'=>'FI',
		'France'=>'FR',
		'France, Metropolitan'=>'FX',
		'French Guinea'=>'GF',
		'French Polynesia'=>'PF',
		'French Southern Territories'=>'TF',
		'Gabon'=>'GA',
		'Gambia'=>'GM',
		'Georgia'=>'GE',
		'Germany'=>'DE',
		'Ghana'=>'GH',
		'Gibraltar'=>'GI',
		'Greece'=>'GR',
		'Greenland'=>'GL',
		'Grenada'=>'GD',
		'Guadeloupe'=>'GP',
		'Guam'=>'GU',
		'Guatemala'=>'GT',
		'Guinea'=>'GN',
		'Guinea-Bissau'=>'GW',
		'Guyana'=>'GY',
		'Haiti'=>'HT',
		'Heard And McDonald Islands'=>'HM',
		'Honduras'=>'HN',
		'Hong Kong'=>'HK',
		'Hungary'=>'HU',
		'Iceland'=>'IS',
		'India'=>'IN',
		'Indonesia'=>'ID',
		'Iran'=>'IR',
		'Iraq'=>'IQ',
		'Ireland'=>'IE',
		'Israel'=>'IL',
		'Italy'=>'IT',
		'Jamaica'=>'JM',
		'Japan'=>'JP',
		'Jordan'=>'JO',
		'Kazakhstan'=>'KZ',
		'Kenya'=>'KE',
		'Kiribati'=>'KI',
		'Kuwait'=>'KW',
		'Kyrgyzstan'=>'KG',
		'Laos'=>'LA',
		'Latvia'=>'LV',
		'Lebanon'=>'LB',
		'Lesotho'=>'LS',
		'Liberia'=>'LR',
		'Libya'=>'LY',
		'Liechtenstein'=>'LI',
		'Lithuania'=>'LT',
		'Luxembourg'=>'LU',
		'Macau'=>'MO',
		'Macedonia'=>'MK',
		'Madagascar'=>'MG',
		'Malawi'=>'MW',
		'Malaysia'=>'MY',
		'Maldives'=>'MV',
		'Mali'=>'ML',
		'Malta'=>'MT',
		'Marshall Islands'=>'MH',
		'Martinique'=>'MQ',
		'Mauritania'=>'MR',
		'Mauritius'=>'MU',
		'Mayotte'=>'YT',
		'Mexico'=>'MX',
		'Micronesia'=>'FM',
		'Moldova'=>'MD',
		'Monaco'=>'MC',
		'Mongolia'=>'MN',
		'Montserrat'=>'MS',
		'Morocco'=>'MA',
		'Mozambique'=>'MZ',
		'Myanmar (Burma)'=>'MM',
		'Namibia'=>'NA',
		'Nauru'=>'NR',
		'Nepal'=>'NP',
		'Netherlands'=>'NL',
		'Netherlands Antilles'=>'AN',
		'New Caledonia'=>'NC',
		'New Zealand'=>'NZ',
		'Nicaragua'=>'NI',
		'Niger'=>'NE',
		'Nigeria'=>'NG',
		'Niue'=>'NU',
		'Norfolk Island'=>'NF',
		'North Korea'=>'KP',
		'Northern Mariana Islands'=>'MP',
		'Norway'=>'NO',
		'Oman'=>'OM',
		'Pakistan'=>'PK',
		'Palau'=>'PW',
		'Panama'=>'PA',
		'Papua New Guinea'=>'PG',
		'Paraguay'=>'PY',
		'Peru'=>'PE',
		'Philippines'=>'PH',
		'Pitcairn'=>'PN',
		'Poland'=>'PL',
		'Portugal'=>'PT',
		'Puerto Rico'=>'PR',
		'Qatar'=>'QA',
		'Reunion'=>'RE',
		'Romania'=>'RO',
		'Russia'=>'RU',
		'Rwanda'=>'RW',
		'Saint Helena'=>'SH',
		'Saint Kitts And Nevis'=>'KN',
		'Saint Lucia'=>'LC',
		'Saint Pierre And Miquelon'=>'PM',
		'Saint Vincent And The Grenadines'=>'VC',
		'San Marino'=>'SM',
		'Sao Tome And Principe'=>'ST',
		'Saudi Arabia'=>'SA',
		'Senegal'=>'SN',
		'Seychelles'=>'SC',
		'Sierra Leone'=>'SL',
		'Singapore'=>'SG',
		'Slovak Republic'=>'SK',
		'Slovenia'=>'SI',
		'Solomon Islands'=>'SB',
		'Somalia'=>'SO',
		'South Africa'=>'ZA',
		'South Georgia And South Sandwich Islands'=>'GS',
		'South Korea'=>'KR',
		'Spain'=>'ES',
		'Sri Lanka'=>'LK',
		'Sudan'=>'SD',
		'Suriname'=>'SR',
		'Svalbard And Jan Mayen'=>'SJ',
		'Swaziland'=>'SZ',
		'Sweden'=>'SE',
		'Switzerland'=>'CH',
		'Syria'=>'SY',
		'Taiwan'=>'TW',
		'Tajikistan'=>'TJ',
		'Tanzania'=>'TZ',
		'Thailand'=>'TH',
		'Togo'=>'TG',
		'Tokelau'=>'TK',
		'Tonga'=>'TO',
		'Trinidad And Tobago'=>'TT',
		'Tunisia'=>'TN',
		'Turkey'=>'TR',
		'Turkmenistan'=>'TM',
		'Turks And Caicos Islands'=>'TC',
		'Tuvalu'=>'TV',
		'Uganda'=>'UG',
		'Ukraine'=>'UA',
		'United Arab Emirates'=>'AE',
		'United Kingdom'=>'UK',
		'United States'=>'US',
		'United States Minor Outlying Islands'=>'UM',
		'Uruguay'=>'UY',
		'Uzbekistan'=>'UZ',
		'Vanuatu'=>'VU',
		'Vatican City (Holy See)'=>'VA',
		'Venezuela'=>'VE',
		'Vietnam'=>'VN',
		'Virgin Islands (British)'=>'VG',
		'Virgin Islands (US)'=>'VI',
		'Wallis And Futuna Islands'=>'WF',
		'Western Sahara'=>'EH',
		'Western Samoa'=>'WS',
		'Yemen'=>'YE',
		'Yugoslavia'=>'YU',
		'Zambia'=>'ZM',
		'Zimbabwe'=>'ZW' );

		return isset( $dict[ $country ] ) ?	$dict[ $country ] : false; 
}
