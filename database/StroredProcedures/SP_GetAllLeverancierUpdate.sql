USE laravel;

DROP PROCEDURE IF EXISTS SP_GetAllLeverancierUpdate;

DELIMITER $$

CREATE PROCEDURE SP_GetAllLeverancierUpdate()
BEGIN
    SELECT
         LEVE.Id AS LeverancierId
        ,LEVE.Naam AS NaamLeverancier
        ,LEVE.Contactpersoon AS Contactpersoon
        ,LEVE.Leveranciernummer
        ,LEVE.Mobiel
        ,CON.Straat
        ,CON.Huisnummer
        ,CON.Postcode
        ,CON.Stad
    FROM Leverancier AS LEVE
    INNER JOIN Contact AS CON
    ON LEVE.ContactId = CON.Id;
END$$