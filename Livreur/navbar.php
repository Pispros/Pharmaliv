

<style type="text/css">
        .brand
        {
          display: flex;
          justify-content: space-between;
          align-items: center;
          font-family: 'Dancing Script', cursive;
          color: white;
        }
        .power i
          {
            background-color: black;
            height: 50px;
            width: 55px;
            padding-left: 2px; 
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
          } 
</style>
<div class="brand alert alert-dark success-color-dark">
      <img class="rounded-circle" src="./../img/phar.png" style="width: 60px;height: 60px;">
      <div style="margin-left: 15px;"></div>
      <div class="col-auto power" onclick="window.location = '../?logout=yes'">
          <i class="fas fa-power-off fa-2x rounded-circle" title="Deconnexion" style="color: red;"></i>
      </div>
</div>
