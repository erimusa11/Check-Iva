<style>
  aside {
    background-color: #343d45;
  }

  .active1 {
    border-left: 5px solid #4ABDAC !important;
    font-weight: 1000 !important;
    color: #4ABDAC !important;

  }

  .text-style {
    color: #4ABDAC !important;
    font-weight: bold !important;
  }

  .marginLeft {
    margin-left: 8% !important;
  }

  .marginLeft16 {
    margin-left: 16% !important;
  }

  /*
.nav-treeview{
  background-color: #2c2c2c !important;
}*/
</style>

<aside class="main-sidebar  elevation-4">
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <br>
      <center>
        <h5 class="brand-text font-weight-light text-light text-center typeDashboard">Manager Dashboard</h5>
        <span class="brand-text  text-center text-light nameSubname"><i class="fas fa-user-tag"></i> <?php echo $_SESSION['nome'] . " " . $_SESSION['cognome']; ?></span>
      </center>
      <br>
      <br>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item has-treeview ">
          <a href="#" class="nav-link text-light">
            <i class="nav-icon fas fa-code-branch"></i>
            <p>
              Studio
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item marginLeft">
              <a href="studioCreate.php" class="nav-link text-light">
                <p class="">Create Studio</p>
              </a>
            </li>
            <li class="nav-item marginLeft">
              <a href="studioModifica.php" class="nav-link text-light">
                <p>Modifica Studio</p>
              </a>
            </li>
          </ul>
        </li>

        <!---  azienda link-->
        <li class="nav-item has-treeview ">
          <a href="#" class="nav-link text-light">
            <i class="nav-icon fa fa-industry"></i>
            <p>
              Azienda
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item marginLeft">
              <a href="studioAziendaCreate.php" class="nav-link text-light">
                <p>Create nuova azienda</p>
              </a>
            </li>
            <li class="nav-item marginLeft">
              <a href="studioAziendaModify.php" class="nav-link text-light">
                <p>Modifica le aziende</p>
              </a>
            </li>
            <li class="nav-item marginLeft">
              <a href="studioCreaBancheConto.php" class="nav-link text-light">
                <p>Crea Banca & Conto </p>
              </a>
            </li>
          </ul>
        </li>

        <!---  teamteam link-->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link text-light">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Team
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item marginLeft">
              <a href="studioCreateTeam.php" class="nav-link text-light">
                <p>Create Team</p>
              </a>
            </li>
            <li class="nav-item marginLeft">
              <a href="studioTeamModifica.php" class="nav-link text-light">
                <p>Modifica Team</p>
              </a>
            </li>
          </ul>
        </li>


        <!---  collaboratori link-->
        <li class="nav-item has-treeview ">
          <a href="#" class="nav-link text-light ">
            <i class="nav-icon fas fa-handshake"></i>
            <p>
              Collaboratori
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item marginLeft">
              <a href="studioCreaCollaboratori.php" class="nav-link text-light">
                <p>Crea Collaboratori</p>
              </a>
            </li>
            <li class="nav-item marginLeft">
              <a href="studioModificaCollaboratori.php" class="nav-link text-light">
                <p>Modifica Collaboratori</p>
              </a>
            </li>
            <li class="nav-item marginLeft">
              <a href="studioErroriCollaboratori.php" class="nav-link text-light">
                <p>Errore Collaboratori</p>
              </a>
            </li>
          </ul>
        </li>

        <!---  Lavoro link-->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link text-light">
            <i class="nav-icon fas fa-briefcase"></i>
            <p>
              Lavoro
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item marginLeft">
              <a href="studioDashboard.php" class="nav-link text-light">
                <p>TimeSheet</p>
              </a>
            </li>
            <li class="nav-item marginLeft">
              <a href="timer.php" class="nav-link text-light">
                <p>Report Giornale</p>
              </a>
            </li>
          </ul>
        </li>

        <!---  aumento-->
        <li class="nav-item ">
          <a href="studioAumentoStipendioCollaboratori.php" class="nav-link text-light">
            <i class="fas fa-money-check-alt nav-icon" style="font-size:12px;"></i>
            <p>Aumento Stipendio</p>
          </a>
        </li>


        <!---  Report anagrafica link -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link text-light">
            <i class="nav-icon far fa-folder-open"></i>
            <p>
              Report Anagrafica
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!--- studio -->
            <li class="nav-item marginLeft">
              <a href="#" class="nav-link text-light">
                <i class="nav-icon fas fa-code-branch"></i>
                <p>Studio
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item marginLeft16">
                  <a href="studioReportStudioTutti.php" class="nav-link text-light">
                    <p>Report Studio</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="studioReportStudioSingolo.php" class="nav-link text-light">
                    <p>Report Singolo Studio </p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="studioCollegatoAzienda.php" class="nav-link text-light">
                    <p>Report Aziende per Studio</p>
                  </a>
                </li>
              </ul>
            </li>
            <!--- team -->
            <li class="nav-item has-treeview marginLeft">
              <a href="#" class="nav-link text-light">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Team
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item marginLeft16">
                  <a href="studioTeamCollegato.php" class="nav-link text-light">
                    <p>Collegato Team</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="studioElencoAziendaStudioTeam.php" class="nav-link text-light">
                    <p>Elenco Ditta/Studio Team</p>
                  </a>
                </li>
              </ul>
            </li>
            <!--- collaboratori -->
            <li class="nav-item marginLeft">
              <a href="#" class="nav-link text-light">
                <i class="nav-icon fas fa-handshake"></i>
                <p>Collaboratori
                  <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item marginLeft16">
                  <a href="studioReportCollaboratoriSingolo.php" class="nav-link text-light">
                    <p>Report Singolo Collaboratore</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="studioReportCollaboratori.php" class="nav-link text-light">
                    <p>Report Collaboratori</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="studioElencoAziendaStudioCollaboratori.php" class="nav-link text-light">
                    <p>Elenco Ditta/Studio Operatore</p>
                  </a>
                </li>
              </ul>
            </li>
            <!--- azienda -->
            <li class="nav-item marginLeft">
              <a href="studioReportAzienda.php" class="nav-link text-light">
                <i class="nav-icon fa fa-industry"></i>
                <p>Azienda</p>
              </a>
            </li>
          </ul>
        </li>




        <!---  Report dinamici link-->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link text-light">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Report Dinamici
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!--- azienda -->
            <li class="nav-item marginLeft">
              <a href="#" class="nav-link text-light">
                <i class="nav-icon fa fa-industry"></i>
                <p>Azienda
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportFatturatoAzienda.php" class="nav-link text-light">
                    <p>Report Fatturato Azienda</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportTempiAzienda.php" class="nav-link text-light">
                    <p>Report Azienda Tempi </p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportAggiornamentiAzienda.php" class=" nav-link text-light">
                    <p>Aggiornamenti</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="#" class="nav-link text-light">
                    <p>Banca</p>
                  </a>
                </li>
              </ul>
            </li>
            <!--- Collaboratore -->
            <li class="nav-item has-treeview marginLeft">
              <a href="#" class="nav-link text-light">
                <i class="nav-icon fas fa-handshake"></i>
                <p>
                  Collaboratore
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportFatturatoCollaboratori.php" class="nav-link fatturato_coll text-light">
                    <p>Report Fatturato Collaboratore</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportTempiCollaboratori.php" class="nav-link colla_tempi_rep text-light">
                    <p>Report Collaboratore Tempi</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportCollaboratoriCheckOre.php" class="nav-link collaboratorCheckOre text-light">
                    <p>Report Check Ore Lavorate User</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="collaboratoreOreNonRetribuite.php" class="nav-link collaboratorCheckOre text-light">
                    <p>Report Ore Non Retribuite</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportAggiornamentiColla.php" class="nav-link collaboratorCheckOre text-light">
                    <p>Aggiornamenti</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="#" class="nav-link text-light">
                    <p>% di stipendio</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="#" class="nav-link text-light">
                    <p>Costa Orario / Righe orario</p>
                  </a>
                </li>
              </ul>
            </li>
            <!--- Studio -->
            <li class="nav-item has-treeview marginLeft">
              <a href="#" class="nav-link text-light">
                <i class="nav-icon fas fa-code-branch"></i>
                <p>Studio
                  <i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportFatturatoStudio.php" class="nav-link text-light">
                    <p>Report Fatturato Studio</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportConteggioFatturazioneStudio.php" class="nav-link text-light tempistudio_conteggio">
                    <p>Report Conteggio Fatturazione Studio</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportTempiStudio.php" class="nav-link text-light">
                    <p>Report Studio Tempi</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportGeneralStudio.php" class="nav-link text-light">
                    <p>Report Studio Generale</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportAggiornamentiStudio.php" class="nav-link text-light">
                    <p>Aggiornamenti</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="#" class="nav-link text-light">
                    <p>% di stipendio</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="#" class="nav-link text-light">
                    <p> Ricavo Orario</p>
                  </a>
                </li>
              </ul>
            </li>
            <!--- Team -->
            <li class="nav-item marginLeft">
              <a href="#" class="nav-link text-light">
                <i class="nav-icon fas fa-users"></i>
                <p>Team
                  <i class="right fas fa-angle-left"></i></p>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportFatturatoTeam.php" class="nav-link text-light">
                    <p>Report Fatturato Team</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportTempiTeam.php" class="nav-link text-light">
                    <p>Report Team Tempi</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportComplessivoOperatori.php" class="nav-link text-light">
                    <p> Report Complessivo Per Operatori</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="dinamicaReportGeneralTeam.php" class="nav-link text-light">
                    <p> Report Generale Team</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="#" class="nav-link text-light">
                    <p>Aggiornamente</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="#" class="nav-link text-light">
                    <p>% di stipendio</p>
                  </a>
                </li>
                <li class="nav-item marginLeft16">
                  <a href="#" class="nav-link text-light">
                    <p> Ricavo Orario</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <!--- Report Score Collaboratore -->
        <li class="nav-item">
          <a href="dinamicaScoreCollaboratore.php" class="nav-link text-light">
            <i class="fas fa-tasks nav-icon"></i>
            <p> Report Score Collaboratore</p>
          </a>
        </li>


        <!---  Report KPI -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link text-light">
            <i class="nav-icon fas fas fa-percent"></i>
            <p>
              Report KPI
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!---  Azienda -->
            <li class="nav-item marginLeft">
              <a href="dinamicaReportAziendaKPI.php" class="nav-link text-light">
                <p>Report KPI Azienda</p>
              </a>
            </li>
            <!---  Collaborator -->
            <li class="nav-item marginLeft">
              <a href="dinamicaReportCollaboratorKPI.php" class="nav-link text-light">
                <p>Report KPI Collaborator</p>
              </a>
            </li>
            <!--- Studio -->
            <li class="nav-item marginLeft">
              <a href="dinamicaReportStudioKPI.php" class="nav-link text-light">
                <p>Report KPI Studio</p>
              </a>
            </li>
            <!---  Team -->
            <li class="nav-item marginLeft">
              <a href="dinamicaReportTeamKPI.php" class="nav-link text-light">
                <p>Report KPI Team</p>
              </a>
            </li>
          </ul>
        </li>


        <!---  Pagamento link-->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link text-light">
            <i class="nav-icon fas fa-euro-sign"></i>
            <p>
              Pagamento
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!---  Pagamento-->
            <li class="nav-item marginLeft">
              <a href="paga.php" class="nav-link text-light">
                <p>Pagamento</p>
              </a>
            </li>
            <!---  Ferie  -->
            <li class="nav-item marginLeft">
              <a href="ferie.php" class="nav-link text-light">
                <p>Ferie</p>
              </a>
            </li>
            <!---  Ore Lavorate Totale  -->
            <li class="nav-item marginLeft">
              <a href="orelavoratetotale.php" class="nav-link text-light">
                <p>Ore Lavorate Totale</p>
              </a>
            </li>
            <!---  Ore Lavorate Collaboratore  -->
            <li class="nav-item marginLeft">
              <a href="orelavoratecollaboratore.php" class="nav-link text-light">
                <p>Ore Lavorate Collaboratore</p>
              </a>
            </li>
            <!---  Ore con categorie  -->
            <li class="nav-item marginLeft">
              <a href="oreCollaboratoreSecifico.php" class="nav-link text-light">
                <p>Ore Lavorate Categorizato</p>
              </a>
            </li>
          </ul>
        </li>
        <?php
        if ($_SESSION['user_id'] == 112) {
        ?>
          <!---  Charts link  -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link text-light">
              <i class="fas fa-chart-bar"></i>
              <p>
                Grafici
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!---  Libra Charts link  -->
              <li class="nav-item marginLeft">
                <a href="#" class="nav-link text-light">
                  <i class="fas fa-building"></i>
                  <p>Libra
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <!---  KPI 1 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi1chartLibra.php" class="nav-link text-light">
                      <p>KPI 1 Grafici</p>
                    </a>
                  </li>
                  <!--- KPI 2 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi2chartLibra.php" class="nav-link text-light">
                      <p>KPI 2 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 3 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi3chartLibra.php" class="nav-link text-light">
                      <p>KPI 3 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 4 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi4chartLibra.php" class="nav-link text-light">
                      <p>KPI 4 Grafici</p>
                    </a>
                  </li>
                  <!---  Super Score Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="superscorechartLibra.php" class="nav-link text-light">
                      <p>Super Score Grafici</p>
                    </a>
                  </li>

                </ul>
              </li>

              <!---  Studio Charts link  -->
              <li class="nav-item marginLeft">
                <a href="#" class="nav-link text-light">
                  <i class="nav-icon fas fa-code-branch"></i>
                  <p>Studio
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!---  KPI 1 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi1chartStudio.php" class="nav-link text-light">
                      <p>KPI 1 Grafici</p>
                    </a>
                  </li>
                  <!--- KPI 2 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi2chartStudio.php" class="nav-link text-light">
                      <p>KPI 2 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 3 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi3chartStudio.php" class="nav-link text-light">
                      <p>KPI 3 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 4 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi4chartStudio.php" class="nav-link text-light">
                      <p>KPI 4 Grafici</p>
                    </a>
                  </li>
                  <!---  Super Score Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="superscorechartStudio.php" class="nav-link text-light">
                      <p>Super Score Grafici</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!---  Azienda Charts link  -->
              <li class="nav-item marginLeft">
                <a href="#" class="nav-link text-light">
                  <i class="nav-icon fa fa-industry"></i>
                  <p>Azienda
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!---  KPI 1 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi1chartAzienda.php" class="nav-link text-light">
                      <p>KPI 1 Grafici</p>
                    </a>
                  </li>
                  <!--- KPI 2 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi2chartAzienda.php" class=" nav-link text-light">
                      <p>KPI 2 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 3 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi3chartAzienda.php" class="nav-link text-light">
                      <p>KPI 3 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 4 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi4chartAzienda.php" class="nav-link text-light">
                      <p>KPI 4 Grafici</p>
                    </a>
                  </li>
                  <!---  Super Score Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="superscorechartAzienda.php" class="nav-link text-light">
                      <p>Super Score Grafici</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!---  Team Charts link  -->
              <li class="nav-item marginLeft">
                <a href="#" class="nav-link text-light">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Team
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <!---  KPI 1 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi1chartTeam.php" class="nav-link text-light">
                      <p>KPI 1 Grafici</p>
                    </a>
                  </li>
                  <!--- KPI 2 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi2chartTeam.php" class="nav-link text-light">
                      <p>KPI 2 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 3 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi3chartTeam.php" class="nav-link text-light">
                      <p>KPI 3 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 4 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi4chartTeam.php" class="nav-link text-light">
                      <p>KPI 4 Grafici</p>
                    </a>
                  </li>
                  <!---  Super Score Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="superscorechartTeam.php" class="nav-link text-light">
                      <p>Super Score Grafici</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!---  Collaboratore Charts link  -->
              <li class="nav-item marginLeft">
                <a href="#" class="nav-link text-light">
                  <i class="nav-icon fas fa-handshake"></i>
                  <p>Collaboratore
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <!---  KPI 1 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi1chartCollaboratore.php" class="nav-link text-light">
                      <p>KPI 1 Grafici</p>
                    </a>
                  </li>
                  <!--- KPI 2 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi2chartCollaboratore.php" class="nav-link text-light">
                      <p>KPI 2 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 3 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi3chartCollaboratore.php" class="nav-link text-light">
                      <p>KPI 3 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 4 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi4chartCollaboratore.php" class="nav-link text-light">
                      <p>KPI 4 Grafici</p>
                    </a>
                  </li>
                  <!---  Super Score Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="superscorechartCollaborator.php" class="nav-link text-light">
                      <p>Super Score Grafici</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>


          <!---  Charts link Settimanale  -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link text-light">
              <i class="fas fa-chart-bar"></i>
              <p>
                Grafici Settimanale
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!---  Libra Charts link  -->
              <li class="nav-item marginLeft">
                <a href="#" class="nav-link text-light">
                  <i class="fas fa-building"></i>
                  <p>Libra
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <!---  KPI 1 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi1chartLibraSettimanale.php" class="nav-link text-light">
                      <p>KPI 1 Grafici</p>
                    </a>
                  </li>
                  <!--- KPI 2 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi2chartLibraSettimanale.php" class="nav-link text-light">
                      <p>KPI 2 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 3 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi3chartLibraSettimanale.php" class="nav-link text-light">
                      <p>KPI 3 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 4 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi4chartLibraSettimanale.php" class="nav-link text-light">
                      <p>KPI 4 Grafici</p>
                    </a>
                  </li>
                  <!---  Super Score Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="superscorechartLibraSettimanale.php" class="nav-link text-light">
                      <p>Super Score Grafici</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!---  Studio Charts link  -->
              <li class="nav-item marginLeft">
                <a href="#" class="nav-link text-light">
                  <i class="nav-icon fas fa-code-branch"></i>
                  <p>Studio
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!---  KPI 1 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi1chartStudioSettimanale.php" class="nav-link text-light">
                      <p>KPI 1 Grafici</p>
                    </a>
                  </li>
                  <!--- KPI 2 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi2chartStudioSettimanale.php" class="nav-link text-light">
                      <p>KPI 2 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 3 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi3chartStudioSettimanale.php" class="nav-link text-light">
                      <p>KPI 3 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 4 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi4chartStudioSettimanale.php" class="nav-link text-light">
                      <p>KPI 4 Grafici</p>
                    </a>
                  </li>
                  <!---  Super Score Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="superscorechartStudioSettimanale.php" class="nav-link text-light">
                      <p>Super Score Grafici</p>
                    </a>
                  </li>
                </ul>
              </li>


              <!---  Azienda Charts link  -->
              <li class="nav-item marginLeft">
                <a href="#" class="nav-link text-light">
                  <i class="nav-icon fa fa-industry"></i>
                  <p>Azienda
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!---  KPI 1 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi1chartAziendaSettimanale.php" class="nav-link text-light">
                      <p>KPI 1 Grafici</p>
                    </a>
                  </li>
                  <!--- KPI 2 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi2chartAziendaSettimanale.php" class=" nav-link text-light">
                      <p>KPI 2 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 3 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi3chartAziendaSettimanale.php" class="nav-link text-light">
                      <p>KPI 3 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 4 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi4chartAziendaSettimanale.php" class="nav-link text-light">
                      <p>KPI 4 Grafici</p>
                    </a>
                  </li>
                  <!---  Super Score Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="superscorechartAziendaSettimanale.php" class="nav-link text-light">
                      <p>Super Score Grafici</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!---  Team Charts link  -->
              <li class="nav-item marginLeft">
                <a href="#" class="nav-link text-light">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Team
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!---  KPI 1 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi1chartTeamSettimanale.php" class="nav-link text-light">
                      <p>KPI 1 Grafici</p>
                    </a>
                  </li>
                  <!--- KPI 2 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi2chartTeamSettimanale.php" class="nav-link text-light">
                      <p>KPI 2 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 3 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi3chartTeamSettimanale.php" class="nav-link text-light">
                      <p>KPI 3 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 4 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi4chartTeamSettimanale.php" class="nav-link text-light">
                      <p>KPI 4 Grafici</p>
                    </a>
                  </li>
                  <!---  Super Score Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="superscorechartTeamSettimanale.php" class="nav-link text-light">
                      <p>Super Score Grafici</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!---  Collaboratore Charts link  -->
              <li class="nav-item marginLeft">
                <a href="#" class="nav-link text-light">
                  <i class="nav-icon fas fa-handshake"></i>
                  <p>Collaboratore
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!---  KPI 1 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi1chartCollaboratoreSettimanale.php" class="nav-link text-light">
                      <p>KPI 1 Grafici</p>
                    </a>
                  </li>
                  <!--- KPI 2 Chart -->
                  <li class="nav-item marginLeft">
                    <a href="kpi2chartCollaboratoreSettimanale.php" class="nav-link text-light">
                      <p>KPI 2 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 3 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi3chartCollaboratoreSettimanale.php" class="nav-link text-light">
                      <p>KPI 3 Grafici</p>
                    </a>
                  </li>
                  <!---  KPI 4 Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="kpi4chartCollaboratoreSettimanale.php" class="nav-link text-light">
                      <p>KPI 4 Grafici</p>
                    </a>
                  </li>
                  <!---  Super Score Chart  -->
                  <li class="nav-item marginLeft">
                    <a href="superscorechartCollaboratoreSettimanale.php" class="nav-link text-light">
                      <p>Super Score Grafici</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>


          
          <!---  Stampa Super Score  -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link text-light">
            <i class="fas fa-flag-checkered"></i>
              <p>
                Stampa Super Score 
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
   
              <!---  Studio Stampa Super Score  -->
              <li class="nav-item marginLeft">
                <a href="stampaSuperScoreStudio.php" class="nav-link text-light">
                  <i class="nav-icon fas fa-code-branch"></i>
                  <p>Studio
                  </p>
                </a>
              </li>


              <!---  Azienda Stampa Super Score  -->
              <li class="nav-item marginLeft">
                <a href="stampaSuperScoreAzienda.php" class="nav-link text-light">
                  <i class="nav-icon fa fa-industry"></i>
                  <p>Azienda
                  </p>
                </a>
              </li>

              <!---  Team Stampa Super Score -->
              <li class="nav-item marginLeft">
                <a href="stampaSuperScoreTeam.php" class="nav-link text-light">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Team
                  </p>
                </a>
              </li>

              <!---  Collaboratore Stampa Super Score  -->
              <li class="nav-item marginLeft">
                <a href="stampaSuperScoreColla.php" class="nav-link text-light">
                  <i class="nav-icon fas fa-handshake"></i>
                  <p>Collaboratore
                  </p>
                </a>
              </li>
            </ul>
          </li>
          </ul>
          </li>
        <?php } ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>