import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AdminLobbyGamesComponent } from './admin-lobby-games.component';

describe('AdminLobbyGamesComponent', () => {
  let component: AdminLobbyGamesComponent;
  let fixture: ComponentFixture<AdminLobbyGamesComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AdminLobbyGamesComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AdminLobbyGamesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
