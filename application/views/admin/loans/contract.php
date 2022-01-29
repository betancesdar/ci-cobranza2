
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">
        Contrato # <?php echo $loan->id ?>
        Fecha Credito: <?= $loan->date; ?>
      </h5>
      <div class="d-flex flex-row-reverse">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fas fa-times fa-sm"></i></button>
        <button type="button" class="close" onclick="window.print();"><i class="fas fa-print fa-sm"></i></button>
      </div>
    </div>
              <div class="modal-body">

              <div class="float-center">
                <p>Debo y pagaré a : José Luis Abreu <hr><hr></p>
                <p>O a su orden la cantidad de:  <?= $loan->credit_amount; ?>_________________________________________________________</p>
                <p>Valor recibido en: Pesos Dominicanos <?= strtoupper($loan->short_name); ?></p>
                <p>A nuestra entera satisfacion y que me compreto a pagar la fecha indicada. Para el fiel cumpliento de pago quedan afectados</p>
                <p>todos mis bienes habidos y por haber con renuncia del fuero domicilio y de cualquier otra ley que pudiera favorecerme.</p>
                <p>Por este prestamo pagare una cuota de forma <?= $loan->payment_m; ?> el monto de la cuota es de : $ <?= $loan->fee_amount; ?> En un total de <?= $loan->num_fee; ?> Cuotas</p>
                <p>Espacio reservado para que de su puño y letra escriba por favor "BUENO Y VALIDO" y el monto de esta obligación en letras</p>
                <br>
                <hr>
                <p style="text-align:center">PAGARE NOTARIAL</p>

<p>En la Ciudad de Santiago de los Caballeros, Municipio y Provincia de Santiago, Republica Dominicana, a los dieciocho (18) días del  mes de enero del año dos mil veintidós (2022).  POR ANTE MI:  LICDA. FLOR MARIA LIRIANO DE MOLINA, dominicana, mayor de edad, casada, Notario Público de los del Número para el Municipio de Santiago, debidamente matriculada en el Colegio de Notarios de la Republica Dominicana, registrada bajo el Numero 4635, con estudio Profesional abierto en la calle Marginal Primera, Edif. No. 4, Villa Tabacalera, de esta ciudad de Santiago de los Caballeros, portadora de la cédula de identidad y electoral Número 031-0224720-6;  HAN COMPARECIDO en forma libre y voluntaria el señor JOSE LUIS ABREU, dominicano, mayor de edad, soltero, comerciante, domiciliado y residente en la calle 9, casa No. 151 del Ensache Libertad, de esta ciudad de Santiago de los caballeros,  persona a la cual he identificado por la presentación que me hace de su cédula de identidad y electoral No. 031-0517548-7, quien comparece en calidad de DEUDOR, y la señora YOLANDA DEL CARMEN MORAN, dominicana, mayor de edad, soltera, domiciliado y residente en calle 1-A, casa No. 12 (alto) del Reparto Peralta, de esta ciudad de Santiago de los caballeros,  persona a la cual he identificado por la presentación que me hace de su Cédula de Identidad y Electoral No. 031-0393785-4, quien comparece en calidad de CO-DEUDORA, los cuales me declaran, PRIMERO: Que por medio del presente acto RECONOCEN ADEUDAR al también compareciente JOSE LUIS ABREU, dominicano, mayor de edad, casado, comerciante, domiciliado y residente en la calle 9, casa No. 151 del Ensache Libertad, de esta ciudad de Santiago de los caballeros, quien comparece en calidad de ACREEDOR, portador de la Cedula de Identidad y Electoral No. 031-0517548-7, persona a la cual doy fe conocer, quien acepta la suma de QUINIENTOS MIL PESOS DOMINICANOS (RD$500,000.00), MONEDA DE CURSO LEGAL, devengando una tasa de interés calculado al tipo del treinta y seis por ciento (36%) anual , por concepto de un préstamo que éste último compareciente, ósea, LEONARDO ANTONIO INFANTE ESPINAL le hace en este mismo instante, en la presencia del infrascrito Notario.  SEGUNDO: Los comparecientes se obligan a pagar el monto total de este préstamo, al también compareciente LEONARDO ANTONIO INFANTE ESPINAL, o a su orden, la suma de QUINIENTOS MIL PESOS (RD$500,000.00), suma productora de un interés mensual de un tres punto cinco por ciento (3.5%) mensual, por valor recibido en préstamo que dicho ACREEDOR le otorga AL DEUDOR, quien declara aceptar en un plazo de treinta y tres (33) meses, es decir, con fecha de vencimiento el día dieciocho (18) del mes de octubre del año dos mil veintitrés (2023).  Hasta su pago integral, LOS DEUDORES se obligan a pagar en provecho del señor LEONARDO ANTONIO INFANTE ESPINAL, treinta y tres (33) cuotas iguales, mensuales y consecutivas por un valor de TREINTA Y DOS MIL QUINIENTOS PESOS (RD$32,500.00), correspondiente al interés y abono a capital, sin necesidad de requerimiento, a partir de la fecha de hoy, las cuales serán pagados mensualmente, teniendo lugar el primer pago el día dieciocho (18) del mes de febrero del año dos mil veintidós (2022), y así sucesivamente todos los días dieciocho (18) de cada mes. Las partes convienen y pactan las siguientes condiciones. Que si llegado el vencimiento del plazo, Los clientes no pagan el monto del préstamo, EL ACREEDOR le requerirá el total adeudado sobre simple requerimiento y presentación de la primera copia certificada de este acto, mas las costas y honorarios del procedimiento de ejecución, según resulten del estado de cuenta DEL ACREEDOR y sus abogados, cuyo estado reconoce como bueno y válido. Que para la ejecución y cobro por EL ACREEDOR de las sumas de dinero a que se refiere este documento, el compareciente reconoce a la primera copia certificada del presente  acto la fuerza ejecutoria dispuesta por él articulo 545 del Código de procedimiento Civil, autorizando irrevocablemente al Notario actuante expedir y entregar dicha copia AL ACREEDOR para que éste la conserve en su poder y utilice en caso de ejecución.  Los pagos en principal tendrán lugar en manos DEL ACREEDOR, en la dirección antes indicada, sito Prolongación Proyecto, No. 14, del Sector Pastor, de esta ciudad de Santiago de los caballeros.  Leído el presente acto, por el infrascrito Notario a los comparecientes, declaran aprobarlo en todas sus partes, en fe de lo cual lo firman, junto al infrascrito Notario, al pie y en el margen de todas sus fojas, de todo lo cual DOY FE Y CERTIFICO.--------------------------------------------------------------------------------------


POR EL ACREEDOR



______________________________________
                                 LEONARDO ANTONIO INFANTE ESPINAL




POR LOS DEUDORES



________________________________                   _____________________________
JOSE LUIS ABREU                       YOLANDA DEL CARMEN MORAN



_________________________________________
LICDA. FLOR MARIA LIRIANO DE MOLINA.
NOTARIO PÚBLICO.
</p>
            

                Nombre: <?= $loan->customer_name; ?>
              
              </div>
               
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
