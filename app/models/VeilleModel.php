<?php
function getVeilleTopics(): array
{
    return [
        [
            'id'      => 'voitures-autonomes',
            'title'   => "L'IA dans les voitures autonomes en 2026",
            'period'  => 'Janvier – Novembre 2026',
            'summary' => "Suivi de l'intelligence artificielle appliquée aux véhicules autonomes : modèles de bout en bout, marché, avancées de Waymo et Tesla, enquêtes de sécurité et cadre réglementaire européen.",
            'sections' => [
                [
                    'heading' => "L'IA au cœur de la conduite autonome",
                    'content' => "En 2026, l'intelligence artificielle est devenue le centre de la conduite autonome. Les systèmes historiques découpaient la conduite en modules (perception, prévision, planification, contrôle), en grande partie écrits à la main. La tendance est désormais aux modèles « de bout en bout » : un réseau de neurones reçoit les images des capteurs et produit directement la conduite. La start-up britannique Wayve, qui a levé 1,2 milliard de dollars en février 2026 pour une valorisation de 8,6 milliards, affirme que cette approche est passée d'un pari de recherche à la voie choisie par l'industrie pour déployer l'autonomie à grande échelle. En janvier 2026, au CES, Nvidia a présenté Alpamayo, une famille de modèles de raisonnement pour la conduite, dont une version de 10 milliards de paramètres. Waymo, souvent opposé à Tesla, utilise lui aussi un modèle de fondation : selon son responsable de la recherche, « de bout en bout » décrit une façon d'entraîner le système plutôt qu'une architecture unique. En février 2026, Waymo a aussi présenté le « Waymo World Model », construit sur Genie 3 de Google DeepMind, qui génère des situations de conduite rares et difficiles à rencontrer sur la route pour entraîner et tester son système.",
                ],
                [
                    'heading' => 'Un marché en pleine expansion',
                    'content' => "Le logiciel de conduite autonome (NOA) devrait atteindre 2,85 milliards de dollars en 2026, soit une progression de 90,59 % par rapport à 2025, avec une croissance qui devrait rester forte pendant deux à trois ans. La compétition se joue surtout entre la Chine et les États-Unis. Au CES 2026, la tendance est nette : l'automobile n'est plus présentée comme un objet industriel mais comme une plateforme technologique, avec l'IA au centre, aussi bien pour l'assistance à la conduite que pour créer de nouveaux services payants (\"Features on Demand\").",
                ],
                [
                    'heading' => 'Waymo (Alphabet) : le leader qui accélère',
                    'content' => "Waymo a eu une année 2026 très offensive. En février, la société a ouvert le service à Houston, Dallas, San Antonio et Orlando, avec un objectif de disponibilité générale d'ici la fin de l'année. En mai, elle a levé 16 milliards de dollars à une valorisation de 126 milliards, le plus gros investissement jamais réalisé dans une entreprise de conduite autonome. Waymo dépasse alors 20 millions de trajets, avec une flotte d'environ 3 000 robotaxis et un objectif d'1 million de trajets par semaine fin 2026. En août, la CPUC californienne a approuvé l'expansion sur 18 comtés, de Sonoma à San Diego, incluant Sacramento et San Diego comme nouveaux marchés. Le 1er septembre, Waymo a lancé son service au public à Denver, San Diego et Tampa, portant sa flotte à plus de 4 000 véhicules dans 14 villes américaines, avec un nouveau modèle appelé \"Ojai\". À l'international, les premiers tests ont commencé à Tokyo, avec une préparation de déploiement à Londres sous la nouvelle réglementation britannique.",
                ],
                [
                    'heading' => 'Mise à jour sept.–nov. 2026 – Waymo : sécurité, financement et nouvelles villes',
                    'content' => "Fin septembre, Waymo a publié une analyse de sécurité portant sur plus de 270 millions de miles (environ 435 millions de kilomètres) parcourus en pleine autonomie jusqu'à fin juin 2026. Selon l'entreprise, environ 841 accidents avec blessés auraient été évités, soit une réduction d'environ 82 % par rapport à des conducteurs humains : ces chiffres viennent de Waymo elle-même et doivent être lus comme une affirmation de l'entreprise. Début octobre, Waymo a bouclé un prêt de 5 milliards de dollars, son premier financement par la dette. Le 14 octobre, le service est devenu accessible à tous à San Antonio, San Diego et Tampa, aéroport de San Antonio compris. Le 21 octobre, les courses ont commencé à l'aéroport de Las Vegas, et le 27 octobre Waymo a annoncé une extension d'environ 250 miles carrés (près de 650 km²) à Los Angeles, Nashville, Orlando, San Diego et dans la baie de San Francisco. À l'international, Waymo a fixé des objectifs (et non des lancements) : Madrid en 2027, Munich vers la fin 2027 et Toronto en 2028.",
                ],
                [
                    'heading' => 'Tesla : robotaxi aux États-Unis et percée réglementaire en Europe',
                    'content' => "Aux États-Unis, Tesla fait payer des courses avec ses Model Y sans chauffeur dans plusieurs villes du Texas et de Floride, et mise sur son Cybercab (un véhicule sans volant ni pédales) pour accélérer. En Europe, une étape clé a eu lieu le 10 avril 2026 : l'autorité néerlandaise RDW a homologué officiellement le FSD supervisé, après 1,6 million de kilomètres parcourus et 13 000 trajets réalisés avec des clients. Cette homologation a fait effet domino, avec la Lituanie, l'Estonie, le Danemark et la Belgique qui ont chacun activé le système en s'appuyant sur la décision néerlandaise. Début août 2026, l'approbation restait toutefois limitée à ces cinq pays : la France préfère attendre une décision européenne globale plutôt qu'une reconnaissance unilatérale, et une reconnaissance à l'échelle de l'UE pourrait glisser à 2027.",
                ],
                [
                    'heading' => 'Mise à jour sept.–nov. 2026 – Tesla : Cybercab, enquêtes et résultats',
                    'content' => "Le 3 septembre 2026, Tesla a lancé des courses payantes avec le Cybercab à Austin. Dès les 3 et 4 septembre, le régulateur américain NHTSA a ouvert un audit (AQ26002) sur la façon dont Tesla a certifié que ce véhicule sans volant respecte les normes fédérales de sécurité ; des réponses sous serment étaient attendues pour le 30 octobre, et je n'ai pas trouvé de conclusion publique à ce stade. Le 9 octobre, la NHTSA a aussi ouvert l'examen d'une pétition (DP26010) qui reproche à environ 1 000 Tesla Robotaxi (Model Y et Cybercab) de dépasser la vitesse autorisée dans des zones scolaires ; l'agence n'a pas conclu à un défaut. Selon le compte Robotaxi de Tesla, la flotte de Cybercab à Austin dépassait 300 véhicules le 10 octobre, soit huit fois plus en 30 jours. Dans ses résultats du 3e trimestre, publiés le 21 octobre, Tesla annonce 1,74 million d'abonnements FSD actifs (+67 % sur un an), plus de 75 % des livraisons nord-américaines avec FSD et près de 2 millions de miles cumulés sans conducteur pour son service Robotaxi, en hausse de huit fois en un trimestre. Un dirigeant IA de Tesla a indiqué que le FSD non supervisé pourrait arriver chez les clients à partir du deuxième trimestre 2027. Ces chiffres sont ceux de Tesla.",
                ],
                [
                    'heading' => 'Sécurité : un sujet à traiter avec nuance',
                    'content' => "Tesla a publié en mai 2026 le détail de ses 17 incidents survenus à Austin entre juillet 2025 et mars 2026 : 13 n'ont causé que des dégâts matériels, 2 n'ont fait aucun blessé, 1 a causé une blessure légère sans hospitalisation et 1 a nécessité une hospitalisation. Une grande partie de ces accidents n'était pas imputable au système Tesla : plusieurs véhicules ont été percutés à l'arrêt par des conducteurs humains inattentifs, un schéma également observé chez Waymo. En juillet 2026, le fleet Tesla Robotaxi a passé un mois entier sans provoquer le moindre accident selon les données NHTSA. De son côté, Waymo a déclaré 46 rapports mensuels d'incidents sur un parc de près de 3 900 véhicules effectuant plus de 500 000 courses payantes par semaine.",
                ],
                [
                    'heading' => 'Cadre réglementaire européen',
                    'content' => "La Commission européenne a proposé la création d'un réseau pilote de villes pour tester les véhicules autonomes, avec un calendrier de mise en œuvre prévu au 4e trimestre 2026. Une coalition de 60 maires italiens a déjà manifesté son intérêt pour participer à ce dispositif.",
                ],
                [
                    'heading' => 'Mise à jour sept.–nov. 2026 – Europe : le vote sur le FSD reporté, la France se prépare',
                    'content' => "Le vote européen sur le FSD supervisé de Tesla, espéré le 6 octobre, n'a pas eu lieu : l'ordre du jour du comité technique européen des véhicules à moteur (TCMV) ne prévoyait qu'une poursuite des discussions, et le comité ne se réunit plus avant décembre. Il faudra une majorité qualifiée de 15 États sur 27 représentant au moins 65 % de la population. Fin septembre, sept pays (dont les Pays-Bas) avaient reconnu l'homologation néerlandaise, soit environ 12 % de la population de l'UE, et Tesla en revendique neuf dans ses résultats du 3e trimestre. La France refuse de la reconnaître, et l'Allemagne se dit ouverte mais s'inquiète d'éventuels dépassements de la vitesse autorisée. Côté textes, la Commission a mis en consultation un projet de règlement délégué pour les véhicules entièrement automatisés : les retours sont possibles jusqu'au 2 décembre 2026, pour une adoption prévue au 4e trimestre 2026. Ce projet s'appuie sur les règles mondiales adoptées par l'ONU (WP.29) le 24 juin 2026. En France, le ministre des Transports Philippe Tabarot a annoncé le 23 octobre une doctrine nationale d'homologation des véhicules autonomes au premier semestre 2027, et Stellantis, Bolt et la Métropole du Grand Paris prévoient des tests de services autonomes dans le Grand Paris à partir de 2028. Enfin, le Cybercab de Tesla a été exposé au Mondial de l'Auto de Paris (12-18 octobre) et entame une tournée européenne du 5 novembre 2026 au 17 janvier 2027, sans date annoncée pour des courses ou des ventes en Europe.",
                ],
                [
                    'heading' => 'Autres acteurs : Zoox, Baidu et le Moyen-Orient',
                    'content' => "Le 6 novembre 2026, Zoox (filiale d'Amazon) a annoncé qu'elle enverrait au début de 2027 sa flotte de test en Europe et en Asie pour collecter des données et préparer une expansion internationale ; il ne s'agit pas d'un lancement commercial. Zoox avait obtenu en juillet 2026 l'exemption fédérale qui lui permet de faire payer ses courses aux États-Unis. Du côté chinois, Baidu Apollo Go est disponible depuis le 20 août 2026 sans conducteur sur l'application Uber à Dubaï, dans les quartiers d'Umm Suqeim et de Jumeirah, avec son robotaxi de 6e génération. Baidu indique être présent dans 28 villes, avec plus de 350 millions de kilomètres parcourus en autonomie dont 240 millions sans conducteur (chiffres de l'entreprise).",
                ],
                [
                    'heading' => 'Analyse : ce que cela change pour un développeur',
                    'content' => "La conduite autonome devient un problème de logiciel et de données : on entraîne des modèles sur d'immenses volumes de conduite, on les teste dans des simulateurs générés par l'IA (comme le World Model de Waymo), puis on prouve leur sécurité à des régulateurs. Les controverses de l'automne sur le dépassement de la vitesse autorisée montrent aussi la limite des systèmes appris : un modèle qui imite des conducteurs humains peut reproduire leurs écarts aux règles, ce qui oblige à ajouter des garde-fous explicites. C'est une lecture personnelle de ces faits, pas un constat issu des sources. Pour un développeur, cela illustre l'importance des tests, de la traçabilité des données et de la sécurité logicielle, des compétences qui relèvent directement du BTS SIO option SLAM.",
                ],
            ],
            'tags' => ['IA', 'Modèles de bout en bout', 'Waymo', 'Robotaxi', 'FSD', 'Tesla', 'Cybercab', 'NHTSA', 'Conduite autonome', 'Réglementation UE'],
            'sources' => [
                ['title' => 'Blog officiel Waymo (articles du 24 sept. au 28 oct. 2026)', 'site' => 'blog.waymo.com', 'date' => 'sept.–oct. 2026', 'url' => 'https://blog.waymo.com/blog'],
                ['title' => 'Waymo : prêt de 5 milliards de dollars, expansion de 250 miles carrés', 'site' => 'unite.ai', 'date' => 'oct. 2026', 'url' => 'https://www.unite.ai/?p=495579'],
                ['title' => 'Waymo vise Munich vers la fin 2027', 'site' => 'Newsquawk', 'date' => '23 oct. 2026', 'url' => 'https://www.newsquawk.com/headlines/googles-googl-waymo-aims-to-open-commercial-ride-hailing-in-munich-germany-to-the-public-towards-the-end-of-2027'],
                ['title' => 'Waymo vise Toronto en 2028', 'site' => 'Let\'s Data Science', 'date' => 'oct. 2026', 'url' => 'https://letsdatascience.com/news/waymo-targets-toronto-robotaxi-launch-in-2028-aa1e0d89'],
                ['title' => 'Feds launch investigation into Tesla\'s Cybercab deployment', 'site' => 'TechCrunch', 'date' => '4 sept. 2026', 'url' => 'https://techcrunch.com/2026/09/04/feds-launch-investigation-into-teslas-cybercab-deployment/'],
                ['title' => 'Tesla Cybercab Under Investigation as It Hits Austin', 'site' => 'IBTimes UK', 'date' => 'sept. 2026', 'url' => 'https://www.ibtimes.co.uk/tesla-cybercab-federal-scrutiny-safety-compliance-1818144'],
                ['title' => 'Defect petition DP26010 – Tesla Robotaxi (Model Y et Cybercab)', 'site' => 'NHTSA (document officiel)', 'date' => '9 oct. 2026', 'url' => 'https://static.nhtsa.gov/odi/inv/2026/INOA-DP26010-19159.pdf'],
                ['title' => 'Tesla Q3 2026 earnings call recap', 'site' => 'Not a Tesla App', 'date' => 'oct. 2026', 'url' => 'https://notateslaapp.com/news/4867/tesla-q3-2026-earnings-call-recap-everything-you-need-to-know'],
                ['title' => 'Tesla Q3 2026 Earnings : FSD attach rate above 75 %', 'site' => 'Tesla North', 'date' => '21 oct. 2026', 'url' => 'https://teslanorth.com/2026/10/21/tesla-q3-2026-earnings/'],
                ['title' => 'FSD approved in Czechia, 300+ Cybercabs in Austin', 'site' => 'Teslarati', 'date' => 'sept.–oct. 2026', 'url' => 'https://www.teslarati.com/tesla-full-self-driving-expands-another-european-country-czechia/'],
                ['title' => 'EU delays Tesla FSD vote to December at the earliest', 'site' => 'Electrek', 'date' => '25 sept. 2026', 'url' => 'https://electrek.co/2026/09/25/eu-delays-tesla-fsd-vote-december-tcmv-agenda/'],
                ['title' => 'Germany confirms December EU vote on Tesla FSD approval', 'site' => 'Not a Tesla App', 'date' => 'automne 2026', 'url' => 'https://www.notateslaapp.com/news/4749/germany-says-it-is-open-to-tesla-fsd-approval-confirms-eu-wide-vote-in-december'],
                ['title' => 'Tesla Cybercab tours Europe (5 nov. 2026 – 17 janv. 2027)', 'site' => 'Pasquale Pillitteri', 'date' => 'nov. 2026', 'url' => 'https://pasqualepillitteri.it/en/news/32698/tesla-cybercab-europe-tour-dates-uk'],
                ['title' => 'Commission seeks feedback on proposed delegated regulation for fully automated vehicles', 'site' => 'LexisNexis', 'date' => '5 nov. 2026', 'url' => 'https://www.lexisnexis.co.uk/legal/news/commission-seeks-feedback-on-proposed-delegated-regulation-for-fully-automated-vehicles'],
                ['title' => 'Mobilité routière automatisée et connectée (règles ONU du 24 juin 2026)', 'site' => 'Ministère de la Transition écologique', 'date' => '2026', 'url' => 'https://www.ecologie.gouv.fr/mobilite-routiere-automatisee-et-connectee'],
                ['title' => 'France sets 2027 approval path for autonomous vehicles', 'site' => 'Credence Research', 'date' => 'oct. 2026', 'url' => 'https://www.credenceresearch.com/news/france-autonomous-vehicle-approval-2027-stellantis-bolt-wayve-paris-pilots-2028'],
                ['title' => 'Zoox Europe and Asia plans announced', 'site' => 'EVwire', 'date' => '6 nov. 2026', 'url' => 'https://evwire.com/p/zoox-robotaxi-testing-europe-asia-ceo-wsj-interview-video'],
                ['title' => 'Zoox sbarca in Europa e Asia (Waymo à Madrid en 2027)', 'site' => 'HDmotori', 'date' => '9 nov. 2026', 'url' => 'https://www.hdmotori.it/zoox-europa-asia-2027-test-robotaxi-amazon/'],
                ['title' => 'Baidu Apollo Go RT6 goes fully driverless on Uber in Dubai', 'site' => 'Automotive World', 'date' => 'août 2026', 'url' => 'https://www.automotiveworld.com/news/baidu-apollo-go-rt6-goes-fully-driverless-on-uber-in-dubai/'],
                ['title' => 'Wayve attracts fresh investments from Nvidia, Microsoft, Uber, Mercedes', 'site' => 'CleanTechnica', 'date' => '25 févr. 2026', 'url' => 'https://cleantechnica.com/2026/02/25/wayve-attracts-fresh-investments-from-nvidia-microsoft-uber-mercedes/'],
                ['title' => 'Waymo uses Genie 3 to build a world model', 'site' => 'TT News', 'date' => 'févr. 2026', 'url' => 'https://www.ttnews.com/articles/waymo-genie-3-robotaxi'],
                ['title' => 'End-to-End AI vs. Traditional Self-Driving Systems', 'site' => 'HackerNoon', 'date' => '2026', 'url' => 'https://hackernoon.com/end-to-end-ai-vs-traditional-self-driving-systems'],
            ],
        ],
    ];
}

function getVeilleTopicById(string $id): ?array
{
    foreach (getVeilleTopics() as $topic) {
        if ($topic['id'] === $id) {
            return $topic;
        }
    }
    return null;
}
