<template>
    <nav>
        <v-toolbar flat app >
            <v-toolbar-side-icon @click="drawer=!drawer"><v-icon >more_vert</v-icon></v-toolbar-side-icon>
            <v-toolbar-title class="text-upercase blue--text">
               
            </v-toolbar-title >
            <v-spacer ></v-spacer>
            <v-btn flat color="blue">
                <span>sign out</span>
                <v-icon >exit-to-app</v-icon>
            </v-btn>
            
             </v-toolbar>
            <v-card>
    <v-navigation-drawer app v-model="drawer" class="primary"
      expand-on-hover
      permanent
    >
      

      

      <v-list
        nav
        dense
      >
       <span color="white">EasyESI</span>
                
        <v-list-item link to="/inscription">
          <v-list-item-icon >
            <v-icon >mdi-home-city</v-icon>
          </v-list-item-icon>
          <v-list-item-title>Home</v-list-item-title>
        </v-list-item>
        <v-list-item link to="/admin">
          <v-list-item-icon>
            <v-icon>mdi-account-multiple</v-icon>
          </v-list-item-icon>
          <v-list-item-title>Affecter enseignant/groupe</v-list-item-title>
        </v-list-item>
        <v-list-item link to="/enseignant">
          <v-list-item-icon>
            <v-icon>mdi-star</v-icon>
          </v-list-item-icon>
          <v-list-item-title>REMETTRE NOTES</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </v-card>
    </nav>
</template>
<script>
  export default {
    data () {
      return {
        items: [
         
        ],
      }
    },
  }
</script>
