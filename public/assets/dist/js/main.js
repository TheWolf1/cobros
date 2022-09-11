$("#bntFormAbono").click((e)=>{
    Swal.fire(
        'Cobro Registrado!',
        'el cobro se registro correctamente!',
        'success'
      );
});


function sumarInteresTotal(monto, interes,idMonto,diasPresto,elementCuotas) {
  let sum =+monto+( +monto*(+interes/100));
  let cuotaDiaria = sum/diasPresto;
  let html = `
    $${monto} + ${interes}% = <strong> $${sum}</strong>
  `;

  $("#"+elementCuotas).html( `Cuotas de $${cuotaDiaria.toFixed(2)} diario` );
  $("#"+idMonto).html(html);
}