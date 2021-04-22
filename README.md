## About project

<p> is a project to assess my knowledge of APIS in Laravel. </p>
<p> The project simulates a pokemon attack where the life of the defender is reduced based on the power of the attacker.</p>

## Running the project

<p> After you download or clone the project, open it in the terminal folder and run the following command: </p> <br/>
<code>php artisan serve</code> 

<p> the project will run on port 8000, but be aware that if the port is being used by another program the project will run on another port (check which port is on the output) </p>

## Exemple usage
<p>Just make a POST call for the route: </p>
<code>{url}/api:</code>

<p>Passing the example payload:</p>
<code>{
    <p> "attack": { </p>
    <p> "type": "flying", </p>
    <p> "lyfe": "100", </p>
     <p>"power": "20" </p>
   <p>},</p>
   <p>"defense": { </p>
     <p>"type": "normal", </p>
     <p>"lyfe": "100" </p>
   <p>}</p>
 <p>}</p></code>

<p>Output:</p>
<code>{</p>
 <p> "attack": {</p>
   <p> "type": "flying", </p>
  <p>  "lyfe": "100", </p>
  <p>  "power": "20" </p>
 <p> }, </p>
 <p> "defense": { </p>
 <p>   "type": "normal", </p>
  <p>  "lyfe": "80" </p>
 <p> } </p>
<p>} </p></code>

### Rules

- **Pokemons of normal types can't attack flying type**
- **Pokemons attack power need to be greather than zero**