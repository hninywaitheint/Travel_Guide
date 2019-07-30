<?php

use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('division_tables')->insert([

            ['division_Name' => 'Yangon',
             'culture' => "Yangon (Burmese: ရန်ကုန်မြို့; MLCTS: rankun mrui.; pronunciation [jàɴɡòʊɴ mjo̰], lit. 'End of Strife'), formerly known as Rangoon, is the capital of the Yangon Region and commercial capital of Myanmar (also known as Burma). Yangon served as the administrative capital of Myanmar until 2006, when the military government relocated the administrative functions to the purpose-built city of Naypyidaw [nèpjìdɔ̀] in central Myanmar.[3] With over 7 million people, Yangon is Myanmar's largest city and its most important commercial centre.

             Yangon boasts the largest number of colonial-era buildings in Southeast Asia,[4] and has a unique colonial-era urban core that is remarkably intact.[5] The colonial-era commercial core is centred around the Sule Pagoda, which is reputed to be over 2,000 years old.[6] The city is also home to the gilded Shwedagon Pagoda – Myanmar's most sacred Buddhist pagoda. The mausoleum of the last Mughal Emperor is located in Yangon, where he had been exiled following the Indian Mutiny of 1857.

             Yangon suffers from deeply inadequate infrastructure, especially compared to other major cities in Southeast Asia. Though many historic residential and commercial buildings have been renovated throughout central Yangon, most satellite towns that ring the city continue to be profoundly impoverished and lack basic infrastructure.",
             'division_lat' => '16.866070',
             'division_long' => '96.195129'],

            ['division_Name' => 'Mandalay',
            'culture' => "Mandalay (/ˌmændəˈleɪ/ or /ˈmændəleɪ/; Burmese: မန္တလေး; MLCTS: manta.le: [máɴdəlé]) is the second-largest city and the last royal capital of Myanmar (Burma). Located 716 km (445 mi) north of Yangon on the east bank of the Irrawaddy River, the city has a population of 1,225,553 (2014 census).
         Mandalay is the economic centre of Upper Burma and considered the centre of Burmese culture. A continuing influx of Chinese immigrants, mostly from Yunnan, in the past 20 years, has reshaped the city's ethnic makeup and increased commerce with China.[4][5] Despite Naypyidaw's recent rise, Mandalay remains Upper Burma's main commercial, educational and health center.",
        'division_lat' => '21.958828',
    'division_long' => '96.089104'],


             ['division_Name' => 'Bago',
             'culture' => "Bago (formerly spelt Pegu;[1] Burmese: ပဲခူးမြို့; MLCTS: pai: khu: mrui., IPA: [bəɡó mjo̰]; Mon: ဗဂေါ, [həkɜ̀]), formerly known as Hanthawaddy (Burmese: ဟံသာဝတီ; Mon: ဟံသာဝတဳ Hongsawatoi; Pali: Haṃsāvatī; meaning 'She Who Has Swans'), is a city and the capital of the Bago Region in Myanmar. It is located 91 kilometres (57 mi) north-east of Yangon.",
             'division_lat' => '17.322071',
             'division_long' => '96.466331'],

             ['division_Name' => 'Sagaing',
             'culture' => "Sagaing (Burmese: စစ်ကိုင်းမြို့; MLCTS: cac kuing: mrui) is the capital of Sagaing Region and located the Irrawaddy River, 20 km to the south-west of Mandalay on the opposite bank of the river, Sagaing, with numerous Buddhist monasteries is an important religious and monastic centre. The pagodas and monasteries crowd the numerous hills along the ridge running parallel to the river. The central pagoda, Soon U Ponya Shin Pagoda, is connected by a set of covered staircases that run up the 240 m hill.

             Today, with about 70,000 inhabitants, the city is part of Mandalay built-up area with more than 1,022,000 inhabitants estimated in 2011. The city is a frequent tourist destination of day trippers. Within the city are the Sagaing Institute of Education, the Sagaing Education College, Sagaing University, Technological University (Sagaing), and co-operative university (Sagaing).",
             'division_lat' => '21.885380',
             'division_long' => '95.985817'],

             ['division_Name' => 'Magway',
             'culture' => "Magway Region (Burmese: မကွေးတိုင်းဒေသကြီး, pronounced [məɡwé táiɴ dèθa̰ dʑí], formerly Magway Division) is an administrative division in central Myanmar. Magway Region is the second largest of Myanmar's seven divisions, with an area of 44,820 square kilometres (17,306 sq mi). Pa Del Dam(ပဒဲဆည်) is one of the Dam in Aung Lan Township, Magway Division. Capital city and second largest city of the Magway Division is Magway and largest city of the Magway Division is Pakokku.

             ",
             'division_lat' => '20.461914',
             'division_long' => '94.562447'],

             ['division_Name' => 'Tanintharyi',
             'culture' => "Tanintharyi or Taninthayi (widely known during the British occupation and since as Tenasserim) is a small town in Taninthayi Township, Myeik District, in the Tanintharyi Region of south-western Myanmar. It is the administrative seat for the township. The town is located on the Great Tenasserim River which eventually enters the sea at Myeik.[1][2] The town is located at the confluence of this river and a tributary known as the 'Little Tenasserim River' which runs south.

             The town is built on a hill slope on the site of an ancient city which, for hundreds of years, served as the principal port of Siam.[3] Ethnic Bamars (Burmans) (with Dawei and Myeik subgroups) are the majority community here. The hill people who are non-Buddhists are most numerous here. The majority of the population speak the Tavoyan dialect.",
             'division_lat' => '12.470688',
             'division_long' => '99.012894'],

             ['division_Name' => 'Ayeyarwady',
             'culture' => "Ayeyarwady Region (Burmese: ဧရာဝတီတိုင်းဒေသကြီး, pronounced [ʔèjàwədì táiɴ dèθa̰ dʑí], S'gaw Karen: ထံထၣ်စွ့; formerly Ayeyarwady Division and Irrawaddy Division), is a region of Myanmar, occupying the delta region of the Ayeyarwady River (Irrawaddy River). It is bordered by Bago Region to the north, Bago Region and Yangon Region to the east and the Bay of Bengal to the south and west. It is contiguous with the Rakhine State in the northwest.

             The region lies between approximately latitude 15° 40' and 18° 30' north and between longitude 94° 15' and 96° 15' east. It has an area of 35,140 square kilometres (13,566 sq mi). The population is more than 6.5 million, making it the most populous of Burma’s states and regions. According to the 2014 Burmese National Census the population of the Ayeyarwady Region was 6,184,829.

             Ayeyarwady Region is flanked by the Rakhine Yoma (Arakan Mountains) range in the west. Large areas have been cleared for paddy cultivation, leading to its preeminent position as the main rice producer in the country, a position it has retained into the 21st century.

             It has also a number of lakes. Of the rivers branching out from the mighty Ayeyarwady, Ngawun, Pathein and Toe are famous.

             The capital city of Ayeyarwady division is Pathein.

             Chaungtha Beach and Ngwesaung Beach are popular resorts for both foreigners and the Burmese. They are in the west of the Ayeyarwady Region, an hour from Pathein city and four hours from Yangon city by road.",
             'division_lat' => '17.034212',
             'division_long' => '95.226669'],

             ['division_Name' => 'Kachin',
             'culture' => "The Kachin: Culture of the mountain lords. One of the problems shaking the state of Myanmar can be found in the ethnic conflicts that have arisen in the wake of the faltering dictatorship. While the majority of the population speaks Burmese, at least one hundred other languages are spoken in the country.The peoples of Kachin (Jingpo: Ga Hkyeng red soil; Burmese: ကခ်င္လူမ်ိဳး; MLCTS: ka. hkyang lu. myui:, pronounced [kətɕɪ̀ɴ lù mjó]), more precisely known as Jingpho Wunpong (Jingpho: Jinghpaw Wunpawng the Confederation of Jingpo) or simply Wunpong (the Confederation), are a confederation of ethnic groups who inhabit the Kachin Hills in northern Myanmar's Kachin State and neighbouring Yunnan Province, China, and Arunachal Pradesh, India. About one million Kachin peoples live in the region. The term Kachin people is often used interchangeably with the main subset, called the Jingpo people in China.

             The Jingpho language common to many of the Kachin has a variety of dialects and is written with a Latin-based script created in the late nineteenth century. A Burmese script version was subsequently developed. The Singhpo dialect is spoken in Northeast India and Jingpho in Southwest China",
             'division_lat' => '26.090160',
             'division_long' => '97.294110'],

             ['division_Name' => 'Kayar',
             'culture' => "Kayah State (Burmese: ကယားပြည်နယ်, pronounced [kəjá pjìnɛ̀] formerly, Karenni State) is a state of Myanmar. Situated in eastern Myanmar, it is bounded on the north by Shan State, on the east by Thailand's Mae Hong Son Province, and on the south and west by Kayin State. It lies approximately between 18° 30′ and 19° 55′ north latitude and between 96° 50′ and 97° 50′ east longitude. The area is 11,670 km2 (4,510 sq mi). Its capital is Loikaw (also spelt Loi-kaw). The estimated population in 1998 was approximately 207,357, according to UNICEF. It is inhabited primarily by the Karenni ethnic group, also known as Red Karen[3] or Kayah, a Sino-Tibetan people.",
             'division_lat' => '14.918030',
             'division_long' => '-17.120319'],

             ['division_Name' => 'Kayin',
             'culture' => "The Karen people, or Kayin as they call themselves, are an ethnic group that lives in Southeast Asia, and one that has their own special language and culture. They are the second largest ethnic group in Burma, comprising around 6-7 million people in that nation alone.The Karen, Kayin, Kariang or Yang people (S'gaw Karen: ကညီကလုာ် pronounced [kɲɔklɯ], Burmese: ကရင္လူမ်ိဳး, pronounced [kəjɪ̀ɴ lù mjó]; Per Ploan Poe or Ploan in Pwo Karen and Pwa Ka Nyaw or Kanyaw in Sgaw Karen; Thai: กะเหรี่ยง are an ethnolinguistic group of Sino-Tibetan language-speaking ethnic groups. The group as a whole is heterogeneous and disparate as many Karen ethnic groups do not associate or identify with each other culturally or linguistically. These Karen groups reside primarily in Kayin State, southern and southeastern Myanmar. The Karen make up approximately 7% of the total Burmese population with approximately five million people.[7] A large number of Karen have migrated to Thailand, having settled mostly on the Thailand–Myanmar border. A few Karen have settled in Andaman and Nicobar islands, India and other South-East Asian and East Asian countries.

             The Karen groups as a whole are often confused with the Padaung tribe, best known for the neck rings worn by their women, but they are just one sub-group of Red Karens (Karenni), one of the tribes of Kayah in Kayah State, Myanmar.

             Some of the Karen, led primarily by the Karen National Union (KNU), have waged a war against the central Burmese government since early-1949. The aim of the KNU at first was independence. Since 1976 the armed group has called for a federal system rather than an independent Karen State. In Thailand, they are usually known as Thai: กะเหรี่ยง; RTGS: 	kariang 'Karen', while in Myanmar, there are known as Kayin.",
             'division_lat' => '17.362810',
             'division_long' => '97.661018'],

             ['division_Name' => 'Chin',
             'culture' => "Chin is the primary ethnic group of the Chin State, who have many related languages, cultures and traditions. According to BBC News, 'The Chin people... are one of the most persecuted minority groups in Burma.' The largest ethnic group of the Chin people are the Zomi. These people predominantly live in the Chin State, Bago Division, Ayeyarwady Division, Magwe Division, Rakhine State and Sagaing Region of Myanmar, but are also spread throughout Burma, Bangladesh and India as refugee. In the 2014 Burmese ethnic census, the Chin ethnicity was again dismissed by the people of the Chin State.

             The name 'Chin' is disputed. During the British era, the British used the compound term 'Chin-Kuki-Mizo' to group the Kukish language speaking people, and the Government of India inherited this.[3] Chin nationalist leaders in Burma's Chin State popularized the term 'Chin' following Burma's independence from Britain.[4] More recently the word Chin has been rejected by some in favor of Zomi.[5] Some Zomi nationalists now consider that Chin would mean subtle Paite domination of Chini, Kuki and Zomi identity, which other groups like Hmars, Zou (Zomi), Anals and Koms may not use.",
             'division_lat' => '37.090252',
             'division_long' => '-95.712868'],

             ['division_Name' => 'Mon',
             'culture' => "The Mon were a major source of influence on the culture of Myanmar. They speak the Mon language, an Austroasiatic language, and share a common origin with the Nyah Kur people of Thailand; they are from the Mon mandala (polity) of Dvaravati.
             Mon State (Burmese: မွန်ပြည်နယ်, pronounced [mʊ̀ɴ pjìnɛ̀]; Mon: တွဵုရးဍုၚ်မန်၊ ရးမညဒေသ) is an administrative division of Myanmar. It lies between Kayin State to the east, the Andaman Sea to the west, Bago Region to the north and Tanintharyi Region to the south, also having a short border with Thailand's Kanchanaburi Province at its south-eastern tip. The land area is 12,155 km2. The Dawna Range, running along the eastern side of the state in a NNW–SSE direction, forms a natural border with Kayin State. Mon State includes some small islands, such as Kalegauk, Wa Kyun and Kyungyi Island, along its 566 km of coastline. The state's capital is Mawlamyine.",
             'division_lat' => '17.062605',
             'division_long' => '97.351654'],

             ['division_Name' => 'Rakhine',
             'culture' => "Rakhine State (/rəˈkaɪn/; Burmese: ရခိုင်ပြည်နယ်; MLCTS: ra.hkuing pranynay, Rakhine pronunciation [ɹəkʰàiɴ pɹènè]; Burmese pronunciation: [jəkʰàiɴ pjìnɛ̀]; formerly Arakan) is a state in Myanmar (Burma). Situated on the western coast, it is bordered by Chin State to the north, Magway Region, Bago Region and Ayeyarwady Region to the east, the Bay of Bengal to the west, and the Chittagong Division of Bangladesh to the northwest. It is located approximately between latitudes 17°30' north and 21°30' north and longitudes 92°10' east and 94°50' east. The Arakan Mountains, rising to 3,063 metres (10,049 ft) at Victoria Peak, separate Rakhine State from central Burma. Off the coast of Rakhine State there are some fairly large islands such as Cheduba and Myingun Island. Rakhine State has an area of 36,762 square kilometres (14,194 sq mi) and its capital is Sittwe.",
             'division_lat' => '19.407780',
             'division_long' => '93.537170'],

             ['division_Name' => 'Shan',
             'culture' => "The majority of Shan are Theravada Buddhists, and the Shan constitute one of the four main Buddhist ethnic groups in Burma; the others are the Bamar, the Mon and the Rakhine. Most Shan speak the Shan language and are bilingual in Burmese.
             The Shan (Shan: တႆး; Shan pronunciation: [táj], Burmese: ရှမ်းလူမျိုး; [ʃán lùmjó]; Thai: ไทใหญ่ or ฉาน; Chinese: 掸族 or 傣族; pinyin: Shànzú, Dǎizú;Pa-O-ဖြဝ်ꩻ) are a Tai ethnic group of Southeast Asia. The Shan live primarily in the Shan State of Burma (Myanmar), but also inhabit parts of Mandalay Region, Kachin State, and Kayin State, and in adjacent regions of China, Laos, Assam (Ahom people) and Thailand.[3] Though no reliable census has been taken in Burma since 1935, the Shan are estimated to number 4–6 million,[1] with CIA Factbook giving an estimate of five million spread throughout Myanmar.[2]

The capital of Shan State is Taunggyi, the fifth-largest city in Myanmar with about 390,000 people. Other major cities include Thibaw (Hsipaw), Lashio, Kengtung and Tachileik.",
'division_lat' => '25.232281',
    'division_long' => '100.306061'],




        ]);
    }
}
