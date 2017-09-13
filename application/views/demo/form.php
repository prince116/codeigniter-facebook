
<div class="container">
    
    <div class="row">
        <div class="well">
            <h1 class="text-center">Form</h1>
        </div>
    </div>

    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
            <?php echo form_open(base_url().'form/create'); ?>

                 <div class="form-group">
                    <label for="fb_id">Facebook ID</label>
                    <input type="text" name="fb_id" id="fb_id" class="form-control" readonly />
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" readonly />
                </div>

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" readonly />
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" readonly />
                </div>

                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="inlineRadio1" value="Male"> Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="inlineRadio2" value="Female"> Female
                    </label>
                </div>

                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" id="link" class="form-control" readonly />
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Create news item" />
                </div>
            
            
            </form>
            

        </div>
        
    </div>
    
</div>


