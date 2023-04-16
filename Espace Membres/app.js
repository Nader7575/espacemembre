

const cards = document.querySelector('.cards')

function displayChars(data) {
    data.forEach(char => {
            let card = document.createElement('div')
            card.className = 'card'
            card.innerHTML = `<h2 class='name'>${char.volumeInfo.title}</h2>
                            <img src='${char.volumeInfo.imageLinks.smallThumbnail}' class='image'></img>
                            <h2 class='name'>${char.volumeInfo.pageCount}</h2>`
                            
            cards.appendChild(card)
    }) 
}

async function getChars() {             
    try {
        for (let i= 1; i<15; i++) {
            const response = await axios.get(`https://www.googleapis.com/books/v1/volumes?q=subject:sports&langRestrict=fr`)
            const data = await response.data.items
            console.log(data)
            
            displayChars(data)
        }
    }
    catch (err) {
        console.log(err)
    }
}

getChars()