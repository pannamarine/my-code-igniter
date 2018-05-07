<div class="row">
    <div class="col-lg-3 col-md-1 col-sm-0"></div>
        <div class="card col-6 colmd-10 col-sm-12">
            <div class="card-body">
            <h5 class="card-title">
                Fishing Vessel Information</h5>

                <?php echo validation_error(); ?>
                
                <!-- <form action=""> -->
                    <?php echo form_open('fishingvessel/create') ?>
                    <div class="form-group">
                        <label for="VesselName">Vessel Name</label>
                        <input id="VesselName" name="vesselName" class="form-control" type="text">
</div>
                    <div class="form-group">
                    <label for="">Country</label>
                    <select id="country" name="country" class="form-control">

                        <?php foreach ($country_list as $country): ?>

                        <option value="<?php echo $country['id'] ?>">
                            <?php echo $country['Name'] ?>
                        </option>
                        <?php endforeach ?>
                        </select>
                    </div>
                        <input type="submit" value="Add" name="submit" class="btn btn-warning" /> 
                    <button class="btn btn-secondary">Reset</button>
                </form>
        </div>
    </div>
    <div class="col-lg 3 col-md-1 col-sm-0"></div>
</div>