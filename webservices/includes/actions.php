
<?php
/**
 * @return array
 */
function getDunks()
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
            "image" => "./images/dunk-se.jpg",
        ],
        [
            "id" => 7,
            "name" => "Nike Dunks for kids",
            "price" => "€ 70",
            "image" => "./images/child.jpg",
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
            "name" => "Almost Black Nike Dunks",
            "price" => "€ 110",
            "image" => "./images/black-orange.jpg",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getDunksDetails($id)
{
    $tags = [
        1 => [
            "description" => "I feel so unsure
            As I take your hand and lead you to the dance floor
            As the music dies, something in your eyes
            Calls to mind a silver screen
            And all its sad good-byes",
            "tags" => ['Casual']
        ],
        2 => [
            "description" => "I'm never gonna dance again
            Guilty feet have got no rhythm
            Though it's easy to pretend
            I know you're not a fool ",
            "tags" => ['Casual']
        ],
        3 => [
            "description" => "I should've known better than to cheat a friend
            And waste the chance that I'd been given
            So I'm never gonna dance again
            The way I danced with you, oh",
            "tags" => ['Sporty']
        ],
        4 => [
            "description" => "Time can never mend
            The careless whispers of a good friend
            To the heart and mind
            Ignorance is kind
            There's no comfort in the truth
            Pain is all you'll find",
            "tags" => ['Bright']
        ],
        5 => [
            "description" => "I'm never gonna dance again
            Guilty feet have got no rhythm
            Though it's easy to pretend
            I know you're not a fool",
            "tags" => ['Bright']
        ],
        6 => [
            "description" => "I should've known better than to cheat a friend (should've known better, yeah)
            And waste the chance that I'd been given
            So I'm never gonna dance again
            The way I danced with you, oh
            Never without your love",
            "tags" => ['Skating']
        ],
        7 => [
            "description" => "Tonight the music seems so loud
            I wish that we could lose this crowd
            Maybe it's better this way
            We'd hurt each other with the things we'd want to say",
            "tags" => ['Kids']
        ],
        8 => [
            "description" => "We could have been so good together
            We could have lived this dance forever
            But now, who's gonna dance with me?
            Please stay",
            "tags" => ['Casual']
        ],
        9 => [
            "description" => "And I'm never gonna dance again
            Guilty feet have got no rhythm
            Though it's easy to pretend
            I know you're not a fool",
            "tags" => ['Skating']
        ],
        10 => [
            "description" => "I should've known better than to cheat a friend
            And waste the chance that I'd been given
            So I'm never gonna dance again
            The way I danced with you, oh
            now that you're gone
            (Now that you're gone) was what I did so wrong, so wrong
            That you had to leave me alone?",
            "tags" => ['Sporty']
        ]
    ];

    return $tags[$id];
}