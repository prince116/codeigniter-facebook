
<div class="container">
    
    <div class="row">
        <div class="well">
            <h1 class="text-center">Hello World</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <button type="button" class="btn btn-default btn-primary" id="btn-login">Facebook Login</button>
        </div>
    </div>

    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
            <?php echo form_open('news/create'); ?>
            
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" />
                </div>
            
                <input type="submit" name="submit" value="Create news item" />
            
            </form>
            

        </div>
        
    </div>
    
</div>


