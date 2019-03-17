import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { SearchPipe } from './search.pipe';
import { SearchPipe2 } from './search-game.pipe';
import { AppComponent } from './app.component';
import { PlayersComponent } from './players/players.component';
import { PlayerDetailComponent } from './player-detail/player-detail.component';
import { AppRoutingModule } from './app-routing.module';
import { AdminLoginComponent } from './admin-login/admin-login.component';
import { AdminLobbyComponent } from './admin-lobby/admin-lobby.component';
import { AdminLobbyGamesComponent } from './admin-lobby-games/admin-lobby-games.component';

@NgModule({
  declarations: [
    AppComponent,
    PlayersComponent,
    SearchPipe,
    SearchPipe2,
    PlayerDetailComponent,
    AdminLoginComponent,
    AdminLobbyComponent,
    AdminLobbyGamesComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
