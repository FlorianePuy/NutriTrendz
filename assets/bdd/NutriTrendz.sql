SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET
    time_zone = "+00:00";

USE nutritrendz;

CREATE TABLE
    IF NOT EXISTS `categories` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
    );

INSERT INTO
    `categories` (`name`)
VALUES
    ('Alimentation équilibrée les bases'),
    ('Groupes alimentaires'),
    ('Macronutriments '),
    ('Micronutriments'),
    ('Aliments fonctionnels'),
    ('Gestion du poids'),
    ('Allergies et intolérances alimentaires'),
    ('Groupes alimentaires'),
    ('Alimentation et bien-être'),
    ('Alimentation et performance sportive'),
    ('Conseils pratiques et astuces');

CREATE TABLE
    IF NOT EXISTS `articles` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `category_id` int (11) NOT NULL,
        `title` varchar(255) NOT NULL,
        `content_long` text NOT NULL,
        `content_short` text NOT NULL,
        `image` varchar(255) DEFAULT NULL,
        PRIMARY KEY (`id`),
        KEY `category_id` (`category_id`),
        FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
    );

INSERT INTO
    `articles` (
        `category_id`,
        `title`,
        `content_long`,
        `content_short`,
        `image`
    )
VALUES
    (
        1,
        'Le Mythe des Régimes à la Mode : Démystification et Réalité',
        'Dans la quête incessante d''une alimentation saine et équilibrée, il est facile de se perdre parmi les innombrables régimes à la mode vantant des promesses de perte de poids rapide et de santé optimale. Du régime cétogène au régime paléo en passant par le jeûne intermittent, chaque approche semble offrir la clé du bien-être. Mais qu''en est-il vraiment de ces régimes ? Sont-ils véritablement efficaces et sûrs pour notre santé ?

Le Piège de la Pensée Simpliste : Une Approche Holistique de la Nutrition

Avant d''examiner de près les différents régimes à la mode, il est important de comprendre que la nutrition est un domaine complexe et multifactoriel. Adopter une approche simpliste en se concentrant uniquement sur un aspect de notre alimentation peut conduire à des résultats décevants et potentiellement dommageables pour notre santé globale. Au lieu de cela, une approche holistique de la nutrition, mettant l''accent sur la variété, l''équilibre et la modération, est recommandée par de nombreux experts en santé.

Le Mythe de la Perte de Poids Rapide : Les Limites du Cétogène et du Paléo

Le régime cétogène, caractérisé par une consommation très faible en glucides et une forte proportion de graisses, a gagné en popularité ces dernières années pour sa capacité à entraîner une perte de poids rapide. Cependant, les preuves scientifiques soutenant ses bienfaits à long terme sur la santé sont limitées, et son effet sur le cholestérol et la santé cardiovasculaire fait l''objet de débats.
De même, le régime paléo, basé sur une alimentation similaire à celle de nos ancêtres de l''âge de pierre, met l''accent sur la consommation de viandes maigres, de fruits, de légumes et de noix, tout en évitant les céréales et les produits laitiers. Bien que ce régime puisse favoriser une alimentation plus saine en encourageant la consommation d''aliments non transformés, son impact à long terme sur la santé reste à déterminer.

Le Jeûne Intermittent : Entre Mythe et Réalité

Le jeûne intermittent, une pratique consistant à alterner entre des périodes de jeûne et des périodes de repas, est souvent présenté comme une solution miracle pour perdre du poids et améliorer la santé métabolique. Bien qu''il puisse entraîner une perte de poids à court terme en réduisant l''apport calorique, ses effets à long terme sur la santé restent sujets à débat. Des études suggèrent que le jeûne intermittent peut avoir des avantages potentiels pour la santé métabolique et la longévité, mais des recherches supplémentaires sont nécessaires pour confirmer ces conclusions et comprendre pleinement ses effets sur le corps humain.

Conclusion : Cultiver une Relation Saine avec la Nutrition

Face à la prolifération des régimes à la mode, il est crucial de faire preuve de discernement et de ne pas succomber aux promesses de perte de poids rapide et de santé optimale. Au lieu de cela, nous devrions nous efforcer de cultiver une relation saine avec la nourriture, en adoptant une approche équilibrée et variée qui répond à nos besoins individuels en matière de santé et de bien-être. En fin de compte, la clé d''une alimentation saine et durable réside dans la modération, la diversité et le plaisir de manger.
',
        'Découvrez la vérité sur les régimes populaires dans notre dernier article nutrition. Des régimes cétogène au jeûne intermittent, nous explorons leurs promesses et réalités. Démêlons les mythes de la perte de poids rapide et adoptons une approche saine et équilibrée de la nutrition. Rejoignez-nous pour une relation durable avec la nourriture et des objectifs de santé réalistes.',
        'myths-diet.png'
    ),
    (
        10,
        'Les Aliments Superstars : Quels Aliments Ajouter à Votre Assiette pour une Meilleure Santé ?',
        'Les aliments que nous choisissons d''ajouter à notre assiette jouent un rôle crucial dans notre santé globale et notre bien-être. Certains aliments, appelés "aliments superstars", se distinguent par leur densité nutritionnelle exceptionnelle et leur capacité à fournir une large gamme de nutriments essentiels pour soutenir une santé optimale. Parmi ces superaliments figurent les légumes verts à feuilles, tels que les épinards et le kale, qui regorgent de vitamines, de minéraux et d''antioxydants bénéfiques pour la santé. Les baies, comme les fraises, les myrtilles et les framboises, sont également des champions nutritionnels, riches en antioxydants qui aident à lutter contre les dommages causés par les radicaux libres et à protéger les cellules du corps. De plus, les grains entiers, comme l''avoine, le quinoa et le riz brun, sont des sources importantes de fibres alimentaires, de protéines et de nutriments essentiels tels que le magnésium et le fer. En incorporant ces aliments superstars dans votre alimentation quotidienne, vous pouvez renforcer votre système immunitaire, améliorer votre digestion, favoriser la santé cardiaque et même réduire le risque de certaines maladies chroniques, telles que le diabète de type 2 et les maladies cardiovasculaires. Que vous les ajoutiez à vos smoothies du matin, les intégriez dans vos salades, ou les utilisez comme ingrédients pour des repas sains et délicieux, les aliments superstars peuvent être une clé pour une meilleure santé et une vie plus énergique. Explorez notre guide complet pour découvrir une variété d''aliments superstars et des conseils pratiques pour les incorporer dans votre alimentation quotidienne, et commencez votre voyage vers une meilleure santé dès aujourd''hui !',
        'Découvrez les aliments superstars qui peuvent transformer votre assiette et améliorer votre santé ! Des aliments riches en nutriments essentiels, comme les légumes verts à feuilles, les baies antioxydantes et les grains entiers, peuvent fournir une foule de bienfaits pour la santé, de la prévention des maladies au renforcement du système immunitaire. Suivez notre guide pour en savoir plus sur ces superaliments et comment les intégrer dans votre alimentation quotidienne.',
        'les-aliments-superstars-quels-aliments-ajouter-à-votre-assiette-pour-une-meilleure-santé.png'
    ),
    (
        9,
        'Le Véritable Impact des Compléments Alimentaires',
        'Les compléments alimentaires font désormais partie intégrante de notre routine quotidienne pour beaucoup d''entre nous. De la vitamine D pour renforcer nos os, au zinc pour stimuler notre système immunitaire, en passant par les probiotiques pour équilibrer notre microbiote intestinal, il semble y avoir un supplément pour tout. Mais quelle est la véritable efficacité de ces compléments alimentaires et quel est leur impact sur notre santé ?

Commençons par clarifier une chose : les compléments alimentaires ne sont pas censés remplacer une alimentation équilibrée. Ils sont conçus pour compléter notre alimentation en fournissant des nutriments supplémentaires que nous pourrions ne pas obtenir en quantité suffisante par le biais de notre alimentation seule. Cependant, il est important de noter que tous les compléments alimentaires ne sont pas créés égaux, et leur efficacité peut varier en fonction de plusieurs facteurs.

Prenons par exemple la vitamine D, souvent appelée "vitamine du soleil" car notre corps la produit lorsqu''il est exposé à la lumière du soleil. Cependant, de nombreuses personnes souffrent de carences en vitamine D, surtout en hiver lorsque l''exposition au soleil est limitée. Dans ce cas, un complément de vitamine D peut être bénéfique pour soutenir la santé des os et du système immunitaire.

De même, les probiotiques sont devenus de plus en plus populaires pour leur capacité à favoriser une bonne santé digestive en soutenant un microbiote intestinal équilibré. Des études ont montré que les probiotiques peuvent aider à soulager les symptômes du syndrome du côlon irritable, à réduire l''inflammation intestinale, et à renforcer l''immunité.

Cependant, il est important de noter que tous les compléments alimentaires ne sont pas soutenus par des preuves scientifiques solides. Certains peuvent avoir des effets secondaires indésirables ou interagir avec certains médicaments. C''est pourquoi il est crucial de consulter un professionnel de la santé avant de commencer un nouveau complément alimentaire, surtout si vous avez des problèmes de santé préexistants ou si vous prenez d''autres médicaments.

En conclusion, les compléments alimentaires peuvent jouer un rôle important dans le maintien d''une bonne santé, mais ils ne sont pas une solution miracle. Une alimentation équilibrée, riche en fruits, légumes, grains entiers et protéines maigres, reste la clé pour soutenir votre bien-être général. Les compléments alimentaires peuvent compléter cette alimentation, mais ils ne devraient jamais la remplacer. Soyez judicieux dans le choix de vos compléments alimentaires et consultez toujours un professionnel de la santé pour obtenir des conseils personnalisés.
',
        'Découvrez le véritable impact des compléments alimentaires sur votre santé ! De la vitamine D au zinc en passant par les probiotiques, les compléments alimentaires sont devenus omniprésents dans nos vies. Mais quels sont leurs réels effets sur notre santé ? Plongez dans notre article pour démêler le vrai du faux et comprendre comment les compléments alimentaires peuvent soutenir votre bien-être au quotidien.',
        'le-veritable-impact-des-complement-alimentaires.png'
    );

CREATE TABLE
    IF NOT EXISTS `users` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `first_name` varchar(255) NOT NULL,
        `last_name` varchar(255) NOT NULL,
        `role` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
    );

INSERT INTO
    `users` (
        `email`,
        `password`,
        `first_name`,
        `last_name`,
        `role`
    )
VALUES
    (
        'user@test.com',
        '$2y$10$lEzMI.H26sDsV4PzhAVBveHiTDBrH0BGSaNDAin.89cP8y/baG0vu',
        'Test',
        'Test',
        'user'
    ),
    (
        'admin@test.com',
        '$2y$10$lEzMI.H26sDsV4PzhAVBveHiTDBrH0BGSaNDAin.89cP8y/baG0vu',
        'Admin',
        'Admin',
        'admin'
    );