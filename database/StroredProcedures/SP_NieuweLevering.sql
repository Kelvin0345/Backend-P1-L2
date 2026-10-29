USE `laravel`;

DROP PROCEDURE IF EXISTS SP_nieuweLevering;

DELIMITER $$

CREATE PROCEDURE SP_nieuweLevering(
    IN p_ProductId INT,
    IN p_LeverancierId INT,
    IN p_Aantal INT,
    IN p_DatumEerstVolgendeLevering DATE
)
BEGIN
    UPDATE Magazijn
    SET AantalAanwezig = AantalAanwezig + p_Aantal
    WHERE ProductID = p_ProductId;

    -- UPDATE ProductPerLeverancier
    -- SET DatumEerstVolgendeLevering = p_DatumEerstVolgendeLevering
    -- WHERE ProductId = p_ProductId
    --  AND LeverancierId = p_LeverancierId;
    
    INSERT INTO productperleverancier (
		LeverancierId
        ,ProductId
        ,DatumLevering
        ,Aantal
        ,DatumEerstVolgendeLevering
        ,IsActief
        ,Opmerkingen
        ,DatumAangemaakt
        ,DatumGewijzigd)
	VALUES (
		p_LeverancierId
        ,p_ProductId
        ,SYSDATE(6)
        ,p_Aantal
        ,p_DatumEerstVolgendeLevering
        ,1
        ,NULL
        ,SYSDATE(6)
        ,SYSDATE(6));
END$$

DELIMITER ;