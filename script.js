let form = document.getElementById("formPesan");

form.addEventListener("submit", function(event){

    let nama = document.querySelector("input[name='nama']").value.trim();
    let email = document.querySelector("input[name='email']").value.trim();
    let pesan = document.querySelector("textarea[name='pesan']").value.trim();
    
    if(nama === "" || email === "" || pesan === ""){
        alert("Semua data harus diisi dulu ya!");
        event.preventDefault();
        return;
    }

    if(!email.includes("@")){
        alert("Email tidak valid!");
        event.preventDefault();
        return;
    }

    alert("Terima kasih! Pesan kamu sudah terkirim 😊");

});