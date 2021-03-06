-- 返回 STEP_SUCCEED 流程继续
-- 返回 STEP_FAILED 流程终止
local function logic_do_player_collect_other(stPlayer, msg)
    LOG_DEBUG("Run LogicStep do_player_collect_other")
    local cardCollect = msg._para.cardCollect
    if type(cardCollect) ~= 'table' then
        CSMessage.NotifyError(stPlayer, ERROR_PARAM_ERR)
        return STEP_FAILED
    end
    local nCard = cardCollect[1]
    if type(nCard) ~= 'number' then
        CSMessage.NotifyError(stPlayer, ERROR_PARAM_ERR)
        return STEP_FAILED
    end
    -- 检查玩家挡牌状态中是否可以杠这张牌
    local nChair = stPlayer:GetChairID()
    local stPlayerBlockState = LibGameLogic:GetPlayerBlockState(nChair)
    if  stPlayerBlockState:IsCanCollect(nCard) == false then
        CSMessage.NotifyError(stPlayer, ERROR_BLOCK_COLLECT)
        return STEP_FAILED
    end

    -- 这里设置 杠状态标识
    stPlayerBlockState:SetBlockFlag(ACTION_COLLECT, nCard)
    FlowFramework.DelTimer(nChair, 0)
    return STEP_SUCCEED
end


return logic_do_player_collect_other
