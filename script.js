
/*Checking if the page loaded completely*/
document.addEventListener('DOMContentLoaded', () => {
    console.log('JavaScript working!');
    
    function formatCpf() {
        const cpf = document.getElementById('cpf');
        const cleanCpf = cpf.value.replace(/\D+/g, '');
         
        if (cleanCpf.length === 11) {
           cpf.value = cleanCpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g, '$1.$2.$3-$4');
        } else {
           cpf.value = cleanCpf;
        }
       }
       document.getElementById('cpf').addEventListener('input', formatCpf);
       
       
                 function formatNumber() {
           const number = document.getElementById('number');
           const cleanNumber = number.value.replace(/\D+/g, '');
         
           if (cleanNumber.length === 11) {
             number.value = `(${cleanNumber.substr(0, 2)}) ${cleanNumber.substr(2, 1)} ${cleanNumber.substr(3, 4)}-${cleanNumber.substr(7, 4)}`;
           } else {
             number.value = cleanNumber;
           }
        }
        document.getElementById('number').addEventListener('input', formatNumber);
       
});

