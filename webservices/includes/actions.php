
<?php
/**
 * @return array
 */
function getProducts()
{
    return [
        [
            "id" => 1,
            "name" => "Baby blue Nike Dunks",
            "price" => "€ 300",
            "image" => "./images/baby.jpg",
        ],
        [
            "id" => 2,
            "name" => "Black and blue Nike Dunks",
            "price" => "€ 100",
            "image" => "./images/black-blue.jpg",
        ],
        [
            "id" => 3,
            "name" => "Grey Nike Dunks",
            "price" => "€ 120 ",
            "image" => "./images/grey.jpg",
        ],
        [
            "id" => 4,
            "name" => "yellow Nike Dunks",
            "price" => "€ 140",
            "image" => "./images/yellow.jpg",
        ],
        [
            "id" => 5,
            "name" => "green Nike Dunks",
            "price" => "€ 120",
            "image" => "./images/green.jpg",
        ],
        [
            "id" => 6,
            "name" => "Nike Dunks SE",
            "price" => "€ 200",
            "image" => "./images/dunk-se.jpeg",
        ],
        [
            "id" => 7,
            "name" => "Nike Dunks for kids",
            "price" => "€ 70",
            "image" => "./images/child.jpeg",
        ],
        [
            "id" => 8,
            "name" => "brown Nike Dunks",
            "price" => "€ 150",
            "image" => "./images/brown.jpg",
        ],
        [
            "id" => 9,
            "name" => "Blue and Red Nike Dunks",
            "price" => "€ 120",
            "image" => "./images/blue-red.jpg",
        ],
        [
            "id" => 10,
            "name" => "Black and Orange Nike Dunks",
            "price" => "€ 110",
            "image" => "./images/black-orange.jpg",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getProductDetails($id)
{
    $tags = [
        1 => [
            "description" => "<strong>Beschrijving:</strong> Baby blauwe Dunks speciaal gemaakt voor de mooi boys onder ons",
            "tags" => ['Casual']
        ],
        2 => [
            "description" => "<strong>Beschrijving:</strong> ",
            "tags" => ['Casual']
        ],
        3 => [
            "description" => "<strong>Beschrijving:</strong> tomaten.",
            "tags" => ['Sporty']
        ],
        4 => [
            "description" => "<strong>Beschrijving:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Bright']
        ],
        5 => [
            "description" => "<strong>Beschrijving:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Bright']
        ],
        6 => [
            "description" => "<strong>Beschrijving:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Skating']
        ],
        7 => [
            "description" => "<strong>Beschrijving:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Kids']
        ],
        8 => [
            "description" => "<strong>Beschrijving:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Casual']
        ],
        9 => [
            "description" => "<strong>Beschrijving:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Skating']
        ],
        10 => [
            "description" => "<strong>Beschrijving:</strong> melk*, zout, zuursel, vegetarisch stremsel.
            Waarvan toegevoegde suikers 0.00g per 100 gram en waarvan toegevoegd zout 1.90g per 100 gram
            *Van weidemelk.",
            "tags" => ['Sporty']
        ]
    ];

    return $tags[$id];
}