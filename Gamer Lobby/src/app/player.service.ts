import { Injectable } from '@angular/core';
import { Player } from './player';
import { PLAYERS } from './mock-players';
import { Observable, of } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class PlayerService {

  getPLAYERS(): Observable<Player[]> {
    return of (PLAYERS);
  }
  constructor() { }
}
