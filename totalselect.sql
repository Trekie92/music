SELECT title.titlename AS 'Titel', interpreter.interpretername AS 'Interpret', album.albumname AS 'Album',
tracklist.yearofpublic AS 'Jahr der Veröffentlichung', tracklist.changedfrom AS 'Hinzugefügt durch'
FROM music.tracklist
JOIN title ON tracklist.title_id = title.title_id
JOIN interpreter ON tracklist.interpreter_id = interpreter.interpreter_id
JOIN album ON tracklist.album_id = album.album_id;