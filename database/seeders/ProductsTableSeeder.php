<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $this->fillBlackTea();
        $this->fillFruitGrassTea();
        $this->fillGreenTea();
        $this->fillGreenAddsTea();
        $this->fillRooibusTea();
        $this->fillWhiteTea();
    }

    private function fillBlackTea()
    {
        $category = DB::table('categories')->where('name', 'black')->value('id');

        DB::table('products')->insert([
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'jamira-tgfop',
                'title' => 'Джамира TGFOP',
                'price' => 430,
                'country' => 'Индия',
                'taste' => 'Пряный, Фруктовый',
                'compound' => 'Мед, Чернослив',
                'description' => 'Джамира TGFOP, чай, выращенный на одноименной плантации Джамира, практически на границе 
                    с Бангладеш, – классический представитель черного чая из индийского региона Ассам. 
                    В этом регионе произрастает ассамский подвид чайного куста Камелии. Он чуть выше и мощнее, 
                    а чайные листья жесткие, мясистые. Это связано с климатом, типичным для этой местности: 
                    повышенная влажность, очень высокие температуры на протяжении суток, много солнца и вместе 
                    с тем много дождей – все это способствует богатому чайному урожаю.
                    
                    Джамира TGFOP содержит повышенное количество типсов, чайных почек, имеющих в сухой заварке желтоватый цвет, 
                    что характерно для ассамских сортов, и состоит из молодых листьев, что подтверждается его принадлежностью 
                    к категории TGFOP согласно стандартам качества чая. Аббревиатуру можно расшифровать следующим образом – Tippy 
                    Golden Flowery Orange Pekoe, «цельнолистовой чай с повышенным содержанием золотых типсов». Все чаи, относящиеся 
                    к этой и более высоким категориям, шутники иногда трактуют как «Too Good For Ordinary People» – «слишком хорошие 
                    для обычных людей». Но мы выступаем за высокую чайную культуру быта, а также ратуем за то, что обычных людей 
                    не бывает, как и обычных сортов чая. Каждый из них и из нас отличается своими уникальными характеристиками.
                    
                    Так, Джамиру легко можно идентифицировать благодаря ясно ощущаемым ноткам солода и меда, специевости во вкусе 
                    и длинному фруктовому послевкусию. Аромат Джамиры TGFOP пряный, приятный и слабовыраженный, что в принципе 
                    свойственно ассамским сортам, содержащим меньшее количество альдегидов, органических соединений, влияющих 
                    на ароматические свойства чая, но большее количество танинов. Танины – это фенольные соединения природного 
                    происхождения, относятся к дубильным веществам (отсюда это чуть вяжущее послевкусие от ассамских чаев), 
                    они обладают противовоспалительными свойствами и являются натуральным антиоксидантом.',
                'image' => 'img/catalog/black/1/2a0d4fbc773bfeb0cc5d3c268e3a3e26.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'rukeri',
                'title' => 'Рукери',
                'price' => 320,
                'country' => 'Руанда',
                'taste' => 'Сухофрукты, Солодовый',
                'compound' => 'Абрикос',
                'description' => 'Маленькую африканскую страну Руанду часто называют «землей тысячи холмов». 
                    Холмистый ландшафт, влажный субэкваториальный климат и плодородная почва создали прекрасные 
                    условия для выращивания чая. В долине на северо-западе страны расположена плантация Рукери, 
                    на которой уже полвека выращивают высококачественный чай. Мы завозим руандийский чай, собранный 
                    летом и обработанный по стандарту ОР, – крупные, плотно скрученные чаинки из первого 
                    (верхушечного) и второго (через один лист после верхушки) листа с добавлением типсов – нераспустившихся 
                    листовых почек чайного куста, ценящихся как элитное сырье.
                    
                    
                    Напиток обладает характерными для черного чая горчинкой и терпкостью, а также солодовыми нотами 
                    со сладкими медовыми тонами. Во вкусе настоя чувствуются и оттенки высушенных фруктов. 
                    Черный чай Рукери очень полюбился нашему партнеру из Германии, который много путешествует 
                    и однажды случайно обнаружил плантацию во время велопробега по Руанде. Так в ассортименте «Чайной лавки» 
                    и появился этот удивительный напиток. Мы рекомендуем заваривать Рукери горячей, но не кипящей водой 3–4 минуты 
                    и пить его в первой половине дня. Чай прекрасно тонизирует, придает жизненных сил, улучшает самочувствие.',
                'image' => 'img/catalog/black/2/32f73f6e10306898f103d421711b2c15.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'xin-hou',
                'title' => 'Цзинь Хоу (Золотая Обезьяна)',
                'price' => 645,
                'country' => 'Китай',
                'taste' => 'Сухофрукты',
                'compound' => 'Мед, Хлеб',
                'description' => 'Красный чай Цзинь Хоу родом из провинции Фуцзянь. История производства красных чаев здесь насчитывает много веков. 
                    По особой местной технологии чайные листья высушивают на солнце, а затем поджаривают на открытом огне, из-за чего 
                    к тонкому аромату напитка добавляются копченые нотки.
                    
                    «Цзинь Хоу» означает «золотоволосая обезьяна»: специальная долевая скрутка придает листьям чая волнистую форму, 
                    напоминающую свернутую в клубок обезьяну. А золотым этот чай назван за покрытые переливающимся бархатным ворсом 
                    типсы, выделяющиеся на фоне бурых листьев. Стоит заметить, что для производства Цзинь Хоу используется отборное 
                    сырье.
                    
                    Титестер «Чайной лавки» старается найти лучшего представителя этого чая, который при заварке раскроет для вас 
                    свои удивительные свойства. Наш Цзинь Хоу сочетает утонченный аромат с крепостью настоя, богатым и полным вкусом 
                    с хлебными оттенками и фруктовыми нотами. После каждого глотка настой, который обладает глубоким золотисто-красным 
                    цветом, оставляет многогранное послевкусие.',
                'image' => 'img/catalog/black/3/e17425a8fa502a12c28dea55f79cf880.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    private function fillFruitGrassTea()
    {
        $category = DB::table('categories')->where('name', 'fruit-grass')->value('id');

        DB::table('products')->insert([
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'orange-and-ginger',
                'title' => 'Апельсин с Имбирем',
                'price' => 430,
                'country' => 'Германия',
                'taste' => 'Цитрусовый',
                'compound' => 'Ройбуш, Яблоко, Чай зеленый, Кардамон, Корица, Апельсиновая цедра, Тулси трава, Перец розовый',
                'description' => 'Чай яркий, цитрусовый и согревающий. По-разному раскрывается, но одинаково хорош в горячем и в холодном виде.',
                'image' => 'img/catalog/fruit-grass/1/b3d31798f6632d81f9f619b262839555.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'thai-blue',
                'title' => 'Тайский «синий» чай',
                'price' => 475,
                'country' => 'Тайланд',
                'taste' => 'Травяной, Цветочный',
                'compound' => 'Анчан',
                'description' => 'Синий чай – это напиток из высушенных бутонов клитории тройчатой (Clitoria ternatea). Это травяной чай 
                    с удивительным набором полезных свойств и не содержащий кофеина.
                    
                    В России этот чай приобрел известность благодаря Таиланду, поэтому у нас его знают больше как тайский 
                    синий чай или анчан, но произрастает он на всей территории Юго- Восточной Азии.
                    
                    Напиток изумительного ярко-синего цвета настоя с мягким вкусом, легкими нотами варенной кукурузы, 
                    свежей травы и зеленого горошка.
                    
                    Попробуйте анчан с лимоном – изменится не только вкус, но и цвет! Поэтому для его приготовления 
                    лучше всего использовать прозрачную стеклянную посуду.
                    
                    Анчан известен под множеством имен - Чанг Шу, голубиные крылья, мотыльковый горошек, тайская синяя орхидея.
                    
                    Чем дольше вы завариваете, тем интенсивнее будет цвет, также на интенсивность цвета влияет и температура заваривания. Но мы рекомендуем использовать горячую воду и экспериментировать с временем настоя.
                    
                    Анчан также можно добавлять в различные купажи – смешивать его с гибискусом, мятой, имбирем, медом и находит 
                    всё новые вкусные и эффектно выглядящие сочетания.
                    
                    Также существует множество рецептов блюд с добавлением цветов анчана.
                    
                    Анчан содержит фосфор, железо, марганец, витамины B, D, К и С, а также кальций и цинк.',
                'image' => 'img/catalog/fruit-grass/2/41f7926e946ace92743764307c94304c.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'ivan-chai',
                'title' => 'Иван-Чай',
                'price' => 260,
                'country' => 'Россия',
                'taste' => 'Травяной',
                'compound' => 'Иван-чай',
                'description' => 'Иван-чай в первую очередь – это напиток для нормализации сна, успокоения нервной системы, снятия напряжения и 
                    стресса. Стакан травяного чая перед сном поможет организму расслабиться, быстрее войти в сон. Врачи рекомендуют пить Иван-Чай при головных болях и мигренях. В периоды вспышек гриппа иван-чай помогает повысить сопротивляемость организма.
                    
                    Этот напиток может быть очень востребованным для поклонников здорового образа жизни - он не содержит кофеина.
                    
                    Мы долго искали и много дегустировали, чтобы найти самый лучший Иван-Чай, чтобы это был тот самый напиток, 
                    который соответствовал бы нашим высоким требованиям к качественному чаю. Идеальный вариант был найден в... Якутии! 
                    Этот уникальный продукт изготавливается на современном производстве полного цикла, которое стартовало в 2016 году 
                    при поддержке штаба технологов и ученых.
                    
                    Выбранный нами Якутский Иван-Чай обладает приятным вкусом с бодрящей кислинкой и долгим, слегка сладковатым 
                    послевкусием.
                    
                    Напиток получается очень душистым с многогранным ароматом, напоминающий о цветочных полях поздним летом. 
                    И настой отличный – прозрачный, приятно желтоватый.',
                'image' => 'img/catalog/fruit-grass/3/bcee246b102ea96ed10b22f4137e497e.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    private function fillGreenTea()
    {
        $category = DB::table('categories')->where('name', 'green')->value('id');

        DB::table('products')->insert([
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'monkey-king',
                'title' => 'Жасмин Манки Кинг',
                'price' => 260,
                'country' => 'Китай',
                'taste' => 'Солодовый, Цветочный',
                'compound' => 'Жасмин, Зеленый чай',
                'description' => 'Красный чай Цзинь Хоу родом из провинции Фуцзянь. История производства красных чаев здесь насчитывает много веков. 
                    П«Жасмин Манки Кинг» известен как один из самых древних и популярных сортов зеленого чая с высокогорных плантаций 
                    провинции Хунань. Этот сорт считается классическим зеленым чаем с добавлением жасмина.
                    
                    Листья для этого чая собирают весной. После сбора и предварительной сушки их оставляют храниться до поры 
                    цветения жасмина в середине лета. В отличие от европейского подхода, где ароматизирующие компоненты добавляют, 
                    чтобы замаскировать изъяны чайного сырья, китайские мастера используют ароматизацию как способ облагородить и 
                    раскрыть вкус чая в полной мере.
                    
                    Для ароматизации «Манки Кинг» выращивают особый вид жасмина. Его цветки плотно закрыты в течение дня и 
                    раскрываются лишь к ночи, когда температура спадает. Этот процесс сопровождается приглушенным «лопающимся» звуком, 
                    который и является для сборщиков сигналом к действию.
                    
                    Просушенные листья и жасмин смешивают при определенной температуре и оставляют на некоторое время, чтобы чай 
                    мог абсорбировать аромат. Этот процесс может занимать от нескольких часов до нескольких дней, в зависимости 
                    от желаемой интенсивности аромата. Затем цветы жасмина убирают, а чай просушивают еще раз, чтобы освободить 
                    его от лишней влаги. Цветы жасмина используют в дальнейшем для украшения или ароматизации более дешевых сортов чая.
                    «Манки Кинг» дает золотистый настой, пряный вкус, легкий аромат и обладает прекрасными тонизирующими свойствами.
                    Мы постоянно взаимодействуем с производителями чая с целью улучшения продукта. Благодаря этому «Манки Кинг», 
                    изготавливаемый для «Унции», с недавних пор обрел более утонченный аромат и элегантный вид.',
                'image' => 'img/catalog/green/1/41dbf26412c1384a954c980a972af226.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'nine-dragons',
                'title' => 'Девять Драконов',
                'price' => 460,
                'country' => 'Китай',
                'taste' => 'Сладкий, Травяной, Цветочный',
                'compound' => 'Мед, Хмель, Одуванчик',
                'description' => '«Девять драконов» – чай, собранный и приготовленный на горных плантациях провинции Фуцзянь.
                    Сбор листьев для производства этого сорта начинается ранней весной, когда почки молодых побегов 
                    чайного куста набухают и появляются первые листики. Способ, которым собирают урожай для производства 
                    чая «Девять драконов», называется Мао Фен. При этой технологии с чайной флеши снимают нераскрывшиеся 
                    почки и прилегающие к ним два листа одинаковой длины. Благодаря такому отбору чай «Девять драконов» 
                    состоит из типсов и цельных листьев одного размера с ясно различимыми прожилками. Именно в типсах 
                    и прилегающих листьях содержится больше всего полезных веществ.
                    
                    Сбор листьев начинается на рассвете, а деликатная обработка происходит в тот же день. Сразу после сбора 
                    каждый лист вручную скручивают вдоль и слегка просушивают на солнце. Затем листья в течение некоторого 
                    времени томятся в сушильных котлах на углях.
                    
                    Несмотря на мягкую обработку, чай «Девять драконов» отличается крепостью и ароматностью настоя. Этими свойствами 
                    сорт обязан высокому содержанию альдегидов – ароматических веществ, активно участвующих в формировании чайного 
                    букета.
                    
                    «Девять драконов» дает светлый золотистый настой со сложным многообразным вкусом. Центральное место занимают 
                    сладковатые цветочно-медовые ноты. Чай имеет продолжительное послевкусие с оттенками нот липового меда.',
                'image' => 'img/catalog/green/2/958fc64e432bb101eecca0dce1cb87b5.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'lun-xin',
                'title' => 'Лун Цзин',
                'price' => 755,
                'country' => 'Китай',
                'taste' => 'Ореховый, Цветочный',
                'compound' => 'Свежий миндаль, Копчение на огнедуванчик',
                'description' => 'Лун Цзин (кит. трад. 龍井茶, пиньинь lóngjǐngchá, кит. – «Колодец Дракона») – непревзойденный зеленый чай 
                    из китайской провинции Чжецзян. Этот чай является достоянием китайской чайной культуры и вместе с еще девятью 
                    сортами составляет список «Знаменитые Чаи Китая».
                    
                    В «Унции» представлен Лун Цзин высочайшего стандарта. Листья для его приготовления собирают на плантации 
                    Си-Ху, на невысоких холмах вблизи исторической родины этого сорта. Сбор листьев происходит несколько раз в год. 
                    Для нашего чая используется самый ценный весенний урожай. Весенний Лу Цзин отличается от более поздних нежным 
                    пушком на тыльной стороне чаинок. Эти ворсинки бывают только у самых молодых и нежных листиков, и именно их 
                    используют для изготовления Лун Цзина высокого качества.
                    
                    Для приготовления сорта Лун Цзин берут первый, второй и третий листы чайного куста. Их аккуратно собирают 
                    вручную и оставляют на восемь часов на открытом воздухе, чтобы дать им немного увять. Затем сырье отправляют 
                    на обжарку. Обжарка Лун Цзин является крайне трудоемким процессом, во многом определяющим его высокую стоимость.
                    
                    Обжаривают Лун Цзин в специальных чанах. Их предварительно нагревают до нужной температуры, а затем вручную 
                    проводят каждым листиком по горячей поверхности. Эта процедура требует особого мастерства. Из листьев должна 
                    уйти вся лишняя влага, но при этом они не должны стать пережженными. Благодаря обжарке листья Лун Цзин приобретают 
                    также свою необычную плоскую форму, которую китайцы называют «воробьиными язычками».
                    
                    Лун Цзин дает насыщенный изумрудный настой. Во вкусе преобладает мягкая цветочная нота, обрамленная орехово-миндальными оттенками.
                    Лун Цзин обладает насыщенным фруктовым ароматом и продолжительным послевкусием. Наряду с сортами Те Гуань Инь, Бай Хоу и Пу Эр,
                    Лун Цзин является одним из самых востребованных китайских чаев в мире.',
                'image' => 'img/catalog/green/3/682b64c7106cad070c3dda6c9e4fe7df.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    private function fillGreenAddsTea()
    {
        $category = DB::table('categories')->where('name', 'green-adds')->value('id');

        DB::table('products')->insert([
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'berry-smuss',
                'title' => 'Ягодный Смусс',
                'price' => 170,
                'country' => 'Россия',
                'taste' => 'Цветочный, Ягодный',
                'compound' => 'Ежевика, Смородина красная, Смородина черная, Чай зеленый, Лимон, Лемонграсс',
                'description' => 'Более привычно сочетать в смуссе фрукты, ягоды и молоко или сок, но мы не удержались и решили 
                    поэкспериментировать с чаем в качестве его основы. Ягодный смусс вообще ценен своей легкостью, 
                    свежестью и приятным вкусом. Наш «Ягодный смусс» по своим вкусовым качествам такой же тонизирующий, 
                    заряжающий бодростью и энергией и обладающий рядом полезных качеств. Основная его направленность – это 
                    поддержка иммунитета. И черная и красная смородина содержат большое количество витаминов, и в первую 
                    очередь витамин С, который помогает в борьбе с сезонными вирусами и простудами. Ежевика очень полезна 
                    для профилактики сердечно-сосудистых заболеваний. Богатая железом и калием, она укрепляет стенки сосудов, 
                    понижает давление, выводит излишки жидкости из организма.
                    
                    Корочки лимона и лимонная трава делают напиток освежающим, расставляя яркие вкусовые акценты, за которые 
                    подобные смусси и пользуются заслуженной популярностью.',
                'image' => 'img/catalog/green-adds/1/85f4845254af62669c613145b22b937d.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'mango',
                'title' => 'Настроение Манго',
                'price' => 195,
                'country' => 'Россия',
                'taste' => 'Цветочный, Ягодный',
                'compound' => 'Чай зеленый, Ноготки, Сафлор, Ананас, Папайя, Клубника',
                'description' => 'Этот яркий чай очень легко отличить от других зеленых чаев с добавками. Сочетание папайи и ананаса 
                    делают вкус чая красочным и незабываемым.
                    
                    В отсутствие возможности путешествовать «Настроение Манго» пусть на мгновение, но отправит вас 
                    в экзотические страны. Клубника как будто немного выбивается из ряда иноземных составляющих, 
                    но на самом деле именно ее наличие в «Настроении Манго» объясняет нежный и чуть ласкающий вкус чая. 
                    Клубника смягчает пронзительность экзотических фруктов и добавляет чаю легкости и спокойствия.
                    Как и во всех чаях, в «Настроении Манго» тоже не обошлось без пользы для здоровья: сафлор, волшебный 
                    и живительный, благотворно влияет на состояние сердечно-сосудистой системы, смягчает боль, а также 
                    тонизирует и заряжает бодростью. Ноготки или, как их иначе называют, календула, обладают бактерицидными 
                    и противовоспалительными свойствами, а ананас, богатый витаминами, насыщает организм полезными веществами. 
                    Несмотря на всю простоту этого чая, в нем есть немного загадки. Достаточно вспомнить название чая, а потом 
                    перечислить все, входящее в состав. Казалось бы, при чем здесь манго? Вот еще один из бесчисленного множества 
                    странных вопросов, над которым можно задуматься за чашкой «Настроения Манго».',
                'image' => 'img/catalog/green-adds/2/e20b50961174b50f147d29db1e900d45.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'impress-secret',
                'title' => 'Секрет Императрицы',
                'price' => 280,
                'country' => 'Россия',
                'taste' => 'Фруктовый, Цветочный',
                'compound' => 'Вишня, Чай зеленый, Мальва, Роза, Ананас, Лемонграсс',
                'description' => 'Сенча, лежащая в основе напитка, – это зеленый чай, отличие которого состоит в его обработке. 
                    Листочки чая, только-только собранные, нежно пропариваются, а не прожариваются, как остальные сорта. 
                    Поэтому чай сохраняет свой первородный, немного травяной вкус. Часто сенчу используют в составе 
                    сложносочиненных купажей, так как она обладает удивительным свойством подчеркивать вкус других компонентов.
                    
                    «Секрет императрицы» заключается в ее способности преображаться. Кусочки ананаса и вишни своими 
                    экзотическими свежими нотками украшают вкус чая, а цветы, призванные радовать нас красотой, придают этому 
                    чаю смысл. Например, лепестки роз, немного различимые в аромате, – это прекрасное противовоспалительное 
                    средство, а цветки мальвы способны избавить от кашля. Лимонная трава же соединяет все компоненты, венчая 
                    их вкус, и придает чаю некую пряную пикантность.
                    Переменчивость вкуса и аромата тоже является отличительной чертой этого чая. В зависимости от вашего 
                    настроения этот чай то будет ласкать вас мягким, спокойным ароматом и сладковатым послевкусием, то вдруг 
                    проявит свои цветочные нотки и бодрящий, освежающий вкус уже в первом глотке.',
                'image' => 'img/catalog/green-adds/3/2838cb45e5d7cfcc6a13fffce8e57b0c.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    private function fillRooibusTea()
    {
        $category = DB::table('categories')->where('name', 'rooibus')->value('id');

        DB::table('products')->insert([
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'rooibus-tropic-lemon',
                'title' => 'Ройбуш Тропик-Лимон',
                'price' => 180,
                'country' => 'Россия',
                'taste' => 'Цитрусовый, Ягодный',
                'compound' => 'Ройбуш, Ананас, Лимон, Папайя, Лемонграсс',
                'description' => '«Ройбуш Тропик-Лимон» вполне корректно сравнить с готовым легким безалкогольным тропическим коктейлем. 
                    Сладковатые ноты ройбуша переплетаются с терпкостью лимонных цукатов, папайя и кусочки ананаса придают 
                    напитку капельку экзотики. Лимонная трава не имеет ничего общего с лимоном, но обладает схожими вкусовыми 
                    характеристиками – яркая кислинка во вкусе тонизирует и освежает, в то время как само это растение неплохо 
                    воздействует на память и помогает концентрации внимания. Способность освежать и утолять жажду присуща и самому 
                    ройбушу, содержание в котором витаминов и антиоксидантов награждает его множеством полезных свойств – от 
                    противовоспалительных и антисептических до способности положительно влиять на нервную систему.
                    
                    Немного противоречивый, но правдивый факт: утром ройбуш помогает проснуться и взбодриться, вечером не вызывает 
                    бессонницу, а напротив, дает возможность регулировать сон.',
                'image' => 'img/catalog/rooibus/1/d3d1359e2f86ddd7f075277f9868ef9c.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'rooibus-barb-raspberry',
                'title' => 'Ройбуш Барбарис-Малина',
                'price' => 205,
                'country' => 'Россия',
                'taste' => 'Ягодный',
                'compound' => 'Ройбуш, Малина, Папайя, Ноготки',
                'description' => 'Этнический южноафриканский напиток ройбуш, сам по себе легкий и фруктовый, служит отличной основой для ягод, 
                    фруктов и цветов. Малина дополняет вкус напитка теплотой и пряностью, ноготки благодаря своему пикантному 
                    вкусу придают остроты и кислинки, а кубики папайи, тропические и изысканные, делают конечный вкус напитка 
                    богатым и насыщенным.
                    
                    Помимо превосходных органолептических свойств, «Ройбуш Барбарис-Малина» обладает рядом полезных качеств, 
                    которые особенно ярко проявляются в тот период, когда многие из нас подвержены простудным заболеваниям. 
                    Малина, кроме того, что полезна при заболеваниях желудочно-кишечного тракта, проблемах с почками и повышенным 
                    давлении, является отличным жаропонижающим средством, лепестки ноготков помогают бороться с воспалениями, а папайя 
                    своими экзотическими нотками во вкусе напоминает о том, что солнечное время года обязательно случится.',
                'image' => 'img/catalog/rooibus/2/d9af2bfd60ffadb00ccd23f76e4737b5.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'rooibus-blackbery',
                'title' => 'Ройбуш Черничный',
                'price' => 265,
                'country' => 'Россия',
                'taste' => 'Ягодный',
                'compound' => 'Ройбуш, Черника, Васильки, Можжевельник ягоды',
                'description' => 'Экзотический бескофеиновый напиток ройбуш уникален своим запоминающимся вкусом с естественной сладостью, 
                    тонким ароматом и лечебными свойствами. Фруктово-цветочные ноты этого африканского чая придают напитку приятную 
                    свежесть с едва различимой кислинкой. С мягким тоном ройбуша приятно сочетаются ягодная нота черники и пряность 
                    можжевельника. Можжевеловые ягоды подарили напитку сосновые, солодовые оттенки вкуса. Сладковатый ройбуш, 
                    насыщенный аромат ягод и хвойная тонкость послевкусия составили этот изысканный купаж, в котором нет ничего лишнего.
                    
                    Ройбуш считался волшебным лекарством еще древними африканскими племенами, когда его наделяли магическими 
                    свойствами – он содержит аскорбиновую кислоту, множество антиоксидантов. Черника богата витаминами 
                    группы В1, В2, А, С, различными кислотами, в том числе пантотеновой, которая помогает бороться со стрессом 
                    и усталостью. Эта ягода, прозванная в народе «молодильной», сохраняет все свои полезные свойства и в сушеном виде.
                    
                    Напиток обладает тонизирующим, укрепляющим иммунитет действием, способствует приливу сил, при этом не вызывая 
                    учащенного сердцебиения или бессонницы благодаря отсутствию кофеина и малому содержанию танина.',
                'image' => 'img/catalog/rooibus/3/a4e0d2c08fc19190bd788ff0496b2aa0.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    private function fillWhiteTea()
    {
        $category = DB::table('categories')->where('name', 'white')->value('id');

        DB::table('products')->insert([
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'bai-mu-dan',
                'title' => 'Бай Му Дань',
                'price' => 615,
                'country' => 'Китай',
                'taste' => 'Сухофрукты, Травяной',
                'compound' => 'Курага, Чернослив',
                'description' => 'Бай Му Дань – популярный белый чай, произрастающий близ города Фудин китайской провинции Фуцзянь. 
                    Этот белый чай из нового урожая обладает освежающим травянистым вкусом с легкими оттенками фруктов 
                    и кураги. Бай Му Дань дает светлый золотистый настой с легким травянистым ароматом.
                    
                    Для этого сорта вручную собирают первый, второй, третий листья нового чайного побега. В производство 
                    идут уже достаточно развившиеся листья и почки весеннего урожая. Листья чуть подвяливают, скручивают 
                    вдоль и высушивают.
                    
                    Благодаря лишь символической ферментации белый чай по полезным свойствам и содержанию витаминов наиболее 
                    близок к живому листу чайного дерева. Поэтому белый чай является мощным антиоксидантом, очищает организм 
                    и укрепляет сердечно-сосудистую систему.',
                'image' => 'img/catalog/white/1/2b39b0bbad61007837caf22be3e1185a.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            [
                'category' => $category,
                'count' => $count = random_int(0, 10),
                'available' => $count != 0,
                'name' => 'in-zhen',
                'title' => 'Инь Чжень',
                'price' => 970,
                'country' => 'Китай',
                'taste' => 'Травяной, Цветочный',
                'compound' => 'Орхидея, Виноград',
                'description' => 'Инь Чжень – высококлассный чай, изготавливаемый специально для "Чайной лавки" на небольшой аутентичной плантации 
                    Ченгуан в китайской провинции Хуннань. Именно этот сорт считается в Китае высочайшим стандартом белого чая. 
                    Ежегодно плантация производит всего несколько сотен килограммов Инь Чжень, и мы полностью выкупаем его урожай.
                    Инь Чжень состоит только из типсов – верхних почек нового чайного побега. Именно в них содержится наибольшее 
                    количество витаминов, полезных микроэлементов и веществ, определяющих вкус и аромат чая. Поэтому типсы ценятся 
                    больше всего при производстве белых чаев.
                    
                    Каждую весну чайные почки собирают вручную. Затем их подвяливают и сразу же отправляют на сушку. Такая символическая
                    обработка позволяет сохранить легкий освежающий вкус чайного листа. Готовый Инь Чжэнь состоит из светло-зеленых, 
                    покрытых едва-заметным пушком листиков. Нежный белый ворс является признаком высококачественного сырья в основе 
                    Инь Чжень.
                    
                    Инь Чжень дает светлый настой с мягким освежающим ароматом. При этом чай обладает ярким многогранным вкусом. 
                    В нем можно различить цветочную, виноградную, фруктовую и даже пряную нотки. Восхитительный вкус этого сорта 
                    обусловлен в том числе и высочайшими экологическими стандартами, введенными на плантации Ченгуан. Хозяйство 
                    использует только ручной труд, традиционные методы обработки листьев и исключительно натуральные удобрения.',
                'image' => 'img/catalog/white/2/011ad0bcc68511a338f36eff76dc8b7f.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}