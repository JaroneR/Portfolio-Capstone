import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AdminLobbyComponent } from './admin-lobby.component';

describe('AdminLobbyComponent', () => {
  let component: AdminLobbyComponent;
  let fixture: ComponentFixture<AdminLobbyComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AdminLobbyComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AdminLobbyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
