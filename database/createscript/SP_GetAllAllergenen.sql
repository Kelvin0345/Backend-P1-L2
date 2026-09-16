USE `laravel`;

DROP PROCEDURE IF EXISTS SP_GetAllAllergenen;

DELIMITER $$

CREATE PROCEDURE SP_GetAllAllergenen()
BEGIN
    SELECT 
         ALGE.Id             
        ,ALGE.Naam            
        ,ALGE.Omschrijving    
        ,PRD.Naam             
        ,PRD.Barcode         
    FROM Allergeen AS ALGE
    LEFT JOIN ProductPerAllergeen AS PRA ON ALGE.Id = PRA.AllergeenId
    LEFT JOIN Product AS PRD ON PRA.ProductId = PRD.Id;
END$$

DELIMITER ;