<!--
  Created by: Christopher Gauffin
  Description: Displays tables for a list of cleaned and uncleaned rooms
!-->
<div class="container">
    <div class="title">
        <span class="display-4">Rum</span>
        <?php if($priv) { ?>
            <a href="?editroom" class="btn btn-primary float-right new-room"><i class="fa fa-plus"></i><span> Skapa nytt hotellrum</span></a>
        <?php } ?>
    </div>
    <div id="uncleaned_rooms" class="card">
        <div class="card-header">
            Ej städade rum
        </div>
        <div class="card-body">
            <span class="no-list-text">Alla rum är städade!</span>
            <table class="table table-secondary room-table">
                <thead>
                    <th>Bild</th>
                    <th>Rumskod</th>
                    <th>Beskrivning</th>
                    <th><span>Ändra</span></th>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div id="unclean_alert"></div>
        </div>
        
    </div>

    <div id="cleaned_rooms" class="card">
        <div class="card-header">
            Städade rum
        </div>
        <div class="card-body">
            <span class="no-list-text">Inga rum har städats.</span>
            <table class="table table-secondary room-table">
                <thead>
                    <th>Bild</th>
                    <th>Rumskod</th>
                    <th>Beskrivning</th>
                    <th><span>Ändra</span></th>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div id="clean_alert"></div>
        </div>
    </div>
</div>