<div id="container">
  
  <h1>Directory Contents</h1>
  
  <table class="sortable">
    <thead>
      <tr>
        <th>Filename</th>
        <th>Type</th>
        <th>Size <small>(bytes)</small></th>
        <th>Date Modified</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <h2>Show more</h2>
  
</div>

<style>
h2 {
  font-size: 16px;
  text-align: center;
  padding: 0 0 12px 0; 
}

#container {
  box-shadow: 0 5px 10px -5px rgba(0,0,0,0.5);
  position: relative;
  background: white; 
}

table {
  background-color: #F3F3F3;
  border-collapse: collapse;
  width: 100%;
  margin: 15px 0;
}

th {
  background-color: #696969;
  color: #FFF;
  cursor: pointer;
  padding: 5px 10px;
}

th small {
  font-size: 9px; 
}

td, th {
  text-align: left;
}

a {
  text-decoration: none;
}

td a {
  color: #663300;
  display: block;
  padding: 5px 10px;
}

th a {
  padding-left: 0
}

td:first-of-type a {
  background: url(./.images/file.png) no-repeat 10px 50%;
  padding-left: 35px;
}

th:first-of-type {
  padding-left: 35px;
}

td:not(:first-of-type) a {
  background-image: none !important;
} 

tr:nth-of-type(odd) {
  background-color: #E6E6E6;
}

tr:hover td {
  background-color:#CACACA;
}

tr:hover td a {
  color: #000;
}
</style>