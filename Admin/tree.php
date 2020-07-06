<div class="treeview w-20 tree" style="width: 100%;color: white;height: 75vh;">
  <ul class="mb-1 pl-3 pb-2" id="first">
    <li><span><i class="fas fa-user-cog fa-2x" style="margin-right: 10px;"></i><div class="hideSmall">&nbsp;&nbsp;Gestion des utilisateurs</div></span>
      <i class="fas fa-angle-right rotate hideSmall2" onclick="ShowTree(this);"></i><div style="display: flex;justify-content: flex-end;height: 0px;"><div class="decoy" style="display: none;"></div></div>
      <ul class="nested" style="width: 100%;border-left-width: 150px;">
        <li onclick="AlterPage('list_users.php')"><i class="fas fa-user-injured"></i></i>&nbsp;&nbsp;Patient</li>
        <li onclick="AlterPage('list_pharm.php')"><i class="fas fa-user-nurse"></i></i></i>&nbsp;&nbsp;Pharmacie</li>
        <li onclick="AlterPage('list_liv.php')"><i class="fas fa-user-ninja"></i>&nbsp;&nbsp;Livreur</li>
      </ul>
    </li>
  </ul>
</div>