
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
                    <label for="title">Title</label>
                    <input type="input" name="title" /><br />
                            
                    <input type="submit" name="submit" class="btn btn-primary" value="Create news item" />
                </div>
            
            
            </form>
            

        </div>
        
    </div>
    
</div>


