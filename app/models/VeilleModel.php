<?php
function getVeilleTopics(): array
{
    return [
        [
            'id'      => 'voitures-autonomes',
            'title'   => 'Les voitures autonomes en 2026',
            'period'  => 'Janvier – Septembre 2026',
            'summary' => "Suivi de l'actualité des véhicules autonomes : croissance du marché, avancées de Waymo et Tesla, données de sécurité et cadre réglementaire européen.",
            'sections' => [
                [
                    'heading' => 'Un marché en pleine expansion',
                    'content' => "Le logiciel de conduite autonome (NOA) devrait atteindre 2,85 milliards de dollars en 2026, soit une progression de 90,59 % par rapport à 2025, avec une croissance qui devrait rester forte pendant deux à trois ans. La compétition se joue surtout entre la Chine et les États-Unis. Au CES 2026, la tendance est nette : l'automobile n'est plus présentée comme un objet industriel mais comme une plateforme technologique, avec l'IA au centre, aussi bien pour l'assistance à la conduite que pour créer de nouveaux services payants (\"Features on Demand\").",
                ],
                [
                    'heading' => 'Waymo (Alphabet) : le leader qui accélère',
                    'content' => "Waymo a eu une année 2026 très offensive. En février, la société a ouvert le service à Houston, Dallas, San Antonio et Orlando, avec un objectif de disponibilité générale d'ici la fin de l'année. En mai, elle a levé 16 milliards de dollars à une valorisation de 126 milliards, le plus gros investissement jamais réalisé dans une entreprise de conduite autonome. Waymo dépasse alors 20 millions de trajets, avec une flotte d'environ 3 000 robotaxis et un objectif d'1 million de trajets par semaine fin 2026. En août, la CPUC californienne a approuvé l'expansion sur 18 comtés, de Sonoma à San Diego, incluant Sacramento et San Diego comme nouveaux marchés. Le 1er septembre, Waymo a lancé son service au public à Denver, San Diego et Tampa, portant sa flotte à plus de 4 000 véhicules dans 14 villes américaines, avec un nouveau modèle appelé \"Ojai\". À l'international, les premiers tests ont commencé à Tokyo, avec une préparation de déploiement à Londres sous la nouvelle réglementation britannique.",
                ],
                [
                    'heading' => 'Tesla : robotaxi aux États-Unis et percée réglementaire en Europe',
                    'content' => "Aux États-Unis, Tesla fait payer des courses avec ses Model Y sans chauffeur dans plusieurs villes du Texas et de Floride, et mise sur son Cybercab (un véhicule sans volant ni pédales) pour accélérer. En Europe, une étape clé a eu lieu le 10 avril 2026 : l'autorité néerlandaise RDW a homologué officiellement le FSD supervisé, après 1,6 million de kilomètres parcourus et 13 000 trajets réalisés avec des clients. Cette homologation a fait effet domino, avec la Lituanie, l'Estonie, le Danemark et la Belgique qui ont chacun activé le système en s'appuyant sur la décision néerlandaise. Début août 2026, l'approbation restait toutefois limitée à ces cinq pays : la France préfère attendre une décision européenne globale plutôt qu'une reconnaissance unilatérale, et une reconnaissance à l'échelle de l'UE pourrait glisser à 2027.",
                ],
                [
                    'heading' => 'Sécurité : un sujet à traiter avec nuance',
                    'content' => "Tesla a publié en mai 2026 le détail de ses 17 incidents survenus à Austin entre juillet 2025 et mars 2026 : 13 n'ont causé que des dégâts matériels, 2 n'ont fait aucun blessé, 1 a causé une blessure légère sans hospitalisation et 1 a nécessité une hospitalisation. Une grande partie de ces accidents n'était pas imputable au système Tesla : plusieurs véhicules ont été percutés à l'arrêt par des conducteurs humains inattentifs, un schéma également observé chez Waymo. En juillet 2026, le fleet Tesla Robotaxi a passé un mois entier sans provoquer le moindre accident selon les données NHTSA. De son côté, Waymo a déclaré 46 rapports mensuels d'incidents sur un parc de près de 3 900 véhicules effectuant plus de 500 000 courses payantes par semaine.",
                ],
                [
                    'heading' => 'Cadre réglementaire européen',
                    'content' => "La Commission européenne a proposé la création d'un réseau pilote de villes pour tester les véhicules autonomes, avec un calendrier de mise en œuvre prévu au 4e trimestre 2026. Une coalition de 60 maires italiens a déjà manifesté son intérêt pour participer à ce dispositif.",
                ],
            ],
            'tags' => ['Waymo', 'Robotaxi', 'FSD', 'Tesla', 'Conduite autonome', 'Réglementation UE'],
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