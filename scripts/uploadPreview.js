const input = document.querySelector("input")
const output = document.querySelector("output")
let imagesArray = []

input.addEventListener("change", () => {
    const file = input.files
    imagesArray.push(file[0])
    displayImages()
})

function displayImages() {
    let images = ""
    imagesArray.forEach((image, index) => {
        images += `<div class="image">
            <img src="${URL.createObjectURL(image)}" alt="image">
        </div>`
    })
    output.innerHTML = images
}