
<?php $db = \Config\Database::connect(); ?>



<body style="background-color: #feffd5;">
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Upravit školu
                        <a href="<?= base_url() ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatUpravu/'.$skola['id']) ?>" method="POST">
                    <input type="hidden" name="_method" value="PUT" />
                        <div class="form-group mb-2">
                            <label>Název školy</label>
                            <input type="text" name="nazev" value="<?= $skola['skola'] ?>" class="form-control" placeholder="" required>
                        </div>
                        
                        <label>Město</label>
                        <select class="form-control" name="mesto" id="mesto">
                        <?php
                        $query = $db->query("SELECT * FROM mesto");
                        foreach ($query->getResult() as $row)
                        { ?> 
                      
                        <option value=<?php echo $row->id?>> <?php echo $row->nazev;}?></option>
                        </select>
                     
                        <div class="form-group mb-2">
                            <label>Geo 1</label>
                           <input type="number" name="geo-lat" value="<?= $skola['geo-lat'] ?>" class="form-control" placeholder="" required step="any">
                        </div>
                        <div class="form-group mb-2">
                            <label>Geo 2</label>
                            <input type="number" name="geo-long" value="<?= $skola['geo-long'] ?>"   class="form-control" placeholder="" required step="any">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-2">Uložit</button>
                        </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div></div>
                
