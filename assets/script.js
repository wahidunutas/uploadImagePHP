const imgInput = document.getElementById('image')
const previewZone = document.getElementById('preview')

imgInput.addEventListener("change", () => {
    const file = imgInput.files[0]
    const reader = new FileReader;

    reader.addEventListener("load", () => {
        previewZone.innerHTML = ""
        const img = document.createElement("img")
        img.src = reader.result

        previewZone.appendChild(img)
    })

    reader.readAsDataURL(file)
})