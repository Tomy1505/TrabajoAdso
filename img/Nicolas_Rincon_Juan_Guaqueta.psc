Algoritmo reciclaje
	Definir nombre, genero, nacionalidad, permiso Como Caracter
	definir edad Como Entero
	Imprimir "bienvenido a la empresa de recicladores"
	Imprimir "si quieres trabajar con nosotros completa los siguientes datos"
	Imprimir "nombre"
	Leer nombre
	Imprimir "genero"
	Imprimir "escriba mujer o hombre"
	Leer genero
	Si genero = "hombre" Entonces
		Imprimir "edad"
		Leer edad
		Si edad>=20 Entonces
			Imprimir "nacionalidad"
			Imprimir "escriba colombiano o extranjero"
			Leer nacionalidad
			Si nacionalidad="colombiano" Entonces
				Imprimir "estrato"
				Leer estrato
				Si estrato<=3 Entonces
					Imprimir "felicitaciones ha sido contratado"
					si edad>=20 y edad<=40 Entonces
						Imprimir "usted ha sido seleccionada a negro"
						Imprimir "Para depositar residuos no aprovechables como el papel higiénico; servilletas, papeles y cartones contaminados con comida; papeles metalizados, entre otros."
					FinSi
					si edad>=41 y edad<=60 Entonces
						Imprimir "usted ha sido seleccionada a blanco"
						Imprimir "Para depositar plástico, vidrio, metales, papel y cartón"
					FinSi
					si edad>=64 y edad<=100 Entonces
						Imprimir "Usted ya es pensionado"
						finsi
				SiNo
					Imprimir "no cumple con los requisitos"
				Fin Si
			SiNo
				Si nacionalidad="extranjero" Entonces
					Imprimir "tiene permiso de trabajo?"
					Imprimir "escriba si o no"
					Leer permiso
					Si permiso="si" Entonces
						Imprimir "estrato"
						Leer estrato
						Si estrato<=3 Entonces
							Imprimir "felicitaciones ha sido contratado"
							si edad>=18 y edad<=40 Entonces
								Imprimir "usted ha sido seleccionada a verde"
								Imprimir "Papel: carbón, mantequilla, aluminio, higiénico, de cocina, celofán; pañuelos; toallas higiénicas; servilletas utilizadas; plastificados; metalizados, icopor, chicles y residuos de barridos".
							FinSi
							si edad>=41 y edad<=60 Entonces
								Imprimir "usted ha sido seleccionada a blanco"
								Imprimir "Para depositar plástico, vidrio, metales, papel y cartón"
							FinSi
							si edad>=64 y edad<=100 Entonces
								Imprimir "Usted ya es pensionado"
							FinSi
						SiNo
							Imprimir "no cumple con los requisitos"
						Fin Si
					SiNo
						
					Fin Si
				SiNo
					Si permiso="no" Entonces
						Imprimir "no cumple con los requisitos"
					Fin Si
				Fin Si
			Fin Si
		SiNo
			
		Fin Si
	SiNo
		Si genero = "mujer" Entonces
			Imprimir "edad"
			Leer edad
			Si edad>=18 Entonces
				Imprimir "nacionalidad"
				Imprimir "escriba colombiana o extranjera"
				Leer nacionalidad
				Si nacionalidad="colombiana" Entonces
					Imprimir "estrato"
					Leer estrato
					Si estrato<=3 Entonces
						imprimir "felicitaciones ha sido contratada"
						si edad>=18 y edad<=40 Entonces
							Imprimir "usted ha sido seleccionada a verder"
						FinSi
						si edad>=40 y edad<=60 Entonces
							Imprimir "usted ha sido seleccionada a blanco"
						FinSi
						si edad>=56 y edad<=100 Entonces
							Imprimir "Usted ya es pensionado"
						finsi	
					SiNo
						Imprimir "no cumple con los requisitos"
					Fin Si
				SiNo
					Si nacionalidad="extranjera" Entonces
						Imprimir "tiene permiso de trabajo?"
						Imprimir "escriba si o no"
						Leer permiso
						Si permiso="si" Entonces
							Imprimir "estrato"
							Leer estrato
							Si estrato<=3 Entonces
								Imprimir "felicitaciones ha sido contratada"
								si edad>=18 y edad<=40 Entonces
									Imprimir "usted ha sido seleccionada a verde"
								FinSi
								si edad>=40 y edad<=60 Entonces
									Imprimir "usted ha sido seleccionada a blanco"
								FinSi
								si edad>=56 y edad<=100 Entonces
									Imprimir "Usted ya es pensionado"
								FinSi
								
							SiNo
								Imprimir "no cumple con los requisitos"
							Fin Si
						SiNo
							
						Fin Si
					SiNo
						Si permiso="no" Entonces
							Imprimir "no cumple con los requisitos"
						Fin Si
					Fin Si
				Fin Si
			FinSi
		FinSi
	Fin Si


FinAlgoritmo
