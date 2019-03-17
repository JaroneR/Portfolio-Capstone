import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { PlayersComponent } from './players/players.component';
import { AdminLoginComponent } from './admin-login/admin-login.component';
import { AdminLobbyComponent } from './admin-lobby/admin-lobby.component';
import { AdminLobbyGamesComponent } from './admin-lobby-games/admin-lobby-games.component';

const routes: Routes = [
  { path: '', redirectTo: '/lobby', pathMatch: 'full' },
  { path: 'admin-lobby-games', component: AdminLobbyGamesComponent },
  { path: 'admin-lobby', component: AdminLobbyComponent },
  { path: 'admin-login', component: AdminLoginComponent },
  { path: 'lobby', component: PlayersComponent }
];
@NgModule({
  imports: [ RouterModule.forRoot(routes) ],
  exports: [ RouterModule ]
})
export class AppRoutingModule { }
