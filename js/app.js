window.addEventListener('load', init);

let apiUrl = "./webservices/index.php";
let gallery = document.getElementById('gallery');
let modal = document.getElementById('myModal');

function init() {
    ajaxRequest(apiUrl, makeDataCard)
}

const ajaxRequest = (url, func) => {
    console.log(apiUrl);
    fetch(url)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(func)
        .catch((error) => {
            console.log(error)
        });
}

function makeDataCard(data) {

    for (let card of data) {
        console.log(data);

        let dunkCard = document.createElement('div');
        dunkCard.classList.add('dunk-card');
        dunkCard.dataset.id = card.id;

        gallery.appendChild(dunkCard);

        let favoriteBtn = document.createElement('button');
        favoriteBtn.classList.add('favoriteBtn');
        favoriteBtn.innerHTML = "🤍";

    
        let isFavorite = JSON.parse(localStorage.getItem(`favoriteItem-${card.id}`)) || false;

        // Set the innerHTML of the button according to stored state
        if (isFavorite) {
            favoriteBtn.innerHTML = "❤️";
          } else {
            favoriteBtn.innerHTML = "🤍";
          }
        
        favoriteBtn.addEventListener('click',()=>{
            if(!isFavorite){
                localStorage.setItem(`favoriteItem-${card.id}`, JSON.stringify(true));
                isFavorite = true;  
                favoriteBtn.innerHTML = "❤️";
            }else{
                localStorage.removeItem(`favoriteItem-${card.id}`);
                isFavorite = false;
                favoriteBtn.innerHTML = "🤍";
            }
        });
        
        dunkCard.appendChild(favoriteBtn);

        let image = document.createElement('img');
        image.src = card.image;
        image.classList.add('image');
        dunkCard.appendChild(image);
        
        let price = document.createElement('h3')
        price.classList.add('product-price');
        price.innerHTML = `${card.price}`;
        dunkCard.appendChild(price);
        
        let name = document.createElement('h2');
        name.classList.add('product-name');
        name.innerHTML = `${card.name}`;
        dunkCard.appendChild(name);

        let detailsBtn = document.createElement('button');
        detailsBtn.classList.add('detailsBtn');
        detailsBtn.innerHTML = '';
        detailsBtn.dataset.id = card.id;
        detailsBtn.addEventListener('click', () => {
            ajaxRequest(`${apiUrl}?id=${card.id}`, showDetails)
        });

        dunkCard.appendChild(detailsBtn);
    }

}

function showDetails(card) {

    modal.style.visibility = 'visible';
    let detailsCard = document.getElementById('modal-content')

    console.log(detailsCard)
    //empty the div
    detailsCard.innerHTML = "";
    // detailsCard.style.display = 'block';

    //add content title:
    let detailsName = document.createElement("h2")
    detailsName.innerHTML = card.detailsCard + 'Details:';
    detailsCard.appendChild(detailsName);

    //add description
    let description = document.createElement("p");
    description.innerHTML = card.description;
    detailsCard.appendChild(description);

    let category = document.createElement("h5");
    category.innerHTML = 'Categorie:' + '' + card.tags;
    detailsCard.appendChild(category);

    console.log(card.description)

    let closeDetails = document.getElementById('modal-close');
    closeDetails.addEventListener("click", () => {
        modal.style.visibility = "hidden";
    });
}




