let input = document.querySelector('.cadastrar');

input.addEventListener('click', (event) => {

    function onload(){
        window.location('index.php');
    }

    function verificar(nome, sobreNome, ultimoNome) {

        if (nome != undefined && nome.length >= 3 && sobreNome != undefined && sobreNome.length >= 3){
            
            console.log("Caiu no true");
            return true;

        } else {

            if(ultimoNome != undefined && ultimoNome.length >= 3) {
                console.log("Caiu no true do terceiro nome");
                return true;
            } else {

                alert("Digite o nome corretamente!");
                return false;
            }

        }

    }

    let partes = '';

    let firstName = '';

    let secName = '';

    let lastName = '';

    let nome = document.querySelector('.form-control').value;

    if (nome == '') {

        alert("Você não digitou nenhum nome!");
        return false;

    } else {

        partes = nome.split(" ");

        firstName = partes[0];

        secName = partes[1];

        lastName = partes[2];

        verificar(firstName, secName, lastName);

    }

});