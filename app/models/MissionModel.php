<?php
function getMissions(): array
{
    return [
        [
            'id'      => 'glpi',
            'title'   => 'Déploiement et administration de GLPI',
            'summary' => 'Mise en place et gestion de l\'outil de gestion du parc informatique.',
            'context' => "La DSI de la Banque Centrale des Comores ne disposait pas d'outil centralisé pour suivre le matériel informatique et les demandes d'assistance. J'ai participé au déploiement de GLPI pour combler ce manque.",
            'tasks' => [
                "Installation et configuration de GLPI sur le serveur dédié",
                "Recensement et intégration du parc informatique existant (postes, imprimantes, périphériques)",
                "Création des comptes utilisateurs et des droits d'accès",
                "Mise en place du système de tickets pour le support interne",
            ],
            'tools'  => ['GLPI', 'Windows Server', 'SQL'],
            'result' => "Un inventaire du parc informatique centralisé et un système de tickets opérationnel, facilitant le suivi des demandes de support.",
        ],
        [
            'id'      => 'helpdesk',
            'title'   => 'Support Helpdesk aux utilisateurs',
            'summary' => 'Assistance quotidienne aux agents de la banque sur leurs problèmes informatiques.',
            'context' => "En parallèle du déploiement de GLPI, j'assurais le support de premier niveau auprès des agents de la banque rencontrant des problèmes matériels ou logiciels.",
            'tasks' => [
                "Réception et traitement des tickets d'incidents via GLPI",
                "Diagnostic à distance et sur site des pannes matérielles et logicielles",
                "Réinstallation de postes et de logiciels métiers",
                "Rédaction de procédures simples pour les utilisateurs",
            ],
            'tools'  => ['GLPI', 'Windows 10/11', 'Suite Office'],
            'result' => "Réduction du temps de résolution des incidents courants grâce à un suivi structuré des demandes.",
        ],
        [
            'id'      => 'active-directory',
            'title'   => 'Administration Active Directory',
            'summary' => 'Gestion des comptes et des ressources du domaine de la banque.',
            'context' => "La banque utilise Active Directory pour centraliser la gestion des comptes utilisateurs et des ressources réseau. J'ai participé à l'administration courante de cet annuaire.",
            'tasks' => [
                "Création, modification et suppression de comptes utilisateurs",
                "Organisation des unités d'organisation (OU) par service",
                "Gestion des groupes de sécurité et des permissions associées",
                "Réinitialisation de mots de passe et déblocage de comptes",
            ],
            'tools'  => ['Active Directory', 'Windows Server'],
            'result' => "Un annuaire mieux structuré par service, facilitant l'attribution des droits et le suivi des comptes.",
        ],
        [
            'id'      => 'gpo',
            'title'   => 'Gestion des stratégies de groupe (GPO)',
            'summary' => 'Configuration de règles appliquées automatiquement aux postes du domaine.',
            'context' => "Pour homogénéiser la configuration des postes et renforcer la sécurité, la banque s'appuie sur des GPO appliquées via Active Directory.",
            'tasks' => [
                "Création de GPO pour le déploiement automatique d'imprimantes",
                "Configuration de restrictions de sécurité (verrouillage de session, mots de passe)",
                "Test et déploiement progressif des GPO sur des groupes pilotes",
                "Documentation des GPO existantes",
            ],
            'tools'  => ['GPO', 'Active Directory', 'Windows Server'],
            'result' => "Des postes de travail plus homogènes et une sécurité renforcée sur l'ensemble du parc.",
        ],
        [
            'id'      => 'materiel',
            'title'   => 'Interventions matérielles sur postes',
            'summary' => 'Maintenance physique et remplacement de composants.',
            'context' => "En complément du support logiciel, certaines interventions nécessitaient une intervention physique directe sur le matériel.",
            'tasks' => [
                "Diagnostic de pannes matérielles (RAM, disque dur, alimentation)",
                "Remplacement de composants défectueux",
                "Montage et configuration de nouveaux postes",
                "Câblage réseau et vérification de la connectivité",
            ],
            'tools'  => ['Outillage informatique', 'Testeurs réseau'],
            'result' => "Remise en service rapide des postes en panne, limitant l'interruption de travail des agents.",
        ],
        [
            'id'      => 'oasis',
            'title'   => 'Participation au projet Oasis',
            'summary' => 'Contribution au projet de site secondaire de reprise d\'activité.',
            'context' => "La banque a lancé le projet Oasis pour disposer d'un site secondaire capable de prendre le relais en cas d'incident majeur sur le site principal (plan de reprise d'activité).",
            'tasks' => [
                "Participation aux réunions de suivi du projet",
                "Aide à la préparation de l'infrastructure du site secondaire",
                "Contribution aux tests de bascule entre les deux sites",
                "Rédaction de comptes-rendus d'avancement",
            ],
            'tools'  => ['Infrastructure serveur', 'Datacenter'],
            'result' => "Une première expérience concrète de gestion de projet informatique en environnement bancaire, sensible aux enjeux de continuité d'activité.",
        ],
    ];
}

function getMissionById(string $id): ?array
{
    foreach (getMissions() as $mission) {
        if ($mission['id'] === $id) {
            return $mission;
        }
    }
    return null;
}