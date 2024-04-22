<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $countryJson='
        {
  "countries": [
    {
      "id": 1,
      "sortname": "AF",
      "name": "Afghanistan",
      "phone_code": 93
    },
    {
      "id": 2,
      "sortname": "AL",
      "name": "Albania",
      "phone_code": 355
    },
    {
      "id": 3,
      "sortname": "DZ",
      "name": "Algeria",
      "phone_code": 213
    },
    {
      "id": 4,
      "sortname": "AS",
      "name": "American Samoa",
      "phone_code": 1684
    },
    {
      "id": 5,
      "sortname": "AD",
      "name": "Andorra",
      "phone_code": 376
    },
    {
      "id": 6,
      "sortname": "AO",
      "name": "Angola",
      "phone_code": 244
    },
    {
      "id": 7,
      "sortname": "AI",
      "name": "Anguilla",
      "phone_code": 1264
    },
    {
      "id": 8,
      "sortname": "AQ",
      "name": "Antarctica",
      "phone_code": 0
    },
    {
      "id": 9,
      "sortname": "AG",
      "name": "Antigua And Barbuda",
      "phone_code": 1268
    },
    {
      "id": 10,
      "sortname": "AR",
      "name": "Argentina",
      "phone_code": 54
    },
    {
      "id": 11,
      "sortname": "AM",
      "name": "Armenia",
      "phone_code": 374
    },
    {
      "id": 12,
      "sortname": "AW",
      "name": "Aruba",
      "phone_code": 297
    },
    {
      "id": 13,
      "sortname": "AU",
      "name": "Australia",
      "phone_code": 61
    },
    {
      "id": 14,
      "sortname": "AT",
      "name": "Austria",
      "phone_code": 43
    },
    {
      "id": 15,
      "sortname": "AZ",
      "name": "Azerbaijan",
      "phone_code": 994
    },
    {
      "id": 16,
      "sortname": "BS",
      "name": "Bahamas The",
      "phone_code": 1242
    },
    {
      "id": 17,
      "sortname": "BH",
      "name": "Bahrain",
      "phone_code": 973
    },
    {
      "id": 18,
      "sortname": "BD",
      "name": "Bangladesh",
      "phone_code": 880
    },
    {
      "id": 19,
      "sortname": "BB",
      "name": "Barbados",
      "phone_code": 1246
    },
    {
      "id": 20,
      "sortname": "BY",
      "name": "Belarus",
      "phone_code": 375
    },
    {
      "id": 21,
      "sortname": "BE",
      "name": "Belgium",
      "phone_code": 32
    },
    {
      "id": 22,
      "sortname": "BZ",
      "name": "Belize",
      "phone_code": 501
    },
    {
      "id": 23,
      "sortname": "BJ",
      "name": "Benin",
      "phone_code": 229
    },
    {
      "id": 24,
      "sortname": "BM",
      "name": "Bermuda",
      "phone_code": 1441
    },
    {
      "id": 25,
      "sortname": "BT",
      "name": "Bhutan",
      "phone_code": 975
    },
    {
      "id": 26,
      "sortname": "BO",
      "name": "Bolivia",
      "phone_code": 591
    },
    {
      "id": 27,
      "sortname": "BA",
      "name": "Bosnia and Herzegovina",
      "phone_code": 387
    },
    {
      "id": 28,
      "sortname": "BW",
      "name": "Botswana",
      "phone_code": 267
    },
    {
      "id": 29,
      "sortname": "BV",
      "name": "Bouvet Island",
      "phone_code": 0
    },
    {
      "id": 30,
      "sortname": "BR",
      "name": "Brazil",
      "phone_code": 55
    },
    {
      "id": 31,
      "sortname": "IO",
      "name": "British Indian Ocean Territory",
      "phone_code": 246
    },
    {
      "id": 32,
      "sortname": "BN",
      "name": "Brunei",
      "phone_code": 673
    },
    {
      "id": 33,
      "sortname": "BG",
      "name": "Bulgaria",
      "phone_code": 359
    },
    {
      "id": 34,
      "sortname": "BF",
      "name": "Burkina Faso",
      "phone_code": 226
    },
    {
      "id": 35,
      "sortname": "BI",
      "name": "Burundi",
      "phone_code": 257
    },
    {
      "id": 36,
      "sortname": "KH",
      "name": "Cambodia",
      "phone_code": 855
    },
    {
      "id": 37,
      "sortname": "CM",
      "name": "Cameroon",
      "phone_code": 237
    },
    {
      "id": 38,
      "sortname": "CA",
      "name": "Canada",
      "phone_code": 1
    },
    {
      "id": 39,
      "sortname": "CV",
      "name": "Cape Verde",
      "phone_code": 238
    },
    {
      "id": 40,
      "sortname": "KY",
      "name": "Cayman Islands",
      "phone_code": 1345
    },
    {
      "id": 41,
      "sortname": "CF",
      "name": "Central African Republic",
      "phone_code": 236
    },
    {
      "id": 42,
      "sortname": "TD",
      "name": "Chad",
      "phone_code": 235
    },
    {
      "id": 43,
      "sortname": "CL",
      "name": "Chile",
      "phone_code": 56
    },
    {
      "id": 44,
      "sortname": "CN",
      "name": "China",
      "phone_code": 86
    },
    {
      "id": 45,
      "sortname": "CX",
      "name": "Christmas Island",
      "phone_code": 61
    },
    {
      "id": 46,
      "sortname": "CC",
      "name": "Cocos (Keeling) Islands",
      "phone_code": 672
    },
    {
      "id": 47,
      "sortname": "CO",
      "name": "Colombia",
      "phone_code": 57
    },
    {
      "id": 48,
      "sortname": "KM",
      "name": "Comoros",
      "phone_code": 269
    },
    {
      "id": 49,
      "sortname": "CG",
      "name": "Republic Of The Congo",
      "phone_code": 242
    },
    {
      "id": 50,
      "sortname": "CD",
      "name": "Democratic Republic Of The Congo",
      "phone_code": 242
    },
    {
      "id": 51,
      "sortname": "CK",
      "name": "Cook Islands",
      "phone_code": 682
    },
    {
      "id": 52,
      "sortname": "CR",
      "name": "Costa Rica",
      "phone_code": 506
    },
    {
      "id": 53,
      "sortname": "CI",
      "name": "Cote DIvoire (Ivory Coast)",
      "phone_code": 225
    },
    {
      "id": 54,
      "sortname": "HR",
      "name": "Croatia (Hrvatska)",
      "phone_code": 385
    },
    {
      "id": 55,
      "sortname": "CU",
      "name": "Cuba",
      "phone_code": 53
    },
    {
      "id": 56,
      "sortname": "CY",
      "name": "Cyprus",
      "phone_code": 357
    },
    {
      "id": 57,
      "sortname": "CZ",
      "name": "Czech Republic",
      "phone_code": 420
    },
    {
      "id": 58,
      "sortname": "DK",
      "name": "Denmark",
      "phone_code": 45
    },
    {
      "id": 59,
      "sortname": "DJ",
      "name": "Djibouti",
      "phone_code": 253
    },
    {
      "id": 60,
      "sortname": "DM",
      "name": "Dominica",
      "phone_code": 1767
    },
    {
      "id": 61,
      "sortname": "DO",
      "name": "Dominican Republic",
      "phone_code": 1809
    },
    {
      "id": 62,
      "sortname": "TP",
      "name": "East Timor",
      "phone_code": 670
    },
    {
      "id": 63,
      "sortname": "EC",
      "name": "Ecuador",
      "phone_code": 593
    },
    {
      "id": 64,
      "sortname": "EG",
      "name": "Egypt",
      "phone_code": 20
    },
    {
      "id": 65,
      "sortname": "SV",
      "name": "El Salvador",
      "phone_code": 503
    },
    {
      "id": 66,
      "sortname": "GQ",
      "name": "Equatorial Guinea",
      "phone_code": 240
    },
    {
      "id": 67,
      "sortname": "ER",
      "name": "Eritrea",
      "phone_code": 291
    },
    {
      "id": 68,
      "sortname": "EE",
      "name": "Estonia",
      "phone_code": 372
    },
    {
      "id": 69,
      "sortname": "ET",
      "name": "Ethiopia",
      "phone_code": 251
    },
    {
      "id": 70,
      "sortname": "XA",
      "name": "External Territories of Australia",
      "phone_code": 61
    },
    {
      "id": 71,
      "sortname": "FK",
      "name": "Falkland Islands",
      "phone_code": 500
    },
    {
      "id": 72,
      "sortname": "FO",
      "name": "Faroe Islands",
      "phone_code": 298
    },
    {
      "id": 73,
      "sortname": "FJ",
      "name": "Fiji Islands",
      "phone_code": 679
    },
    {
      "id": 74,
      "sortname": "FI",
      "name": "Finland",
      "phone_code": 358
    },
    {
      "id": 75,
      "sortname": "FR",
      "name": "France",
      "phone_code": 33
    },
    {
      "id": 76,
      "sortname": "GF",
      "name": "French Guiana",
      "phone_code": 594
    },
    {
      "id": 77,
      "sortname": "PF",
      "name": "French Polynesia",
      "phone_code": 689
    },
    {
      "id": 78,
      "sortname": "TF",
      "name": "French Southern Territories",
      "phone_code": 0
    },
    {
      "id": 79,
      "sortname": "GA",
      "name": "Gabon",
      "phone_code": 241
    },
    {
      "id": 80,
      "sortname": "GM",
      "name": "Gambia The",
      "phone_code": 220
    },
    {
      "id": 81,
      "sortname": "GE",
      "name": "Georgia",
      "phone_code": 995
    },
    {
      "id": 82,
      "sortname": "DE",
      "name": "Germany",
      "phone_code": 49
    },
    {
      "id": 83,
      "sortname": "GH",
      "name": "Ghana",
      "phone_code": 233
    },
    {
      "id": 84,
      "sortname": "GI",
      "name": "Gibraltar",
      "phone_code": 350
    },
    {
      "id": 85,
      "sortname": "GR",
      "name": "Greece",
      "phone_code": 30
    },
    {
      "id": 86,
      "sortname": "GL",
      "name": "Greenland",
      "phone_code": 299
    },
    {
      "id": 87,
      "sortname": "GD",
      "name": "Grenada",
      "phone_code": 1473
    },
    {
      "id": 88,
      "sortname": "GP",
      "name": "Guadeloupe",
      "phone_code": 590
    },
    {
      "id": 89,
      "sortname": "GU",
      "name": "Guam",
      "phone_code": 1671
    },
    {
      "id": 90,
      "sortname": "GT",
      "name": "Guatemala",
      "phone_code": 502
    },
    {
      "id": 91,
      "sortname": "XU",
      "name": "Guernsey and Alderney",
      "phone_code": 44
    },
    {
      "id": 92,
      "sortname": "GN",
      "name": "Guinea",
      "phone_code": 224
    },
    {
      "id": 93,
      "sortname": "GW",
      "name": "Guinea-Bissau",
      "phone_code": 245
    },
    {
      "id": 94,
      "sortname": "GY",
      "name": "Guyana",
      "phone_code": 592
    },
    {
      "id": 95,
      "sortname": "HT",
      "name": "Haiti",
      "phone_code": 509
    },
    {
      "id": 96,
      "sortname": "HM",
      "name": "Heard and McDonald Islands",
      "phone_code": 0
    },
    {
      "id": 97,
      "sortname": "HN",
      "name": "Honduras",
      "phone_code": 504
    },
    {
      "id": 98,
      "sortname": "HK",
      "name": "Hong Kong S.A.R.",
      "phone_code": 852
    },
    {
      "id": 99,
      "sortname": "HU",
      "name": "Hungary",
      "phone_code": 36
    },
    {
      "id": 100,
      "sortname": "IS",
      "name": "Iceland",
      "phone_code": 354
    },
    {
      "id": 101,
      "sortname": "IN",
      "name": "India",
      "phone_code": 91
    },
    {
      "id": 102,
      "sortname": "ID",
      "name": "Indonesia",
      "phone_code": 62
    },
    {
      "id": 103,
      "sortname": "IR",
      "name": "Iran",
      "phone_code": 98
    },
    {
      "id": 104,
      "sortname": "IQ",
      "name": "Iraq",
      "phone_code": 964
    },
    {
      "id": 105,
      "sortname": "IE",
      "name": "Ireland",
      "phone_code": 353
    },
    {
      "id": 106,
      "sortname": "IL",
      "name": "Israel",
      "phone_code": 972
    },
    {
      "id": 107,
      "sortname": "IT",
      "name": "Italy",
      "phone_code": 39
    },
    {
      "id": 108,
      "sortname": "JM",
      "name": "Jamaica",
      "phone_code": 1876
    },
    {
      "id": 109,
      "sortname": "JP",
      "name": "Japan",
      "phone_code": 81
    },
    {
      "id": 110,
      "sortname": "XJ",
      "name": "Jersey",
      "phone_code": 44
    },
    {
      "id": 111,
      "sortname": "JO",
      "name": "Jordan",
      "phone_code": 962
    },
    {
      "id": 112,
      "sortname": "KZ",
      "name": "Kazakhstan",
      "phone_code": 7
    },
    {
      "id": 113,
      "sortname": "KE",
      "name": "Kenya",
      "phone_code": 254
    },
    {
      "id": 114,
      "sortname": "KI",
      "name": "Kiribati",
      "phone_code": 686
    },
    {
      "id": 115,
      "sortname": "KP",
      "name": "Korea North",
      "phone_code": 850
    },
    {
      "id": 116,
      "sortname": "KR",
      "name": "Korea South",
      "phone_code": 82
    },
    {
      "id": 117,
      "sortname": "KW",
      "name": "Kuwait",
      "phone_code": 965
    },
    {
      "id": 118,
      "sortname": "KG",
      "name": "Kyrgyzstan",
      "phone_code": 996
    },
    {
      "id": 119,
      "sortname": "LA",
      "name": "Laos",
      "phone_code": 856
    },
    {
      "id": 120,
      "sortname": "LV",
      "name": "Latvia",
      "phone_code": 371
    },
    {
      "id": 121,
      "sortname": "LB",
      "name": "Lebanon",
      "phone_code": 961
    },
    {
      "id": 122,
      "sortname": "LS",
      "name": "Lesotho",
      "phone_code": 266
    },
    {
      "id": 123,
      "sortname": "LR",
      "name": "Liberia",
      "phone_code": 231
    },
    {
      "id": 124,
      "sortname": "LY",
      "name": "Libya",
      "phone_code": 218
    },
    {
      "id": 125,
      "sortname": "LI",
      "name": "Liechtenstein",
      "phone_code": 423
    },
    {
      "id": 126,
      "sortname": "LT",
      "name": "Lithuania",
      "phone_code": 370
    },
    {
      "id": 127,
      "sortname": "LU",
      "name": "Luxembourg",
      "phone_code": 352
    },
    {
      "id": 128,
      "sortname": "MO",
      "name": "Macau S.A.R.",
      "phone_code": 853
    },
    {
      "id": 129,
      "sortname": "MK",
      "name": "Macedonia",
      "phone_code": 389
    },
    {
      "id": 130,
      "sortname": "MG",
      "name": "Madagascar",
      "phone_code": 261
    },
    {
      "id": 131,
      "sortname": "MW",
      "name": "Malawi",
      "phone_code": 265
    },
    {
      "id": 132,
      "sortname": "MY",
      "name": "Malaysia",
      "phone_code": 60
    },
    {
      "id": 133,
      "sortname": "MV",
      "name": "Maldives",
      "phone_code": 960
    },
    {
      "id": 134,
      "sortname": "ML",
      "name": "Mali",
      "phone_code": 223
    },
    {
      "id": 135,
      "sortname": "MT",
      "name": "Malta",
      "phone_code": 356
    },
    {
      "id": 136,
      "sortname": "XM",
      "name": "Man (Isle of)",
      "phone_code": 44
    },
    {
      "id": 137,
      "sortname": "MH",
      "name": "Marshall Islands",
      "phone_code": 692
    },
    {
      "id": 138,
      "sortname": "MQ",
      "name": "Martinique",
      "phone_code": 596
    },
    {
      "id": 139,
      "sortname": "MR",
      "name": "Mauritania",
      "phone_code": 222
    },
    {
      "id": 140,
      "sortname": "MU",
      "name": "Mauritius",
      "phone_code": 230
    },
    {
      "id": 141,
      "sortname": "YT",
      "name": "Mayotte",
      "phone_code": 269
    },
    {
      "id": 142,
      "sortname": "MX",
      "name": "Mexico",
      "phone_code": 52
    },
    {
      "id": 143,
      "sortname": "FM",
      "name": "Micronesia",
      "phone_code": 691
    },
    {
      "id": 144,
      "sortname": "MD",
      "name": "Moldova",
      "phone_code": 373
    },
    {
      "id": 145,
      "sortname": "MC",
      "name": "Monaco",
      "phone_code": 377
    },
    {
      "id": 146,
      "sortname": "MN",
      "name": "Mongolia",
      "phone_code": 976
    },
    {
      "id": 147,
      "sortname": "MS",
      "name": "Montserrat",
      "phone_code": 1664
    },
    {
      "id": 148,
      "sortname": "MA",
      "name": "Morocco",
      "phone_code": 212
    },
    {
      "id": 149,
      "sortname": "MZ",
      "name": "Mozambique",
      "phone_code": 258
    },
    {
      "id": 150,
      "sortname": "MM",
      "name": "Myanmar",
      "phone_code": 95
    },
    {
      "id": 151,
      "sortname": "NA",
      "name": "Namibia",
      "phone_code": 264
    },
    {
      "id": 152,
      "sortname": "NR",
      "name": "Nauru",
      "phone_code": 674
    },
    {
      "id": 153,
      "sortname": "NP",
      "name": "Nepal",
      "phone_code": 977
    },
    {
      "id": 154,
      "sortname": "AN",
      "name": "Netherlands Antilles",
      "phone_code": 599
    },
    {
      "id": 155,
      "sortname": "NL",
      "name": "Netherlands The",
      "phone_code": 31
    },
    {
      "id": 156,
      "sortname": "NC",
      "name": "New Caledonia",
      "phone_code": 687
    },
    {
      "id": 157,
      "sortname": "NZ",
      "name": "New Zealand",
      "phone_code": 64
    },
    {
      "id": 158,
      "sortname": "NI",
      "name": "Nicaragua",
      "phone_code": 505
    },
    {
      "id": 159,
      "sortname": "NE",
      "name": "Niger",
      "phone_code": 227
    },
    {
      "id": 160,
      "sortname": "NG",
      "name": "Nigeria",
      "phone_code": 234
    },
    {
      "id": 161,
      "sortname": "NU",
      "name": "Niue",
      "phone_code": 683
    },
    {
      "id": 162,
      "sortname": "NF",
      "name": "Norfolk Island",
      "phone_code": 672
    },
    {
      "id": 163,
      "sortname": "MP",
      "name": "Northern Mariana Islands",
      "phone_code": 1670
    },
    {
      "id": 164,
      "sortname": "NO",
      "name": "Norway",
      "phone_code": 47
    },
    {
      "id": 165,
      "sortname": "OM",
      "name": "Oman",
      "phone_code": 968
    },
    {
      "id": 166,
      "sortname": "PK",
      "name": "Pakistan",
      "phone_code": 92
    },
    {
      "id": 167,
      "sortname": "PW",
      "name": "Palau",
      "phone_code": 680
    },
    {
      "id": 168,
      "sortname": "PS",
      "name": "Palestinian Territory Occupied",
      "phone_code": 970
    },
    {
      "id": 169,
      "sortname": "PA",
      "name": "Panama",
      "phone_code": 507
    },
    {
      "id": 170,
      "sortname": "PG",
      "name": "Papua new Guinea",
      "phone_code": 675
    },
    {
      "id": 171,
      "sortname": "PY",
      "name": "Paraguay",
      "phone_code": 595
    },
    {
      "id": 172,
      "sortname": "PE",
      "name": "Peru",
      "phone_code": 51
    },
    {
      "id": 173,
      "sortname": "PH",
      "name": "Philippines",
      "phone_code": 63
    },
    {
      "id": 174,
      "sortname": "PN",
      "name": "Pitcairn Island",
      "phone_code": 0
    },
    {
      "id": 175,
      "sortname": "PL",
      "name": "Poland",
      "phone_code": 48
    },
    {
      "id": 176,
      "sortname": "PT",
      "name": "Portugal",
      "phone_code": 351
    },
    {
      "id": 177,
      "sortname": "PR",
      "name": "Puerto Rico",
      "phone_code": 1787
    },
    {
      "id": 178,
      "sortname": "QA",
      "name": "Qatar",
      "phone_code": 974
    },
    {
      "id": 179,
      "sortname": "RE",
      "name": "Reunion",
      "phone_code": 262
    },
    {
      "id": 180,
      "sortname": "RO",
      "name": "Romania",
      "phone_code": 40
    },
    {
      "id": 181,
      "sortname": "RU",
      "name": "Russia",
      "phone_code": 70
    },
    {
      "id": 182,
      "sortname": "RW",
      "name": "Rwanda",
      "phone_code": 250
    },
    {
      "id": 183,
      "sortname": "SH",
      "name": "Saint Helena",
      "phone_code": 290
    },
    {
      "id": 184,
      "sortname": "KN",
      "name": "Saint Kitts And Nevis",
      "phone_code": 1869
    },
    {
      "id": 185,
      "sortname": "LC",
      "name": "Saint Lucia",
      "phone_code": 1758
    },
    {
      "id": 186,
      "sortname": "PM",
      "name": "Saint Pierre and Miquelon",
      "phone_code": 508
    },
    {
      "id": 187,
      "sortname": "VC",
      "name": "Saint Vincent And The Grenadines",
      "phone_code": 1784
    },
    {
      "id": 188,
      "sortname": "WS",
      "name": "Samoa",
      "phone_code": 684
    },
    {
      "id": 189,
      "sortname": "SM",
      "name": "San Marino",
      "phone_code": 378
    },
    {
      "id": 190,
      "sortname": "ST",
      "name": "Sao Tome and Principe",
      "phone_code": 239
    },
    {
      "id": 191,
      "sortname": "SA",
      "name": "Saudi Arabia",
      "phone_code": 966
    },
    {
      "id": 192,
      "sortname": "SN",
      "name": "Senegal",
      "phone_code": 221
    },
    {
      "id": 193,
      "sortname": "RS",
      "name": "Serbia",
      "phone_code": 381
    },
    {
      "id": 194,
      "sortname": "SC",
      "name": "Seychelles",
      "phone_code": 248
    },
    {
      "id": 195,
      "sortname": "SL",
      "name": "Sierra Leone",
      "phone_code": 232
    },
    {
      "id": 196,
      "sortname": "SG",
      "name": "Singapore",
      "phone_code": 65
    },
    {
      "id": 197,
      "sortname": "SK",
      "name": "Slovakia",
      "phone_code": 421
    },
    {
      "id": 198,
      "sortname": "SI",
      "name": "Slovenia",
      "phone_code": 386
    },
    {
      "id": 199,
      "sortname": "XG",
      "name": "Smaller Territories of the UK",
      "phone_code": 44
    },
    {
      "id": 200,
      "sortname": "SB",
      "name": "Solomon Islands",
      "phone_code": 677
    },
    {
      "id": 201,
      "sortname": "SO",
      "name": "Somalia",
      "phone_code": 252
    },
    {
      "id": 202,
      "sortname": "ZA",
      "name": "South Africa",
      "phone_code": 27
    },
    {
      "id": 203,
      "sortname": "GS",
      "name": "South Georgia",
      "phone_code": 0
    },
    {
      "id": 204,
      "sortname": "SS",
      "name": "South Sudan",
      "phone_code": 211
    },
    {
      "id": 205,
      "sortname": "ES",
      "name": "Spain",
      "phone_code": 34
    },
    {
      "id": 206,
      "sortname": "LK",
      "name": "Sri Lanka",
      "phone_code": 94
    },
    {
      "id": 207,
      "sortname": "SD",
      "name": "Sudan",
      "phone_code": 249
    },
    {
      "id": 208,
      "sortname": "SR",
      "name": "Suriname",
      "phone_code": 597
    },
    {
      "id": 209,
      "sortname": "SJ",
      "name": "Svalbard And Jan Mayen Islands",
      "phone_code": 47
    },
    {
      "id": 210,
      "sortname": "SZ",
      "name": "Swaziland",
      "phone_code": 268
    },
    {
      "id": 211,
      "sortname": "SE",
      "name": "Sweden",
      "phone_code": 46
    },
    {
      "id": 212,
      "sortname": "CH",
      "name": "Switzerland",
      "phone_code": 41
    },
    {
      "id": 213,
      "sortname": "SY",
      "name": "Syria",
      "phone_code": 963
    },
    {
      "id": 214,
      "sortname": "TW",
      "name": "Taiwan",
      "phone_code": 886
    },
    {
      "id": 215,
      "sortname": "TJ",
      "name": "Tajikistan",
      "phone_code": 992
    },
    {
      "id": 216,
      "sortname": "TZ",
      "name": "Tanzania",
      "phone_code": 255
    },
    {
      "id": 217,
      "sortname": "TH",
      "name": "Thailand",
      "phone_code": 66
    },
    {
      "id": 218,
      "sortname": "TG",
      "name": "Togo",
      "phone_code": 228
    },
    {
      "id": 219,
      "sortname": "TK",
      "name": "Tokelau",
      "phone_code": 690
    },
    {
      "id": 220,
      "sortname": "TO",
      "name": "Tonga",
      "phone_code": 676
    },
    {
      "id": 221,
      "sortname": "TT",
      "name": "Trinidad And Tobago",
      "phone_code": 1868
    },
    {
      "id": 222,
      "sortname": "TN",
      "name": "Tunisia",
      "phone_code": 216
    },
    {
      "id": 223,
      "sortname": "TR",
      "name": "Turkey",
      "phone_code": 90
    },
    {
      "id": 224,
      "sortname": "TM",
      "name": "Turkmenistan",
      "phone_code": 7370
    },
    {
      "id": 225,
      "sortname": "TC",
      "name": "Turks And Caicos Islands",
      "phone_code": 1649
    },
    {
      "id": 226,
      "sortname": "TV",
      "name": "Tuvalu",
      "phone_code": 688
    },
    {
      "id": 227,
      "sortname": "UG",
      "name": "Uganda",
      "phone_code": 256
    },
    {
      "id": 228,
      "sortname": "UA",
      "name": "Ukraine",
      "phone_code": 380
    },
    {
      "id": 229,
      "sortname": "AE",
      "name": "United Arab Emirates",
      "phone_code": 971
    },
    {
      "id": 230,
      "sortname": "GB",
      "name": "United Kingdom",
      "phone_code": 44
    },
    {
      "id": 231,
      "sortname": "US",
      "name": "United States",
      "phone_code": 1
    },
    {
      "id": 232,
      "sortname": "UM",
      "name": "United States Minor Outlying Islands",
      "phone_code": 1
    },
    {
      "id": 233,
      "sortname": "UY",
      "name": "Uruguay",
      "phone_code": 598
    },
    {
      "id": 234,
      "sortname": "UZ",
      "name": "Uzbekistan",
      "phone_code": 998
    },
    {
      "id": 235,
      "sortname": "VU",
      "name": "Vanuatu",
      "phone_code": 678
    },
    {
      "id": 236,
      "sortname": "VA",
      "name": "Vatican City State (Holy See)",
      "phone_code": 39
    },
    {
      "id": 237,
      "sortname": "VE",
      "name": "Venezuela",
      "phone_code": 58
    },
    {
      "id": 238,
      "sortname": "VN",
      "name": "Vietnam",
      "phone_code": 84
    },
    {
      "id": 239,
      "sortname": "VG",
      "name": "Virgin Islands (British)",
      "phone_code": 1284
    },
    {
      "id": 240,
      "sortname": "VI",
      "name": "Virgin Islands (US)",
      "phone_code": 1340
    },
    {
      "id": 241,
      "sortname": "WF",
      "name": "Wallis And Futuna Islands",
      "phone_code": 681
    },
    {
      "id": 242,
      "sortname": "EH",
      "name": "Western Sahara",
      "phone_code": 212
    },
    {
      "id": 243,
      "sortname": "YE",
      "name": "Yemen",
      "phone_code": 967
    },
    {
      "id": 244,
      "sortname": "YU",
      "name": "Yugoslavia",
      "phone_code": 38
    },
    {
      "id": 245,
      "sortname": "ZM",
      "name": "Zambia",
      "phone_code": 260
    },
    {
      "id": 246,
      "sortname": "ZW",
      "name": "Zimbabwe",
      "phone_code": 26
    }
  ]
}
';
        $result=json_decode($countryJson);
        $countries=$result->countries;
        foreach($countries as $country){
            Country::create([
                'sortname'=>$country->sortname,
                'name'=>$country->name,
                'phone_code'=>$country->phone_code
            ]);
        }
    }
}
