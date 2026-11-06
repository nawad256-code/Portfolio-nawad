<?php
function getDocuments(): array
{
    return [
        [
            'title'       => 'CV',
            'description' => 'Mon curriculum vitae à jour.',
            'file'        => 'documents/cv.pdf',
        ],
        [
            'title'       => 'Rapport de stage',
            'description' => 'Rapport complet du stage effectué à la Banque Centrale des Comores.',
            'file'        => 'documents/rapport-stage.pdf',
        ],
        [
            'title'       => 'Tableau de synthèse',
            'description' => 'Tableau de synthèse des compétences et activités du BTS SIO.',
            'file'        => '', // TODO: à ajouter quand tu l'auras
        ],
    ];
}