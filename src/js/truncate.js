const excerpts = document.querySelectorAll('.blog__excerpt')

excerpts.forEach(excerpt => {
    let text = excerpt.textContent

    if (text.length > 25) {
        excerpt.textContent = `${text.split(' ').slice(0, 25).join(' ') + '..'}`
    }
})