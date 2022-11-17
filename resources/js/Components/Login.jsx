import React from 'react'
import {createRoot} from 'react-dom/client'

export default function Hello(){
	return(
		<div>
			<h1>Reactjs y laravel 9</h1>
		</div>	
	);
}

fi(document.getElementById('app'))
{
	createRoot(document.getElementById('app')).render(<Hello/>)
}