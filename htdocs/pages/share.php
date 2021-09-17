<?php

include '../include/header.php';

?>

<section class="share-page">
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="hide-on-med-and-down">
                    <h1 class="header center white-text light">Share Your Travel Story</h1>
                    <div class="row center">
                        <h5 class="header col s12 light">Getting the most from your travels and sharing your story with others</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="../images/boat.jpg" alt="Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !">
        </div>
    </div>
    
    
    
    <!-- ********** FORM TO SHARE EXPERIENCE ********** -->
    
    <div class="container share-container">
        <!--   Form Section   -->
        <div class="card">
            <div class="card-content">
                <form>
                    <!-- ********** NICK NAME **********-->
                    <div class="row">
                        <div class="input-field col s12 l12">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" id="autocomplete-input" class="autocomplete" disabled="true">
                            <label for="autocomplete-input">Nick name User</label>
                        </div>
                    </div> 
                    <!-- ********** CHECK SWITCH **********-->
                    <div class="row">
                        <div class="input-field col s12 l12">
                            <h5><i class="material-icons prefix">star_half</i> Rate</h5>
                            <p class="range-field">
                                <input type="range" id="test5" min="0" max="5" />
                            </p>
                        </div>
                    </div>
                    <h5><i class="material-icons prefix">check</i> Choose a category</h5>
                    <div class="row switch-choice">
                        
                        <div class="col s12 l3">
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    Activity
                                </label>
                            </div>
                        </div>
                        <div class="col s12 l3">
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    Restauration
                                </label>
                            </div>
                        </div>
                        <div class="col s12 l3">
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    Destination
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- ********** TITLE **********-->
                    <div class="row">
                        <div class="input-field col s12 l12">
                            <i class="material-icons prefix">title</i>
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Title</label>
                        </div>
                    </div>
                    <!-- ********** DESCRIPTION **********-->
                    <div class="input-field col s12">
                        <textarea id="description" class="materialize-textarea" placeholder="Share your experience with the community !"></textarea>
                    </div>
                    <!-- ********** UPLOAD PHOTO **********-->
                    <div class="row">
                        <h5><i class="material-icons prefix">vertical_align_bottom</i> Upload a picture</h5>
                        <div class="input-field col s12 l12">    
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Upload</span>
                                    <input type="file" />
                                </div>
                                
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text"
                                        placeholder="Upload file" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ********** BTN **********-->
                    <div class="row">
                        <div class="input-field col s12 l12">    
                        <button class="btn btn-large waves-effect waves-light pink lighten-1 col s12" style="margin-top: 20px;" type="submit" name="action">
                            SUBMIT
                            <i class="material-icons right">send</i>
                        </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</section>

<script>
    //Parallax
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });
</script>

<?php

    include '../include/footer.php';

?>