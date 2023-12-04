const divCard = document.getElementById('containerFrete');

function buscaDados() {
    const cep = document.getElementById('cepInserido').value;
    const url = `https://viacep.com.br/ws/${cep}/json/`;

    fetch(url)
        .then(response => response.json())
        .then(endereco => {
            const valorFrete = calcularFrete(endereco.uf);
            renderizaCard(endereco, valorFrete);
        })
        .catch(error => {
            console.error('Erro na operação.', error);
        });
}

function renderizaCard(endereco, valorFrete) {
    divCard.innerHTML = "";

    const card = document.createElement("div");
    card.classList.add("card");

    card.innerHTML = `<p><b>Valor do Frete:</b> R$ ${valorFrete.toFixed(2)}</p>`;
    divCard.appendChild(card);
}

function calcularFrete(estado) {
    const valorFreteNorte = 15.00;
    const valorFreteNordeste = 25.00;
    const valorFretePadrao = 150.00;

    const regiaoNorte = ['AC', 'AP', 'AM', 'PA', 'RO', 'RR', 'TO'];
    const regiaoNordeste = ['AL', 'BA', 'CE', 'MA', 'PB', 'PE', 'PI', 'RN', 'SE'];

    let valorFrete = valorFretePadrao;

    if (regiaoNorte.includes(estado)) {
        valorFrete = valorFreteNorte;
    } else if (regiaoNordeste.includes(estado)) {
        valorFrete = valorFreteNordeste;
    }
    return valorFrete;
}