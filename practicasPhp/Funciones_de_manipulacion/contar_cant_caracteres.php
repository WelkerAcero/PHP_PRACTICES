<?php

$mensaje = "Lorem ipsum ad his scripta blandit partiendo, eum fastidii
accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus
suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans
eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte
definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque
eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut
fugit veritus placerat per. Ius id vidit volumus mandamus, vide veritus
democritum te nec, ei eos debet libris consulatu. No mei ferri graeco dicunt,
ad cum veri accommodare. Sed at malis omnesque delicata, usu et iusto zzril
meliore. Dicunt maiorum eloquentiam cum cu, sit summo dolor essent te. Ne
quodsi nusquam legendos has, ea dicit voluptua eloquentiam pro, ad sit quas";

$caracteres = strlen($mensaje);
if ($caracteres > 140) {
    echo "Tu mensaje es demasiado largo. Solo se admiten 140 caracteres.\n";
    echo "Tiene:$caracteres";
}
