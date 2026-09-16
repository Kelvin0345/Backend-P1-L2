use laravel;

DROP PROCEDURE IF EXISTS SP_GetAllAllergenen;

DELIMITER $$

CREATE PROCEDURE SP_GetAllAllergenen()
BEGIN
    SELECT ALGE.Id
          ,ALGE.Naam 
          ,ALGE.Omschrijving
          ,PRD.Naam AS ProductNaam 
    FROM Allergeen AS ALGE
    LEFT JOIN ProductAllergeen AS PRA ON ALGE.Id = PRA.AllergeenId
    LEFT JOIN Product AS P ON P.ProductId = PRD.Id;
END$$

DELIMITER ;