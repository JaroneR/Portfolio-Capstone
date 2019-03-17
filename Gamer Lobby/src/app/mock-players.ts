import { Player } from './player';
import { Games } from './player';

export const PLAYERS: Player[] = [
    { name: 'Tokido', rank: 1, score: 900000, time: '1d 12h 33m', game: 'Street Fighter V', status: 'Available'},
    { name: 'Daigo',  rank: 2, score: 800000, time: '1d 12h 33m', game: 'Street Fighter V', status: 'Unavailable'},
    { name: 'NuckleDu',  rank: 3, score: 760000, time: '1d 12h 33m', game: 'Soul Calibur VI', status: 'Available'},
    { name: 'Justin Wong',  rank: 4, score: 730000, time: '1d 12h 33m', game: 'Marvel vs Capcom: Infinite', status: 'Available'},
    { name: 'Dyrus',  rank: 5, score: 690000, time: '1d 12h 33m', game: 'Tekken 7', status: 'Unavailable'},
    { name: 'Maximilian Dood',  rank: 6, score: 680000, time: '1d 12h 33m', game: 'Killer Instinct', status: 'Available'}
];

export const GAMES: Games[] = [
    {title: 'Street Fighter V', platform: 'PS4/PC', rating: '3.5 stars', publisher: 'Capcom', release: 2016, status: 'Available'},
    {title: 'Soul Calibur VI', platform: 'PS4/PC', rating: '5 stars', publisher: 'Bandai Namco', release: 2018, status: 'Available'},
    {title: 'Marvel vs Capcom: Infinite', platform: 'PS4', rating: '4 stars', publisher: 'Capcom', release: 2017, status: 'Available'},
    {title: 'Tekken 7', platform: 'PS4', rating: '4 stars', publisher: 'Bandai Namco', release: 2017, status: 'Available'},
    {title: 'Killer Instinct', platform: 'XBOX ONE', rating: '5 stars', publisher: 'Iron Galaxy', release: 2013, status: 'Available'}
];