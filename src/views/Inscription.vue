<template>
<div class="Inscription">
  <v-layout align-center justify-center  >
      <v-flex xs12 sm8 md4>
          <v-card class="elevation-12">
              <v-toolbar dark color="primary">
                  <v-toolbar-title>LOG IN</v-toolbar-title>
              </v-toolbar>
          
              <v-spacer></v-spacer>
              <v-card-text>
                  <v-form>
                      
                      <v-text-field prepend-icon="person" v-model="email " label="Email" type="text"></v-text-field>
                      <v-text-field  id="password"  prepend-icon="password" v-model="lock " label="mode de passe" type="password"></v-text-field>
                     
                  </v-form>
              </v-card-text>
              <v-card-actions>
             <v-spacer></v-spacer>
              
              <v-btn color="primary" type='submit' @click="registerUser">connexion</v-btn>
              </v-card-actions>
         </v-card>        
     </v-flex>
  </v-layout>
</div>
</template>

<script>
export default {
    data: () => ({
nom:'',
prenom:'',
email:'',
password:'',
EnseignantEtudiant:'',


}),
}

</script>