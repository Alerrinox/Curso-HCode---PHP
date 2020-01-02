<?php 

$hierarquia = array(
					array(
					'nome_cargo'=>'CEO',
					'subordinados'=>array(
						//inicio: Diretor Comercial
						array(
							'nome_cargo'=>'diretor comecial',
							'subordinados'=>array(
								//inicio: Diretor Comercial
								array(
									'nome_cargo'=>'gerente de vendas',
									'subordinados'=>array(
										array(
											'nome_cargo'=>'vendedores',
										)
									)
								)
							)
						),
						//final: Diretor Comercial
						//inicio: diretor financeiro
						array(
							'nome_cargo'=>'diretor financeiro',
							'subordinados'=>array(
								//inicio: gerente contabeis
								array(
									'nome_cargo'=>'gerente contabeis',
									'subordinados'=>array(
										//inicio: gerente contabeis
										array(
											'nome_cargo'=>'supervisores',
										),
										array(
											'nome_cargo'=>'contadores',
										)
										//final: Diretor supervisor
								)
								//final: gerente contabeis
								),
								array(
									'nome_cargo'=>'gerente do RH',
									)
								)
							)
						)
					)
	);

print_r($hierarquia);

echo "<br>";
echo "<br>";

function printado($cargos){
	$html = '<ul>';
		foreach($cargos as $cargo){
			$html .= '<li>';

				$html .= $cargo['nome_cargo'];

				if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

					$html .= printado($cargo['subordinados']);

				}

			$html .= '</li>';
		};
	$html .= '</ul>';

	return $html;
}

echo printado($hierarquia);

 ?>